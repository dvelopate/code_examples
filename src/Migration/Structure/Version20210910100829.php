<?php declare(strict_types = 1);

namespace Application\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20210910100829 extends AbstractMigration
{
    public function getDescription(): string
    {
        return "13.97. Qantas AU integration (https://app.clickup.com/t/11e9y2q)";
    }

    public function up(Schema $schema): void
    {
        $this->addSql("
            CREATE TABLE third_party_bundle
            (
                id INT AUTO_INCREMENT NOT NULL,
                source VARCHAR(255) NOT NULL,
                third_party_bundle_id VARCHAR(255) NOT NULL,
                product_id VARCHAR(255) NOT NULL,
                quantity INT NOT NULL,
                price_per_product DOUBLE PRECISION DEFAULT NULL,
                PRIMARY KEY(id)
            ) DEFAULT CHARACTER SET utf8 COLLATE `utf8_general_ci` ENGINE = InnoDB
        ");
    }

    public function down(Schema $schema): void
    {
        $this->addSql("DROP TABLE third_party_bundle");
    }
}
