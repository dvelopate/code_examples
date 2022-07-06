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
            SELECT 'Ulustrans', o.EntryID
            FROM u4884581_s.owners o
            WHERE o.owner_ID = 'turkey'
        ");
    }

    public function down(Schema $schema): void
    {
        $this->addSql("TRUNCATE TABLE edi_service_type");
        $this->addSql("TRUNCATE TABLE edi_forwarder");
    }
}
