<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\ManyToMany(targetEntity="App\Entity\Steps", inversedBy="ingredients")
     */
    private $steps;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Cocktail", inversedBy="ingredients")
     */
    private $cocktail;

    /**
     * Ingredients constructor.
     * @param $steps
     */
    public function __construct()
    {
        $this->steps = new ArrayCollection();
        $this->cocktail = new ArrayCollection();
    }


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
    /**
     * @return Collection|Steps[]
     */
    public function getSteps(): Collection
    {
        return $this->steps;
    }

    public function addSteps(Steps $step): self
    {
        if (!$this->steps->contains($step)) {
            $this->steps[] = $step;
            $step->addIngredient($this);
        }

        return $this;
    }

    public function removeSteps(Steps $step): self
    {
        if ($this->steps->contains($step)) {
            $this->steps->removeElement($step);
            // set the owning side to null (unless already changed)
            if ($step->getIngredients()->contains($this)) {
                $step->removeIngredient($this);
            };
        }

        return $this;
    }

    public function addCocktail(Cocktail $cocktail): self
    {
        if (!$this->cocktail->contains($cocktail)) {
            $this->cocktail[] = $cocktail;
            $cocktail->addIngredient($this);
        }

        return $this;
    }

    public function removeCocktail(Cocktail $cocktail): self
    {
        if ($this->cocktail->contains($cocktail)) {
            $this->cocktail->removeElement($cocktail);
            // set the owning side to null (unless already changed)
            if ($cocktail->getIngredients()->contains($this)) {
                $cocktail->removeIngredient($this);
            };
        }

        return $this;
    }

    public function getCocktail(): ?Cocktail
    {
        return $this->cocktail;
    }
//
//    public function setCocktail(?Cocktail $cocktail): self
//    {
//        $this->cocktail = $cocktail;
//
//        return $this;
//    }
}
