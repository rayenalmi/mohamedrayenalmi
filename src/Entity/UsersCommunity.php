<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsersCommunity
 *
 * @ORM\Table(name="users_community")
 * @ORM\Entity
 */
class UsersCommunity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_community", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCommunity;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idUser;

    public function getIdCommunity(): ?int
    {
        return $this->idCommunity;
    }

    public function getIdUser(): ?int
    {
        return $this->idUser;
    }


}
