<?php

namespace App\Entity;

use App\Repository\ExtrasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExtrasRepository::class)
 */
class Extras
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=kamer::class, mappedBy="extras")
     */
    private $kamer;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $omschrijving;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $meerprijs;

    public function __construct()
    {
        $this->kamer = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|kamer[]
     */
    public function getKamer(): Collection
    {
        return $this->kamer;
    }

    public function addKamer(Kamer $kamer): self
    {
        if (!$this->kamer->contains($kamer)) {
            $this->kamer[] = $kamer;
            $kamer->setExtras($this);
        }

        return $this;
    }

    public function removeKamer(Kamer $kamer): self
    {
        if ($this->kamer->contains($kamer)) {
            $this->kamer->removeElement($kamer);
            // set the owning side to null (unless already changed)
            if ($kamer->getExtras() === $this) {
                $kamer->setExtras(null);
            }
        }

        return $this;
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
