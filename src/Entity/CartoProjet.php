<?php

namespace App\Entity;

use App\Repository\CartoProjetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CartoProjetRepository::class)
 */
class CartoProjet
{
    use Timestamp;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $typeCatro;

    /**
     * @ORM\ManyToOne(targetEntity=Projet::class, inversedBy="cartoProjets")
     */
    private $projet;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeCatro(): ?string
    {
        return $this->typeCatro;
    }

    public function setTypeCatro(string $typeCatro): self
    {
        $this->typeCatro = $typeCatro;

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
