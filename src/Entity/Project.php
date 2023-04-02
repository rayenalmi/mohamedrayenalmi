<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table(name="project", indexes={@ORM\Index(name="id_portfolio", columns={"id_freelancer"})})
 * @ORM\Entity
 */
class Project
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_project", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProject;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", length=65535, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var \Portfolio
     *
     * @ORM\ManyToOne(targetEntity="Portfolio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_freelancer", referencedColumnName="id_portfolio")
     * })
     */
    private $idFreelancer;

    public function getIdProject(): ?int
    {
        return $this->idProject;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

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

    public function getIdFreelancer(): ?Portfolio
    {
        return $this->idFreelancer;
    }

    public function setIdFreelancer(?Portfolio $idFreelancer): self
    {
        $this->idFreelancer = $idFreelancer;

        return $this;
    }


}
