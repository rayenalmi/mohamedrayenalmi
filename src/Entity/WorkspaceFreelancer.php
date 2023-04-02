<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkspaceFreelancer
 *
 * @ORM\Table(name="workspace_freelancer", uniqueConstraints={@ORM\UniqueConstraint(name="workspace-freelancer", columns={"workspace_id", "freelancer_id"})})
 * @ORM\Entity
 */
class WorkspaceFreelancer
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="workspace_id", type="integer", nullable=false)
     */
    private $workspaceId;

    /**
     * @var int
     *
     * @ORM\Column(name="freelancer_id", type="integer", nullable=false)
     */
    private $freelancerId;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWorkspaceId(): ?int
    {
        return $this->workspaceId;
    }

    public function setWorkspaceId(int $workspaceId): self
    {
        $this->workspaceId = $workspaceId;

        return $this;
    }

    public function getFreelancerId(): ?int
    {
        return $this->freelancerId;
    }

    public function setFreelancerId(int $freelancerId): self
    {
        $this->freelancerId = $freelancerId;

        return $this;
    }


}
