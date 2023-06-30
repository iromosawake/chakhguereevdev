<?php

namespace App\Entity;

use App\Repository\SeanceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeanceRepository::class)]
class Seance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $semaine = null;

    #[ORM\OneToOne(mappedBy: 'seance', cascade: ['persist', 'remove'])]
    private ?Programme $programme = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?zone $zone = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSemaine(): ?int
    {
        return $this->semaine;
    }

    public function setSemaine(int $semaine): self
    {
        $this->semaine = $semaine;

        return $this;
    }

    public function getProgramme(): ?Programme
    {
        return $this->programme;
    }

    public function setProgramme(Programme $programme): self
    {
        // set the owning side of the relation if necessary
        if ($programme->getSeance() !== $this) {
            $programme->setSeance($this);
        }

        $this->programme = $programme;

        return $this;
    }

    public function getZone(): ?zone
    {
        return $this->zone;
    }

    public function setZone(?zone $zone): self
    {
        $this->zone = $zone;

        return $this;
    }
}
