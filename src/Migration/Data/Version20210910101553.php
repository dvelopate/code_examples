<?php declare(strict_types = 1);

namespace Application\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210910101553 extends AbstractMigration
{
    public function getDescription(): string
    {
        return "13.97. Qantas AU integration (https://app.clickup.com/t/11e9y2q)";
    }

    public function up(Schema $schema): void
    {
        $this->addSql("
            INSERT INTO third_party_bundle (source, third_party_bundle_id, product_id, quantity, price_per_product) VALUES
            ('qantas', '1050042', 'F382M', 1, 9.55),
            ('qantas', '1050042', 'F381M', 1, 9.55),
            ('qantas', '2016241', 'F9403', 2, 17.19),
            ('qantas', '2016243', 'F9281', 2, 17.19),
            ('qantas', '2016245', 'F9267', 2, 17.19),
            ('qantas', '2016247', 'F9328', 2, 17.19),
            ('qantas', '2016249', 'F9304', 2, 17.19)
        ");
    }

    public function down(Schema $schema): void {
        $this->addSql("DELETE FROM third_party_bundle");
    }
}
