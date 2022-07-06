<?php declare(strict_types = 1);

namespace App\Command\Qantas;

use App\Repository\OrderRepositoryLegacy;
use App\Services\API\Qantas\QantasClient;
use App\Services\API\Qantas\QantasOrderTransformer;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class QantasFetchOrdersCommand extends Command
{
    /** @var QantasClient */
    private $qantasClient;

    /** @var QantasOrderTransformer */
    private $qantasOrderTransformer;

    /** @var OrderRepositoryLegacy */
    private $orderRepositoryLegacy;

    public function __construct(
        QantasClient $qantasClient,
        QantasOrderTransformer $qantasOrderTransformer,
        OrderRepositoryLegacy $orderRepositoryLegacy
    ) {
        parent::__construct();
        $this->qantasClient = $qantasClient;
        $this->qantasOrderTransformer = $qantasOrderTransformer;
        $this->orderRepositoryLegacy = $orderRepositoryLegacy;
    }

    protected function configure(): void
    {
        $this
            ->setName('qantas:import-orders')
            ->setDescription('Fetch new orders from Qantas API')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $batchCounter = 0;
        $batchLimit = 25;

        $invoiceArray = $this->qantasClient->getNewInvoices();

        foreach ($invoiceArray["data"] as $invoice) {
            $qantasInvoice = $this->qantasClient->getSingleInvoice($invoice['id']);
            $order = $this->qantasOrderTransformer->transform($qantasInvoice);
            $this->orderRepositoryLegacy->save($order);
            $batchCounter++;

            if ($batchCounter % $batchLimit === 0) {
                sleep(1);
            }
        }

        $output->writeln("Qantas order import complete");

        return 0;
    }
}
