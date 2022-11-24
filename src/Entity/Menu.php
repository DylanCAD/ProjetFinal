<?php

namespace App\Entity;

use App\Repository\MenuRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MenuRepository::class)
 */
class Menu
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
    private $nomMenu;

    /**
     * @ORM\Column(type="float")
     */
    private $prixMenu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageMenu;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descriptionMenu;


    /**
     * @ORM\ManyToMany(targetEntity=Commande::class, inversedBy="menus")
     */
    private $Commande;

    /**
     * @ORM\ManyToOne(targetEntity=Type::class, inversedBy="menu")
     */
    private $type;

    public function __construct()
    {
        $this->types = new ArrayCollection();
        $this->Commande = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomMenu(): ?string
    {
        return $this->nomMenu;
    }

    public function setNomMenu(string $nomMenu): self
    {
        $this->nomMenu = $nomMenu;

        return $this;
    }

    public function getPrixMenu(): ?float
    {
        return $this->prixMenu;
    }

    public function setPrixMenu(float $prixMenu): self
    {
        $this->prixMenu = $prixMenu;

        return $this;
    }

    public function getImageMenu(): ?string
    {
        return $this->imageMenu;
    }

    public function setImageMenu(string $imageMenu): self
    {
        $this->imageMenu = $imageMenu;

        return $this;
    }

    public function getDescriptionMenu(): ?string
    {
        return $this->descriptionMenu;
    }

    public function setDescriptionMenu(?string $descriptionMenu): self
    {
        $this->descriptionMenu = $descriptionMenu;

        return $this;
    }

  
    /**
     * @return Collection<int, Commande>
     */
    public function getCommande(): Collection
    {
        return $this->Commande;
    }

    public function addCommande(Commande $commande): self
    {
        if (!$this->Commande->contains($commande)) {
            $this->Commande[] = $commande;
        }

        return $this;
    }

    public function removeCommande(Commande $commande): self
    {
        $this->Commande->removeElement($commande);

        return $this;
    }

    public function getType(): ?Type
    {
        return $this->type;
    }

    public function setType(?Type $type): self
    {
        $this->type = $type;

        return $this;
    }
}