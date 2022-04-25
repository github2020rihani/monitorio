<?php

namespace App\Entity;

use App\Repository\CartoOngRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CartoOngRepository::class)
 */
class CartoOng
{
    use Timestamp;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeCarto;

    /**
     * @ORM\OneToMany(targetEntity=Ong::class, mappedBy="typeOng")
     */
    private $ongs;

    public function __construct()
    {
        $this->ongs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeCarto(): ?string
    {
        return $this->typeCarto;
    }

    public function setTypeCarto(string $typeCarto): self
    {
        $this->typeCarto = $typeCarto;

        return $this;
    }

    /**
     * @return Collection<int, Ong>
     */
    public function getOngs(): Collection
    {
        return $this->ongs;
    }

    public function addOng(Ong $ong): self
    {
        if (!$this->ongs->contains($ong)) {
            $this->ongs[] = $ong;
            $ong->setTypeOng($this);
        }

        return $this;
    }

    public function removeOng(Ong $ong): self
    {
        if ($this->ongs->removeElement($ong)) {
            // set the owning side to null (unless already changed)
            if ($ong->getTypeOng() === $this) {
                $ong->setTypeOng(null);
            }
        }

        return $this;
    }
}
