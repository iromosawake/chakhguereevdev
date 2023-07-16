<?php

namespace App\Entity;

use App\Repository\SaversRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SaversRepository::class)]
class Savers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    private ?bool $silence = null;

    #[ORM\Column(nullable: true)]
    private ?bool $affirmations = null;

    #[ORM\Column(nullable: true)]
    private ?bool $visualisation = null;

    #[ORM\Column(nullable: true)]
    private ?bool $exercice = null;

    #[ORM\Column(nullable: true)]
    private ?bool $reading = null;

    #[ORM\Column(nullable: true)]
    private ?bool $scribing = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isSilence(): ?bool
    {
        return $this->silence;
    }

    public function setSilence(?bool $silence): static
    {
        $this->silence = $silence;

        return $this;
    }

    public function isAffirmations(): ?bool
    {
        return $this->affirmations;
    }

    public function setAffirmations(?bool $affirmations): static
    {
        $this->affirmations = $affirmations;

        return $this;
    }

    public function isVisualisation(): ?bool
    {
        return $this->visualisation;
    }

    public function setVisualisation(?bool $visualisation): static
    {
        $this->visualisation = $visualisation;

        return $this;
    }

    public function isExercice(): ?bool
    {
        return $this->exercice;
    }

    public function setExercice(?bool $exercice): static
    {
        $this->exercice = $exercice;

        return $this;
    }

    public function isReading(): ?bool
    {
        return $this->reading;
    }

    public function setReading(?bool $reading): static
    {
        $this->reading = $reading;

        return $this;
    }

    public function isScribing(): ?bool
    {
        return $this->scribing;
    }

    public function setScribing(?bool $scribing): static
    {
        $this->scribing = $scribing;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }
}
