<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Grouppost
 *
 * @ORM\Table(name="grouppost")
 * @ORM\Entity
 */
class Grouppost
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_grouppost", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGrouppost;

    /**
     * @var string
     *
     * @ORM\Column(name="context", type="text", length=65535, nullable=false)
     */
    private $context;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $date = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="user", type="integer", nullable=false)
     */
    private $user;

    /**
     * @var int
     *
     * @ORM\Column(name="id_community", type="integer", nullable=false)
     */
    private $idCommunity;

    public function getIdGrouppost(): ?int
    {
        return $this->idGrouppost;
    }

    public function getContext(): ?string
    {
        return $this->context;
    }

    public function setContext(string $context): self
    {
        $this->context = $context;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getUser(): ?int
    {
        return $this->user;
    }

    public function setUser(int $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getIdCommunity(): ?int
    {
        return $this->idCommunity;
    }

    public function setIdCommunity(int $idCommunity): self
    {
        $this->idCommunity = $idCommunity;

        return $this;
    }


}
