<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170421094047 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE realisation (id INT AUTO_INCREMENT NOT NULL, configuration_id INT DEFAULT NULL, categorie_id INT DEFAULT NULL, forme_id INT DEFAULT NULL, prix DOUBLE PRECISION DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, type VARCHAR(255) NOT NULL, photo VARCHAR(255) DEFAULT NULL, diaporama TINYINT(1) DEFAULT \'0\', commentaire TEXT DEFAULT NULL, INDEX FK_realisation_configuration (configuration_id), INDEX FK_realisation_categorie (categorie_id), INDEX FK_realisation_forme (forme_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE forme (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, UNIQUE INDEX UNIQ_9EBAEA6A4D60759 (libelle), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE agrement (id INT AUTO_INCREMENT NOT NULL, libAccess VARCHAR(30) NOT NULL, photo VARCHAR(255) DEFAULT NULL, prix DOUBLE PRECISION DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE configuration (id INT AUTO_INCREMENT NOT NULL, matiere VARCHAR(150) NOT NULL, couleur VARCHAR(150) NOT NULL, bordure VARCHAR(150) DEFAULT NULL, galon VARCHAR(150) DEFAULT NULL, frange VARCHAR(150) DEFAULT NULL, broderie VARCHAR(150) DEFAULT NULL, taille ENUM(\'Cheval\', \'Poney\', \'Mini\', \'Grand cheval\'), logo VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE configuration_agrement (configuration_id INT NOT NULL, agrement_id INT NOT NULL, INDEX IDX_6AE93BD273F32DD8 (configuration_id), INDEX IDX_6AE93BD266BFF398 (agrement_id), PRIMARY KEY(configuration_id, agrement_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, code VARCHAR(5) NOT NULL, UNIQUE INDEX UNIQ_497DD63477153098 (code), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE realisation ADD CONSTRAINT FK_EAA5610E73F32DD8 FOREIGN KEY (configuration_id) REFERENCES configuration (id)');
        $this->addSql('ALTER TABLE realisation ADD CONSTRAINT FK_EAA5610EBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE realisation ADD CONSTRAINT FK_EAA5610EBCE84E7C FOREIGN KEY (forme_id) REFERENCES forme (id)');
        $this->addSql('ALTER TABLE configuration_agrement ADD CONSTRAINT FK_6AE93BD273F32DD8 FOREIGN KEY (configuration_id) REFERENCES configuration (id)');
        $this->addSql('ALTER TABLE configuration_agrement ADD CONSTRAINT FK_6AE93BD266BFF398 FOREIGN KEY (agrement_id) REFERENCES agrement (id)');
        $this->addSql('ALTER TABLE typutil CHANGE libTyp libTyp VARCHAR(25) NOT NULL');
        $this->addSql('ALTER TABLE carte CHANGE idCarte idCarte VARCHAR(13) NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE realisation DROP FOREIGN KEY FK_EAA5610EBCE84E7C');
        $this->addSql('ALTER TABLE configuration_agrement DROP FOREIGN KEY FK_6AE93BD266BFF398');
        $this->addSql('ALTER TABLE realisation DROP FOREIGN KEY FK_EAA5610E73F32DD8');
        $this->addSql('ALTER TABLE configuration_agrement DROP FOREIGN KEY FK_6AE93BD273F32DD8');
        $this->addSql('ALTER TABLE realisation DROP FOREIGN KEY FK_EAA5610EBCF5E72D');
        $this->addSql('DROP TABLE realisation');
        $this->addSql('DROP TABLE forme');
        $this->addSql('DROP TABLE agrement');
        $this->addSql('DROP TABLE configuration');
        $this->addSql('DROP TABLE configuration_agrement');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('ALTER TABLE carte CHANGE idCarte idCarte VARCHAR(13) NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE typutil CHANGE libTyp libTyp VARCHAR(25) NOT NULL COLLATE utf8_general_ci');
    }
}
