<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230714091148 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE programme ADD seance_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE programme ADD CONSTRAINT FK_3DDCB9FFE3797A94 FOREIGN KEY (seance_id) REFERENCES seance (id)');
        $this->addSql('CREATE INDEX IDX_3DDCB9FFE3797A94 ON programme (seance_id)');
        $this->addSql('ALTER TABLE seance_programme DROP INDEX IDX_63EEFB7162BB7AEE, ADD UNIQUE INDEX UNIQ_63EEFB7162BB7AEE (programme_id)');
        $this->addSql('ALTER TABLE seance_programme DROP FOREIGN KEY FK_63EEFB7162BB7AEE');
        $this->addSql('ALTER TABLE seance_programme DROP FOREIGN KEY FK_63EEFB71E3797A94');
        $this->addSql('ALTER TABLE seance_programme ADD CONSTRAINT FK_63EEFB7162BB7AEE FOREIGN KEY (programme_id) REFERENCES programme (id)');
        $this->addSql('ALTER TABLE seance_programme ADD CONSTRAINT FK_63EEFB71E3797A94 FOREIGN KEY (seance_id) REFERENCES seance (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE programme DROP FOREIGN KEY FK_3DDCB9FFE3797A94');
        $this->addSql('DROP INDEX IDX_3DDCB9FFE3797A94 ON programme');
        $this->addSql('ALTER TABLE programme DROP seance_id');
        $this->addSql('ALTER TABLE seance_programme DROP INDEX UNIQ_63EEFB7162BB7AEE, ADD INDEX IDX_63EEFB7162BB7AEE (programme_id)');
        $this->addSql('ALTER TABLE seance_programme DROP FOREIGN KEY FK_63EEFB71E3797A94');
        $this->addSql('ALTER TABLE seance_programme DROP FOREIGN KEY FK_63EEFB7162BB7AEE');
        $this->addSql('ALTER TABLE seance_programme ADD CONSTRAINT FK_63EEFB71E3797A94 FOREIGN KEY (seance_id) REFERENCES seance (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE seance_programme ADD CONSTRAINT FK_63EEFB7162BB7AEE FOREIGN KEY (programme_id) REFERENCES programme (id) ON DELETE CASCADE');
    }
}
