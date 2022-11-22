<?php

namespace App\Entity;

use App\Repository\MenuRepository;
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
    private $Burger;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $HotDog;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Salades;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Quesadillas;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $Taille;

    /**
     * @ORM\Column(type="integer")
     */
    private $Prix;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBurger(): ?string
    {
        return $this->Burger;
    }

    public function setBurger(string $Burger): self
    {
        $this->Burger = $Burger;

        return $this;
    }

    public function getHotDog(): ?string
    {
        return $this->HotDog;
    }

    public function setHotDog(string $HotDog): self
    {
        $this->HotDog = $HotDog;

        return $this;
    }

    public function getSalades(): ?string
    {
        return $this->Salades;
    }

    public function setSalades(string $Salades): self
    {
        $this->Salades = $Salades;

        return $this;
    }

    public function getQuesadillas(): ?string
    {
        return $this->Quesadillas;
    }

    public function setQuesadillas(string $Quesadillas): self
    {
        $this->Quesadillas = $Quesadillas;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->Taille;
    }

    public function setTaille(?string $Taille): self
    {
        $this->Taille = $Taille;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->Prix;
    }

    public function setPrix(int $Prix): self
    {
        $this->Prix = $Prix;

        return $this;
    }
}
