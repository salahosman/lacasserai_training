<?php

namespace App\Entity;

use App\Repository\BetaalRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BetaalRepository::class)
 */
class betaal
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=reservering::class, cascade={"persist", "remove"})
     */
    private $betaalid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $userid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $soort;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reknr;

    /**
     * @ORM\Column(type="date")
     */
    private $betaaldate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBetaalid(): ?Reservering
    {
        return $this->betaalid;
    }

    public function setBetaalid(?Reservering $betaalid): self
    {
        $this->betaalid = $betaalid;

        return $this;
    }

    public function getUserid(): ?string
    {
        return $this->userid;
    }

    public function setUserid(string $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getSoort(): ?string
    {
        return $this->soort;
    }

    public function setSoort(string $soort): self
    {
        $this->soort = $soort;

        return $this;
    }

    public function getReknr(): ?string
    {
        return $this->reknr;
    }

    public function setReknr(string $reknr): self
    {
        $this->reknr = $reknr;

        return $this;
    }

    public function getBetaaldate(): ?\DateTimeInterface
    {
        return $this->betaaldate;
    }

    public function __toString()
    {

        return $this->id.'-->'.$this -> getBetaalid();
    }



    public function setBetaaldate(\DateTimeInterface $betaaldate): self
    {
        $this->betaaldate = $betaaldate;

        return $this;
    }
}


