<?php

namespace App\Entity;

use App\Repository\ProgrammeRepository;
use App\Traits\TimeStampTrait;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\ManyToOne;

#[ORM\Entity(repositoryClass: ProgrammeRepository::class)]
#[ORM\HasLifecycleCallbacks]
class Programme
{
    use TimeStampTrait;

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

    #[ORM\ManyToOne(targetEntity: Exercice::class)]
    private Exercice $exercice;

    #[ManyToOne(targetEntity: Seance::class)]
    #[JoinTable(name: 'seance_programme')]
    #[JoinColumn(name: 'seance_id', referencedColumnName: 'id')]
    private Seance $seance;


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
     * @return Exercice
     */
    public function getExercice(): Exercice
    {
        return $this->exercice;
    }

    public function setExercice(Exercice $exercice): self
    {
        $this->exercice = $exercice;
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


    public function __toString(): string
    {
        return $this->id . ' ' . $this->exercice->getNom() . ' ' . $this->getOrdre();
    }

}
