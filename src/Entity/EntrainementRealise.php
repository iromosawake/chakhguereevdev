<?php

namespace App\Entity;

use App\Repository\EntrainementRealiseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EntrainementRealiseRepository::class)]
class EntrainementRealise
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;


    #[ORM\ManyToOne(inversedBy: 'entrainementRealises')]
    #[ORM\JoinColumn(nullable: false)]
    private ?user $user = null;

    #[ORM\OneToOne(cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Seance $seance_realise = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getSeanceRealise(): ?seance
    {
        return $this->seance_realise;
    }

    public function setSeanceRealise(seance $seance_realise): static
    {
        $this->seance_realise = $seance_realise;

        return $this;
    }
}
