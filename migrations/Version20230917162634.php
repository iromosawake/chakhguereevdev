<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230917162634 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64998A21AC6');
        $this->addSql('ALTER TABLE challenge DROP FOREIGN KEY FK_D7098951157D1AD4');
        $this->addSql('ALTER TABLE challenge_seance DROP FOREIGN KEY FK_2CC05ECFE3797A94');
        $this->addSql('ALTER TABLE challenge_seance DROP FOREIGN KEY FK_2CC05ECF98A21AC6');
        $this->addSql('ALTER TABLE suivi_seance DROP FOREIGN KEY FK_7DB9805C98A21AC6');
        $this->addSql('ALTER TABLE suivi_seance DROP FOREIGN KEY FK_7DB9805CE3797A94');
        $this->addSql('DROP TABLE challenge');
        $this->addSql('DROP TABLE challenge_seance');
        $this->addSql('DROP TABLE suivi_seance');
        $this->addSql('DROP INDEX UNIQ_8D93D64998A21AC6 ON user');
        $this->addSql('ALTER TABLE user DROP challenge_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE challenge (id INT AUTO_INCREMENT NOT NULL, objectif_id INT NOT NULL, date_debut DATE NOT NULL, nb_semaine INT NOT NULL, INDEX IDX_D7098951157D1AD4 (objectif_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE challenge_seance (challenge_id INT NOT NULL, seance_id INT NOT NULL, INDEX IDX_2CC05ECF98A21AC6 (challenge_id), INDEX IDX_2CC05ECFE3797A94 (seance_id), PRIMARY KEY(challenge_id, seance_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE suivi_seance (id INT AUTO_INCREMENT NOT NULL, challenge_id INT NOT NULL, seance_id INT NOT NULL, date DATE NOT NULL, INDEX IDX_7DB9805C98A21AC6 (challenge_id), INDEX IDX_7DB9805CE3797A94 (seance_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE challenge ADD CONSTRAINT FK_D7098951157D1AD4 FOREIGN KEY (objectif_id) REFERENCES objectif (id)');
        $this->addSql('ALTER TABLE challenge_seance ADD CONSTRAINT FK_2CC05ECFE3797A94 FOREIGN KEY (seance_id) REFERENCES seance (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE challenge_seance ADD CONSTRAINT FK_2CC05ECF98A21AC6 FOREIGN KEY (challenge_id) REFERENCES challenge (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE suivi_seance ADD CONSTRAINT FK_7DB9805C98A21AC6 FOREIGN KEY (challenge_id) REFERENCES challenge (id)');
        $this->addSql('ALTER TABLE suivi_seance ADD CONSTRAINT FK_7DB9805CE3797A94 FOREIGN KEY (seance_id) REFERENCES seance (id)');
        $this->addSql('ALTER TABLE user ADD challenge_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64998A21AC6 FOREIGN KEY (challenge_id) REFERENCES challenge (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D64998A21AC6 ON user (challenge_id)');
    }
}
