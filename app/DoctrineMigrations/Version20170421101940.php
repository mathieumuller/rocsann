<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170421101940 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE typutil CHANGE libTyp libTyp VARCHAR(25) NOT NULL');
        $this->addSql('ALTER TABLE agrement CHANGE libaccess libelle VARCHAR(30) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_B0C8CC9A4D60759 ON agrement (libelle)');
        $this->addSql('ALTER TABLE configuration CHANGE taille taille ENUM(\'Cheval\', \'Poney\', \'Mini\', \'Grand cheval\')');
        $this->addSql('ALTER TABLE carte CHANGE idCarte idCarte VARCHAR(13) NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX UNIQ_B0C8CC9A4D60759 ON agrement');
        $this->addSql('ALTER TABLE agrement CHANGE libelle libAccess VARCHAR(30) NOT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE carte CHANGE idCarte idCarte VARCHAR(13) NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE configuration CHANGE taille taille VARCHAR(255) DEFAULT NULL COLLATE utf8_unicode_ci');
        $this->addSql('ALTER TABLE typutil CHANGE libTyp libTyp VARCHAR(25) NOT NULL COLLATE utf8_general_ci');
    }
}
