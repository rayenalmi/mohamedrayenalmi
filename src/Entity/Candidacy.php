<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Candidacy
 *
 * @ORM\Table(name="candidacy", indexes={@ORM\Index(name="id_offer", columns={"id_offer"}), @ORM\Index(name="id_freelancer", columns={"id_freelancer"})})
 * @ORM\Entity
 */
class Candidacy
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_candidacy", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCandidacy;

    /**
     * @var string
     *
     * @ORM\Column(name="object", type="string", length=300, nullable=false)
     */
    private $object;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text", length=65535, nullable=false)
     */
    private $message;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="accepted", type="boolean", nullable=true)
     */
    private $accepted;

    /**
     * @var \Offer
     *
     * @ORM\ManyToOne(targetEntity="Offer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_offer", referencedColumnName="id_offer")
     * })
     */
    private $idOffer;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_freelancer", referencedColumnName="id_user")
     * })
     */
    private $idFreelancer;

    public function getIdCandidacy(): ?int
    {
        return $this->idCandidacy;
    }

    public function getObject(): ?string
    {
        return $this->object;
    }

    public function setObject(string $object): self
    {
        $this->object = $object;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function isAccepted(): ?bool
    {
        return $this->accepted;
    }

    public function setAccepted(?bool $accepted): self
    {
        $this->accepted = $accepted;

        return $this;
    }

    public function getIdOffer(): ?Offer
    {
        return $this->idOffer;
    }

    public function setIdOffer(?Offer $idOffer): self
    {
        $this->idOffer = $idOffer;

        return $this;
    }

    public function getIdFreelancer(): ?User
    {
        return $this->idFreelancer;
    }

    public function setIdFreelancer(?User $idFreelancer): self
    {
        $this->idFreelancer = $idFreelancer;

        return $this;
    }


}
