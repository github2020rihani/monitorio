<?php

namespace App\Entity;

use App\Repository\DataSourceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DataSourceRepository::class)
 */
class DataSource
{
    use Timestamp;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $libDataSource;

    /**
     * @ORM\OneToMany(targetEntity=Indicator::class, mappedBy="dataSource")
     */
    private $indicators;

    /**
     * @ORM\OneToMany(targetEntity=IndicatorHist::class, mappedBy="dataSource")
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

    public function getLibDataSource(): ?string
    {
        return $this->libDataSource;
    }

    public function setLibDataSource(string $libDataSource): self
    {
        $this->libDataSource = $libDataSource;

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
            $indicator->setDataSource($this);
        }

        return $this;
    }

    public function removeIndicator(Indicator $indicator): self
    {
        if ($this->indicators->removeElement($indicator)) {
            // set the owning side to null (unless already changed)
            if ($indicator->getDataSource() === $this) {
                $indicator->setDataSource(null);
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
            $indicatorHist->setDataSource($this);
        }

        return $this;
    }

    public function removeIndicatorHist(IndicatorHist $indicatorHist): self
    {
        if ($this->indicatorHists->removeElement($indicatorHist)) {
            // set the owning side to null (unless already changed)
            if ($indicatorHist->getDataSource() === $this) {
                $indicatorHist->setDataSource(null);
            }
        }

        return $this;
    }
}
