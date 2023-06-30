<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230629211126 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE programme_exercice (programme_id INT NOT NULL, exercice_id INT NOT NULL, INDEX IDX_9EA93EA862BB7AEE (programme_id), INDEX IDX_9EA93EA889D40298 (exercice_id), PRIMARY KEY(programme_id, exercice_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE programme_exercice ADD CONSTRAINT FK_9EA93EA862BB7AEE FOREIGN KEY (programme_id) REFERENCES programme (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE programme_exercice ADD CONSTRAINT FK_9EA93EA889D40298 FOREIGN KEY (exercice_id) REFERENCES exercice (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE exercice ADD pattern_muscle_id INT NOT NULL');
        $this->addSql('ALTER TABLE exercice ADD CONSTRAINT FK_E418C74D7C7798E FOREIGN KEY (pattern_muscle_id) REFERENCES pattern_muscle (id)');
        $this->addSql('CREATE INDEX IDX_E418C74D7C7798E ON exercice (pattern_muscle_id)');
        $this->addSql('ALTER TABLE programme ADD seance_id INT NOT NULL');
        $this->addSql('ALTER TABLE programme ADD CONSTRAINT FK_3DDCB9FFE3797A94 FOREIGN KEY (seance_id) REFERENCES seance (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3DDCB9FFE3797A94 ON programme (seance_id)');
        $this->addSql('ALTER TABLE seance ADD zone_id INT NOT NULL');
        $this->addSql('ALTER TABLE seance ADD CONSTRAINT FK_DF7DFD0E9F2C3FAB FOREIGN KEY (zone_id) REFERENCES zone (id)');
        $this->addSql('CREATE INDEX IDX_DF7DFD0E9F2C3FAB ON seance (zone_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE programme_exercice DROP FOREIGN KEY FK_9EA93EA862BB7AEE');
        $this->addSql('ALTER TABLE programme_exercice DROP FOREIGN KEY FK_9EA93EA889D40298');
        $this->addSql('DROP TABLE programme_exercice');
        $this->addSql('ALTER TABLE exercice DROP FOREIGN KEY FK_E418C74D7C7798E');
        $this->addSql('DROP INDEX IDX_E418C74D7C7798E ON exercice');
        $this->addSql('ALTER TABLE exercice DROP pattern_muscle_id');
        $this->addSql('ALTER TABLE programme DROP FOREIGN KEY FK_3DDCB9FFE3797A94');
        $this->addSql('DROP INDEX UNIQ_3DDCB9FFE3797A94 ON programme');
        $this->addSql('ALTER TABLE programme DROP seance_id');
        $this->addSql('ALTER TABLE seance DROP FOREIGN KEY FK_DF7DFD0E9F2C3FAB');
        $this->addSql('DROP INDEX IDX_DF7DFD0E9F2C3FAB ON seance');
        $this->addSql('ALTER TABLE seance DROP zone_id');
    }
}
