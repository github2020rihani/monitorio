<?php

namespace App\Entity;

use App\Repository\DataCollectMethodRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DataCollectMethodRepository::class)
 */
class DataCollectMethod
{
    use Timestamp;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=80, nullable=true)
     */
    private $libData;

    /**
     * @ORM\OneToMany(targetEntity=Indicator::class, mappedBy="dataCollect")
     */
    private $indicators;

    /**
     * @ORM\OneToMany(targetEntity=IndicatorHist::class, mappedBy="dataMethod")
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

    public function getLibData(): ?string
    {
        return $this->libData;
    }

    public function setLibData(?string $libData): self
    {
        $this->libData = $libData;

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
            $indicator->setDataCollect($this);
        }

        return $this;
    }

    public function removeIndicator(Indicator $indicator): self
    {
        if ($this->indicators->removeElement($indicator)) {
            // set the owning side to null (unless already changed)
            if ($indicator->getDataCollect() === $this) {
                $indicator->setDataCollect(null);
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
            $indicatorHist->setDataMethod($this);
        }

        return $this;
    }

    public function removeIndicatorHist(IndicatorHist $indicatorHist): self
    {
        if ($this->indicatorHists->removeElement($indicatorHist)) {
            // set the owning side to null (unless already changed)
            if ($indicatorHist->getDataMethod() === $this) {
                $indicatorHist->setDataMethod(null);
            }
        }

        return $this;
    }
}
