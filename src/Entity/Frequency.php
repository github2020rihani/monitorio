<?php

namespace App\Entity;

use App\Repository\FrequencyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FrequencyRepository::class)
 */
class Frequency
{
    use Timestamp;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=90, nullable=true)
     */
    private $libFreq;

    /**
     * @ORM\OneToMany(targetEntity=Indicator::class, mappedBy="frequency")
     */
    private $indicators;

    /**
     * @ORM\OneToMany(targetEntity=IndicatorHist::class, mappedBy="freq")
     */
    private $indicatorHists;

    public function __construct()
    {
        $this->indicators = new ArrayCollection();
        $this->indicatorHists = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibFreq(): ?string
    {
        return $this->libFreq;
    }

    public function setLibFreq(?string $libFreq): self
    {
        $this->libFreq = $libFreq;

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
            $indicator->setFrequency($this);
        }

        return $this;
    }

    public function removeIndicator(Indicator $indicator): self
    {
        if ($this->indicators->removeElement($indicator)) {
            // set the owning side to null (unless already changed)
            if ($indicator->getFrequency() === $this) {
                $indicator->setFrequency(null);
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
            $indicatorHist->setFreq($this);
        }

        return $this;
    }

    public function removeIndicatorHist(IndicatorHist $indicatorHist): self
    {
        if ($this->indicatorHists->removeElement($indicatorHist)) {
            // set the owning side to null (unless already changed)
            if ($indicatorHist->getFreq() === $this) {
                $indicatorHist->setFreq(null);
            }
        }

        return $this;
    }
}
