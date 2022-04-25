<?php

namespace App\Entity;

use App\Repository\OngRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OngRepository::class)
 */
class Ong
{
    use Timestamp;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $axronyme;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Logo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $raisons;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $tel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fax;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $respNom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $respPrenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $respEmail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $respTel;

    /**
     * @ORM\ManyToOne(targetEntity=CartoOng::class, inversedBy="ongs")
     */
    private $typeOng;

    /**
     * @ORM\ManyToOne(targetEntity=Pays::class, inversedBy="ongs")
     */
    private $pays;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAxronyme(): ?string
    {
        return $this->axronyme;
    }

    public function setAxronyme(?string $axronyme): self
    {
        $this->axronyme = $axronyme;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->Logo;
    }

    public function setLogo(?string $Logo): self
    {
        $this->Logo = $Logo;

        return $this;
    }

    public function getRaisons(): ?string
    {
        return $this->raisons;
    }

    public function setRaisons(string $raisons): self
    {
        $this->raisons = $raisons;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(?string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getRespNom(): ?string
    {
        return $this->respNom;
    }

    public function setRespNom(?string $respNom): self
    {
        $this->respNom = $respNom;

        return $this;
    }

    public function getRespPrenom(): ?string
    {
        return $this->respPrenom;
    }

    public function setRespPrenom(?string $respPrenom): self
    {
        $this->respPrenom = $respPrenom;

        return $this;
    }

    public function getRespEmail(): ?string
    {
        return $this->respEmail;
    }

    public function setRespEmail(?string $respEmail): self
    {
        $this->respEmail = $respEmail;

        return $this;
    }

    public function getRespTel(): ?string
    {
        return $this->respTel;
    }

    public function setRespTel(?string $respTel): self
    {
        $this->respTel = $respTel;

        return $this;
    }

    public function getTypeOng(): ?CartoOng
    {
        return $this->typeOng;
    }

    public function setTypeOng(?CartoOng $typeOng): self
    {
        $this->typeOng = $typeOng;

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
