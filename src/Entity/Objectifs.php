<?php

namespace App\Entity;

use App\Repository\ObjectifsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ObjectifsRepository::class)
 */
class Objectifs
{
    use Timestamp;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=80, nullable=true)
     */
    private $ObjDesc;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ObjOrdre;

    /**
     * @ORM\ManyToOne(targetEntity=Projet::class, inversedBy="objectifs")
     */
    private $projet;



    /**
     * @ORM\OneToMany(targetEntity=ObjectifsHist::class, mappedBy="Objectif")
     */
    private $objectifsHists;

    public function __construct()
    {
        $this->objectifsHists = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getObjDesc(): ?string
    {
        return $this->ObjDesc;
    }

    public function setObjDesc(?string $ObjDesc): self
    {
        $this->ObjDesc = $ObjDesc;

        return $this;
    }

    public function getObjOrdre(): ?bool
    {
        return $this->ObjOrdre;
    }

    public function setObjOrdre(?bool $ObjOrdre): self
    {
        $this->ObjOrdre = $ObjOrdre;

        return $this;
    }

    public function getProjet(): ?Projet
    {
        return $this->projet;
    }

    public function setProjet(?Projet $projet): self
    {
        $this->projet = $projet;

        return $this;
    }



    /**
     * @return Collection<int, ObjectifsHist>
     */
    public function getObjectifsHists(): Collection
    {
        return $this->objectifsHists;
    }

    public function addObjectifsHist(ObjectifsHist $objectifsHist): self
    {
        if (!$this->objectifsHists->contains($objectifsHist)) {
            $this->objectifsHists[] = $objectifsHist;
            $objectifsHist->setObjectif($this);
        }

        return $this;
    }

    public function removeObjectifsHist(ObjectifsHist $objectifsHist): self
    {
        if ($this->objectifsHists->removeElement($objectifsHist)) {
            // set the owning side to null (unless already changed)
            if ($objectifsHist->getObjectif() === $this) {
                $objectifsHist->setObjectif(null);
            }
        }

        return $this;
    }
}
