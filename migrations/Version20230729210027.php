<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230729210027 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE seance ADD createdby_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE seance ADD CONSTRAINT FK_DF7DFD0EF0B5AF0B FOREIGN KEY (createdby_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_DF7DFD0EF0B5AF0B ON seance (createdby_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE seance DROP FOREIGN KEY FK_DF7DFD0EF0B5AF0B');
        $this->addSql('DROP INDEX IDX_DF7DFD0EF0B5AF0B ON seance');
        $this->addSql('ALTER TABLE seance DROP createdby_id');
    }
}
