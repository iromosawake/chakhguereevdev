<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'Cet email est déjà utilisé')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
//    #[Assert\NotBlank(message: 'Le mot de passe ne peut pas être vide')]
    #[Assert\Length(min: 6,minMessage: 'Le mot de passe doit contenir au moins 6 caractères')]
    private ?string $password = null;

    #[Assert\Length(min: 6,minMessage: 'Le mot de passe doit contenir au moins 6 caractères')]
    private ?string $newPassword = null;


    #[ORM\Column(length: 50)]
    private ?string $nom = null;

    #[ORM\Column(length: 50)]
    private ?string $prenom = null;

    #[ORM\Column(nullable: true)]
    private ?int $age = null;

    #[ORM\Column(length: 1)]
    private ?string $sexe = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $avant = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $apres = null;


    #[ORM\Column(type: 'boolean')]
    private $isVerified = false;


    #[ORM\Column(nullable: true)]
    private ?int $poids = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: EntrainementRealise::class, orphanRemoval: true)]
    private Collection $entrainementRealises;

    public function __construct()
    {
        $this->entrainementRealises = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    public function getNewPassword(): ?string
    {
        return $this->newPassword;
    }

    public function setNewPassword(string $password): static
    {
        $this->newPassword = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): static
    {
        $this->age = $age;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(string $sexe): static
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getAvant(): ?string
    {
        return $this->avant;
    }

    public function setAvant(?string $avant): static
    {
        $this->avant = $avant;

        return $this;
    }

    public function getApres(): ?string
    {
        return $this->apres;
    }

    public function setApres(?string $apres): static
    {
        $this->apres = $apres;

        return $this;
    }


    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): static
    {
        $this->isVerified = $isVerified;
        return $this;
    }

    public function getIsVerified()
    {
        return $this->isVerified;
    }


    public function getPoids(): ?int
    {
        return $this->poids;
    }

    public function setPoids(?int $poids): static
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * @return Collection<int, EntrainementRealise>
     */
    public function getEntrainementRealises(): Collection
    {
        return $this->entrainementRealises;
    }

    public function addEntrainementRealise(EntrainementRealise $entrainementRealise): static
    {
        if (!$this->entrainementRealises->contains($entrainementRealise)) {
            $this->entrainementRealises->add($entrainementRealise);
            $entrainementRealise->setUser($this);
        }

        return $this;
    }

    public function removeEntrainementRealise(EntrainementRealise $entrainementRealise): static
    {
        if ($this->entrainementRealises->removeElement($entrainementRealise)) {
            // set the owning side to null (unless already changed)
            if ($entrainementRealise->getUser() === $this) {
                $entrainementRealise->setUser(null);
            }
        }

        return $this;
    }
}
