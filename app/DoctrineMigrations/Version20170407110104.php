<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170407110104 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE commande CHANGE valid valid VARCHAR(1) DEFAULT NULL, CHANGE datComm datComm DATE NOT NULL, CHANGE delai delai DATE NOT NULL, CHANGE repondu repondu TEXT NOT NULL, CHANGE idFlash idFlash INT NOT NULL, CHANGE idCadeau idCadeau VARCHAR(13) NOT NULL, CHANGE refus refus VARCHAR(1) NOT NULL, CHANGE accompte accompte VARCHAR(1) NOT NULL, CHANGE paye paye VARCHAR(1) NOT NULL, CHANGE envoi envoi VARCHAR(1) NOT NULL, CHANGE datEnvoi datEnvoi DATE NOT NULL, CHANGE fini fini VARCHAR(1) NOT NULL, CHANGE idUtil idUtil INT DEFAULT NULL, CHANGE adrLivr adrLivr TEXT NOT NULL, CHANGE modPaye modPaye VARCHAR(30) NOT NULL, CHANGE fraisPort fraisPort INT NOT NULL, CHANGE suivi suivi VARCHAR(30) NOT NULL, CHANGE relance relance INT NOT NULL');
        $this->addSql('ALTER TABLE typutil CHANGE libTyp libTyp VARCHAR(25) NOT NULL');
        $this->addSql('ALTER TABLE typcarte CHANGE idType idType INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE question CHANGE idQuestion idQuestion INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE access_crea DROP FOREIGN KEY access_crea_ibfk_1');
        $this->addSql('ALTER TABLE access_crea DROP FOREIGN KEY access_crea_ibfk_2');
        $this->addSql('DROP INDEX idaccess ON access_crea');
        $this->addSql('CREATE INDEX IDX_8B4493E5657883CE ON access_crea (idAccess)');
        $this->addSql('DROP INDEX idcrea ON access_crea');
        $this->addSql('CREATE INDEX IDX_8B4493E5E60AB7D ON access_crea (idCrea)');
        $this->addSql('ALTER TABLE access_crea ADD CONSTRAINT access_crea_ibfk_1 FOREIGN KEY (idAccess) REFERENCES accessoire (idAccess)');
        $this->addSql('ALTER TABLE access_crea ADD CONSTRAINT access_crea_ibfk_2 FOREIGN KEY (idCrea) REFERENCES crea (idCrea)');
        $this->addSql('ALTER TABLE access_comm DROP FOREIGN KEY access_comm_ibfk_1');
        $this->addSql('ALTER TABLE access_comm DROP FOREIGN KEY access_comm_ibfk_2');
        $this->addSql('DROP INDEX idaccess ON access_comm');
        $this->addSql('CREATE INDEX IDX_5ED565E5657883CE ON access_comm (idAccess)');
        $this->addSql('DROP INDEX idlgn ON access_comm');
        $this->addSql('CREATE INDEX IDX_5ED565E51F7247EE ON access_comm (idLgn)');
        $this->addSql('ALTER TABLE access_comm ADD CONSTRAINT access_comm_ibfk_1 FOREIGN KEY (idAccess) REFERENCES accessoire (idAccess)');
        $this->addSql('ALTER TABLE access_comm ADD CONSTRAINT access_comm_ibfk_2 FOREIGN KEY (idLgn) REFERENCES config_comm (idLgn)');
        $this->addSql('ALTER TABLE podium CHANGE idUtil idUtil INT DEFAULT NULL, CHANGE forme forme VARCHAR(50) DEFAULT NULL, CHANGE valid valid INT NOT NULL');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_utilisateur_idQuestion');
        $this->addSql('ALTER TABLE utilisateur CHANGE passUtil passUtil VARCHAR(32) DEFAULT NULL, CHANGE libTyp libTyp VARCHAR(25) DEFAULT NULL, CHANGE news news INT NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B3E5546315 FOREIGN KEY (idQuestion) REFERENCES question (idQuestion)');
        $this->addSql('ALTER TABLE crea CHANGE photo photo VARCHAR(255) DEFAULT NULL, CHANGE diapo diapo TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE carte CHANGE commanditaire commanditaire INT DEFAULT NULL, CHANGE idCarte idCarte VARCHAR(13) NOT NULL, CHANGE nomBenef nomBenef VARCHAR(50) NOT NULL, CHANGE prenBenef prenBenef VARCHAR(50) NOT NULL, CHANGE idType idType INT DEFAULT NULL, CHANGE paiement paiement INT NOT NULL, CHANGE util util INT NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE access_comm DROP FOREIGN KEY FK_5ED565E5657883CE');
        $this->addSql('ALTER TABLE access_comm DROP FOREIGN KEY FK_5ED565E51F7247EE');
        $this->addSql('DROP INDEX idx_5ed565e5657883ce ON access_comm');
        $this->addSql('CREATE INDEX idAccess ON access_comm (idAccess)');
        $this->addSql('DROP INDEX idx_5ed565e51f7247ee ON access_comm');
        $this->addSql('CREATE INDEX idLgn ON access_comm (idLgn)');
        $this->addSql('ALTER TABLE access_comm ADD CONSTRAINT FK_5ED565E5657883CE FOREIGN KEY (idAccess) REFERENCES accessoire (idAccess)');
        $this->addSql('ALTER TABLE access_comm ADD CONSTRAINT FK_5ED565E51F7247EE FOREIGN KEY (idLgn) REFERENCES config_comm (idLgn)');
        $this->addSql('ALTER TABLE access_crea DROP FOREIGN KEY FK_8B4493E5657883CE');
        $this->addSql('ALTER TABLE access_crea DROP FOREIGN KEY FK_8B4493E5E60AB7D');
        $this->addSql('DROP INDEX idx_8b4493e5657883ce ON access_crea');
        $this->addSql('CREATE INDEX idAccess ON access_crea (idAccess)');
        $this->addSql('DROP INDEX idx_8b4493e5e60ab7d ON access_crea');
        $this->addSql('CREATE INDEX idCrea ON access_crea (idCrea)');
        $this->addSql('ALTER TABLE access_crea ADD CONSTRAINT FK_8B4493E5657883CE FOREIGN KEY (idAccess) REFERENCES accessoire (idAccess)');
        $this->addSql('ALTER TABLE access_crea ADD CONSTRAINT FK_8B4493E5E60AB7D FOREIGN KEY (idCrea) REFERENCES crea (idCrea)');
        $this->addSql('ALTER TABLE carte CHANGE commanditaire commanditaire INT NOT NULL COMMENT \'idUtil du commanditaire\', CHANGE nomBenef nomBenef VARCHAR(50) NOT NULL COLLATE utf8_general_ci COMMENT \'nom du bénéficiaire de la carte\', CHANGE prenBenef prenBenef VARCHAR(50) NOT NULL COLLATE utf8_general_ci COMMENT \'prénom du bénéficiare de la carte\', CHANGE paiement paiement INT DEFAULT 0 NOT NULL, CHANGE util util INT DEFAULT 0 NOT NULL, CHANGE idCarte idCarte VARCHAR(13) NOT NULL COLLATE utf8_general_ci COMMENT \'id unique généré par php\', CHANGE idType idType INT NOT NULL COMMENT \'id du type de carte (FK de typcarte)\'');
        $this->addSql('ALTER TABLE commande CHANGE valid valid VARCHAR(1) DEFAULT \'0\' COLLATE utf8_general_ci COMMENT \'Passe de 0 à 1 lorsque le client valide son panier\', CHANGE datComm datComm DATE NOT NULL COMMENT \'date de la validation de la commande\', CHANGE delai delai DATE NOT NULL COMMENT \'délai annoncé lors de la proposition de devis\', CHANGE repondu repondu TEXT NOT NULL COLLATE utf8_general_ci COMMENT \'réponse de Roc\'\'s Ann à la demande de devis\', CHANGE idFlash idFlash INT DEFAULT 0 NOT NULL COMMENT \'si c\'\'est une vente flash\', CHANGE idCadeau idCadeau VARCHAR(13) DEFAULT \'0\' NOT NULL COLLATE utf8_general_ci COMMENT \'si c\'\'est une carte cadeau\', CHANGE refus refus VARCHAR(1) DEFAULT \'0\' NOT NULL COLLATE utf8_general_ci COMMENT \'réponse du client à la proposition de devis : 0=pas de réponse, 1=accepté, 2=refusé\', CHANGE accompte accompte VARCHAR(1) DEFAULT \'0\' NOT NULL COLLATE utf8_general_ci COMMENT \'réception de l\'\'accompte\', CHANGE paye paye VARCHAR(1) DEFAULT \'0\' NOT NULL COLLATE utf8_general_ci COMMENT \'réception du paiement\', CHANGE envoi envoi VARCHAR(1) DEFAULT \'0\' NOT NULL COLLATE utf8_general_ci COMMENT \'envoi du colis 1=ok, 0=non\', CHANGE datEnvoi datEnvoi DATE NOT NULL COMMENT \'date d\'\'envoi du colis\', CHANGE fini fini VARCHAR(1) DEFAULT \'0\' NOT NULL COLLATE utf8_general_ci COMMENT \'cloturation de la commande\', CHANGE adrLivr adrLivr TEXT NOT NULL COLLATE utf8_general_ci COMMENT \'adresse de livraison\', CHANGE modPaye modPaye VARCHAR(30) NOT NULL COLLATE utf8_general_ci COMMENT \'mode de paiement choisi\', CHANGE fraisPort fraisPort INT NOT NULL COMMENT \'total des frais de port de la commande\', CHANGE suivi suivi VARCHAR(30) NOT NULL COLLATE utf8_general_ci COMMENT \'n° de suivi postal\', CHANGE relance relance INT DEFAULT 0 NOT NULL, CHANGE idUtil idUtil INT DEFAULT NULL COMMENT \'id de l\'\'utilisateur commanditaire\'');
        $this->addSql('ALTER TABLE crea CHANGE photo photo BLOB DEFAULT NULL, CHANGE diapo diapo INT DEFAULT NULL');
        $this->addSql('ALTER TABLE podium CHANGE forme forme VARCHAR(50) DEFAULT \'Autre\' COLLATE utf8_general_ci, CHANGE valid valid INT DEFAULT 0 NOT NULL, CHANGE idUtil idUtil INT NOT NULL');
        $this->addSql('ALTER TABLE question CHANGE idQuestion idQuestion INT NOT NULL');
        $this->addSql('ALTER TABLE typcarte CHANGE idType idType INT NOT NULL');
        $this->addSql('ALTER TABLE typutil CHANGE libTyp libTyp VARCHAR(25) NOT NULL COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B3E5546315');
        $this->addSql('ALTER TABLE utilisateur CHANGE passUtil passUtil CHAR(32) DEFAULT NULL COLLATE utf8_general_ci, CHANGE news news INT DEFAULT 0 NOT NULL, CHANGE libTyp libTyp VARCHAR(25) DEFAULT \'visiteur\' COLLATE utf8_general_ci');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_utilisateur_idQuestion FOREIGN KEY (idQuestion) REFERENCES question (idQuestion) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
