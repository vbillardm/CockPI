<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IngredientsRepository")
 */
class Ingredients
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $unity;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Steps", inversedBy="ingredients")
     */
    private $steps;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cocktail", inversedBy="ingredients")
     */
    private $cocktail;

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getUnity(): ?string
    {
        return $this->unity;
    }

    public function setUnity(string $unity): self
    {
        $this->unity = $unity;

        return $this;
    }

    public function getSteps(): ?Steps
    {
        return $this->steps;
    }

    public function setSteps(?Steps $steps): self
    {
        $this->steps = $steps;

        return $this;
    }

    public function getCocktail(): ?Cocktail
    {
        return $this->cocktail;
    }

    public function setCocktail(?Cocktail $cocktail): self
    {
        $this->cocktail = $cocktail;

        return $this;
    }
}
