<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220412110104 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE creature (id INT AUTO_INCREMENT NOT NULL, type_creature_id INT NOT NULL, nom_creature VARCHAR(255) NOT NULL, pays_origine VARCHAR(255) NOT NULL, annee_origine VARCHAR(255) NOT NULL, taille_cm INT NOT NULL, esperance INT NOT NULL, image VARCHAR(255) NOT NULL, INDEX IDX_2A6C6AF4448367D9 (type_creature_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE creature_pouvoir_creature (creature_id INT NOT NULL, pouvoir_creature_id INT NOT NULL, INDEX IDX_E16B1B17F9AB048 (creature_id), INDEX IDX_E16B1B176BF80762 (pouvoir_creature_id), PRIMARY KEY(creature_id, pouvoir_creature_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pouvoir_creature (id INT AUTO_INCREMENT NOT NULL, pouvoir VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_creature (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE creature ADD CONSTRAINT FK_2A6C6AF4448367D9 FOREIGN KEY (type_creature_id) REFERENCES type_creature (id)');
        $this->addSql('ALTER TABLE creature_pouvoir_creature ADD CONSTRAINT FK_E16B1B17F9AB048 FOREIGN KEY (creature_id) REFERENCES creature (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE creature_pouvoir_creature ADD CONSTRAINT FK_E16B1B176BF80762 FOREIGN KEY (pouvoir_creature_id) REFERENCES pouvoir_creature (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE creature_pouvoir_creature DROP FOREIGN KEY FK_E16B1B17F9AB048');
        $this->addSql('ALTER TABLE creature_pouvoir_creature DROP FOREIGN KEY FK_E16B1B176BF80762');
        $this->addSql('ALTER TABLE creature DROP FOREIGN KEY FK_2A6C6AF4448367D9');
        $this->addSql('DROP TABLE creature');
        $this->addSql('DROP TABLE creature_pouvoir_creature');
        $this->addSql('DROP TABLE pouvoir_creature');
        $this->addSql('DROP TABLE type_creature');
    }
}
