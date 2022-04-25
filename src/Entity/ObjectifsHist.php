<?php

namespace App\Entity;

use App\Repository\ObjectifsHistRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ObjectifsHistRepository::class)
 */
class ObjectifsHist
{
    use Timestamp;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Objectifs::class, inversedBy="objectifsHists")
     */
    private $Objectif;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $objDesc;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $objOrdre;

    /**
     * @ORM\ManyToOne(targetEntity=Projet::class, inversedBy="objectifsHists")
     */
    private $projet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObjectif(): ?Objectifs
    {
        return $this->Objectif;
    }

    public function setObjectif(?Objectifs $Objectif): self
    {
        $this->Objectif = $Objectif;

        return $this;
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
        return $this->objDesc;
    }

    public function setObjDesc(string $objDesc): self
    {
        $this->objDesc = $objDesc;

        return $this;
    }

    public function getObjOrdre(): ?string
    {
        return $this->objOrdre;
    }

    public function setObjOrdre(string $objOrdre): self
    {
        $this->objOrdre = $objOrdre;

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
}
