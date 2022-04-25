<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220412101736 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE log (id INT AUTO_INCREMENT NOT NULL, message LONGTEXT NOT NULL, context LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', level SMALLINT NOT NULL, level_name VARCHAR(50) NOT NULL, extra LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE permission (id INT AUTO_INCREMENT NOT NULL, code_perm VARCHAR(255) NOT NULL, desc_perm VARCHAR(255) DEFAULT NULL, sup_admin_perm TINYINT(1) DEFAULT NULL, par_defaut TINYINT(1) DEFAULT NULL, date_creat DATETIME NOT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME NOT NULL, user_modif VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE permission_profil (permission_id INT NOT NULL, profil_id INT NOT NULL, INDEX IDX_2F0C157CFED90CCA (permission_id), INDEX IDX_2F0C157C275ED078 (profil_id), PRIMARY KEY(permission_id, profil_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil (id INT AUTO_INCREMENT NOT NULL, nom_profil VARCHAR(255) NOT NULL, profil_desc VARCHAR(255) DEFAULT NULL, profil_sys TINYINT(1) DEFAULT NULL, date_creat DATETIME NOT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATETIME NOT NULL, user_modif VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, login VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, pwd VARCHAR(255) DEFAULT NULL, etat_activ TINYINT(1) DEFAULT NULL, etat_connect TINYINT(1) DEFAULT NULL, is_admin_ong TINYINT(1) DEFAULT NULL, date_dern_con DATE DEFAULT NULL, photo VARCHAR(255) DEFAULT NULL, date_creat DATE DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATE DEFAULT NULL, user_modif VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE permission_profil ADD CONSTRAINT FK_2F0C157CFED90CCA FOREIGN KEY (permission_id) REFERENCES permission (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE permission_profil ADD CONSTRAINT FK_2F0C157C275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE permission_profil DROP FOREIGN KEY FK_2F0C157CFED90CCA');
        $this->addSql('ALTER TABLE permission_profil DROP FOREIGN KEY FK_2F0C157C275ED078');
        $this->addSql('DROP TABLE log');
        $this->addSql('DROP TABLE permission');
        $this->addSql('DROP TABLE permission_profil');
        $this->addSql('DROP TABLE profil');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
