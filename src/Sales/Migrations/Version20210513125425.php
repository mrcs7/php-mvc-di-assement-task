<?php

declare(strict_types=1);

namespace Sales\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210513125425 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE `b_order` ( `id` INT NOT NULL AUTO_INCREMENT , `purchase_date` DATE NOT NULL , `country` VARCHAR(255) NOT NULL , `device` INT NOT NULL , `customer_id` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `b_order_items` ( `id` INT NOT NULL AUTO_INCREMENT , `EAN` VARCHAR(60) NOT NULL , `quantity` INT NOT NULL , `price` DOUBLE NOT NULL , `order_id` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `b_customer` ( `id` INT NOT NULL AUTO_INCREMENT , `first_name` VARCHAR(255) NOT NULL , `last_name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB');
        $this->addSql('ALTER TABLE b_order ADD CONSTRAINT FK_1 FOREIGN KEY (customer_id) REFERENCES b_customer (id)');
        $this->addSql('ALTER TABLE b_order_items ADD CONSTRAINT FK_2 FOREIGN KEY (order_id) REFERENCES b_order (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE b_order DROP FOREIGN KEY FK_1');
        $this->addSql('ALTER TABLE b_order_items DROP FOREIGN KEY FK_2');
        $this->addSql('DROP TABLE b_order');
        $this->addSql('DROP TABLE b_order_items');
        $this->addSql('DROP TABLE b_customer');
    }
}
