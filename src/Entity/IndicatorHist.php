<?php

namespace App\Entity;

use App\Repository\IndicatorHistRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IndicatorHistRepository::class)
 */
class IndicatorHist
{
    use Timestamp;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Indicator::class, inversedBy="indicatorHists")
     */
    private $indicator;

    /**
     * @ORM\ManyToOne(targetEntity=Projet::class, inversedBy="indicatorHists")
     */
    private $projet;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $risks;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $goals;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $CustomForm;

    /**
     * @ORM\ManyToOne(targetEntity=DataSource::class, inversedBy="indicatorHists")
     */
    private $dataSource;

    /**
     * @ORM\ManyToOne(targetEntity=DataCollectMethod::class, inversedBy="indicatorHists")
     */
    private $dataMethod;

    /**
     * @ORM\ManyToOne(targetEntity=Frequency::class, inversedBy="indicatorHists")
     */
    private $freq;

    /**
     * @ORM\ManyToOne(targetEntity=Mesuringgunit::class, inversedBy="indicatorHists")
     */
    private $Mesure;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIndicator(): ?Indicator
    {
        return $this->indicator;
    }

    public function setIndicator(?Indicator $indicator): self
    {
        $this->indicator = $indicator;

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

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;

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
        return $this->CustomForm;
    }

    public function setCustomForm(?string $CustomForm): self
    {
        $this->CustomForm = $CustomForm;

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

    public function getDataMethod(): ?DataCollectMethod
    {
        return $this->dataMethod;
    }

    public function setDataMethod(?DataCollectMethod $dataMethod): self
    {
        $this->dataMethod = $dataMethod;

        return $this;
    }

    public function getFreq(): ?Frequency
    {
        return $this->freq;
    }

    public function setFreq(?Frequency $freq): self
    {
        $this->freq = $freq;

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
}
