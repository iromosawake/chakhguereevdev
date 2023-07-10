<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230705175535 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE seance_exercice (seance_id INT NOT NULL, exercice_id INT NOT NULL, INDEX IDX_8A34735E3797A94 (seance_id), INDEX IDX_8A3473589D40298 (exercice_id), PRIMARY KEY(seance_id, exercice_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE seance_exercice ADD CONSTRAINT FK_8A34735E3797A94 FOREIGN KEY (seance_id) REFERENCES seance (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE seance_exercice ADD CONSTRAINT FK_8A3473589D40298 FOREIGN KEY (exercice_id) REFERENCES exercice (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE programme_exercice DROP FOREIGN KEY FK_9EA93EA889D40298');
        $this->addSql('ALTER TABLE programme_exercice DROP FOREIGN KEY FK_9EA93EA862BB7AEE');
        $this->addSql('DROP TABLE programme_exercice');
        $this->addSql('ALTER TABLE programme ADD exercice_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE programme ADD CONSTRAINT FK_3DDCB9FF89D40298 FOREIGN KEY (exercice_id) REFERENCES exercice (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3DDCB9FF89D40298 ON programme (exercice_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE programme_exercice (programme_id INT NOT NULL, exercice_id INT NOT NULL, INDEX IDX_9EA93EA862BB7AEE (programme_id), INDEX IDX_9EA93EA889D40298 (exercice_id), PRIMARY KEY(programme_id, exercice_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE programme_exercice ADD CONSTRAINT FK_9EA93EA889D40298 FOREIGN KEY (exercice_id) REFERENCES exercice (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE programme_exercice ADD CONSTRAINT FK_9EA93EA862BB7AEE FOREIGN KEY (programme_id) REFERENCES programme (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE seance_exercice DROP FOREIGN KEY FK_8A34735E3797A94');
        $this->addSql('ALTER TABLE seance_exercice DROP FOREIGN KEY FK_8A3473589D40298');
        $this->addSql('DROP TABLE seance_exercice');
        $this->addSql('ALTER TABLE programme DROP FOREIGN KEY FK_3DDCB9FF89D40298');
        $this->addSql('DROP INDEX UNIQ_3DDCB9FF89D40298 ON programme');
        $this->addSql('ALTER TABLE programme DROP exercice_id');
    }
}
