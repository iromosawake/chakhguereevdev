<?php

namespace App\Entity;

use App\Repository\ProgrammeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProgrammeRepository::class)]
class Programme
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $ordre = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $series = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $reps = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $charge = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $repos = null;

    #[ORM\Column(type: Types::SMALLINT, nullable: true)]
    private ?int $rpe = null;

    #[ORM\ManyToMany(targetEntity: exercice::class)]
    private Collection $exercices;

    #[ORM\OneToOne(inversedBy: 'programme', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?seance $seance = null;

    public function __construct()
    {
        $this->exercices = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrdre(): ?int
    {
        return $this->ordre;
    }

    public function setOrdre(int $ordre): self
    {
        $this->ordre = $ordre;

        return $this;
    }

    public function getSeries(): ?int
    {
        return $this->series;
    }

    public function setSeries(int $series): self
    {
        $this->series = $series;

        return $this;
    }

    public function getReps(): ?int
    {
        return $this->reps;
    }

    public function setReps(int $reps): self
    {
        $this->reps = $reps;

        return $this;
    }

    public function getCharge(): ?int
    {
        return $this->charge;
    }

    public function setCharge(int $charge): self
    {
        $this->charge = $charge;

        return $this;
    }

    public function getRepos(): ?int
    {
        return $this->repos;
    }

    public function setRepos(?int $repos): self
    {
        $this->repos = $repos;

        return $this;
    }

    public function getRpe(): ?int
    {
        return $this->rpe;
    }

    public function setRpe(?int $rpe): self
    {
        $this->rpe = $rpe;

        return $this;
    }

    /**
     * @return Collection<int, exercice>
     */
    public function getExercices(): Collection
    {
        return $this->exercices;
    }

    public function addExercice(exercice $exercice): self
    {
        if (!$this->exercices->contains($exercice)) {
            $this->exercices->add($exercice);
        }

        return $this;
    }

    public function removeExercice(exercice $exercice): self
    {
        $this->exercices->removeElement($exercice);

        return $this;
    }

    public function getSeance(): ?seance
    {
        return $this->seance;
    }

    public function setSeance(seance $seance): self
    {
        $this->seance = $seance;

        return $this;
    }
}
