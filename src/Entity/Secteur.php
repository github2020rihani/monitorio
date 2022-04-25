<?php

namespace App\Entity;

use App\Repository\SecteurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SecteurRepository::class)
 */
class Secteur
{
    use Timestamp;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $libSecteur;

    /**
     * @ORM\OneToMany(targetEntity=ProjetSect::class, mappedBy="secteur")
     */
    private $projetSects;

    /**
     * @ORM\OneToMany(targetEntity=Projethist::class, mappedBy="secteur")
     */
    private $projethists;

    public function __construct()
    {
        $this->projetSects = new ArrayCollection();
        $this->projethists = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibSecteur(): ?string
    {
        return $this->libSecteur;
    }

    public function setLibSecteur(?string $libSecteur): self
    {
        $this->libSecteur = $libSecteur;

        return $this;
    }

    /**
     * @return Collection<int, ProjetSect>
     */
    public function getProjetSects(): Collection
    {
        return $this->projetSects;
    }

    public function addProjetSect(ProjetSect $projetSect): self
    {
        if (!$this->projetSects->contains($projetSect)) {
            $this->projetSects[] = $projetSect;
            $projetSect->setSecteur($this);
        }

        return $this;
    }

    public function removeProjetSect(ProjetSect $projetSect): self
    {
        if ($this->projetSects->removeElement($projetSect)) {
            // set the owning side to null (unless already changed)
            if ($projetSect->getSecteur() === $this) {
                $projetSect->setSecteur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Projethist>
     */
    public function getProjethists(): Collection
    {
        return $this->projethists;
    }

    public function addProjethist(Projethist $projethist): self
    {
        if (!$this->projethists->contains($projethist)) {
            $this->projethists[] = $projethist;
            $projethist->setSecteur($this);
        }

        return $this;
    }

    public function removeProjethist(Projethist $projethist): self
    {
        if ($this->projethists->removeElement($projethist)) {
            // set the owning side to null (unless already changed)
            if ($projethist->getSecteur() === $this) {
                $projethist->setSecteur(null);
            }
        }

        return $this;
    }
}
