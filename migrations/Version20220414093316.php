<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220414093316 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE carto_ong (id INT AUTO_INCREMENT NOT NULL, type_carto VARCHAR(255) NOT NULL, date_creat DATETIME DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME DEFAULT NULL, user_motif VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE carto_projet (id INT AUTO_INCREMENT NOT NULL, projet_id INT DEFAULT NULL, type_catro VARCHAR(1) DEFAULT NULL, date_creat DATETIME DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME DEFAULT NULL, user_motif VARCHAR(255) DEFAULT NULL, INDEX IDX_D731E050C18272 (projet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE continent (id INT AUTO_INCREMENT NOT NULL, nom_continent VARCHAR(19) DEFAULT NULL, date_creat DATETIME DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME DEFAULT NULL, user_motif VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contributeur (id INT AUTO_INCREMENT NOT NULL, lib_cont VARCHAR(120) NOT NULL, date_creat DATETIME DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME DEFAULT NULL, user_motif VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE data_collect_method (id INT AUTO_INCREMENT NOT NULL, lib_data VARCHAR(80) DEFAULT NULL, date_creat DATETIME DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME DEFAULT NULL, user_motif VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE data_source (id INT AUTO_INCREMENT NOT NULL, lib_data_source VARCHAR(70) NOT NULL, date_creat DATETIME DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME DEFAULT NULL, user_motif VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE departement (id INT AUTO_INCREMENT NOT NULL, pays_id INT DEFAULT NULL, nom_dept VARCHAR(50) DEFAULT NULL, date_creat DATETIME DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME DEFAULT NULL, user_motif VARCHAR(255) DEFAULT NULL, INDEX IDX_C1765B63A6E44244 (pays_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE embed_page (id INT AUTO_INCREMENT NOT NULL, projet_id INT DEFAULT NULL, lab_page VARCHAR(120) NOT NULL, url_page VARCHAR(150) DEFAULT NULL, date_creat DATETIME DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME DEFAULT NULL, user_motif VARCHAR(255) DEFAULT NULL, INDEX IDX_2E40795FC18272 (projet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE files (id INT AUTO_INCREMENT NOT NULL, projet_id INT DEFAULT NULL, name_file VARCHAR(54) DEFAULT NULL, url_file VARCHAR(68) DEFAULT NULL, size_file INT DEFAULT NULL, titre_file VARCHAR(255) DEFAULT NULL, link_or_file VARCHAR(255) DEFAULT NULL, evalid TINYINT(1) NOT NULL, date_creat DATETIME DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME DEFAULT NULL, user_motif VARCHAR(255) DEFAULT NULL, INDEX IDX_6354059C18272 (projet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE frequency (id INT AUTO_INCREMENT NOT NULL, lib_freq VARCHAR(90) DEFAULT NULL, date_creat DATETIME DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME DEFAULT NULL, user_motif VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE indicaorhist (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE indicator (id INT AUTO_INCREMENT NOT NULL, projet_id INT DEFAULT NULL, data_source_id INT DEFAULT NULL, data_collect_id INT DEFAULT NULL, frequency_id INT DEFAULT NULL, mesure_id INT DEFAULT NULL, titre VARCHAR(255) DEFAULT NULL, desc_indc VARCHAR(255) NOT NULL, type_ind VARCHAR(6) NOT NULL, base_line_value VARCHAR(255) DEFAULT NULL, base_line_date VARCHAR(255) DEFAULT NULL, risks VARCHAR(231) DEFAULT NULL, goalsld INT DEFAULT NULL, goals VARCHAR(8) DEFAULT NULL, custom_form VARCHAR(255) DEFAULT NULL, date_creat DATETIME DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME DEFAULT NULL, user_motif VARCHAR(255) DEFAULT NULL, INDEX IDX_D1349DB3C18272 (projet_id), INDEX IDX_D1349DB31A935C57 (data_source_id), INDEX IDX_D1349DB3A5118851 (data_collect_id), INDEX IDX_D1349DB394879022 (frequency_id), INDEX IDX_D1349DB343AB22FA (mesure_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE indicator_hist (id INT AUTO_INCREMENT NOT NULL, indicator_id INT DEFAULT NULL, projet_id INT DEFAULT NULL, data_source_id INT DEFAULT NULL, data_method_id INT DEFAULT NULL, freq_id INT DEFAULT NULL, mesure_id INT DEFAULT NULL, titre VARCHAR(255) DEFAULT NULL, risks VARCHAR(255) DEFAULT NULL, goals VARCHAR(255) DEFAULT NULL, custom_form VARCHAR(255) DEFAULT NULL, date_creat DATETIME DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME DEFAULT NULL, user_motif VARCHAR(255) DEFAULT NULL, INDEX IDX_3583EDFB4402854A (indicator_id), INDEX IDX_3583EDFBC18272 (projet_id), INDEX IDX_3583EDFB1A935C57 (data_source_id), INDEX IDX_3583EDFB96277951 (data_method_id), INDEX IDX_3583EDFB28B1298D (freq_id), INDEX IDX_3583EDFB43AB22FA (mesure_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE log (id INT AUTO_INCREMENT NOT NULL, message LONGTEXT NOT NULL, context LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', level SMALLINT NOT NULL, level_name VARCHAR(50) NOT NULL, extra LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE mesuringgunit (id INT AUTO_INCREMENT NOT NULL, lib_mesure VARCHAR(255) DEFAULT NULL, date_creat DATETIME DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME DEFAULT NULL, user_motif VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE objectifs (id INT AUTO_INCREMENT NOT NULL, projet_id INT DEFAULT NULL, titre VARCHAR(70) NOT NULL, obj_desc VARCHAR(80) DEFAULT NULL, obj_ordre TINYINT(1) DEFAULT NULL, date_creat DATETIME DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME DEFAULT NULL, user_motif VARCHAR(255) DEFAULT NULL, INDEX IDX_7805601C18272 (projet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE objectifs_hist (id INT AUTO_INCREMENT NOT NULL, objectif_id INT DEFAULT NULL, projet_id INT DEFAULT NULL, titre VARCHAR(255) DEFAULT NULL, obj_desc VARCHAR(255) DEFAULT NULL, obj_ordre VARCHAR(255) DEFAULT NULL, date_creat DATETIME DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME DEFAULT NULL, user_motif VARCHAR(255) DEFAULT NULL, INDEX IDX_EBFDEBDD157D1AD4 (objectif_id), INDEX IDX_EBFDEBDDC18272 (projet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ong (id INT AUTO_INCREMENT NOT NULL, type_ong_id INT DEFAULT NULL, pays_id INT DEFAULT NULL, nom VARCHAR(10) DEFAULT NULL, axronyme VARCHAR(5) DEFAULT NULL, logo VARCHAR(255) DEFAULT NULL, raisons VARCHAR(255) NOT NULL, adresse VARCHAR(255) DEFAULT NULL, tel VARCHAR(255) DEFAULT NULL, fax VARCHAR(255) DEFAULT NULL, email VARCHAR(255) DEFAULT NULL, resp_nom VARCHAR(255) DEFAULT NULL, resp_prenom VARCHAR(255) DEFAULT NULL, resp_email VARCHAR(255) DEFAULT NULL, resp_tel VARCHAR(255) DEFAULT NULL, date_creat DATETIME DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME DEFAULT NULL, user_motif VARCHAR(255) DEFAULT NULL, INDEX IDX_9462E7DD72446DA0 (type_ong_id), INDEX IDX_9462E7DDA6E44244 (pays_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partenaire (id INT AUTO_INCREMENT NOT NULL, lib_part VARCHAR(50) DEFAULT NULL, date_creat DATETIME DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME DEFAULT NULL, user_motif VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pays (id INT AUTO_INCREMENT NOT NULL, continent_id INT DEFAULT NULL, nom_pays VARCHAR(20) DEFAULT NULL, drapeau VARCHAR(255) DEFAULT NULL, date_creat DATETIME DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME DEFAULT NULL, user_motif VARCHAR(255) DEFAULT NULL, INDEX IDX_349F3CAE921F4C77 (continent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE permission (id INT AUTO_INCREMENT NOT NULL, code_perm VARCHAR(255) NOT NULL, desc_perm VARCHAR(255) DEFAULT NULL, sup_admin_perm TINYINT(1) DEFAULT NULL, par_defaut TINYINT(1) DEFAULT NULL, date_creat DATETIME NOT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME NOT NULL, user_modif VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE permission_profil (permission_id INT NOT NULL, profil_id INT NOT NULL, INDEX IDX_2F0C157CFED90CCA (permission_id), INDEX IDX_2F0C157C275ED078 (profil_id), PRIMARY KEY(permission_id, profil_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil (id INT AUTO_INCREMENT NOT NULL, nom_profil VARCHAR(255) NOT NULL, profil_desc VARCHAR(255) DEFAULT NULL, profil_sys TINYINT(1) DEFAULT NULL, date_creat DATETIME NOT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME NOT NULL, user_modif VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projet (id INT AUTO_INCREMENT NOT NULL, location_id INT DEFAULT NULL, code_projet VARCHAR(5) DEFAULT NULL, titre_projet VARCHAR(51) DEFAULT NULL, desc_projet VARCHAR(27) DEFAULT NULL, start_date DATETIME DEFAULT NULL, end_date DATETIME DEFAULT NULL, etat_proj VARCHAR(1) DEFAULT NULL, div_org_unit VARCHAR(255) DEFAULT NULL, is_program TINYINT(1) DEFAULT NULL, prog_id INT DEFAULT NULL, login_admin VARCHAR(50) DEFAULT NULL, photo VARCHAR(255) DEFAULT NULL, coord_lat VARCHAR(255) DEFAULT NULL, coord_long VARCHAR(255) DEFAULT NULL, budget DOUBLE PRECISION DEFAULT NULL, main_contact VARCHAR(17) DEFAULT NULL, date_creat DATETIME DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME DEFAULT NULL, user_motif VARCHAR(255) DEFAULT NULL, INDEX IDX_50159CA964D218E (location_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projet_cont (id INT AUTO_INCREMENT NOT NULL, projet_id INT DEFAULT NULL, contributeur_id INT DEFAULT NULL, INDEX IDX_909817CFC18272 (projet_id), INDEX IDX_909817CFB903F8C2 (contributeur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projet_part (id INT AUTO_INCREMENT NOT NULL, projet_id INT DEFAULT NULL, partenaire_id INT DEFAULT NULL, INDEX IDX_3EDD9FE9C18272 (projet_id), INDEX IDX_3EDD9FE998DE13AC (partenaire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projet_sect (id INT AUTO_INCREMENT NOT NULL, projet_id INT DEFAULT NULL, secteur_id INT DEFAULT NULL, INDEX IDX_78B8BBCBC18272 (projet_id), INDEX IDX_78B8BBCB9F7E4405 (secteur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE projethist (id INT AUTO_INCREMENT NOT NULL, projet_id INT DEFAULT NULL, location_id INT DEFAULT NULL, secteur_id INT DEFAULT NULL, partenaire_id INT DEFAULT NULL, code_projet VARCHAR(5) DEFAULT NULL, titre_projet VARCHAR(70) DEFAULT NULL, desc_proj LONGTEXT DEFAULT NULL, start_date DATETIME DEFAULT NULL, end_date DATETIME DEFAULT NULL, etat_proj VARCHAR(1) NOT NULL, div_org_unit VARCHAR(255) NOT NULL, is_program TINYINT(1) DEFAULT NULL, prog_id INT DEFAULT NULL, login_admin VARCHAR(12) DEFAULT NULL, photo VARCHAR(255) DEFAULT NULL, cood_lart VARCHAR(255) DEFAULT NULL, coord_long VARCHAR(255) NOT NULL, budget DOUBLE PRECISION DEFAULT NULL, main_contact VARCHAR(18) DEFAULT NULL, donors VARCHAR(55) NOT NULL, date_creat DATETIME DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME DEFAULT NULL, user_motif VARCHAR(255) DEFAULT NULL, INDEX IDX_531ECFB4C18272 (projet_id), INDEX IDX_531ECFB464D218E (location_id), INDEX IDX_531ECFB49F7E4405 (secteur_id), INDEX IDX_531ECFB498DE13AC (partenaire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE secteur (id INT AUTO_INCREMENT NOT NULL, lib_secteur VARCHAR(100) DEFAULT NULL, date_creat DATETIME DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME DEFAULT NULL, user_motif VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, login VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, pwd VARCHAR(255) DEFAULT NULL, etat_activ TINYINT(1) DEFAULT NULL, etat_connect TINYINT(1) DEFAULT NULL, is_admin_ong TINYINT(1) DEFAULT NULL, date_dern_con DATE DEFAULT NULL, photo VARCHAR(255) DEFAULT NULL, date_creat DATE DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATE DEFAULT NULL, user_modif VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE carto_projet ADD CONSTRAINT FK_D731E050C18272 FOREIGN KEY (projet_id) REFERENCES projet (id)');
        $this->addSql('ALTER TABLE departement ADD CONSTRAINT FK_C1765B63A6E44244 FOREIGN KEY (pays_id) REFERENCES pays (id)');
        $this->addSql('ALTER TABLE embed_page ADD CONSTRAINT FK_2E40795FC18272 FOREIGN KEY (projet_id) REFERENCES projet (id)');
        $this->addSql('ALTER TABLE files ADD CONSTRAINT FK_6354059C18272 FOREIGN KEY (projet_id) REFERENCES projet (id)');
        $this->addSql('ALTER TABLE indicator ADD CONSTRAINT FK_D1349DB3C18272 FOREIGN KEY (projet_id) REFERENCES projet (id)');
        $this->addSql('ALTER TABLE indicator ADD CONSTRAINT FK_D1349DB31A935C57 FOREIGN KEY (data_source_id) REFERENCES data_source (id)');
        $this->addSql('ALTER TABLE indicator ADD CONSTRAINT FK_D1349DB3A5118851 FOREIGN KEY (data_collect_id) REFERENCES data_collect_method (id)');
        $this->addSql('ALTER TABLE indicator ADD CONSTRAINT FK_D1349DB394879022 FOREIGN KEY (frequency_id) REFERENCES frequency (id)');
        $this->addSql('ALTER TABLE indicator ADD CONSTRAINT FK_D1349DB343AB22FA FOREIGN KEY (mesure_id) REFERENCES mesuringgunit (id)');
        $this->addSql('ALTER TABLE indicator_hist ADD CONSTRAINT FK_3583EDFB4402854A FOREIGN KEY (indicator_id) REFERENCES indicator (id)');
        $this->addSql('ALTER TABLE indicator_hist ADD CONSTRAINT FK_3583EDFBC18272 FOREIGN KEY (projet_id) REFERENCES projet (id)');
        $this->addSql('ALTER TABLE indicator_hist ADD CONSTRAINT FK_3583EDFB1A935C57 FOREIGN KEY (data_source_id) REFERENCES data_source (id)');
        $this->addSql('ALTER TABLE indicator_hist ADD CONSTRAINT FK_3583EDFB96277951 FOREIGN KEY (data_method_id) REFERENCES data_collect_method (id)');
        $this->addSql('ALTER TABLE indicator_hist ADD CONSTRAINT FK_3583EDFB28B1298D FOREIGN KEY (freq_id) REFERENCES frequency (id)');
        $this->addSql('ALTER TABLE indicator_hist ADD CONSTRAINT FK_3583EDFB43AB22FA FOREIGN KEY (mesure_id) REFERENCES mesuringgunit (id)');
        $this->addSql('ALTER TABLE objectifs ADD CONSTRAINT FK_7805601C18272 FOREIGN KEY (projet_id) REFERENCES projet (id)');
        $this->addSql('ALTER TABLE objectifs_hist ADD CONSTRAINT FK_EBFDEBDD157D1AD4 FOREIGN KEY (objectif_id) REFERENCES objectifs (id)');
        $this->addSql('ALTER TABLE objectifs_hist ADD CONSTRAINT FK_EBFDEBDDC18272 FOREIGN KEY (projet_id) REFERENCES projet (id)');
        $this->addSql('ALTER TABLE ong ADD CONSTRAINT FK_9462E7DD72446DA0 FOREIGN KEY (type_ong_id) REFERENCES carto_ong (id)');
        $this->addSql('ALTER TABLE ong ADD CONSTRAINT FK_9462E7DDA6E44244 FOREIGN KEY (pays_id) REFERENCES pays (id)');
        $this->addSql('ALTER TABLE pays ADD CONSTRAINT FK_349F3CAE921F4C77 FOREIGN KEY (continent_id) REFERENCES continent (id)');
        $this->addSql('ALTER TABLE permission_profil ADD CONSTRAINT FK_2F0C157CFED90CCA FOREIGN KEY (permission_id) REFERENCES permission (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE permission_profil ADD CONSTRAINT FK_2F0C157C275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE projet ADD CONSTRAINT FK_50159CA964D218E FOREIGN KEY (location_id) REFERENCES pays (id)');
        $this->addSql('ALTER TABLE projet_cont ADD CONSTRAINT FK_909817CFC18272 FOREIGN KEY (projet_id) REFERENCES projet (id)');
        $this->addSql('ALTER TABLE projet_cont ADD CONSTRAINT FK_909817CFB903F8C2 FOREIGN KEY (contributeur_id) REFERENCES contributeur (id)');
        $this->addSql('ALTER TABLE projet_part ADD CONSTRAINT FK_3EDD9FE9C18272 FOREIGN KEY (projet_id) REFERENCES projet (id)');
        $this->addSql('ALTER TABLE projet_part ADD CONSTRAINT FK_3EDD9FE998DE13AC FOREIGN KEY (partenaire_id) REFERENCES partenaire (id)');
        $this->addSql('ALTER TABLE projet_sect ADD CONSTRAINT FK_78B8BBCBC18272 FOREIGN KEY (projet_id) REFERENCES projet (id)');
        $this->addSql('ALTER TABLE projet_sect ADD CONSTRAINT FK_78B8BBCB9F7E4405 FOREIGN KEY (secteur_id) REFERENCES secteur (id)');
        $this->addSql('ALTER TABLE projethist ADD CONSTRAINT FK_531ECFB4C18272 FOREIGN KEY (projet_id) REFERENCES projet (id)');
        $this->addSql('ALTER TABLE projethist ADD CONSTRAINT FK_531ECFB464D218E FOREIGN KEY (location_id) REFERENCES pays (id)');
        $this->addSql('ALTER TABLE projethist ADD CONSTRAINT FK_531ECFB49F7E4405 FOREIGN KEY (secteur_id) REFERENCES secteur (id)');
        $this->addSql('ALTER TABLE projethist ADD CONSTRAINT FK_531ECFB498DE13AC FOREIGN KEY (partenaire_id) REFERENCES partenaire (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ong DROP FOREIGN KEY FK_9462E7DD72446DA0');
        $this->addSql('ALTER TABLE pays DROP FOREIGN KEY FK_349F3CAE921F4C77');
        $this->addSql('ALTER TABLE projet_cont DROP FOREIGN KEY FK_909817CFB903F8C2');
        $this->addSql('ALTER TABLE indicator DROP FOREIGN KEY FK_D1349DB3A5118851');
        $this->addSql('ALTER TABLE indicator_hist DROP FOREIGN KEY FK_3583EDFB96277951');
        $this->addSql('ALTER TABLE indicator DROP FOREIGN KEY FK_D1349DB31A935C57');
        $this->addSql('ALTER TABLE indicator_hist DROP FOREIGN KEY FK_3583EDFB1A935C57');
        $this->addSql('ALTER TABLE indicator DROP FOREIGN KEY FK_D1349DB394879022');
        $this->addSql('ALTER TABLE indicator_hist DROP FOREIGN KEY FK_3583EDFB28B1298D');
        $this->addSql('ALTER TABLE indicator_hist DROP FOREIGN KEY FK_3583EDFB4402854A');
        $this->addSql('ALTER TABLE indicator DROP FOREIGN KEY FK_D1349DB343AB22FA');
        $this->addSql('ALTER TABLE indicator_hist DROP FOREIGN KEY FK_3583EDFB43AB22FA');
        $this->addSql('ALTER TABLE objectifs_hist DROP FOREIGN KEY FK_EBFDEBDD157D1AD4');
        $this->addSql('ALTER TABLE projet_part DROP FOREIGN KEY FK_3EDD9FE998DE13AC');
        $this->addSql('ALTER TABLE projethist DROP FOREIGN KEY FK_531ECFB498DE13AC');
        $this->addSql('ALTER TABLE departement DROP FOREIGN KEY FK_C1765B63A6E44244');
        $this->addSql('ALTER TABLE ong DROP FOREIGN KEY FK_9462E7DDA6E44244');
        $this->addSql('ALTER TABLE projet DROP FOREIGN KEY FK_50159CA964D218E');
        $this->addSql('ALTER TABLE projethist DROP FOREIGN KEY FK_531ECFB464D218E');
        $this->addSql('ALTER TABLE permission_profil DROP FOREIGN KEY FK_2F0C157CFED90CCA');
        $this->addSql('ALTER TABLE permission_profil DROP FOREIGN KEY FK_2F0C157C275ED078');
        $this->addSql('ALTER TABLE carto_projet DROP FOREIGN KEY FK_D731E050C18272');
        $this->addSql('ALTER TABLE embed_page DROP FOREIGN KEY FK_2E40795FC18272');
        $this->addSql('ALTER TABLE files DROP FOREIGN KEY FK_6354059C18272');
        $this->addSql('ALTER TABLE indicator DROP FOREIGN KEY FK_D1349DB3C18272');
        $this->addSql('ALTER TABLE indicator_hist DROP FOREIGN KEY FK_3583EDFBC18272');
        $this->addSql('ALTER TABLE objectifs DROP FOREIGN KEY FK_7805601C18272');
        $this->addSql('ALTER TABLE objectifs_hist DROP FOREIGN KEY FK_EBFDEBDDC18272');
        $this->addSql('ALTER TABLE projet_cont DROP FOREIGN KEY FK_909817CFC18272');
        $this->addSql('ALTER TABLE projet_part DROP FOREIGN KEY FK_3EDD9FE9C18272');
        $this->addSql('ALTER TABLE projet_sect DROP FOREIGN KEY FK_78B8BBCBC18272');
        $this->addSql('ALTER TABLE projethist DROP FOREIGN KEY FK_531ECFB4C18272');
        $this->addSql('ALTER TABLE projet_sect DROP FOREIGN KEY FK_78B8BBCB9F7E4405');
        $this->addSql('ALTER TABLE projethist DROP FOREIGN KEY FK_531ECFB49F7E4405');
        $this->addSql('DROP TABLE carto_ong');
        $this->addSql('DROP TABLE carto_projet');
        $this->addSql('DROP TABLE continent');
        $this->addSql('DROP TABLE contributeur');
        $this->addSql('DROP TABLE data_collect_method');
        $this->addSql('DROP TABLE data_source');
        $this->addSql('DROP TABLE departement');
        $this->addSql('DROP TABLE embed_page');
        $this->addSql('DROP TABLE files');
        $this->addSql('DROP TABLE frequency');
        $this->addSql('DROP TABLE indicaorhist');
        $this->addSql('DROP TABLE indicator');
        $this->addSql('DROP TABLE indicator_hist');
        $this->addSql('DROP TABLE log');
        $this->addSql('DROP TABLE mesuringgunit');
        $this->addSql('DROP TABLE objectifs');
        $this->addSql('DROP TABLE objectifs_hist');
        $this->addSql('DROP TABLE ong');
        $this->addSql('DROP TABLE partenaire');
        $this->addSql('DROP TABLE pays');
        $this->addSql('DROP TABLE permission');
        $this->addSql('DROP TABLE permission_profil');
        $this->addSql('DROP TABLE profil');
        $this->addSql('DROP TABLE projet');
        $this->addSql('DROP TABLE projet_cont');
        $this->addSql('DROP TABLE projet_part');
        $this->addSql('DROP TABLE projet_sect');
        $this->addSql('DROP TABLE projethist');
        $this->addSql('DROP TABLE secteur');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
