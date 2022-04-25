<?php

namespace App\Entity;

use App\Repository\EmbedPageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmbedPageRepository::class)
 */
class EmbedPage
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
    private $labPage;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $urlPage;

    /**
     * @ORM\ManyToOne(targetEntity=Projet::class, inversedBy="embedPages")
     */
    private $projet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabPage(): ?string
    {
        return $this->labPage;
    }

    public function setLabPage(string $labPage): self
    {
        $this->labPage = $labPage;

        return $this;
    }

    public function getUrlPage(): ?string
    {
        return $this->urlPage;
    }

    public function setUrlPage(?string $urlPage): self
    {
        $this->urlPage = $urlPage;

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
}
