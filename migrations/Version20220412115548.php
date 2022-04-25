<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220412115548 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE objectifs (id INT AUTO_INCREMENT NOT NULL, projet_id INT DEFAULT NULL, titre VARCHAR(70) NOT NULL, obj_desc VARCHAR(80) DEFAULT NULL, obj_ordre TINYINT(1) DEFAULT NULL, date_creat VARCHAR(255) NOT NULL, user_creat VARCHAR(255) NOT NULL, date_modif VARCHAR(255) NOT NULL, user_modif VARCHAR(255) NOT NULL, INDEX IDX_7805601C18272 (projet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE objectifs_hist (id INT AUTO_INCREMENT NOT NULL, objectif_id INT DEFAULT NULL, projet_id INT DEFAULT NULL, titre VARCHAR(255) NOT NULL, obj_desc VARCHAR(255) NOT NULL, obj_ordre VARCHAR(255) NOT NULL, date_creat VARCHAR(255) NOT NULL, user_creat VARCHAR(255) NOT NULL, date_modif VARCHAR(255) NOT NULL, user_motif VARCHAR(255) NOT NULL, INDEX IDX_EBFDEBDD157D1AD4 (objectif_id), INDEX IDX_EBFDEBDDC18272 (projet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projet (id INT AUTO_INCREMENT NOT NULL, code_projet VARCHAR(5) DEFAULT NULL, titre_projet VARCHAR(51) DEFAULT NULL, desc_projet VARCHAR(27) DEFAULT NULL, start_date VARCHAR(10) DEFAULT NULL, end_date VARCHAR(10) DEFAULT NULL, etat_proj VARCHAR(1) DEFAULT NULL, div_org_unit VARCHAR(255) DEFAULT NULL, is_program TINYINT(1) DEFAULT NULL, prog_id INT NOT NULL, login_admin VARCHAR(12) NOT NULL, photo VARCHAR(255) NOT NULL, coord_lat VARCHAR(255) NOT NULL, coord_long VARCHAR(255) NOT NULL, budget DOUBLE PRECISION NOT NULL, main_contact VARCHAR(17) NOT NULL, date_creat VARCHAR(22) NOT NULL, user_creat VARCHAR(12) NOT NULL, date_modif VARCHAR(19) NOT NULL, user_modiff VARCHAR(14) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE objectifs ADD CONSTRAINT FK_7805601C18272 FOREIGN KEY (projet_id) REFERENCES projet (id)');
        $this->addSql('ALTER TABLE objectifs_hist ADD CONSTRAINT FK_EBFDEBDD157D1AD4 FOREIGN KEY (objectif_id) REFERENCES objectifs (id)');
        $this->addSql('ALTER TABLE objectifs_hist ADD CONSTRAINT FK_EBFDEBDDC18272 FOREIGN KEY (projet_id) REFERENCES projet (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE objectifs_hist DROP FOREIGN KEY FK_EBFDEBDD157D1AD4');
        $this->addSql('ALTER TABLE objectifs DROP FOREIGN KEY FK_7805601C18272');
        $this->addSql('ALTER TABLE objectifs_hist DROP FOREIGN KEY FK_EBFDEBDDC18272');
        $this->addSql('DROP TABLE objectifs');
        $this->addSql('DROP TABLE objectifs_hist');
        $this->addSql('DROP TABLE projet');
    }
}
