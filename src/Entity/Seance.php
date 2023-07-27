<?php

namespace App\Entity;

use App\Repository\SeanceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\InverseJoinColumn;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;

#[ORM\Entity(repositoryClass: SeanceRepository::class)]
class Seance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $semaine = null;


    #[JoinTable(name: 'seance_programme')]
    #[JoinColumn(name: 'seance_id', referencedColumnName: 'id')]
    #[InverseJoinColumn(name: 'programme_id', referencedColumnName: 'id', unique: true)]
    #[ORM\ManyToMany(targetEntity: Programme::class)]
    private Collection $programmes;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Zone $zone = null;

    #[ORM\Column(length: 100)]
    private ?string $programme_muscu = null;

    public function __construct()
    {
        $this->programmes = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, Programme>
     */
    public function getProgrammes(): Collection
    {
        return $this->programmes;
    }

    public function addProgramme(Programme $programme): self
    {
        if (!$this->programmes->contains($programme)) {
            $this->exercices->add($programme);
        }
        return $this;
    }

    public function removeProgramme(Programme $programme): self
    {
        $this->programmes->removeElement($programme);
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

    public function __toString(): string
    {
       return "Semaine : $this->semaine seance $this->id";
    }

    public function getProgramme_Muscu(): ?string
    {
        return $this->programme_muscu;
    }

    public function setProgramme_Muscu(string $programme_muscu): static
    {
        $this->programme_muscu = $programme_muscu;

        return $this;
    }
}
