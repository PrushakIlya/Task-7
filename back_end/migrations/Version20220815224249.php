<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220815224249 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE showrooms (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, date_created DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicles (id INT AUTO_INCREMENT NOT NULL, showroom_id_id INT DEFAULT NULL, model VARCHAR(255) NOT NULL, color VARCHAR(255) NOT NULL, price INT NOT NULL, year_of_production INT NOT NULL, date_of_sold VARCHAR(255) DEFAULT NULL, sale TINYINT(1) DEFAULT NULL, date_created DATETIME NOT NULL, INDEX IDX_1FCE69FA48E805E9 (showroom_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vehicles ADD CONSTRAINT FK_1FCE69FA48E805E9 FOREIGN KEY (showroom_id_id) REFERENCES showrooms (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE vehicles DROP FOREIGN KEY FK_1FCE69FA48E805E9');
        $this->addSql('DROP TABLE showrooms');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE vehicles');
    }
}
