<?php

namespace App\Entity;

use App\Repository\ProjethistRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjethistRepository::class)
 */
class Projethist
{
    use Timestamp;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Projet::class, inversedBy="projethists")
     */
    private $projet;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $codeProjet;

    /**
     * @ORM\Column(type="string", length=70, nullable=true)
     */
    private $titreProjet;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descProj;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $endDate;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $etatProj;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $DivOrgUnit;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isProgram;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $progId;

    /**
     * @ORM\Column(type="string", length=12, nullable=true)
     */
    private $LoginAdmin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $coodLart;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $coordLong;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $budget;

    /**
     * @ORM\Column(type="string", length=18, nullable=true)
     */
    private $mainContact;

    /**
     * @ORM\ManyToOne(targetEntity=Pays::class, inversedBy="projethists")
     */
    private $location;

    /**
     * @ORM\ManyToOne(targetEntity=Secteur::class, inversedBy="projethists")
     */
    private $secteur;

    /**
     * @ORM\ManyToOne(targetEntity=Partenaire::class, inversedBy="projethists")
     */
    private $partenaire;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $donors;

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

    public function getCodeProjet(): ?string
    {
        return $this->codeProjet;
    }

    public function setCodeProjet(?string $codeProjet): self
    {
        $this->codeProjet = $codeProjet;

        return $this;
    }

    public function getTitreProjet(): ?string
    {
        return $this->titreProjet;
    }

    public function setTitreProjet(?string $titreProjet): self
    {
        $this->titreProjet = $titreProjet;

        return $this;
    }

    public function getDescProj(): ?string
    {
        return $this->descProj;
    }

    public function setDescProj(?string $descProj): self
    {
        $this->descProj = $descProj;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getEtatProj(): ?string
    {
        return $this->etatProj;
    }

    public function setEtatProj(string $etatProj): self
    {
        $this->etatProj = $etatProj;

        return $this;
    }

    public function getDivOrgUnit(): ?string
    {
        return $this->DivOrgUnit;
    }

    public function setDivOrgUnit(string $DivOrgUnit): self
    {
        $this->DivOrgUnit = $DivOrgUnit;

        return $this;
    }

    public function getIsProgram(): ?bool
    {
        return $this->isProgram;
    }

    public function setIsProgram(?bool $isProgram): self
    {
        $this->isProgram = $isProgram;

        return $this;
    }

    public function getProgId(): ?int
    {
        return $this->progId;
    }

    public function setProgId(?int $progId): self
    {
        $this->progId = $progId;

        return $this;
    }

    public function getLoginAdmin(): ?string
    {
        return $this->LoginAdmin;
    }

    public function setLoginAdmin(?string $LoginAdmin): self
    {
        $this->LoginAdmin = $LoginAdmin;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    public function getCoodLart(): ?string
    {
        return $this->coodLart;
    }

    public function setCoodLart(?string $coodLart): self
    {
        $this->coodLart = $coodLart;

        return $this;
    }

    public function getCoordLong(): ?string
    {
        return $this->coordLong;
    }

    public function setCoordLong(string $coordLong): self
    {
        $this->coordLong = $coordLong;

        return $this;
    }

    public function getBudget(): ?float
    {
        return $this->budget;
    }

    public function setBudget(?float $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    public function getMainContact(): ?string
    {
        return $this->mainContact;
    }

    public function setMainContact(?string $mainContact): self
    {
        $this->mainContact = $mainContact;

        return $this;
    }

    public function getLocation(): ?Pays
    {
        return $this->location;
    }

    public function setLocation(?Pays $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getSecteur(): ?Secteur
    {
        return $this->secteur;
    }

    public function setSecteur(?Secteur $secteur): self
    {
        $this->secteur = $secteur;

        return $this;
    }

    public function getPartenaire(): ?Partenaire
    {
        return $this->partenaire;
    }

    public function setPartenaire(?Partenaire $partenaire): self
    {
        $this->partenaire = $partenaire;

        return $this;
    }

    public function getDonors(): ?string
    {
        return $this->donors;
    }

    public function setDonors(string $donors): self
    {
        $this->donors = $donors;

        return $this;
    }
}
