<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220322224509 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE permission CHANGE desc_perm desc_perm VARCHAR(255) DEFAULT NULL, CHANGE date_creat date_creat DATE DEFAULT NULL, CHANGE user_creat user_creat VARCHAR(255) DEFAULT NULL, CHANGE date_modif date_modif DATE DEFAULT NULL, CHANGE user_modif user_modif VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE profil CHANGE user_creat user_creat VARCHAR(255) DEFAULT NULL, CHANGE user_modif user_modif VARCHAR(255) DEFAULT NULL, CHANGE profil_desc profil_desc VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE pwd pwd VARCHAR(255) DEFAULT NULL, CHANGE date_dern_con date_dern_con DATE DEFAULT NULL, CHANGE photo photo VARCHAR(255) DEFAULT NULL, CHANGE date_creat date_creat DATE DEFAULT NULL, CHANGE user_creat user_creat VARCHAR(255) DEFAULT NULL, CHANGE date_modif date_modif DATE DEFAULT NULL, CHANGE user_modif user_modif VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE messenger_messages CHANGE body body LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE headers headers LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE queue_name queue_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE permission CHANGE code_perm code_perm VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE desc_perm desc_perm VARCHAR(255) DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE date_creat date_creat DATE DEFAULT \'NULL\', CHANGE user_creat user_creat VARCHAR(255) DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE date_modif date_modif DATE DEFAULT \'NULL\', CHANGE user_modif user_modif VARCHAR(255) DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE profil CHANGE nom_profil nom_profil VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE profil_desc profil_desc VARCHAR(255) DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE user_creat user_creat VARCHAR(255) DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE user_modif user_modif VARCHAR(255) DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user CHANGE login login VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nom nom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE pwd pwd VARCHAR(255) DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE date_dern_con date_dern_con DATE DEFAULT \'NULL\', CHANGE photo photo VARCHAR(255) DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE date_creat date_creat DATE DEFAULT \'NULL\', CHANGE user_creat user_creat VARCHAR(255) DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`, CHANGE date_modif date_modif DATE DEFAULT \'NULL\', CHANGE user_modif user_modif VARCHAR(255) DEFAULT \'NULL\' COLLATE `utf8mb4_unicode_ci`');
    }
}
