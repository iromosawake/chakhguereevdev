<?php

namespace App\Traits;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait TimeStampTrait
{
    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $created = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $upated = null;

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(\DateTimeInterface $created): static
    {
        $this->created = $created;

        return $this;
    }

    public function getUpated(): ?\DateTimeInterface
    {
        return $this->upated;
    }

    public function setUpated(\DateTimeInterface $upated): static
    {
        $this->upated = $upated;

        return $this;
    }

    #[ORM\PrePersist()]
    public function onPrePersist()
    {
        $this->created = new \DateTime();
    }

    #[ORM\PreUpdate]
    public function onPreUpdae()
    {
        $this->upated = new \DateTime();
    }
}
