<?php declare(strict_types = 1);

namespace App\Controller\API\Order;

use App\Controller\API\HmacAuthenticatedController;
use App\Controller\BaseController;
use App\Enum\Warehouse\WarehousePlace;
use App\Mailer\SystemNotificationMailer;
use App\Repository\OrderRepositoryLegacy;
use App\Services\MaterialRequirementsPlanning\Stock\Ulustrans\UlustransStockMovementService;
use App\Services\SoapClient\Ulustrans\OutboundOrderService;
use Exception;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Enum\Voucher as Enum;

/**
 * @Route("/order/ulustrans")
 */
class UlustransController extends BaseController implements HmacAuthenticatedController
{
    /**
     * @Route("/outbound-insert", name="ulustrans_outbound_insert", methods={"POST"})
     */
    public function outboundInsert(
        Request $request,
        UlustransStockMovementService $stockMovementService,
        OutboundOrderService $outboundOrderService,
        OrderRepositoryLegacy $orderRepositoryLegacy,
        SystemNotificationMailer $mailer
    ): Response
    {
        $orderId = (int) $request->get('orderId');
        $response = new Response();

        try {
            $order = $orderRepositoryLegacy->find($orderId);

            if ($order === null) {
                throw new NotFoundHttpException("Order ID $orderId not found");
            }

            $outboundOrderService->createOutboundOrder($order);
            $stockMovementService->createTransfer(
                $order,
                WarehousePlace::turkeyFinal(),
                WarehousePlace::turkeyWorkshop(),
                Enum\Type::transfer()
            );

            $mailer->sendUlustransEmail(
                "Ulustrans outbound order created",
                ["Outbound order for order ID {$order->getId()} created successfully"]
            );
        } catch (Exception $exception) {
            $mailer->sendUlustransEmail("Outbound order error", [$exception->getMessage()]);
        }

        return $response;
    }
}
