<?php

namespace App\Entity;

use App\Repository\ProjetContRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjetContRepository::class)
 */
class ProjetCont
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Projet::class, inversedBy="projetConts")
     */
    private $projet;

    /**
     * @ORM\ManyToOne(targetEntity=Contributeur::class, inversedBy="projetConts")
     */
    private $contributeur;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getContributeur(): ?Contributeur
    {
        return $this->contributeur;
    }

    public function setContributeur(?Contributeur $contributeur): self
    {
        $this->contributeur = $contributeur;

        return $this;
    }
}
