<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230714074400 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE seance_programme DROP FOREIGN KEY FK_63EEFB71E3797A94');
        $this->addSql('ALTER TABLE seance_programme ADD CONSTRAINT FK_63EEFB71E3797A94 FOREIGN KEY (seance_id) REFERENCES seance (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE seance_programme DROP FOREIGN KEY FK_63EEFB71E3797A94');
        $this->addSql('ALTER TABLE seance_programme ADD CONSTRAINT FK_63EEFB71E3797A94 FOREIGN KEY (seance_id) REFERENCES seance (id)');
    }
}
