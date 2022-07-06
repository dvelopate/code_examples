<?php declare(strict_types=1);

namespace App\Command\Ulustrans;

use App\Entity\OrderLegacy;
use App\Enum\Country;
use App\Mailer\SystemNotificationMailer;
use App\Repository\OrderRepositoryLegacy;
use App\Services\API\Soap\Ulustrans\Object\OutboundOrderConfirmationSerialNumber;
use App\Services\MaterialRequirementsPlanning\Stock\Ulustrans\UlustransShippingInformationService;
use App\Services\SoapClient\Ulustrans\OutboundOrderService;
use DateTime;
use Exception;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ShippingInformationSyncCommand extends Command
{
    protected static $defaultName = "ulustrans:shipping-information:update";

    /** @var OutboundOrderService */
    private $outboundOrderService;

    /** @var OrderRepositoryLegacy */
    private $orderRepositoryLegacy;

    /** @var UlustransShippingInformationService */
    private $shippingInformationService;

    /** @var SystemNotificationMailer */
    private $mailer;

    public function __construct(
        OutboundOrderService $outboundOrderService,
        OrderRepositoryLegacy $orderRepositoryLegacy,
        UlustransShippingInformationService $shippingInformationService,
        SystemNotificationMailer $mailer
    ) {
        parent::__construct();

        $this->outboundOrderService = $outboundOrderService;
        $this->orderRepositoryLegacy = $orderRepositoryLegacy;
        $this->shippingInformationService = $shippingInformationService;
        $this->mailer = $mailer;
    }

    protected function configure(): void
    {
        $this->setDescription("
            Find processed Ulustrans outbound orders from yesterday and update their shipping information and serial numbers
        ");
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        /** @todo $since is still not defined for production, ask Volkan about the range of dates to use */
        $since = new DateTime("-30 days");
        $orders = $this->orderRepositoryLegacy->findApprovedOrdersByApprovalDateForCountry($since, Country::tr());
        $errors = [];

        /** @var OrderLegacy $order */
        foreach ($orders as $order) {
            try {
                $outboundOrderConfirmation = $this->outboundOrderService->fetchOutboundOrderStatus($order->getId());
                if ($outboundOrderConfirmation->getSerialNumbers() === null) {
                    continue;
                }

                $this->shippingInformationService->handleSerialNumbers($order, $outboundOrderConfirmation);
                $this->shippingInformationService->saveShippingInformation($order);
            } catch (Exception $exception) {
                $errors[] = $exception->getMessage();
            }
        }

        if (!empty($errors)) {
            $this->mailer->sendUlustransEmail("Ulustrans outbound order errors", $errors);
        }

        return 1;
    }
}
