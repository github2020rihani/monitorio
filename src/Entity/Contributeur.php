<?php

namespace App\Entity;

use App\Repository\ContributeurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContributeurRepository::class)
 */
class Contributeur
{
    use Timestamp;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $libCont;

    /**
     * @ORM\OneToMany(targetEntity=ProjetCont::class, mappedBy="contributeur")
     */
    private $projetConts;

    public function __construct()
    {
        $this->projetConts = new ArrayCollection();
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibCont(): ?string
    {
        return $this->libCont;
    }

    public function setLibCont(string $libCont): self
    {
        $this->libCont = $libCont;

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
            $projetCont->setContributeur($this);
        }

        return $this;
    }

    public function removeProjetCont(ProjetCont $projetCont): self
    {
        if ($this->projetConts->removeElement($projetCont)) {
            // set the owning side to null (unless already changed)
            if ($projetCont->getContributeur() === $this) {
                $projetCont->setContributeur(null);
            }
        }

        return $this;
    }




}
