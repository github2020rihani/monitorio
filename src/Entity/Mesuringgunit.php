<?php

namespace App\Entity;

use App\Repository\MesuringgunitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MesuringgunitRepository::class)
 */
class Mesuringgunit
{
    use Timestamp;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libMesure;

    /**
     * @ORM\OneToMany(targetEntity=Indicator::class, mappedBy="Mesure")
     */
    private $indicators;

    /**
     * @ORM\OneToMany(targetEntity=IndicatorHist::class, mappedBy="Mesure")
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

    public function getLibMesure(): ?string
    {
        return $this->libMesure;
    }

    public function setLibMesure(?string $libMesure): self
    {
        $this->libMesure = $libMesure;

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
            $indicator->setMesure($this);
        }

        return $this;
    }

    public function removeIndicator(Indicator $indicator): self
    {
        if ($this->indicators->removeElement($indicator)) {
            // set the owning side to null (unless already changed)
            if ($indicator->getMesure() === $this) {
                $indicator->setMesure(null);
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
            $indicatorHist->setMesure($this);
        }

        return $this;
    }

    public function removeIndicatorHist(IndicatorHist $indicatorHist): self
    {
        if ($this->indicatorHists->removeElement($indicatorHist)) {
            // set the owning side to null (unless already changed)
            if ($indicatorHist->getMesure() === $this) {
                $indicatorHist->setMesure(null);
            }
        }

        return $this;
    }
}
