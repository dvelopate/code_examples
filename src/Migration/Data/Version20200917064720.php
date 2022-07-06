<?php declare(strict_types=1);

namespace Application\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * 4.112 EDI Service Type and Forwarder
 * @link https://trello.com/c/TEXhZIwj
 */
final class Version20200917064720 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TBD', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'POLARIS TRANSPORTATION ', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS MI', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'FEDEX', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL ECOMMERCE', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'USPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'R&L CARRIERS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EASYPOST', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'ABF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'BAKSTON', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CENTRAL FREIGHT LINE', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CENTRAL TRANSPORT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DEPENDABLE HIGHWAY', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHE TRUCKING', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EXPEDITORS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'FAULT LINE LOGISTICS LLC', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'FORWARD AIR', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'FRONTLINE FREIGHT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'GNS FREIGHT SOLUTIONS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'KUEHNE-NAGEL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'OLD DOMINION', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'MOUNTAIN VELLEY EXPRESS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'OAK HARBOR FREIGHT LINE', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'REDDAWAY', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SAIA MOTOR FREIGHT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'XPO LOGISTICS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YRC FREGHT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'D&N / MAPEL GATE FREIGHT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DATS DEFINITE', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DAY ROSS FREIGHT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DELTAMAX', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'ESTES EXPRESS LINE', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'HIGHLIGHT MOTOR FREIGHT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'HUB GROUP INTERMODEL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'NUMARK TRANSPORTATION', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'ROADRUNNER TS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'VEGASCARRIER', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ulvo'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Express Renascer', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'brzl'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Jamef', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'brzl'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Braspress', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'brzl'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'RM EXpress', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'brzl'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Loggi', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'brzl'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UBER', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'brzl'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'brzl'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Promologistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_mexico'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Estafeta', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_mexico'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_mexico'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT '99 Minutos', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_mexico'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_mexico'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Correios', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'universe_brasil'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Express Renascer', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'universe_brasil'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Jamef', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'universe_brasil'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Braspress', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'universe_brasil'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'RM EXpress', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'universe_brasil'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Loggi', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'universe_brasil'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UBER', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'universe_brasil'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'universe_brasil'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Startrack', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'au'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Australia Post', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'au'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'au'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_hk_in_kr'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Shalom', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_hk_in_kr'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Shalom', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_kr_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_kr_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_kr_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_kr_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_kr_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Sagawa', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'japan'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Sagawa', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_japan_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Sagawa', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_japan_office'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Yamato', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'japan'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Yamato', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_japan_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Yamato', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_japan_office'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'JP Post', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'japan'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'JP Post', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_japan_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'JP Post', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_japan_office'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Shalom', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'dakr'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'IHUB', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'singapore'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Red arrow', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'singapore'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Tiongnam', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'singapore'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'IHUB', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_sg_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Red arrow', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_sg_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Tiongnam', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_sg_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'IHUB', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_sg_btfl'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Red arrow', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_sg_btfl'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Tiongnam', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_sg_btfl'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Triple I', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'thailand'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Kerry', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'thailand'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SCG Express', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'thailand'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'LEX', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'thailand'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'BEST', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'thailand'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Skootar', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'thailand'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Flash Express', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'thailand'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Triple I', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_th_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Kerry', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_th_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SCG Express', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_th_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'LEX', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_th_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'BEST', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_th_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Skootar', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_th_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Flash Express', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_th_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DPD', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'russia'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Pickup', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'russia'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'IP DEMKOV M.V.', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'russia'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'russia'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'turkey'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ulustrans', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'turkey'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aras', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'turkey'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Yurtici Kargo', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'turkey'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'turkey'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Surat', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'turkey'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'A2B', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Agentplus', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Atlantic Integrated Freight SRL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Berger Logistik', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Brtan Trans', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Cargo Logistic Group', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Cargo Partner', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CTL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DB Schenker', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL/Kuehne Nagel', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL Freight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL GF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DPD', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DSV', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Eurodis', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'East Express', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Evoque Logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'FedEx', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'FTL Trans', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Gebruder Weiss', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'GLS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'HP', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hubbig', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Intereuropa', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Kerry Logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Kuehne Nagel', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Kuehne Nagel/Bollore', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Kuehne Nagel/Korchina', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Kuehne Nagel/SF Freight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Lagermax', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Laneris', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Lilicom team', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Login', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'MBE', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'P2P', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Panalpina', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Pangea', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Primaco', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Rail Cargo Logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Reful', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Samer', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Tisak', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Transagram', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ventus Distribucija', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Viator&Vektor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'WTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Englmayer', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'brzl'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'universe_brasil'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_mexico'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'japan'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_japan_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_japan_office'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'dakr'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'au'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'singapore'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_sg_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_sg_btfl'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'thailand'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_th_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_hk_in_kr'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'japan'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_japan_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_japan_office'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'dakr'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'au'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'singapore'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_sg_btfl'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_sg_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'thailand'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_th_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_hk_in_kr'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'japan'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_japan_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_japan_office'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'dakr'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'au'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'singapore'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_sg_btfl'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_sg_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'thailand'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_th_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_hk_in_kr'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'japan'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_japan_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_japan_office'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'dakr'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'au'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'singapore'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_sg_btfl'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_sg_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'thailand'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_th_consignment'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_hk_in_kr'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'russia'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'turkey'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Trendyol Express', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'turkey'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'HepsiExpress', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'turkey'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'serbia'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'serbia'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'HILIFE', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'serbia'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TBD', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'serbia'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TBD', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'brzl'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TBD', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreo_mexico'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TBD', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'universe_brasil'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TBD', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'cro'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TBD', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'russia'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TBD', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'turkey'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'aramex'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'aramex'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'aramex'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'aramex'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ginger', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'aramex'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'aramex'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'aramex'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'aramex'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'aramex'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'aramex'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'aramex'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'aramex'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EMS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'aramex'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'aramex'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF international', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'aramex'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'aramex'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Expeditor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'aramex'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'aramex'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'aramex'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'aramex'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'aramex'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'aramex'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ar'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ar'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ar'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ar'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ginger', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ar'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ar'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ar'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ar'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ar'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ar'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ar'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ar'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EMS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ar'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ar'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF international', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ar'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ar'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Expeditor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ar'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ar'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ar'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ar'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ar'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'ar'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreoint'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreoint'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreoint'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreoint'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ginger', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreoint'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreoint'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreoint'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreoint'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreoint'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreoint'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreoint'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreoint'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EMS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreoint'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreoint'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF international', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreoint'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreoint'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Expeditor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreoint'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreoint'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreoint'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreoint'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreoint'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreoint'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreolimited'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreolimited'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreolimited'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreolimited'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ginger', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreolimited'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreolimited'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreolimited'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreolimited'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreolimited'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreolimited'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreolimited'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreolimited'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EMS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreolimited'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreolimited'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF international', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreolimited'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreolimited'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Expeditor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreolimited'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreolimited'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreolimited'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreolimited'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreolimited'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'foreolimited'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'fosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'fosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'fosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'fosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ginger', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'fosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'fosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'fosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'fosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'fosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'fosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'fosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'fosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EMS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'fosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'fosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF international', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'fosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'fosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Expeditor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'fosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'fosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'fosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'fosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'fosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'fosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'irsh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'irsh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'irsh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'irsh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ginger', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'irsh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'irsh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'irsh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'irsh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'irsh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'irsh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'irsh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'irsh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EMS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'irsh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'irsh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF international', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'irsh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'irsh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Expeditor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'irsh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'irsh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'irsh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'irsh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'irsh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'irsh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'issh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'issh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'issh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'issh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ginger', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'issh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'issh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'issh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'issh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'issh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'issh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'issh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'issh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EMS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'issh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'issh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF international', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'issh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'issh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Expeditor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'issh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'issh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'issh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'issh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'issh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'issh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'LSH'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'LSH'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'LSH'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'LSH'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ginger', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'LSH'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'LSH'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'LSH'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'LSH'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'LSH'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'LSH'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'LSH'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'LSH'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EMS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'LSH'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'LSH'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF international', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'LSH'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'LSH'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Expeditor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'LSH'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'LSH'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'LSH'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'LSH'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'LSH'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'LSH'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'mosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'mosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'mosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'mosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ginger', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'mosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'mosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'mosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'mosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'mosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'mosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'mosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'mosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EMS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'mosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'mosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF international', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'mosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'mosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Expeditor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'mosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'mosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'mosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'mosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'mosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'mosh'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'naka'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'naka'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'naka'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'naka'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ginger', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'naka'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'naka'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'naka'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'naka'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'naka'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'naka'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'naka'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'naka'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EMS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'naka'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'naka'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF international', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'naka'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'naka'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Expeditor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'naka'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'naka'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'naka'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'naka'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'naka'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'naka'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'oden'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'oden'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'oden'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'oden'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ginger', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'oden'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'oden'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'oden'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'oden'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'oden'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'oden'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'oden'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'oden'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EMS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'oden'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'oden'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF international', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'oden'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'oden'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Expeditor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'oden'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'oden'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'oden'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'oden'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'oden'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'oden'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'rplscn'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'rplscn'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'rplscn'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'rplscn'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ginger', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'rplscn'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'rplscn'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'rplscn'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'rplscn'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'rplscn'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'rplscn'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'rplscn'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'rplscn'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EMS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'rplscn'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'rplscn'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF international', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'rplscn'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'rplscn'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Expeditor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'rplscn'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'rplscn'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'rplscn'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'rplscn'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'rplscn'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'rplscn'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'shanghai_office_ware'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'shanghai_office_ware'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'shanghai_office_ware'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'shanghai_office_ware'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ginger', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'shanghai_office_ware'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'shanghai_office_ware'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'shanghai_office_ware'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'shanghai_office_ware'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'shanghai_office_ware'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'shanghai_office_ware'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'shanghai_office_ware'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'shanghai_office_ware'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EMS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'shanghai_office_ware'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'shanghai_office_ware'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF international', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'shanghai_office_ware'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'shanghai_office_ware'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Expeditor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'shanghai_office_ware'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'shanghai_office_ware'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'shanghai_office_ware'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'shanghai_office_ware'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'shanghai_office_ware'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'shanghai_office_ware'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'solna'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'solna'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'solna'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'solna'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ginger', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'solna'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'solna'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'solna'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'solna'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'solna'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'solna'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'solna'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'solna'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EMS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'solna'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'solna'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF international', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'solna'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'solna'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Expeditor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'solna'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'solna'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'solna'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'solna'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'solna'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'solna'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'sventech_site_2'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'sventech_site_2'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'sventech_site_2'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'sventech_site_2'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ginger', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'sventech_site_2'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'sventech_site_2'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'sventech_site_2'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'sventech_site_2'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'sventech_site_2'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'sventech_site_2'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'sventech_site_2'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'sventech_site_2'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EMS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'sventech_site_2'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'sventech_site_2'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF international', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'sventech_site_2'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'sventech_site_2'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Expeditor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'sventech_site_2'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'sventech_site_2'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'sventech_site_2'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'sventech_site_2'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'sventech_site_2'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'sventech_site_2'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'Sve'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'Sve'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'Sve'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'Sve'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ginger', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'Sve'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'Sve'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'Sve'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'Sve'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'Sve'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'Sve'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'Sve'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'Sve'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EMS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'Sve'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'Sve'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF international', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'Sve'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'Sve'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Expeditor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'Sve'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'Sve'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'Sve'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'Sve'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'Sve'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'Sve'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'T P'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'T P'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'T P'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'T P'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ginger', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'T P'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'T P'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'T P'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'T P'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'T P'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'T P'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'T P'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'T P'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EMS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'T P'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'T P'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF international', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'T P'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'T P'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Expeditor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'T P'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'T P'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'T P'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'T P'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'T P'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'T P'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'TMA'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'TMA'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'TMA'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'TMA'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ginger', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'TMA'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'TMA'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'TMA'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'TMA'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'TMA'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'TMA'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'TMA'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'TMA'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EMS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'TMA'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'TMA'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF international', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'TMA'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'TMA'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Expeditor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'TMA'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'TMA'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'TMA'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'TMA'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'TMA'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'TMA'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vasa'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vasa'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vasa'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vasa'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ginger', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vasa'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vasa'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vasa'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vasa'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vasa'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vasa'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vasa'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vasa'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EMS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vasa'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vasa'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF international', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vasa'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vasa'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Expeditor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vasa'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vasa'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vasa'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vasa'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vasa'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vasa'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis_vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis_vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis_vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis_vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ginger', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis_vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis_vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis_vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis_vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis_vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis_vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis_vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis_vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EMS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis_vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis_vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF international', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis_vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis_vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Expeditor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis_vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis_vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis_vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis_vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis_vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis_vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ginger', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EMS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF international', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Expeditor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vip'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hand-carried', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF-Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'CSCL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Ginger', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Mainfreight', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Dachser', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'TNT', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'UPS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'DHL', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'YTO', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'EMS', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'SF international', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Hengxin', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Expeditor', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Fedex logistics', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Customers Forwarder', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Consignment', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Financial Settlement', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis'
        ");

        $this->addSql("
            INSERT INTO shipping_company (name, owner_id)
            SELECT 'Aramex', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'vis'
        ");

        // Service type import

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'TBD', null FROM shipping_company sc
            WHERE sc.name = 'TBD'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Hand-carried'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Next Day Air  Residential', 'Air', 'UPSA' FROM shipping_company sc
            WHERE sc.name = 'UPS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Next Day Air  Commercial', 'Air', 'UPSA' FROM shipping_company sc
            WHERE sc.name = 'UPS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Next Day Air Saver  Residential', 'Air', 'UPSA' FROM shipping_company sc
            WHERE sc.name = 'UPS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Next Day Air Saver  Commercial', 'Air', 'UPSA' FROM shipping_company sc
            WHERE sc.name = 'UPS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, '2nd Day Air A.M.  Commercial', 'Air', 'UPSA' FROM shipping_company sc
            WHERE sc.name = 'UPS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, '2nd Day Air  Residential', 'Air', 'UPSA' FROM shipping_company sc
            WHERE sc.name = 'UPS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, '2nd Day Air  Commercial', 'Air', 'UPSA' FROM shipping_company sc
            WHERE sc.name = 'UPS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, '3 Day Select  Residential', 'Truck', 'UPSC' FROM shipping_company sc
            WHERE sc.name = 'UPS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, '3 Day Select  Commercial', 'Truck', 'UPSC' FROM shipping_company sc
            WHERE sc.name = 'UPS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Ground Commercial', 'Truck', 'UPSC' FROM shipping_company sc
            WHERE sc.name = 'UPS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Ground Residential', 'Truck', 'UPSC' FROM shipping_company sc
            WHERE sc.name = 'UPS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'UPGF' FROM shipping_company sc
            WHERE sc.name = 'UPS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Air Freight  ', 'Air', 'UPSA' FROM shipping_company sc
            WHERE sc.name = 'UPS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Worldwide Express ', 'Air', 'UPSA' FROM shipping_company sc
            WHERE sc.name = 'UPS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Worldwide Express Saver ', 'Air', 'UPSA' FROM shipping_company sc
            WHERE sc.name = 'UPS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Worldwide Expedited ', 'Air', 'UPSA' FROM shipping_company sc
            WHERE sc.name = 'UPS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Irregular PS Select', 'Air', 'UPSA' FROM shipping_company sc
            WHERE sc.name = 'UPS MI'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Parcel Select', 'Air', 'UPSA' FROM shipping_company sc
            WHERE sc.name = 'UPS MI'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Fedex First Overnight', 'Air', 'FDEN' FROM shipping_company sc
            WHERE sc.name = 'FEDEX'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Fedex Priority Overnight', 'Air', 'FDEN' FROM shipping_company sc
            WHERE sc.name = 'FEDEX'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Fedex Standard Overnight', 'Air', 'FDEN' FROM shipping_company sc
            WHERE sc.name = 'FEDEX'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Fedex 2Day A.M', 'Air', 'FDEN' FROM shipping_company sc
            WHERE sc.name = 'FEDEX'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Fedex 2Day', 'Air', 'FDEN' FROM shipping_company sc
            WHERE sc.name = 'FEDEX'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Fedex Express Saver', 'Truck', 'FDEG' FROM shipping_company sc
            WHERE sc.name = 'FEDEX'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Fedex First Overnight Freight', 'Air', 'FDEN' FROM shipping_company sc
            WHERE sc.name = 'FEDEX'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Fedex 1Day Freight', 'Air', 'FDEN' FROM shipping_company sc
            WHERE sc.name = 'FEDEX'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Fedex 2Day Freight', 'Air', 'FDEN' FROM shipping_company sc
            WHERE sc.name = 'FEDEX'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Fedex 3Day Freight', 'Truck', 'FDEG' FROM shipping_company sc
            WHERE sc.name = 'FEDEX'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Fedex Ground', 'Truck', 'FDEG' FROM shipping_company sc
            WHERE sc.name = 'FEDEX'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Fedex Home Delivery', 'Truck', 'FDEG' FROM shipping_company sc
            WHERE sc.name = 'FEDEX'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Fedex International Priority', 'Air', 'FDEN' FROM shipping_company sc
            WHERE sc.name = 'FEDEX'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Fedex International Economy', 'Air', 'FDEN' FROM shipping_company sc
            WHERE sc.name = 'FEDEX'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'FXFE' FROM shipping_company sc
            WHERE sc.name = 'FEDEX'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'SmartMail Parcel Expedited', 'Air', 'DHLC' FROM shipping_company sc
            WHERE sc.name = 'DHL ECOMMERCE'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'SmartMail Parcel Plus Expedited', 'Air', 'DHLC' FROM shipping_company sc
            WHERE sc.name = 'DHL ECOMMERCE'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Priority', 'Truck', 'USAU' FROM shipping_company sc
            WHERE sc.name = 'USPS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'First Class', 'Truck', 'USAU' FROM shipping_company sc
            WHERE sc.name = 'USPS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'GMLS' FROM shipping_company sc
            WHERE sc.name = 'R&L CARRIERS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'EASYPOST'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Ltl', 'Truck', 'ABFS' FROM shipping_company sc
            WHERE sc.name = 'ABF'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'BAKS' FROM shipping_company sc
            WHERE sc.name = 'BAKSTON'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'CEFR' FROM shipping_company sc
            WHERE sc.name = 'CENTRAL FREIGHT LINE'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'CEGH' FROM shipping_company sc
            WHERE sc.name = 'CENTRAL TRANSPORT'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'ADLG' FROM shipping_company sc
            WHERE sc.name = 'DEPENDABLE HIGHWAY'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'FACW' FROM shipping_company sc
            WHERE sc.name = 'DHE TRUCKING'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Freight Air', 'Air', 'EXHC' FROM shipping_company sc
            WHERE sc.name = 'EXPEDITORS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'FAULT LINE LOGISTICS LLC'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'FACW' FROM shipping_company sc
            WHERE sc.name = 'FORWARD AIR'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'FFRE' FROM shipping_company sc
            WHERE sc.name = 'FRONTLINE FREIGHT'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'GNS FREIGHT SOLUTIONS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'Freight Air', 'Air', 'KNOU' FROM shipping_company sc
            WHERE sc.name = 'KUEHNE-NAGEL'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'ODFL' FROM shipping_company sc
            WHERE sc.name = 'OLD DOMINION'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'MXPV' FROM shipping_company sc
            WHERE sc.name = 'MOUNTAIN VELLEY EXPRESS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'OAKH' FROM shipping_company sc
            WHERE sc.name = 'OAK HARBOR FREIGHT LINE'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'RETL' FROM shipping_company sc
            WHERE sc.name = 'REDDAWAY'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'SAIA' FROM shipping_company sc
            WHERE sc.name = 'SAIA MOTOR FREIGHT'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'XPOC' FROM shipping_company sc
            WHERE sc.name = 'XPO LOGISTICS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'YRCW' FROM shipping_company sc
            WHERE sc.name = 'YRC FREGHT'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'DNTV' FROM shipping_company sc
            WHERE sc.name = 'D&N / MAPEL GATE FREIGHT'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'DTST' FROM shipping_company sc
            WHERE sc.name = 'DATS DEFINITE'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'SDCR' FROM shipping_company sc
            WHERE sc.name = 'DAY ROSS FREIGHT'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'DXFT' FROM shipping_company sc
            WHERE sc.name = 'DELTAMAX'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'EXLA' FROM shipping_company sc
            WHERE sc.name = 'ESTES EXPRESS LINE'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'HMFR' FROM shipping_company sc
            WHERE sc.name = 'HIGHLIGHT MOTOR FREIGHT'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'TEMZ' FROM shipping_company sc
            WHERE sc.name = 'HUB GROUP INTERMODEL'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'NUMK' FROM shipping_company sc
            WHERE sc.name = 'NUMARK TRANSPORTATION'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'POLT' FROM shipping_company sc
            WHERE sc.name = 'POLARIS TRANSPORTATION '
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'RTRR' FROM shipping_company sc
            WHERE sc.name = 'ROADRUNNER TS'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method, carrier_alpha_code)
            SELECT sc.id, 'LTL', 'Truck', 'VGLN' FROM shipping_company sc
            WHERE sc.name = 'VEGASCARRIER'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder'
            AND owner_id = 1330
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL /Fracionado', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Express Renascer'
            AND owner_id = 3160
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL /Fracionado', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Jamef'
            AND owner_id = 3160
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL /Fracionado', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Braspress'
            AND owner_id = 3160
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'EXpress', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'RM EXpress'
            AND owner_id = 3160
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'EXpress', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Loggi'
            AND owner_id = 3160
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'EXpress', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'UBER'
            AND owner_id = 3160
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder'
            AND owner_id = 3160
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Promologistics'
            AND owner_id = 4462
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '3 Day Commercial', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Estafeta'
            AND owner_id = 4462
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Next day', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Estafeta'
            AND owner_id = 4462
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Next day', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Fedex'
            AND owner_id = 4462
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '3 Day Commercial', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Fedex'
            AND owner_id = 4462
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Same day', 'Truck' FROM shipping_company sc
            WHERE sc.name = '99 Minutos'
            AND owner_id = 4462
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder'
            AND owner_id = 4462
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Sedex', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Correios'
            AND owner_id = 4165
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL /Fracionado', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Express Renascer'
            AND owner_id = 4165
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL /Fracionado', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Jamef'
            AND owner_id = 4165
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL /Fracionado', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Braspress'
            AND owner_id = 4165
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'EXpress', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'RM EXpress'
            AND owner_id = 4165
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'EXpress', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Loggi'
            AND owner_id = 4165
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'EXpress', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'UBER'
            AND owner_id = 4165
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder'
            AND owner_id = 4165
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Startrack'
            AND owner_id = 350
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Regular', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Australia Post'
            AND owner_id = 350
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Air' FROM shipping_company sc
            WHERE sc.name = 'Australia Post'
            AND owner_id = 350
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Air' FROM shipping_company sc
            WHERE sc.name = 'Mainfreight'
            AND owner_id = 350
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Aramex'
            AND owner_id = 4175
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Shalom'
            AND owner_id = 4175
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Shalom'
            AND owner_id = 4175
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Shalom'
            AND owner_id = 4175
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Shalom'
            AND owner_id = 4176
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Shalom'
            AND owner_id = 4176
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Shalom'
            AND owner_id = 4176
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Aramex'
            AND owner_id = 4175
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Sagawa'
            AND owner_id = 3897
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Sagawa'
            AND owner_id = 3897
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Sagawa'
            AND owner_id = 3897
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Yamato'
            AND owner_id = 3897
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'JP Post'
            AND owner_id = 3897
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Sagawa'
            AND owner_id = 4084
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Sagawa'
            AND owner_id = 4084
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Sagawa'
            AND owner_id = 4084
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Yamato'
            AND owner_id = 4084
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'JP Post'
            AND owner_id = 4084
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Sagawa'
            AND owner_id = 4083
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Sagawa'
            AND owner_id = 4083
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Sagawa'
            AND owner_id = 4083
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Yamato'
            AND owner_id = 4083
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'JP Post'
            AND owner_id = 4083
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Shalom'
            AND owner_id = 3138
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Shalom'
            AND owner_id = 3138
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Shalom'
            AND owner_id = 3138
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'IHUB'
            AND owner_id = 2839
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'IHUB'
            AND owner_id = 2839
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal air', 'Air' FROM shipping_company sc
            WHERE sc.name = 'Red arrow'
            AND owner_id = 2839
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal air', 'Air' FROM shipping_company sc
            WHERE sc.name = 'Tiongnam'
            AND owner_id = 2839
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'IHUB'
            AND owner_id = 4251
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'IHUB'
            AND owner_id = 4251
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal air', 'Air' FROM shipping_company sc
            WHERE sc.name = 'Red arrow'
            AND owner_id = 4251
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal air', 'Air' FROM shipping_company sc
            WHERE sc.name = 'Tiongnam'
            AND owner_id = 4251
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'IHUB'
            AND owner_id = 4530
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'IHUB'
            AND owner_id = 4530
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal air', 'Air' FROM shipping_company sc
            WHERE sc.name = 'Red arrow'
            AND owner_id = 4530
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal air', 'Air' FROM shipping_company sc
            WHERE sc.name = 'Tiongnam'
            AND owner_id = 4530
        ");
        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Triple I'
            AND owner_id = 3713
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Triple I'
            AND owner_id = 3713
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Kerry'
            AND owner_id = 3713
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Kerry'
            AND owner_id = 3713
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'SCG Express'
            AND owner_id = 3713
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'LEX'
            AND owner_id = 3713
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'LEX'
            AND owner_id = 3713
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'BEST'
            AND owner_id = 3713
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'BEST'
            AND owner_id = 3713
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Skootar'
            AND owner_id = 3713
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Skootar'
            AND owner_id = 3713
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Flash Express'
            AND owner_id = 3713
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Triple I'
            AND owner_id = 4532
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Triple I'
            AND owner_id = 4532
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Kerry'
            AND owner_id = 4532
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Kerry'
            AND owner_id = 4532
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'SCG Express'
            AND owner_id = 4532
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'LEX'
            AND owner_id = 4532
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'LEX'
            AND owner_id = 4532
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'BEST'
            AND owner_id = 4532
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'BEST'
            AND owner_id = 4532
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Skootar'
            AND owner_id = 4532
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Skootar'
            AND owner_id = 4532
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Flash Express'
            AND owner_id = 4532
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Hand-carried'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'DPD Classic', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'DPD'
            AND owner_id = 3889
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'DPD Online Express', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'DPD'
            AND owner_id = 3889
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Pickup'
            AND owner_id = 3889
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'IP DEMKOV M.V.'
            AND owner_id = 3889
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder'
            AND owner_id = 3889
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder'
            AND owner_id = 3947
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Trendyol Express'
            AND owner_id = 3947
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'HepsiExpress'
            AND owner_id = 3947
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Ulustrans'
            AND owner_id = 3947
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Ulustrans'
            AND owner_id = 3947
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Aras'
            AND owner_id = 3947
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Yurtici Kargo'
            AND owner_id = 3947
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'UPS'
            AND owner_id = 3947
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Surat'
            AND owner_id = 3947
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express Plus', 'Air' FROM shipping_company sc
            WHERE sc.name = 'A2B'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Air' FROM shipping_company sc
            WHERE sc.name = 'A2B'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express Saver', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'A2B'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Expedited', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'A2B'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'A2B'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Agentplus'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Air Cargo', 'Air' FROM shipping_company sc
            WHERE sc.name = 'Atlantic Integrated Freight SRL'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Air Cargo', 'Air' FROM shipping_company sc
            WHERE sc.name = 'Berger Logistik'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Brtan Trans'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Cargo Logistic Group'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Air Cargo', 'Air' FROM shipping_company sc
            WHERE sc.name = 'Cargo Partner'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL', 'Sea' FROM shipping_company sc
            WHERE sc.name = 'Cargo Partner'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL', 'Sea' FROM shipping_company sc
            WHERE sc.name = 'Cargo Partner'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Cargo Partner'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Cargo Partner'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Cargo Partner'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Sea Cargo', 'Sea' FROM shipping_company sc
            WHERE sc.name = 'CTL'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Targoflex', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Dachser'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Targospeed', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Dachser'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Air Freight', 'Air' FROM shipping_company sc
            WHERE sc.name = 'DB Schenker'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL', 'Sea' FROM shipping_company sc
            WHERE sc.name = 'DB Schenker'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL', 'Sea' FROM shipping_company sc
            WHERE sc.name = 'DB Schenker'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'DB Schenker'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'DB Schenker'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'DB Schenker'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Air' FROM shipping_company sc
            WHERE sc.name = 'DHL'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economy', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'DHL'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express 9:00', 'Air' FROM shipping_company sc
            WHERE sc.name = 'DHL'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express 10:30', 'Air' FROM shipping_company sc
            WHERE sc.name = 'DHL'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express 12:00', 'Air' FROM shipping_company sc
            WHERE sc.name = 'DHL'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express Envelope', 'Air' FROM shipping_company sc
            WHERE sc.name = 'DHL'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Express', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'DHL'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Air' FROM shipping_company sc
            WHERE sc.name = 'DHL/Kuehne Nagel '
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'DHL Freight'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Air Freight', 'Air' FROM shipping_company sc
            WHERE sc.name = 'DHL GF'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ocean Freight', 'Sea' FROM shipping_company sc
            WHERE sc.name = 'DHL GF'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Road & Rail Freight', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'DHL GF'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Classic EU', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'DPD'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Classic HR', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'DPD'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Classic INT', 'Air' FROM shipping_company sc
            WHERE sc.name = 'DPD'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'DSV'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'EDS Economy', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Eurodis'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'EUX Express', 'Air' FROM shipping_company sc
            WHERE sc.name = 'Eurodis'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Intercity Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'East Express'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Evoque Logistics'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Priority', 'Air' FROM shipping_company sc
            WHERE sc.name = 'FedEx'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Priority Freight', 'Air' FROM shipping_company sc
            WHERE sc.name = 'FedEx'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'FTL Trans'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Gebruder Weiss'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Air Cargo', 'Air' FROM shipping_company sc
            WHERE sc.name = 'Gebruder Weiss'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL', 'Sea' FROM shipping_company sc
            WHERE sc.name = 'Gebruder Weiss'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL', 'Sea' FROM shipping_company sc
            WHERE sc.name = 'Gebruder Weiss'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'GW pro.line', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Gebruder Weiss'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Gebruder Weiss'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Gebruder Weiss'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Business Parcel', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'GLS'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Regular Mail', 'Air' FROM shipping_company sc
            WHERE sc.name = 'HP'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'EMS', 'Air' FROM shipping_company sc
            WHERE sc.name = 'HP'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'HP'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'HP'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Sea Cargo', 'Sea' FROM shipping_company sc
            WHERE sc.name = 'Hubbig'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Hubbig'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Air Cargo', 'Air' FROM shipping_company sc
            WHERE sc.name = 'Hubbig'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Intereuropa'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Air Cargo', 'Air' FROM shipping_company sc
            WHERE sc.name = 'Kerry Logistics'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Kerry Logistics'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'KN Express', 'Air' FROM shipping_company sc
            WHERE sc.name = 'Kuehne Nagel'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'KN Expert', 'Air' FROM shipping_company sc
            WHERE sc.name = 'Kuehne Nagel'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'KN Extend', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Kuehne Nagel'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Kuehne Nagel'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Air Cargo', 'Air' FROM shipping_company sc
            WHERE sc.name = 'Kuehne Nagel'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Kuehne Nagel'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Kuehne Nagel'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL', 'Sea' FROM shipping_company sc
            WHERE sc.name = 'Kuehne Nagel'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL', 'Sea' FROM shipping_company sc
            WHERE sc.name = 'Kuehne Nagel'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL/Air Cargo', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Kuehne Nagel/Bollore'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL/Air Cargo', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Kuehne Nagel/Bollore'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL/Air Cargo', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Kuehne Nagel/Korchina'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL/Air Cargo', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Kuehne Nagel/Korchina'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL/Air Cargo', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Kuehne Nagel/SF Freight'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL/Air Cargo', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Kuehne Nagel/SF Freight'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Lagermax'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Laneris'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Lilicom team'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Login'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'MBE'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL', 'Sea' FROM shipping_company sc
            WHERE sc.name = 'Panalpina'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Pangea'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Primaco'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Air Cargo', 'Air' FROM shipping_company sc
            WHERE sc.name = 'Primaco'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Rail Cargo Logistics'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Rail Cargo', 'Train' FROM shipping_company sc
            WHERE sc.name = 'Rail Cargo Logistics'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Reful'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Samer'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Tisak'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '9:00 Express', 'Air' FROM shipping_company sc
            WHERE sc.name = 'TNT'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '10:00 Express', 'Air' FROM shipping_company sc
            WHERE sc.name = 'TNT'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '12:00 Express', 'Air' FROM shipping_company sc
            WHERE sc.name = 'TNT'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Air' FROM shipping_company sc
            WHERE sc.name = 'TNT'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '12:00 Economy Express', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'TNT'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economy', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'TNT'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Transagram'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express Plus', 'Air' FROM shipping_company sc
            WHERE sc.name = 'UPS'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Air' FROM shipping_company sc
            WHERE sc.name = 'UPS'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economy', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'UPS'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express Saver', 'Air' FROM shipping_company sc
            WHERE sc.name = 'UPS'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'UPS'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Ventus Distribucija'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Viator&Vektor'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Sea Cargo', 'Sea' FROM shipping_company sc
            WHERE sc.name = 'WTO'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Englmayer'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Ground', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'P2P'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Hand-carried'
            AND owner_id = 3160
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Hand-carried'
            AND owner_id = 4165
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Hand-carried'
            AND owner_id = 4462
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Hand-carried'
            AND owner_id = 3897
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Hand-carried'
            AND owner_id = 4083
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Hand-carried'
            AND owner_id = 4084
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Hand-carried'
            AND owner_id = 3138
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Hand-carried'
            AND owner_id = 350
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Hand-carried'
            AND owner_id = 2839
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Hand-carried'
            AND owner_id = 4530
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Hand-carried'
            AND owner_id = 4251
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Hand-carried'
            AND owner_id = 3713
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Hand-carried'
            AND owner_id = 4532
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Hand-carried'
            AND owner_id = 4175
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Hand-carried'
            AND owner_id = 4176
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder'
            AND owner_id = 3897
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder'
            AND owner_id = 4083
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder'
            AND owner_id = 4084
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder'
            AND owner_id = 3138
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder'
            AND owner_id = 350
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder'
            AND owner_id = 2839
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder'
            AND owner_id = 4530
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder'
            AND owner_id = 4251
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder'
            AND owner_id = 3713
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder'
            AND owner_id = 4532
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder'
            AND owner_id = 4175
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder'
            AND owner_id = 4176
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Consignment'
            AND owner_id = 3897
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Consignment'
            AND owner_id = 4083
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Consignment'
            AND owner_id = 4084
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Consignment'
            AND owner_id = 3138
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Consignment'
            AND owner_id = 350
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Consignment'
            AND owner_id = 2839
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Consignment'
            AND owner_id = 4530
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Consignment'
            AND owner_id = 4251
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Consignment'
            AND owner_id = 3713
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Consignment'
            AND owner_id = 4532
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Consignment'
            AND owner_id = 4175
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Consignment'
            AND owner_id = 4176
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement'
            AND owner_id = 3897
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement'
            AND owner_id = 4083
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement'
            AND owner_id = 4084
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement'
            AND owner_id = 3138
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement'
            AND owner_id = 350
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement'
            AND owner_id = 2839
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement'
            AND owner_id = 4530
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement'
            AND owner_id = 4251
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement'
            AND owner_id = 3713
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement'
            AND owner_id = 4532
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement'
            AND owner_id = 4175
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement'
            AND owner_id = 4176
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Hand-carried'
            AND owner_id = 3889
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Hand-carried'
            AND owner_id = 3947
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder'
            AND owner_id = 4453
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'TBD', null FROM shipping_company sc
            WHERE sc.name = 'TBD'
            AND owner_id = 4453
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'Hand-carried'
            AND owner_id = 4453
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'TBD', null FROM shipping_company sc
            WHERE sc.name = 'TBD'
            AND owner_id = 3160
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'TBD', null FROM shipping_company sc
            WHERE sc.name = 'TBD'
            AND owner_id = 4462
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'TBD', null FROM shipping_company sc
            WHERE sc.name = 'TBD'
            AND owner_id = 4165
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'TBD', 'Truck' FROM shipping_company sc
            WHERE sc.name = 'TBD'
            AND owner_id = 1660
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'TBD', null FROM shipping_company sc
            WHERE sc.name = 'TBD'
            AND owner_id = 3889
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'TBD', null FROM shipping_company sc
            WHERE sc.name = 'TBD'
            AND owner_id = 3947
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hand-carried' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF-CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF-Hengxin' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G29', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G30', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '15N ', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '48N', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IP', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IE', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'BBX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'NDS', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'WPX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'YTO' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Mail Service', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Mail Service', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Expres-Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express-Road', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economics Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Consignment' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' and owner_id = 3733
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hand-carried' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF-CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF-Hengxin' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G29', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G30', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '15N ', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '48N', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IP', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IE', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'BBX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'NDS', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'WPX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'YTO' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Mail Service', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Mail Service', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Expres-Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express-Road', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economics Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Consignment' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 22
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hand-carried' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF-CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF-Hengxin' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G29', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G30', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '15N ', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '48N', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IP', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IE', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'BBX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'NDS', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'WPX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'YTO' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Mail Service', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Mail Service', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Expres-Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express-Road', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economics Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Consignment' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 3801
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hand-carried' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF-CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF-Hengxin' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G29', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G30', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '15N ', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '48N', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IP', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IE', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'BBX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'NDS', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'WPX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'YTO' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Mail Service', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Mail Service', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Expres-Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express-Road', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economics Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Consignment' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 3730
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hand-carried' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF-CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF-Hengxin' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G29', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G30', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '15N ', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '48N', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IP', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IE', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'BBX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'NDS', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'WPX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'YTO' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Mail Service', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Mail Service', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Expres-Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express-Road', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economics Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Consignment' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 3134
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hand-carried' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF-CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF-Hengxin' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G29', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G30', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '15N ', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '48N', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IP', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IE', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'BBX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'NDS', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'WPX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'YTO' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Mail Service', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Mail Service', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Expres-Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express-Road', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economics Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Consignment' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 3137
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hand-carried' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF-CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF-Hengxin' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G29', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G30', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '15N ', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '48N', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IP', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IE', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'BBX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'NDS', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'WPX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'YTO' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Mail Service', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Mail Service', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Expres-Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express-Road', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economics Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Consignment' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 3136
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hand-carried' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF-CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF-Hengxin' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G29', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G30', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '15N ', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '48N', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IP', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IE', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'BBX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'NDS', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'WPX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'YTO' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Mail Service', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Mail Service', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Expres-Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express-Road', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economics Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Consignment' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 2338
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hand-carried' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF-CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF-Hengxin' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G29', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G30', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '15N ', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '48N', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IP', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IE', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'BBX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'NDS', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'WPX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'YTO' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Mail Service', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Mail Service', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Expres-Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express-Road', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economics Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Consignment' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 3135
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hand-carried' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF-CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF-Hengxin' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G29', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G30', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '15N ', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '48N', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IP', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IE', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'BBX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'NDS', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'WPX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'YTO' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Mail Service', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Mail Service', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Expres-Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express-Road', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economics Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Consignment' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 3555
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hand-carried' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF-CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF-Hengxin' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G29', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G30', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '15N ', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '48N', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IP', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IE', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'BBX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'NDS', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'WPX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'YTO' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Mail Service', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Mail Service', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Expres-Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express-Road', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economics Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Consignment' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 2551
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hand-carried' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF-CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF-Hengxin' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G29', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G30', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '15N ', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '48N', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IP', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IE', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'BBX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'NDS', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'WPX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'YTO' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Mail Service', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Mail Service', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Expres-Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express-Road', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economics Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Consignment' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 3768
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hand-carried' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF-CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF-Hengxin' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G29', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G30', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '15N ', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '48N', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IP', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IE', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'BBX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'NDS', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'WPX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'YTO' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Mail Service', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Mail Service', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Expres-Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express-Road', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economics Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Consignment' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 4069
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hand-carried' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF-CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF-Hengxin' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G29', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G30', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '15N ', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '48N', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IP', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IE', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'BBX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'NDS', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'WPX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'YTO' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Mail Service', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Mail Service', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Expres-Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express-Road', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economics Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Consignment' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 2550
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hand-carried' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF-CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF-Hengxin' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G29', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G30', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '15N ', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '48N', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IP', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IE', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'BBX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'NDS', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'WPX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'YTO' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Mail Service', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Mail Service', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Expres-Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express-Road', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economics Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Consignment' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 4194
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hand-carried' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF-CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF-Hengxin' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G29', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G30', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '15N ', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '48N', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IP', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IE', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'BBX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'NDS', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'WPX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'YTO' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Mail Service', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Mail Service', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Expres-Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express-Road', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economics Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Consignment' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 1522
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hand-carried' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF-CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF-Hengxin' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G29', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G30', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '15N ', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '48N', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IP', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IE', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'BBX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'NDS', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'WPX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'YTO' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Mail Service', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Mail Service', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Expres-Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express-Road', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economics Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Consignment' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 2187
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hand-carried' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF-CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF-Hengxin' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G29', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G30', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '15N ', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '48N', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IP', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IE', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'BBX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'NDS', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'WPX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'YTO' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Mail Service', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Mail Service', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Expres-Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express-Road', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economics Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Consignment' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 2459
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hand-carried' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF-CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF-Hengxin' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G29', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G30', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '15N ', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '48N', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IP', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IE', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'BBX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'NDS', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'WPX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'YTO' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Mail Service', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Mail Service', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Expres-Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express-Road', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economics Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Consignment' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 3556
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hand-carried' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF-CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF-Hengxin' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G29', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G30', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '15N ', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '48N', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IP', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IE', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'BBX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'NDS', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'WPX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'YTO' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Mail Service', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Mail Service', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Expres-Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express-Road', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economics Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Consignment' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 4085
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hand-carried' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF-CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF-Hengxin' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G29', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G30', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '15N ', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '48N', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IP', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IE', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'BBX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'NDS', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'WPX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'YTO' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Mail Service', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Mail Service', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Expres-Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express-Road', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economics Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Consignment' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 2149
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Hand-carried', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hand-carried' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF-CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF-Hengxin' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Truck+Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'CSCL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Ginger' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Mainfreight' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Train', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea-Railway ', 'Train'
            FROM shipping_company sc
            WHERE sc.name = 'Dachser' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G29', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IDE-G30', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '15N ', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, '48N', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'TNT' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IP', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'IE', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldship Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Saver', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Worldease Expedited', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'UPS' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'BBX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'NDS', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'WPX', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'DHL' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Express', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'YTO' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Domestic Mail Service', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'International Mail Service', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'EMS' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Expres-Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express-Road', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'SF' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Standard Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Economics Express', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'SF international' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Hengxin' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Expeditor' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Normal Air', 'Air'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-20GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40GP-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LCL-40HC-Sea', 'Sea'
            FROM shipping_company sc
            WHERE sc.name = 'Fedex logistics' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Pickup', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Customers Forwarder' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Consignment', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Consignment' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'Financial Settlement', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Financial Settlement' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'FTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 3830
        ");

        $this->addSql("
            INSERT INTO service_type (shipping_company_id, name, shipping_method)
            SELECT sc.id, 'LTL', 'Truck'
            FROM shipping_company sc
            WHERE sc.name = 'Aramex' AND owner_id = 3830
        ");
    }

    public function down(Schema $schema): void
    {
        $this->addSql("TRUNCATE TABLE edi_service_type");
        $this->addSql("TRUNCATE TABLE edi_forwarder");
    }
}
