<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * History
 *
 * @ORM\Table(name="history", indexes={@ORM\Index(name="fk_history", columns={"id_freelancer"})})
 * @ORM\Entity
 */
class History
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_history", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idHistory;

    /**
     * @var float
     *
     * @ORM\Column(name="rating", type="float", precision=10, scale=0, nullable=false)
     */
    private $rating;

    /**
     * @var float
     *
     * @ORM\Column(name="budget", type="float", precision=10, scale=0, nullable=false)
     */
    private $budget;

    /**
     * @var string
     *
     * @ORM\Column(name="achivements", type="text", length=65535, nullable=false)
     */
    private $achivements;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_freelancer", referencedColumnName="id_user")
     * })
     */
    private $idFreelancer;

    public function getIdHistory(): ?int
    {
        return $this->idHistory;
    }

    public function getRating(): ?float
    {
        return $this->rating;
    }

    public function setRating(float $rating): self
    {
        $this->rating = $rating;

        return $this;
    }

    public function getBudget(): ?float
    {
        return $this->budget;
    }

    public function setBudget(float $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    public function getAchivements(): ?string
    {
        return $this->achivements;
    }

    public function setAchivements(string $achivements): self
    {
        $this->achivements = $achivements;

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
