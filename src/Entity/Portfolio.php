<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Portfolio
 *
 * @ORM\Table(name="portfolio", indexes={@ORM\Index(name="fk_idPortfolio", columns={"id_freelancer"})})
 * @ORM\Entity
 */
class Portfolio
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_portfolio", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPortfolio;

    /**
     * @var string
     *
     * @ORM\Column(name="intro", type="text", length=65535, nullable=false)
     */
    private $intro;

    /**
     * @var string
     *
     * @ORM\Column(name="about", type="text", length=65535, nullable=false)
     */
    private $about;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_freelancer", referencedColumnName="id_user")
     * })
     */
    private $idFreelancer;

    public function getIdPortfolio(): ?int
    {
        return $this->idPortfolio;
    }

    public function getIntro(): ?string
    {
        return $this->intro;
    }

    public function setIntro(string $intro): self
    {
        $this->intro = $intro;

        return $this;
    }

    public function getAbout(): ?string
    {
        return $this->about;
    }

    public function setAbout(string $about): self
    {
        $this->about = $about;

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
