<?php

namespace App\Entity;

use App\Repository\PaysRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JetBrains\PhpStorm\Internal\TentativeType;

/**
 * @ORM\Entity(repositoryClass=PaysRepository::class)
 */
class Pays implements \JsonSerializable
{
    use Timestamp;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $nomPays;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $drapeau;

    /**
     * @ORM\ManyToOne(targetEntity=Continent::class, inversedBy="pays")
     */
    private $continent;

    /**
     * @ORM\OneToMany(targetEntity=Departement::class, mappedBy="pays")
     */
    private $departements;

    /**
     * @ORM\OneToMany(targetEntity=Ong::class, mappedBy="pays")
     */
    private $ongs;

    /**
     * @ORM\OneToMany(targetEntity=Projet::class, mappedBy="location")
     */
    private $projets;

    /**
     * @ORM\OneToMany(targetEntity=Projethist::class, mappedBy="location")
     */
    private $projethists;

    public function __construct()
    {
        $this->departements = new ArrayCollection();
        $this->ongs = new ArrayCollection();
        $this->projets = new ArrayCollection();
        $this->projethists = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPays(): ?string
    {
        return $this->nomPays;
    }

    public function setNomPays(?string $nomPays): self
    {
        $this->nomPays = $nomPays;

        return $this;
    }

    public function getDrapeau(): ?string
    {
        return $this->drapeau;
    }

    public function setDrapeau(?string $drapeau): self
    {
        $this->drapeau = $drapeau;

        return $this;
    }

    public function getContinent(): ?Continent
    {
        return $this->continent;
    }

    public function setContinent(?Continent $continent): self
    {
        $this->continent = $continent;

        return $this;
    }

    /**
     * @return Collection<int, Departement>
     */
    public function getDepartements(): Collection
    {
        return $this->departements;
    }

    public function addDepartement(Departement $departement): self
    {
        if (!$this->departements->contains($departement)) {
            $this->departements[] = $departement;
            $departement->setPays($this);
        }

        return $this;
    }

    public function removeDepartement(Departement $departement): self
    {
        if ($this->departements->removeElement($departement)) {
            // set the owning side to null (unless already changed)
            if ($departement->getPays() === $this) {
                $departement->setPays(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Ong>
     */
    public function getOngs(): Collection
    {
        return $this->ongs;
    }

    public function addOng(Ong $ong): self
    {
        if (!$this->ongs->contains($ong)) {
            $this->ongs[] = $ong;
            $ong->setPays($this);
        }

        return $this;
    }

    public function removeOng(Ong $ong): self
    {
        if ($this->ongs->removeElement($ong)) {
            // set the owning side to null (unless already changed)
            if ($ong->getPays() === $this) {
                $ong->setPays(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Projet>
     */
    public function getProjets(): Collection
    {
        return $this->projets;
    }

    public function addProjet(Projet $projet): self
    {
        if (!$this->projets->contains($projet)) {
            $this->projets[] = $projet;
            $projet->setLocation($this);
        }

        return $this;
    }

    public function removeProjet(Projet $projet): self
    {
        if ($this->projets->removeElement($projet)) {
            // set the owning side to null (unless already changed)
            if ($projet->getLocation() === $this) {
                $projet->setLocation(null);
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
            $projethist->setLocation($this);
        }

        return $this;
    }

    public function removeProjethist(Projethist $projethist): self
    {
        if ($this->projethists->removeElement($projethist)) {
            // set the owning side to null (unless already changed)
            if ($projethist->getLocation() === $this) {
                $projethist->setLocation(null);
            }
        }

        return $this;
    }

    public function jsonSerialize()
    {
        return [
            "nomPays" => $this->getNomPays(),
            "Drapeau" => $this->getDrapeau()
            ];
    }
}
