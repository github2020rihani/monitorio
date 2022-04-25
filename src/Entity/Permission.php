<?php

namespace App\Entity;

use App\Repository\PermissionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * @ORM\Entity(repositoryClass=PermissionRepository::class)
 */
class Permission  implements \JsonSerializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CodePerm;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     */
    private $DescPerm;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $SupAdminPerm;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ParDefaut;

        /**
     * @var \DateTime $DateCreat
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $DateCreat;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $UserCreat;

   /**
     * @var \DateTime $DateModif
     *
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */

    private $DateModif;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $UserModif;

    /**
     * @ORM\ManyToMany(targetEntity=Profil::class, inversedBy="permissions")
     */
    private $Profiles;

    public function __construct()
    {
        $this->Profiles = new ArrayCollection();
    }

   
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodePerm(): ?string
    {
        return $this->CodePerm;
    }

    public function setCodePerm(string $CodePerm): self
    {
        $this->CodePerm = $CodePerm;

        return $this;
    }

    public function getDescPerm(): ?string
    {
        return $this->DescPerm;
    }

    public function setDescPerm(?string $DescPerm): self
    {
        $this->DescPerm = $DescPerm;

        return $this;
    }

    public function getSupAdminPerm(): ?bool
    {
        return $this->SupAdminPerm;
    }

    public function setSupAdminPerm(bool $SupAdminPerm): self
    {
        $this->SupAdminPerm = $SupAdminPerm;

        return $this;
    }

    public function getParDefaut(): ?bool
    {
        return $this->ParDefaut;
    }

    public function setParDefaut(?bool $ParDefaut): self
    {
        $this->ParDefaut = $ParDefaut;

        return $this;
    }

    public function getDateCreat(): ?\DateTimeInterface
    {
        return $this->DateCreat;
    }

    public function setDateCreat(?\DateTimeInterface $DateCreat): self
    {
        $this->DateCreat = $DateCreat;

        return $this;
    }

    public function getUserCreat(): ?string
    {
        return $this->UserCreat;
    }

    public function setUserCreat(?string $UserCreat): self
    {
        $this->UserCreat = $UserCreat;

        return $this;
    }

    public function getDateModif(): ?\DateTimeInterface
    {
        return $this->DateModif;
    }

    public function setDateModif(?\DateTimeInterface $DateModif): self
    {
        $this->DateModif = $DateModif;

        return $this;
    }

    public function getUserModif(): ?string
    {
        return $this->UserModif;
    }

    public function setUserModif(?string $UserModif): self
    {
        $this->UserModif = $UserModif;

        return $this;
    }

    /**
     * @return Collection<int, Profil>
     */
    public function getProfiles(): Collection
    {
        return $this->Profiles;
    }

    public function addProfile(Profil $profile): self
    {
        if (!$this->Profiles->contains($profile)) {
            $this->Profiles[] = $profile;
        }

        return $this;
    }

    public function removeProfile(Profil $profile): self
    {
        $this->Profiles->removeElement($profile);

        return $this;
    }



    /**
   * @throws \Exception
   * @ORM\PrePersist()
   */
  public function beforeSave(){

    $this->DateCreat = new \DateTime('now', new \DateTimeZone('Africa/Tunis'));
    $this->DateModif = new \DateTime('now', new \DateTimeZone('Africa/Tunis'));

   }
 
   /**
    * Specify data which should be serialized to JSON
    * @link https://php.net/manual/en/jsonserializable.jsonserialize.php
    * @return mixed data which can be serialized by <b>json_encode</b>,
    * which is a value of any type other than a resource.
    * @since 5.4.0
    */
   public function jsonSerialize()
   {
    return [
     "CodePerm" => $this->getCodePerm(),
     "DescPerm" => $this->getDescPerm(),
    ];
   }


}
