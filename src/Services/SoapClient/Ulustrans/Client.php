<?php declare(strict_types = 1);

namespace App\Services\SoapClient\Ulustrans;

use SoapClient;

class Client
{
    /** @var string */
    private $username;

    /** @var string */
    private $password;

    /** @var string */
    private $uri;

    public function __construct(array $ulustransConfiguration)
    {
        $this->username = $ulustransConfiguration['username'];
        $this->password = $ulustransConfiguration['password'];
        $this->uri = $ulustransConfiguration['uri'];
    }

    public function call(string $method, string $rootNode, $body): array
    {
        $client = new SoapClient($this->uri, ['trace' => 1, 'features' => SOAP_SINGLE_ELEMENT_ARRAYS]);

        $response = $client->__soapCall($method, [
            'username' => $this->username,
            'password' => $this->password,
            $rootNode => $body,
        ]);

        return $response;
    }
}
