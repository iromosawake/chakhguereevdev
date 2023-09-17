<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230821202747 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE savers DROP INDEX fk_user_idx, ADD INDEX IDX_4C6B4D48A76ED395 (user_id)');
        $this->addSql('ALTER TABLE savers CHANGE user_id user_id INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE savers DROP INDEX IDX_4C6B4D48A76ED395, ADD UNIQUE INDEX fk_user_idx (user_id)');
        $this->addSql('ALTER TABLE savers CHANGE user_id user_id INT DEFAULT NULL');
    }
}
