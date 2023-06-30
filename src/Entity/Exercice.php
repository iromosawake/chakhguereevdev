<?php

namespace App\Entity;

use App\Repository\ExerciceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ExerciceRepository::class)]

class Exercice
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $consigne = null;

    #[ORM\Column(length: 80, nullable: true)]
    private ?string $video = null;

    #[ORM\Column(nullable: true)]
    private ?bool $principal = null;

    #[ORM\ManyToOne(inversedBy: 'exercice')]
    #[ORM\JoinColumn(nullable: false)]
    private ?PatternMuscle $patternMuscle = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getConsigne(): ?string
    {
        return $this->consigne;
    }

    public function setConsigne(?string $consigne): self
    {
        $this->consigne = $consigne;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(?string $video): self
    {
        $this->video = $video;

        return $this;
    }

    public function isPrincipal(): ?bool
    {
        return $this->principal;
    }

    public function setPrincipal(?bool $principal): self
    {
        $this->principal = $principal;

        return $this;
    }

    public function getPatternMuscle(): ?PatternMuscle
    {
        return $this->patternMuscle;
    }

    public function setPatternMuscle(?PatternMuscle $patternMuscle): self
    {
        $this->patternMuscle = $patternMuscle;

        return $this;
    }
}
