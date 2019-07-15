<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190715080827 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE contact');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(36) NOT NULL COLLATE utf8mb4_unicode_ci, prenom VARCHAR(36) NOT NULL COLLATE utf8mb4_unicode_ci, adresse VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci, code_postal VARCHAR(10) NOT NULL COLLATE utf8mb4_unicode_ci, ville VARCHAR(50) NOT NULL COLLATE utf8mb4_unicode_ci, pays VARCHAR(30) NOT NULL COLLATE utf8mb4_unicode_ci, email VARCHAR(100) NOT NULL COLLATE utf8mb4_unicode_ci, telephone VARCHAR(16) NOT NULL COLLATE utf8mb4_unicode_ci, message VARCHAR(500) NOT NULL COLLATE utf8mb4_unicode_ci, conditions VARCHAR(2) NOT NULL COLLATE utf8mb4_unicode_ci, envoyer VARCHAR(1) NOT NULL COLLATE utf8mb4_unicode_ci, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB COMMENT = \'\' ');
    }
}
