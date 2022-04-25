<?php

namespace App\Entity;

use App\Repository\IndicatorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IndicatorRepository::class)
 */
class Indicator
{
    use Timestamp;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Projet::class, inversedBy="indicators")
     */
    private $projet;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $descIndc;

    /**
     * @ORM\Column(type="string", length=6)
     */
    private $typeInd;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $baseLineValue;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $baseLineDate;

    /**
     * @ORM\Column(type="string", length=231, nullable=true)
     */
    private $risks;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $goalsld;

    /**
     * @ORM\ManyToOne(targetEntity=DataSource::class, inversedBy="indicators")
     */
    private $dataSource;

    /**
     * @ORM\ManyToOne(targetEntity=DataCollectMethod::class, inversedBy="indicators")
     */
    private $dataCollect;

    /**
     * @ORM\ManyToOne(targetEntity=Frequency::class, inversedBy="indicators")
     */
    private $frequency;

    /**
     * @ORM\ManyToOne(targetEntity=Mesuringgunit::class, inversedBy="indicators")
     */
    private $Mesure;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $goals;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $customForm;

    /**
     * @ORM\OneToMany(targetEntity=IndicatorHist::class, mappedBy="indicator")
     */
    private $indicatorHists;

    public function __construct()
    {
        $this->indicatorHists = new ArrayCollection();
    }

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

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescIndc(): ?string
    {
        return $this->descIndc;
    }

    public function setDescIndc(string $descIndc): self
    {
        $this->descIndc = $descIndc;

        return $this;
    }

    public function getTypeInd(): ?string
    {
        return $this->typeInd;
    }

    public function setTypeInd(string $typeInd): self
    {
        $this->typeInd = $typeInd;

        return $this;
    }

    public function getBaseLineValue(): ?string
    {
        return $this->baseLineValue;
    }

    public function setBaseLineValue(?string $baseLineValue): self
    {
        $this->baseLineValue = $baseLineValue;

        return $this;
    }

    public function getBaseLineDate(): ?string
    {
        return $this->baseLineDate;
    }

    public function setBaseLineDate(?string $baseLineDate): self
    {
        $this->baseLineDate = $baseLineDate;

        return $this;
    }

    public function getRisks(): ?string
    {
        return $this->risks;
    }

    public function setRisks(?string $risks): self
    {
        $this->risks = $risks;

        return $this;
    }

    public function getGoalsld(): ?int
    {
        return $this->goalsld;
    }

    public function setGoalsld(?int $goalsld): self
    {
        $this->goalsld = $goalsld;

        return $this;
    }

    public function getDataSource(): ?DataSource
    {
        return $this->dataSource;
    }

    public function setDataSource(?DataSource $dataSource): self
    {
        $this->dataSource = $dataSource;

        return $this;
    }

    public function getDataCollect(): ?DataCollectMethod
    {
        return $this->dataCollect;
    }

    public function setDataCollect(?DataCollectMethod $dataCollect): self
    {
        $this->dataCollect = $dataCollect;

        return $this;
    }

    public function getFrequency(): ?Frequency
    {
        return $this->frequency;
    }

    public function setFrequency(?Frequency $frequency): self
    {
        $this->frequency = $frequency;

        return $this;
    }

    public function getMesure(): ?Mesuringgunit
    {
        return $this->Mesure;
    }

    public function setMesure(?Mesuringgunit $Mesure): self
    {
        $this->Mesure = $Mesure;

        return $this;
    }

    public function getGoals(): ?string
    {
        return $this->goals;
    }

    public function setGoals(?string $goals): self
    {
        $this->goals = $goals;

        return $this;
    }

    public function getCustomForm(): ?string
    {
        return $this->customForm;
    }

    public function setCustomForm(?string $customForm): self
    {
        $this->customForm = $customForm;

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
            $indicatorHist->setIndicator($this);
        }

        return $this;
    }

    public function removeIndicatorHist(IndicatorHist $indicatorHist): self
    {
        if ($this->indicatorHists->removeElement($indicatorHist)) {
            // set the owning side to null (unless already changed)
            if ($indicatorHist->getIndicator() === $this) {
                $indicatorHist->setIndicator(null);
            }
        }

        return $this;
    }
}
