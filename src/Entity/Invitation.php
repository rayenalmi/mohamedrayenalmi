<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Invitation
 *
 * @ORM\Table(name="invitation")
 * @ORM\Entity
 */
class Invitation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idGroup", type="integer", nullable=false)
     */
    private $idgroup;

    /**
     * @var int
     *
     * @ORM\Column(name="idUser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="text", length=65535, nullable=false, options={"default"="Pending"})
     */
    private $status = 'Pending';

    /**
     * @var int
     *
     * @ORM\Column(name="idInvitation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinvitation;

    public function getIdgroup(): ?int
    {
        return $this->idgroup;
    }

    public function setIdgroup(int $idgroup): self
    {
        $this->idgroup = $idgroup;

        return $this;
    }

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(int $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getIdinvitation(): ?int
    {
        return $this->idinvitation;
    }


}
