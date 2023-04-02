<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkspacePost
 *
 * @ORM\Table(name="workspace_post", uniqueConstraints={@ORM\UniqueConstraint(name="workspace-post", columns={"workspace_id", "publication_id"})})
 * @ORM\Entity
 */
class WorkspacePost
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
     * @ORM\Column(name="publication_id", type="integer", nullable=false)
     */
    private $publicationId;

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

    public function getPublicationId(): ?int
    {
        return $this->publicationId;
    }

    public function setPublicationId(int $publicationId): self
    {
        $this->publicationId = $publicationId;

        return $this;
    }


}
