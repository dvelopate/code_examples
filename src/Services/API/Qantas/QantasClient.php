<?php declare(strict_types = 1);

namespace App\Services\API\Qantas;

use App\Entity\OrderLegacy;
use DateTimeImmutable;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class QantasClient
{
    /** @var string */
    private $qantasBaseUrl;

    /** @var string */
    private $qantasApiKey;

    /** @var string */
    private $qantasUsername;

    /** @var string */
    private $qantasPassword;

    /** @var Client */
    private $guzzle;

    public function __construct(
        string $qantasApiKey,
        string $qantasBaseUrl,
        string $qantasUsername,
        string $qantasPassword
    ) {
        $this->qantasApiKey = $qantasApiKey;
        $this->qantasBaseUrl = $qantasBaseUrl;
        $this->qantasUsername = $qantasUsername;
        $this->qantasPassword = $qantasPassword;
    }

    /**
     * Staging environment uses a different environment from the production server,
     * if staging environment is needed, use this url and guzzle configuration:
     *
     * URL: https://qantas-au.staging.marketplacer.com/api/v2/
     *
     * Guzzle configuration:
     *
     *   $configuration = [
     *       "base_uri" => $this->qantasBaseUrl,
     *      "headers" => [
     *           "MARKETPLACER-API-KEY" => $this->qantasApiKey,
     *       ],
     *       "auth" => [
     *           $this->qantasUsername,
     *           $this->qantasPassword,
     *       ],
     *   ];
     */
    public function getClient(): Client
    {
        if ($this->guzzle instanceof Client) {
            return $this->guzzle;
        }

        $configuration = [
            "base_uri" => $this->qantasBaseUrl,
            "headers" => [
                "Authorization" => "Bearer {$this->qantasApiKey}",
            ],
        ];

        $this->guzzle = new Client($configuration);

        return $this->guzzle;
    }

    public function getNewInvoices(): array
    {
        $timestamp = (new DateTimeImmutable("-30 minutes"))->format("Y-m-d\TH:i:s\Z");

        return json_decode(
            $this->getClient()->get(
                QantasShippingInformationService::INVOICE_ENDPOINT
                . "?since=$timestamp&include=customer,line_items"
            )->getBody()->getContents(), true
        );
    }

    public function getSingleInvoice(string $invoiceId): array
    {
        $url = QantasShippingInformationService::INVOICE_ENDPOINT . "/$invoiceId";

        return json_decode($this->getClient()->get($url)->getBody()->getContents(), true);
    }

    public function postShippingInformation(OrderLegacy $order, array $requestBody): array
    {
        $request = [
            "headers" => [
                "Content-type" => "application/vnd.api+json"
            ],
            "json" => $requestBody,
        ];

        return json_decode($this->getClient()->post(
            QantasShippingInformationService::INVOICE_ENDPOINT . "/{$order->getThirdPartyId()}/shipments",
            $request
        )->getBody()->getContents(), true);
    }
}
