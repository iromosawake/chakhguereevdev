<?php

namespace App\Entity;

use App\Repository\SeanceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    #[ORM\ManyToMany(targetEntity: Programme::class)]
    #[ORM\JoinColumn(nullable: false)]
    private Collection $programmes;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Zone $zone = null;

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

//    public function getProgramme(): ?Programme
//    {
//        return $this->programme;
//    }
//
//    public function setProgramme(Programme $programme): self
//    {
//        // set the owning side of the relation if necessary
//        if ($programme->getSeance() !== $this) {
//            $programme->setSeance($this);
//        }
//
//        $this->programme = $programme;
//
//        return $this;
//    }

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
       return $this->id;
    }
}
