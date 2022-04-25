<?php

namespace App\Entity;

use App\Repository\FilesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FilesRepository::class)
 */
class Files
{
    use Timestamp;
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=54, nullable=true)
     */
    private $NameFile;

    /**
     * @ORM\Column(type="string", length=68, nullable=true)
     */
    private $urlFile;

    /**
     * @ORM\Column(type="integer" , nullable=true)
     */
    private $sizeFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titreFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $linkOrFile;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Evalid;

    /**
     * @ORM\ManyToOne(targetEntity=Projet::class, inversedBy="files")
     */
    private $projet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameFile(): ?string
    {
        return $this->NameFile;
    }

    public function setNameFile(string $NameFile): self
    {
        $this->NameFile = $NameFile;

        return $this;
    }

    public function getUrlFile(): ?string
    {
        return $this->urlFile;
    }

    public function setUrlFile(string $urlFile): self
    {
        $this->urlFile = $urlFile;

        return $this;
    }

    public function getSizeFile(): ?int
    {
        return $this->sizeFile;
    }

    public function setSizeFile(int $sizeFile): self
    {
        $this->sizeFile = $sizeFile;

        return $this;
    }

    public function getTitreFile(): ?string
    {
        return $this->titreFile;
    }

    public function setTitreFile(string $titreFile): self
    {
        $this->titreFile = $titreFile;

        return $this;
    }

    public function getLinkOrFile(): ?string
    {
        return $this->linkOrFile;
    }

    public function setLinkOrFile(string $linkOrFile): self
    {
        $this->linkOrFile = $linkOrFile;

        return $this;
    }

    public function getEvalid(): ?bool
    {
        return $this->Evalid;
    }

    public function setEvalid(bool $Evalid): self
    {
        $this->Evalid = $Evalid;

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
