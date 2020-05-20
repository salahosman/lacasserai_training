<?php

namespace App\Entity;

use App\Repository\SoortRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SoortRepository::class)
 */
class Soort
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $omschrijving;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $meerprijs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOmschrijving(): ?string
    {
        return $this->omschrijving;
    }

    public function setOmschrijving(string $omschrijving): self
    {
        $this->omschrijving = $omschrijving;

        return $this;
    }

    public function getMeerprijs(): ?string
    {
        return $this->meerprijs;
    }

    public function setMeerprijs(string $meerprijs): self
    {
        $this->meerprijs = $meerprijs;

        return $this;
    }
}
