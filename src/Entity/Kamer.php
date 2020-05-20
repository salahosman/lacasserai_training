<?php

namespace App\Entity;

use App\Repository\KamerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=KamerRepository::class)
 */
class Kamer
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Extras::class, inversedBy="kamer")
     */
    private $extras;

    /**
     * @ORM\ManyToOne(targetEntity=Soort::class)
     */
    private $soortid;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prijs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getExtras(): ?Extras
    {
        return $this->extras;
    }

    public function setExtras(?Extras $extras): self
    {
        $this->extras = $extras;

        return $this;
    }

    public function getSoortid(): ?Soort
    {
        return $this->soortid;
    }

    public function setSoortid(?Soort $soortid): self
    {
        $this->soortid = $soortid;

        return $this;
    }

    public function getPrijs(): ?string
    {
        return $this->prijs;
    }

    public function setPrijs(string $prijs): self
    {
        $this->prijs = $prijs;

        return $this;
    }
}
