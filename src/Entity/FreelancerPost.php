<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FreelancerPost
 *
 * @ORM\Table(name="freelancer_post", uniqueConstraints={@ORM\UniqueConstraint(name="freelancer-post", columns={"freelancer_id", "publication_id"}), @ORM\UniqueConstraint(name="workspace-post-freelancer", columns={"freelancer_id", "publication_id", "workspace_id"})})
 * @ORM\Entity
 */
class FreelancerPost
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
     * @ORM\Column(name="freelancer_id", type="integer", nullable=false)
     */
    private $freelancerId;

    /**
     * @var int
     *
     * @ORM\Column(name="publication_id", type="integer", nullable=false)
     */
    private $publicationId;

    /**
     * @var int
     *
     * @ORM\Column(name="workspace_id", type="integer", nullable=false)
     */
    private $workspaceId;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPublicationId(): ?int
    {
        return $this->publicationId;
    }

    public function setPublicationId(int $publicationId): self
    {
        $this->publicationId = $publicationId;

        return $this;
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


}
