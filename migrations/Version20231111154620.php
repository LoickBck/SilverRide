<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231111154620 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE car ADD cover_image VARCHAR(255) NOT NULL, ADD kilometers NUMERIC(10, 2) DEFAULT NULL, ADD number_of_owners INT DEFAULT NULL, ADD cubic_capacity VARCHAR(255) DEFAULT NULL, ADD power NUMERIC(10, 2) DEFAULT NULL, ADD fuel_type VARCHAR(255) DEFAULT NULL, ADD year_of_manufacture INT NOT NULL, ADD transmission VARCHAR(255) DEFAULT NULL, ADD description LONGTEXT DEFAULT NULL, ADD options LONGTEXT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE car DROP cover_image, DROP kilometers, DROP number_of_owners, DROP cubic_capacity, DROP power, DROP fuel_type, DROP year_of_manufacture, DROP transmission, DROP description, DROP options');
    }
}
