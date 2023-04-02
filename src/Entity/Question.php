<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question", indexes={@ORM\Index(name="fk_test", columns={"id_test"})})
 * @ORM\Entity
 */
class Question
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_question", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQuestion;

    /**
     * @var string
     *
     * @ORM\Column(name="quest", type="text", length=65535, nullable=false)
     */
    private $quest;

    /**
     * @var string
     *
     * @ORM\Column(name="choice1", type="text", length=65535, nullable=false)
     */
    private $choice1;

    /**
     * @var string
     *
     * @ORM\Column(name="choice2", type="text", length=65535, nullable=false)
     */
    private $choice2;

    /**
     * @var string
     *
     * @ORM\Column(name="choice3", type="text", length=65535, nullable=false)
     */
    private $choice3;

    /**
     * @var string
     *
     * @ORM\Column(name="response", type="text", length=65535, nullable=false)
     */
    private $response;

    /**
     * @var int
     *
     * @ORM\Column(name="id_test", type="integer", nullable=false)
     */
    private $idTest;

    public function getIdQuestion(): ?int
    {
        return $this->idQuestion;
    }

    public function getQuest(): ?string
    {
        return $this->quest;
    }

    public function setQuest(string $quest): self
    {
        $this->quest = $quest;

        return $this;
    }

    public function getChoice1(): ?string
    {
        return $this->choice1;
    }

    public function setChoice1(string $choice1): self
    {
        $this->choice1 = $choice1;

        return $this;
    }

    public function getChoice2(): ?string
    {
        return $this->choice2;
    }

    public function setChoice2(string $choice2): self
    {
        $this->choice2 = $choice2;

        return $this;
    }

    public function getChoice3(): ?string
    {
        return $this->choice3;
    }

    public function setChoice3(string $choice3): self
    {
        $this->choice3 = $choice3;

        return $this;
    }

    public function getResponse(): ?string
    {
        return $this->response;
    }

    public function setResponse(string $response): self
    {
        $this->response = $response;

        return $this;
    }

    public function getIdTest(): ?int
    {
        return $this->idTest;
    }

    public function setIdTest(int $idTest): self
    {
        $this->idTest = $idTest;

        return $this;
    }


}
