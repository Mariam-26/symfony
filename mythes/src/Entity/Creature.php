<?php

namespace App\Entity;

use App\Repository\CreatureRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CreatureRepository::class)
 */
class Creature
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
    private $nomCreature;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $paysOrigine;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $anneeOrigine;

    /**
     * @ORM\Column(type="integer")
     */
    private $tailleCm;

    /**
     * @ORM\Column(type="integer")
     */
    private $esperance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity=TypeCreature::class, inversedBy="creatures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $typeCreature;

    /**
     * @ORM\ManyToMany(targetEntity=PouvoirCreature::class, inversedBy="creatures")
     */
    private $pouvoirCreature;

    public function __construct()
    {
        $this->pouvoirCreature = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCreature(): ?string
    {
        return $this->nomCreature;
    }

    public function setNomCreature(string $nomCreature): self
    {
        $this->nomCreature = $nomCreature;

        return $this;
    }

    public function getPaysOrigine(): ?string
    {
        return $this->paysOrigine;
    }

    public function setPaysOrigine(string $paysOrigine): self
    {
        $this->paysOrigine = $paysOrigine;

        return $this;
    }

    public function getAnneeOrigine(): ?string
    {
        return $this->anneeOrigine;
    }

    public function setAnneeOrigine(string $anneeOrigine): self
    {
        $this->anneeOrigine = $anneeOrigine;

        return $this;
    }

    public function getTailleCm(): ?int
    {
        return $this->tailleCm;
    }

    public function setTailleCm(int $tailleCm): self
    {
        $this->tailleCm = $tailleCm;

        return $this;
    }

    public function getEsperance(): ?int
    {
        return $this->esperance;
    }

    public function setEsperance(int $esperance): self
    {
        $this->esperance = $esperance;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getTypeCreature(): ?TypeCreature
    {
        return $this->typeCreature;
    }

    public function setTypeCreature(?TypeCreature $typeCreature): self
    {
        $this->typeCreature = $typeCreature;

        return $this;
    }

    /**
     * @return Collection<int, PouvoirCreature>
     */
    public function getPouvoirCreature(): Collection
    {
        return $this->pouvoirCreature;
    }

    public function addPouvoirCreature(PouvoirCreature $pouvoirCreature): self
    {
        if (!$this->pouvoirCreature->contains($pouvoirCreature)) {
            $this->pouvoirCreature[] = $pouvoirCreature;
        }

        return $this;
    }

    public function removePouvoirCreature(PouvoirCreature $pouvoirCreature): self
    {
        $this->pouvoirCreature->removeElement($pouvoirCreature);

        return $this;
    }
}
