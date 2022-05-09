<?php

namespace App\Entity;

use App\Repository\ProjetRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use OpenApi\Annotations as OA;
use JMS\Serializer\Annotation as Serializer;



/**
 * @ORM\Entity(repositoryClass=ProjetRepository::class)
 * @OA\Schema()
 */
class Projet implements \JsonSerializable
{
    use Timestamp;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @OA\Property(description="The unique identifier of the user.")
     */

    private $id;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     * @OA\Property(type="string", maxLength=5)

     */
    private $CodeProjet;

    /**
     * @ORM\Column(type="string", length=51, nullable=true)
     */
    private $TitreProjet;

    /**
     * @ORM\Column(type="string", length=27, nullable=true)
     */
    private $DescProjet;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $StartDate;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $EndDate;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $EtatProj;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $DivOrgUnit;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $IsProgram;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ProgId;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $LoginAdmin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Photo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $CoordLat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $CoordLong;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $Budget;

    /**
     * @ORM\Column(type="string", length=17, nullable=true)
     */
    private $MainContact;


    /**
     * @ORM\OneToMany(targetEntity=Objectifs::class, mappedBy="ManyToOne")
     */
    private $objectifs;

    /**
     * @ORM\OneToMany(targetEntity=ObjectifsHist::class, mappedBy="projet")
     */
    private $objectifsHists;

    /**
     * @ORM\OneToMany(targetEntity=CartoProjet::class, mappedBy="projet")
     */
    private $cartoProjets;

    /**
     * @ORM\OneToMany(targetEntity=Files::class, mappedBy="projet")
     */
    private $files;

    /**
     * @ORM\OneToMany(targetEntity=EmbedPage::class, mappedBy="projet")
     */
    private $embedPages;

    /**
     * @ORM\OneToMany(targetEntity=ProjetPart::class, mappedBy="projet")
     */
    private $projetParts;

    /**
     * @ORM\OneToMany(targetEntity=ProjetSect::class, mappedBy="projet")
     */
    private $projetSects;

    /**
     * @ORM\OneToMany(targetEntity=ProjetCont::class, mappedBy="projet")
     */
    private $projetConts;

    /**
     * @ORM\OneToMany(targetEntity=Projethist::class, mappedBy="projet")
     */
    private $projethists;

    /**
     * @ORM\ManyToOne(targetEntity=Pays::class, inversedBy="projets")
     */
    private $location;

    /**
     * @ORM\OneToMany(targetEntity=Indicator::class, mappedBy="projet")
     */
    private $indicators;

    /**
     * @ORM\OneToMany(targetEntity=IndicatorHist::class, mappedBy="projet")
     */
    private $indicatorHists;


    public function __construct()
    {
        $this->objectifs = new ArrayCollection();
        $this->objectifsHists = new ArrayCollection();
        $this->cartoProjets = new ArrayCollection();
        $this->files = new ArrayCollection();
        $this->embedPages = new ArrayCollection();
        $this->projetParts = new ArrayCollection();
        $this->projetSects = new ArrayCollection();
        $this->projetConts = new ArrayCollection();
        $this->projethists = new ArrayCollection();
        $this->indicators = new ArrayCollection();
        $this->indicatorHists = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeProjet(): ?string
    {
        return $this->CodeProjet;
    }

    public function setCodeProjet(?string $CodeProjet): self
    {
        $this->CodeProjet = $CodeProjet;

        return $this;
    }

    public function getTitreProjet(): ?string
    {
        return $this->TitreProjet;
    }

    public function setTitreProjet(?string $TitreProjet): self
    {
        $this->TitreProjet = $TitreProjet;

        return $this;
    }

    public function getDescProjet(): ?string
    {
        return $this->DescProjet;
    }

    public function setDescProjet(?string $DescProjet): self
    {
        $this->DescProjet = $DescProjet;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param mixed $StartDate
     */
    public function setStartDate($StartDate): void
    {
        $this->StartDate = $StartDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param mixed $EndDate
     */
    public function setEndDate($EndDate): void
    {
        $this->EndDate = $EndDate;
    }





    public function getEtatProj(): ?string
    {
        return $this->EtatProj;
    }

    public function setEtatProj(?string $EtatProj): self
    {
        $this->EtatProj = $EtatProj;

        return $this;
    }

    public function getDivOrgUnit(): ?string
    {
        return $this->DivOrgUnit;
    }

    public function setDivOrgUnit(?string $DivOrgUnit): self
    {
        $this->DivOrgUnit = $DivOrgUnit;

        return $this;
    }

    public function getIsProgram(): ?bool
    {
        return $this->IsProgram;
    }

    public function setIsProgram(?bool $IsProgram): self
    {
        $this->IsProgram = $IsProgram;

        return $this;
    }

    public function getProgId(): ?int
    {
        return $this->ProgId;
    }

    public function setProgId(int $ProgId): self
    {
        $this->ProgId = $ProgId;

        return $this;
    }

    public function getLoginAdmin(): ?string
    {
        return $this->LoginAdmin;
    }

    public function setLoginAdmin(string $LoginAdmin): self
    {
        $this->LoginAdmin = $LoginAdmin;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->Photo;
    }

    public function setPhoto(string $Photo): self
    {
        $this->Photo = $Photo;

        return $this;
    }

    public function getCoordLat(): ?string
    {
        return $this->CoordLat;
    }

    public function setCoordLat(string $CoordLat): self
    {
        $this->CoordLat = $CoordLat;

        return $this;
    }

    public function getCoordLong(): ?string
    {
        return $this->CoordLong;
    }

    public function setCoordLong(string $CoordLong): self
    {
        $this->CoordLong = $CoordLong;

        return $this;
    }

    public function getBudget(): ?float
    {
        return $this->Budget;
    }

    public function setBudget(float $Budget): self
    {
        $this->Budget = $Budget;

        return $this;
    }

    public function getMainContact(): ?string
    {
        return $this->MainContact;
    }

    public function setMainContact(string $MainContact): self
    {
        $this->MainContact = $MainContact;

        return $this;
    }


    /**
     * @return Collection<int, Objectifs>
     */
    public function getObjectifs(): Collection
    {
        return $this->objectifs;
    }

    public function addObjectif(Objectifs $objectif): self
    {
        if (!$this->objectifs->contains($objectif)) {
            $this->objectifs[] = $objectif;
            $objectif->setManyToOne($this);
        }

        return $this;
    }

    public function removeObjectif(Objectifs $objectif): self
    {
        if ($this->objectifs->removeElement($objectif)) {
            // set the owning side to null (unless already changed)
            if ($objectif->getManyToOne() === $this) {
                $objectif->setManyToOne(null);
            }
        }

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
            $objectifsHist->setProjet($this);
        }

        return $this;
    }

    public function removeObjectifsHist(ObjectifsHist $objectifsHist): self
    {
        if ($this->objectifsHists->removeElement($objectifsHist)) {
            // set the owning side to null (unless already changed)
            if ($objectifsHist->getProjet() === $this) {
                $objectifsHist->setProjet(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, CartoProjet>
     */
    public function getCartoProjets(): Collection
    {
        return $this->cartoProjets;
    }

    public function addCartoProjet(CartoProjet $cartoProjet): self
    {
        if (!$this->cartoProjets->contains($cartoProjet)) {
            $this->cartoProjets[] = $cartoProjet;
            $cartoProjet->setProjet($this);
        }

        return $this;
    }

    public function removeCartoProjet(CartoProjet $cartoProjet): self
    {
        if ($this->cartoProjets->removeElement($cartoProjet)) {
            // set the owning side to null (unless already changed)
            if ($cartoProjet->getProjet() === $this) {
                $cartoProjet->setProjet(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Files>
     */
    public function getFiles(): Collection
    {
        return $this->files;
    }

    public function addFile(Files $file): self
    {
        if (!$this->files->contains($file)) {
            $this->files[] = $file;
            $file->setProjet($this);
        }

        return $this;
    }

    public function removeFile(Files $file): self
    {
        if ($this->files->removeElement($file)) {
            // set the owning side to null (unless already changed)
            if ($file->getProjet() === $this) {
                $file->setProjet(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, EmbedPage>
     */
    public function getEmbedPages(): Collection
    {
        return $this->embedPages;
    }

    public function addEmbedPage(EmbedPage $embedPage): self
    {
        if (!$this->embedPages->contains($embedPage)) {
            $this->embedPages[] = $embedPage;
            $embedPage->setProjet($this);
        }

        return $this;
    }

    public function removeEmbedPage(EmbedPage $embedPage): self
    {
        if ($this->embedPages->removeElement($embedPage)) {
            // set the owning side to null (unless already changed)
            if ($embedPage->getProjet() === $this) {
                $embedPage->setProjet(null);
            }
        }

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
            $projetPart->setProjet($this);
        }

        return $this;
    }

    public function removeProjetPart(ProjetPart $projetPart): self
    {
        if ($this->projetParts->removeElement($projetPart)) {
            // set the owning side to null (unless already changed)
            if ($projetPart->getProjet() === $this) {
                $projetPart->setProjet(null);
            }
        }

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
            $projetSect->setProjet($this);
        }

        return $this;
    }

    public function removeProjetSect(ProjetSect $projetSect): self
    {
        if ($this->projetSects->removeElement($projetSect)) {
            // set the owning side to null (unless already changed)
            if ($projetSect->getProjet() === $this) {
                $projetSect->setProjet(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, ProjetCont>
     */
    public function getProjetConts(): Collection
    {
        return $this->projetConts;
    }

    public function addProjetCont(ProjetCont $projetCont): self
    {
        if (!$this->projetConts->contains($projetCont)) {
            $this->projetConts[] = $projetCont;
            $projetCont->setProjet($this);
        }

        return $this;
    }

    public function removeProjetCont(ProjetCont $projetCont): self
    {
        if ($this->projetConts->removeElement($projetCont)) {
            // set the owning side to null (unless already changed)
            if ($projetCont->getProjet() === $this) {
                $projetCont->setProjet(null);
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
            $projethist->setProjet($this);
        }

        return $this;
    }

    public function removeProjethist(Projethist $projethist): self
    {
        if ($this->projethists->removeElement($projethist)) {
            // set the owning side to null (unless already changed)
            if ($projethist->getProjet() === $this) {
                $projethist->setProjet(null);
            }
        }

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

    /**
     * @return Collection<int, Indicator>
     */
    public function getIndicators(): Collection
    {
        return $this->indicators;
    }

    public function addIndicator(Indicator $indicator): self
    {
        if (!$this->indicators->contains($indicator)) {
            $this->indicators[] = $indicator;
            $indicator->setProjet($this);
        }

        return $this;
    }

    public function removeIndicator(Indicator $indicator): self
    {
        if ($this->indicators->removeElement($indicator)) {
            // set the owning side to null (unless already changed)
            if ($indicator->getProjet() === $this) {
                $indicator->setProjet(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, IndicatorHist>
     */
    public function getIndicatorHists(): Collection
    {
        return $this->indicatorHists;
    }

    public function addIndicatorHist(IndicatorHist $indicatorHist): self
    {
        if (!$this->indicatorHists->contains($indicatorHist)) {
            $this->indicatorHists[] = $indicatorHist;
            $indicatorHist->setProjet($this);
        }

        return $this;
    }

    public function removeIndicatorHist(IndicatorHist $indicatorHist): self
    {
        if ($this->indicatorHists->removeElement($indicatorHist)) {
            // set the owning side to null (unless already changed)
            if ($indicatorHist->getProjet() === $this) {
                $indicatorHist->setProjet(null);
            }
        }

        return $this;
    }


    /**
     * @return null[]|string[]
     */
    public function jsonSerialize()
    {
        return [
            "code" => $this->getCodeProjet(),
            "titre" => $this->getTitreProjet(),
            "desc" => $this->getDescProjet(),
            "startDate" => $this->getStartDate(),
            "endDate" => $this->getEndDate(),
            "budget" => $this->getBudget(),
            "location" => $this->getLocation(),
        ];
    }
}
