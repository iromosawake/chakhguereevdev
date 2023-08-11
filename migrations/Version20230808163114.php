<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230808163114 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE challenge_seance (challenge_id INT NOT NULL, seance_id INT NOT NULL, INDEX IDX_2CC05ECF98A21AC6 (challenge_id), INDEX IDX_2CC05ECFE3797A94 (seance_id), PRIMARY KEY(challenge_id, seance_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE suivi_seance (id INT AUTO_INCREMENT NOT NULL, challenge_id INT NOT NULL, seance_id INT NOT NULL, date DATE NOT NULL, INDEX IDX_7DB9805C98A21AC6 (challenge_id), INDEX IDX_7DB9805CE3797A94 (seance_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE challenge_seance ADD CONSTRAINT FK_2CC05ECF98A21AC6 FOREIGN KEY (challenge_id) REFERENCES challenge (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE challenge_seance ADD CONSTRAINT FK_2CC05ECFE3797A94 FOREIGN KEY (seance_id) REFERENCES seance (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE suivi_seance ADD CONSTRAINT FK_7DB9805C98A21AC6 FOREIGN KEY (challenge_id) REFERENCES challenge (id)');
        $this->addSql('ALTER TABLE suivi_seance ADD CONSTRAINT FK_7DB9805CE3797A94 FOREIGN KEY (seance_id) REFERENCES seance (id)');
        $this->addSql('ALTER TABLE challenge CHANGE nb_jours nb_semaine INT NOT NULL');
        $this->addSql('ALTER TABLE seance CHANGE semaine num_jour SMALLINT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE challenge_seance DROP FOREIGN KEY FK_2CC05ECF98A21AC6');
        $this->addSql('ALTER TABLE challenge_seance DROP FOREIGN KEY FK_2CC05ECFE3797A94');
        $this->addSql('ALTER TABLE suivi_seance DROP FOREIGN KEY FK_7DB9805C98A21AC6');
        $this->addSql('ALTER TABLE suivi_seance DROP FOREIGN KEY FK_7DB9805CE3797A94');
        $this->addSql('DROP TABLE challenge_seance');
        $this->addSql('DROP TABLE suivi_seance');
        $this->addSql('ALTER TABLE challenge CHANGE nb_semaine nb_jours INT NOT NULL');
        $this->addSql('ALTER TABLE seance CHANGE num_jour semaine SMALLINT NOT NULL');
    }
}
