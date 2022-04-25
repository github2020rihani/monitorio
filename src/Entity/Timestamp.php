<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


trait Timestamp
{


    /**
     * @ORM\Column(type="datetime", length=255, nullable= true)
     */
    private $DateCreat;

    /**
     * @ORM\Column(type="string", length=255, nullable= true)
     */
    private $UserCreat;

    /**
     * @ORM\Column(type="datetime", length=255, nullable= true)
     */
    private $DateModif;

    /**
     * @ORM\Column(type="string", length=255, nullable= true)
     */
    private $UserMotif;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getDateCreat()
    {
        return $this->DateCreat;
    }

    /**
     * @param mixed $DateCreat
     */
    public function setDateCreat($DateCreat): void
    {
        $this->DateCreat = $DateCreat;
    }

    /**
     * @return mixed
     */
    public function getDateModif()
    {
        return $this->DateModif;
    }

    /**
     * @param mixed $DateModif
     */
    public function setDateModif($DateModif): void
    {
        $this->DateModif = $DateModif;
    }



    public function getUserCreat(): ?string
    {
        return $this->UserCreat;
    }

    public function setUserCreat(string $UserCreat): self
    {
        $this->UserCreat = $UserCreat;

        return $this;
    }



    public function getUserMotif(): ?string
    {
        return $this->UserMotif;
    }

    public function setUserMotif(string $UserMotif): self
    {
        $this->UserMotif = $UserMotif;

        return $this;
    }
}
