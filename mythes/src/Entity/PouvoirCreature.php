<?php

namespace App\Entity;

use App\Repository\PouvoirCreatureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PouvoirCreatureRepository::class)
 */
class PouvoirCreature
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pouvoir;

    /**
     * @ORM\ManyToMany(targetEntity=Creature::class, mappedBy="pouvoirCreature")
     */
    private $creatures;

    public function __construct()
    {
        $this->creatures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPouvoir(): ?string
    {
        return $this->pouvoir;
    }

    public function setPouvoir(string $pouvoir): self
    {
        $this->pouvoir = $pouvoir;

        return $this;
    }

    /**
     * @return Collection<int, Creature>
     */
    public function getCreatures(): Collection
    {
        return $this->creatures;
    }

    public function addCreature(Creature $creature): self
    {
        if (!$this->creatures->contains($creature)) {
            $this->creatures[] = $creature;
            $creature->addPouvoirCreature($this);
        }

        return $this;
    }

    public function removeCreature(Creature $creature): self
    {
        if ($this->creatures->removeElement($creature)) {
            $creature->removePouvoirCreature($this);
        }

        return $this;
    }
}
