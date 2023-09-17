<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230817134035 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE savers ADD CONSTRAINT FK_4C6B4D48A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_4C6B4D48A76ED395 ON savers (user_id)');
//        $this->addSql('ALTER TABLE seance ADD objectif_id INT DEFAULT NULL, DROP programme_muscu');
//        $this->addSql('ALTER TABLE seance ADD CONSTRAINT FK_DF7DFD0E157D1AD4 FOREIGN KEY (objectif_id) REFERENCES objectif (id)');
//        $this->addSql('CREATE INDEX IDX_DF7DFD0E157D1AD4 ON seance (objectif_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE savers DROP FOREIGN KEY FK_4C6B4D48A76ED395');
        $this->addSql('DROP INDEX IDX_4C6B4D48A76ED395 ON savers');
        $this->addSql('ALTER TABLE seance DROP FOREIGN KEY FK_DF7DFD0E157D1AD4');
        $this->addSql('DROP INDEX IDX_DF7DFD0E157D1AD4 ON seance');
        $this->addSql('ALTER TABLE seance ADD programme_muscu VARCHAR(100) NOT NULL, DROP objectif_id');
    }
}
