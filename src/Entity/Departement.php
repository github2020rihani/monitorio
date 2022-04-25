<?php

namespace App\Entity;

use App\Repository\DepartementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DepartementRepository::class)
 */
class Departement
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
    private $nomDept;

    /**
     * @ORM\ManyToOne(targetEntity=Pays::class, inversedBy="departements")
     */
    private $pays;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomDept(): ?string
    {
        return $this->nomDept;
    }

    public function setNomDept(?string $nomDept): self
    {
        $this->nomDept = $nomDept;

        return $this;
    }

    public function getPays(): ?Pays
    {
        return $this->pays;
    }

    public function setPays(?Pays $pays): self
    {
        $this->pays = $pays;

        return $this;
    }
}
