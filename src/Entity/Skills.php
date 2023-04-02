<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Skills
 *
 * @ORM\Table(name="skills", indexes={@ORM\Index(name="fk_skills_freelancer", columns={"id_freelancer"})})
 * @ORM\Entity
 */
class Skills
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_skills", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSkills;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="level", type="string", length=0, nullable=true)
     */
    private $level;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_freelancer", referencedColumnName="id_user")
     * })
     */
    private $idFreelancer;

    public function getIdSkills(): ?int
    {
        return $this->idSkills;
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

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(?string $level): self
    {
        $this->level = $level;

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
