<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240313103010 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entrainement_realise ADD seance_realise_id INT NOT NULL');
        $this->addSql('ALTER TABLE entrainement_realise ADD CONSTRAINT FK_80A4C1AD59BA3C77 FOREIGN KEY (seance_realise_id) REFERENCES seance (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_80A4C1AD59BA3C77 ON entrainement_realise (seance_realise_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entrainement_realise DROP FOREIGN KEY FK_80A4C1AD59BA3C77');
        $this->addSql('DROP INDEX UNIQ_80A4C1AD59BA3C77 ON entrainement_realise');
        $this->addSql('ALTER TABLE entrainement_realise DROP seance_realise_id');
    }
}
