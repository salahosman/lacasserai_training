<?php

namespace App\Entity;

use App\Repository\ReserveringRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReserveringRepository::class)
 */
class Reservering
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=kamer::class)
     */
    private $kamerid;

    /**
     * @ORM\ManyToOne(targetEntity=fosuser::class)
     */
    private $userid;

    /**
     * @ORM\Column(type="date")
     */
    private $checkindate;

    /**
     * @ORM\Column(type="date")
     */
    private $checkoutdate;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $betaalid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $betaalmethode;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getKamerid(): ?Kamer
    {
        return $this->kamerid;
    }

    public function setKamerid(?Kamer $kamerid): self
    {
        $this->kamerid = $kamerid;

        return $this;
    }

    public function getUserid(): ?Fosuser
    {
        return $this->userid;
    }

    public function setUserid(?Fosuser $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getCheckindate(): ?\DateTimeInterface
    {
        return $this->checkindate;
    }

    public function setCheckindate(\DateTimeInterface $checkindate): self
    {
        $this->checkindate = $checkindate;

        return $this;
    }

    public function getCheckoutdate(): ?\DateTimeInterface
    {
        return $this->checkoutdate;
    }

    public function setCheckoutdate(\DateTimeInterface $checkoutdate): self
    {
        $this->checkoutdate = $checkoutdate;

        return $this;
    }

    public function getBetaalid(): ?string
    {
        return $this->betaalid;
    }

    public function setBetaalid(string $betaalid): self
    {
        $this->betaalid = $betaalid;

        return $this;
    }

    public function getBetaalmethode(): ?string
    {
        return $this->betaalmethode;
    }

    public function setBetaalmethode(string $betaalmethode): self
    {
        $this->betaalmethode = $betaalmethode;

        return $this;
    }
}
