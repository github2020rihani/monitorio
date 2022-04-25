<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220322214850 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE permission (id INT AUTO_INCREMENT NOT NULL, code_perm VARCHAR(255) NOT NULL, desc_perm VARCHAR(255) DEFAULT NULL, sup_admin_perm TINYINT(1) NOT NULL, par_defaut TINYINT(1) DEFAULT NULL, date_creat DATE DEFAULT NULL, user_creat VARCHAR(255) DEFAULT NULL, date_modif DATE DEFAULT NULL, user_modif VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE permission_profil (permission_id INT NOT NULL, profil_id INT NOT NULL, INDEX IDX_2F0C157CFED90CCA (permission_id), INDEX IDX_2F0C157C275ED078 (profil_id), PRIMARY KEY(permission_id, profil_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil_permission (profil_id INT NOT NULL, permission_id INT NOT NULL, INDEX IDX_DB8FC954275ED078 (profil_id), INDEX IDX_DB8FC954FED90CCA (permission_id), PRIMARY KEY(profil_id, permission_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE permission_profil ADD CONSTRAINT FK_2F0C157CFED90CCA FOREIGN KEY (permission_id) REFERENCES permission (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE permission_profil ADD CONSTRAINT FK_2F0C157C275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE profil_permission ADD CONSTRAINT FK_DB8FC954275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE profil_permission ADD CONSTRAINT FK_DB8FC954FED90CCA FOREIGN KEY (permission_id) REFERENCES permission (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE profil CHANGE profil_desc profil_desc VARCHAR(255) DEFAULT NULL, CHANGE user_creat user_creat VARCHAR(255) DEFAULT NULL, CHANGE user_modif user_modif VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE pwd pwd VARCHAR(255) DEFAULT NULL, CHANGE date_dern_con date_dern_con DATE DEFAULT NULL, CHANGE photo photo VARCHAR(255) DEFAULT NULL, CHANGE date_creat date_creat DATE DEFAULT NULL, CHANGE user_creat user_creat VARCHAR(255) DEFAULT NULL, CHANGE date_modif date_modif DATE DEFAULT NULL, CHANGE user_modif user_modif VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE permission_profil DROP FOREIGN KEY FK_2F0C157CFED90CCA');
        $this->addSql('ALTER TABLE profil_permission DROP FOREIGN KEY FK_DB8FC954FED90CCA');
        $this->addSql('DROP TABLE permission');
        $this->addSql('DROP TABLE permission_profil');
        $this->addSql('DROP TABLE profil_permission');
        $this->addSql('ALTER TABLE messenger_messages CHANGE body body LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE headers headers LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE queue_name queue_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE profil CHANGE nom_profil nom_profil VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE profil_desc profil_desc VARCHAR(255) DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE user_creat user_creat VARCHAR(255) DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE user_modif user_modif VARCHAR(255) DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE login login VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE pwd pwd VARCHAR(255) DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE date_dern_con date_dern_con DATE DEFAULT \'NULL\', CHANGE photo photo VARCHAR(255) DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE date_creat date_creat DATE DEFAULT \'NULL\', CHANGE user_creat user_creat VARCHAR(255) DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE date_modif date_modif DATE DEFAULT \'NULL\', CHANGE user_modif user_modif VARCHAR(255) DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
    }
}
