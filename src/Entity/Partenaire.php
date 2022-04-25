<?php

namespace App\Entity;

use App\Repository\PartenaireRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PartenaireRepository::class)
 */
class Partenaire
{
    use Timestamp;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $libPart;

    /**
     * @ORM\OneToMany(targetEntity=ProjetPart::class, mappedBy="partenaire")
     */
    private $projetParts;

    /**
     * @ORM\OneToMany(targetEntity=Projethist::class, mappedBy="partenaire")
     */
    private $projethists;

    public function __construct()
    {
        $this->projetParts = new ArrayCollection();
        $this->projethists = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibPart(): ?string
    {
        return $this->libPart;
    }

    public function setLibPart(?string $libPart): self
    {
        $this->libPart = $libPart;

        return $this;
    }

    /**
     * @return Collection<int, ProjetPart>
     */
    public function getProjetParts(): Collection
    {
        return $this->projetParts;
    }

    public function addProjetPart(ProjetPart $projetPart): self
    {
        if (!$this->projetParts->contains($projetPart)) {
            $this->projetParts[] = $projetPart;
            $projetPart->setPartenaire($this);
        }

        return $this;
    }

    public function removeProjetPart(ProjetPart $projetPart): self
    {
        if ($this->projetParts->removeElement($projetPart)) {
            // set the owning side to null (unless already changed)
            if ($projetPart->getPartenaire() === $this) {
                $projetPart->setPartenaire(null);
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
            $projethist->setPartenaire($this);
        }

        return $this;
    }

    public function removeProjethist(Projethist $projethist): self
    {
        if ($this->projethists->removeElement($projethist)) {
            // set the owning side to null (unless already changed)
            if ($projethist->getPartenaire() === $this) {
                $projethist->setPartenaire(null);
            }
        }

        return $this;
    }
}
