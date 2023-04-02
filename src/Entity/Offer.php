<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Offer
 *
 * @ORM\Table(name="offer", indexes={@ORM\Index(name="id_recruter", columns={"id_recruter"})})
 * @ORM\Entity
 */
class Offer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_offer", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOffer;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="duration", type="string", length=30, nullable=false)
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=250, nullable=false)
     */
    private $keywords;

    /**
     * @var float
     *
     * @ORM\Column(name="salary", type="float", precision=10, scale=0, nullable=false)
     */
    private $salary;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_recruter", referencedColumnName="id_user")
     * })
     */
    private $idRecruter;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="User", inversedBy="idOffer")
     * @ORM\JoinTable(name="likes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_offer", referencedColumnName="id_offer")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     *   }
     * )
     */
    private $idUser = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idUser = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getIdOffer(): ?int
    {
        return $this->idOffer;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(string $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getKeywords(): ?string
    {
        return $this->keywords;
    }

    public function setKeywords(string $keywords): self
    {
        $this->keywords = $keywords;

        return $this;
    }

    public function getSalary(): ?float
    {
        return $this->salary;
    }

    public function setSalary(float $salary): self
    {
        $this->salary = $salary;

        return $this;
    }

    public function getIdRecruter(): ?User
    {
        return $this->idRecruter;
    }

    public function setIdRecruter(?User $idRecruter): self
    {
        $this->idRecruter = $idRecruter;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getIdUser(): Collection
    {
        return $this->idUser;
    }

    public function addIdUser(User $idUser): self
    {
        if (!$this->idUser->contains($idUser)) {
            $this->idUser->add($idUser);
        }

        return $this;
    }

    public function removeIdUser(User $idUser): self
    {
        $this->idUser->removeElement($idUser);

        return $this;
    }

}
