<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230609064134 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE auteur DROP prenom');
        $this->addSql('ALTER TABLE emprunt CHANGE date_emprunt date_emprunt DATETIME NOT NULL, CHANGE date_fin_prevue date_fin_prevue DATETIME NOT NULL, CHANGE date_retour date_retour DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE livre DROP statut, CHANGE date_de_parution date_de_parution DATETIME NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE emprunt CHANGE date_emprunt date_emprunt DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE date_fin_prevue date_fin_prevue DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE date_retour date_retour DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE auteur ADD prenom VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE livre ADD statut VARCHAR(255) NOT NULL, CHANGE date_de_parution date_de_parution DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }
}
