<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Achievement
 *
 * @ORM\Table(name="achievement")
 * @ORM\Entity
 */
class Achievement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_achivement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAchivement;

    /**
     * @var int
     *
     * @ORM\Column(name="id_freelancer", type="integer", nullable=false)
     */
    private $idFreelancer;

    /**
     * @var int
     *
     * @ORM\Column(name="id_offer", type="integer", nullable=false)
     */
    private $idOffer;

    /**
     * @var float
     *
     * @ORM\Column(name="rate", type="float", precision=10, scale=0, nullable=false)
     */
    private $rate;

    public function getIdAchivement(): ?int
    {
        return $this->idAchivement;
    }

    public function getIdFreelancer(): ?int
    {
        return $this->idFreelancer;
    }

    public function setIdFreelancer(int $idFreelancer): self
    {
        $this->idFreelancer = $idFreelancer;

        return $this;
    }

    public function getIdOffer(): ?int
    {
        return $this->idOffer;
    }

    public function setIdOffer(int $idOffer): self
    {
        $this->idOffer = $idOffer;

        return $this;
    }

    public function getRate(): ?float
    {
        return $this->rate;
    }

    public function setRate(float $rate): self
    {
        $this->rate = $rate;

        return $this;
    }


}
