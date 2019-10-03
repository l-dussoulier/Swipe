<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="Message")
 * @ORM\Entity
 */
class Message
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
     * @ORM\Column(name="ToUserID", type="integer", nullable=false)
     */
    private $touserid;

    /**
     * @var int
     *
     * @ORM\Column(name="FromUserID", type="integer", nullable=false)
     */
    private $fromuserid;

    /**
     * @var string
     *
     * @ORM\Column(name="ContentMessage", type="string", length=100, nullable=false)
     */
    private $contentmessage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="HeureEnvoi", type="time", nullable=false)
     */
    private $heureenvoi;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTouserid(): ?int
    {
        return $this->touserid;
    }

    public function setTouserid(int $touserid): self
    {
        $this->touserid = $touserid;

        return $this;
    }

    public function getFromuserid(): ?int
    {
        return $this->fromuserid;
    }

    public function setFromuserid(int $fromuserid): self
    {
        $this->fromuserid = $fromuserid;

        return $this;
    }

    public function getContentmessage(): ?string
    {
        return $this->contentmessage;
    }

    public function setContentmessage(string $contentmessage): self
    {
        $this->contentmessage = $contentmessage;

        return $this;
    }

    public function getHeureenvoi(): ?\DateTimeInterface
    {
        return $this->heureenvoi;
    }

    public function setHeureenvoi(\DateTimeInterface $heureenvoi): self
    {
        $this->heureenvoi = $heureenvoi;

        return $this;
    }


}
