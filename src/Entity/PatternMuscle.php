<?php

namespace App\Entity;

use App\Repository\PatternMuscleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PatternMuscleRepository::class)]
class PatternMuscle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\OneToMany(mappedBy: 'patternMuscle', targetEntity: Exercice::class)]
    private Collection $exercice;

    public function __construct()
    {
        $this->exercice = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, exercice>
     */
    public function getExercice(): Collection
    {
        return $this->exercice;
    }

    public function addExercice(exercice $exercice): self
    {
        if (!$this->exercice->contains($exercice)) {
            $this->exercice->add($exercice);
            $exercice->setPatternMuscle($this);
        }

        return $this;
    }

    public function removeExercice(exercice $exercice): self
    {
        if ($this->exercice->removeElement($exercice)) {
            // set the owning side to null (unless already changed)
            if ($exercice->getPatternMuscle() === $this) {
                $exercice->setPatternMuscle(null);
            }
        }

        return $this;
    }
}
