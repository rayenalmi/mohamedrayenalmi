<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formation
 *
 * @ORM\Table(name="formation")
 * @ORM\Entity
 */
class Formation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_formation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFormation;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="nbH", type="integer", nullable=false)
     */
    private $nbh;

    /**
     * @var int
     *
     * @ORM\Column(name="nbL", type="integer", nullable=false)
     */
    private $nbl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="path", type="string", length=250, nullable=true)
     */
    private $path;

    public function getIdFormation(): ?int
    {
        return $this->idFormation;
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

    public function getNbh(): ?int
    {
        return $this->nbh;
    }

    public function setNbh(int $nbh): self
    {
        $this->nbh = $nbh;

        return $this;
    }

    public function getNbl(): ?int
    {
        return $this->nbl;
    }

    public function setNbl(int $nbl): self
    {
        $this->nbl = $nbl;

        return $this;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(?string $path): self
    {
        $this->path = $path;

        return $this;
    }


}
