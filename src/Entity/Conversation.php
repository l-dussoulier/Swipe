<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conversation
 *
 * @ORM\Table(name="Conversation")
 * @ORM\Entity
 */
class Conversation
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="Personne1_ID", type="integer", nullable=false)
     */
    private $personne1Id;

    /**
     * @var int
     *
     * @ORM\Column(name="Persone2_ID", type="integer", nullable=false)
     */
    private $persone2Id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPersonne1Id(): ?int
    {
        return $this->personne1Id;
    }

    public function setPersonne1Id(int $personne1Id): self
    {
        $this->personne1Id = $personne1Id;

        return $this;
    }

    public function getPersone2Id(): ?int
    {
        return $this->persone2Id;
    }

    public function setPersone2Id(int $persone2Id): self
    {
        $this->persone2Id = $persone2Id;

        return $this;
    }


}
