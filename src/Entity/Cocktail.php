<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CocktailRepository")
 * @ORM\Table(name="cocktail")
 */
class Cocktail
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @JMS\Groups({"rating"})
     */
    public $id;
    /**
     * @ORM\Column(type="string", length=100)
     * @JMS\Groups({"rating"})
     */
    public $name;

    /**
     * @ORM\Column(type="text")
     * @JMS\Groups({"rating"})
     */
    public $description = "";

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Steps", mappedBy="cocktail")
     * @JMS\MaxDepth(depth=4)
     * @JMS\Groups({"rating"})
     */
    private $steps;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Ingredients", mappedBy="cocktail")
     * @JMS\MaxDepth(depth=2)
     * @JMS\Groups({"rating"})
     */
    private $ingredients;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @JMS\Groups({"rating"})
     * @JMS\Groups({"rating"})
     */
    private $image ="";

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @JMS\Groups({"rating"})
     */
    private $speedRate = 0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @JMS\Groups({"rating"})
     */
    private $speedRateVotes = 0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @JMS\Groups({"rating"})
     */
    private $difficultyRate = 0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @JMS\Groups({"rating"})
     */
    private $difficultyRateVotes = 0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @JMS\Groups({"rating"})
     */
    private $PriceRate = 0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @JMS\Groups({"rating"})
     */
    private $priceRateVotes = 0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @JMS\Groups({"rating"})
     */
    private $GlobalRate = 0;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @JMS\Groups({"rating"})
     */
    private $globalRateVotes = 0;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Tags", inversedBy="cocktails")
     * @JMS\MaxDepth(depth=2)
     * @JMS\Groups({"rating"})
     */
    private $tags;

    public function __construct()
    {
        $this->steps = new ArrayCollection();
        $this->ingredients = new ArrayCollection();
        $this->tags = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return Collection|Steps[]
     */
    public function getSteps(): Collection
    {
        return $this->steps;
    }

    public function addStep(Steps $step): self
    {
        if (!$this->steps->contains($step)) {
            $this->steps[] = $step;
            $step->setCocktail($this);
        }

        return $this;
    }

    public function removeStep(Steps $step): self
    {
        if ($this->steps->contains($step)) {
            $this->steps->removeElement($step);
            // set the owning side to null (unless already changed)
            if ($step->getCocktail() === $this) {
                $step->setCocktail(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Ingredients[]
     */
    public function getIngredients(): Collection
    {
        return $this->ingredients;
    }

    public function addIngredient(Ingredients $ingredient): self
    {
        if (!$this->ingredients->contains($ingredient)) {
            $this->ingredients[] = $ingredient;
            $ingredient->addCocktail($this);
        }

        return $this;
    }

    public function removeIngredient(Ingredients $ingredient): self
    {
        if ($this->ingredients->contains($ingredient)) {
            $this->ingredients->removeElement($ingredient);
            // set the owning side to null (unless already changed)
            if ($ingredient->getCocktail()->contains($this)) {
                $ingredient->removeCocktail($this);
            }
        }

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getSpeedRate(): ?int
    {
        return $this->speedRate;
    }

    public function setSpeedRate(?int $speedRate): self
    {
        $this->speedRate = $speedRate;

        return $this;
    }

    public function getSpeedRateVotes(): ?int
    {
        return $this->speedRateVotes;
    }

    public function setSpeedRateVotes(?int $speedRateVotes): self
    {
        $this->speedRateVotes = $speedRateVotes;

        return $this;
    }

    public function getDifficultyRate(): ?int
    {
        return $this->difficultyRate;
    }

    public function setDifficultyRate(?int $difficultyRate): self
    {
        $this->difficultyRate = $difficultyRate;

        return $this;
    }

    public function getDifficultyRateVotes(): ?int
    {
        return $this->difficultyRateVotes;
    }

    public function setDifficultyRateVotes(?int $difficultyRateVotes): self
    {
        $this->difficultyRateVotes = $difficultyRateVotes;

        return $this;
    }

    public function getPriceRate(): ?int
    {
        return $this->PriceRate;
    }

    public function setPriceRate(?int $PriceRate): self
    {
        $this->PriceRate = $PriceRate;

        return $this;
    }

    public function getPriceRateVotes(): ?int
    {
        return $this->priceRateVotes;
    }

    public function setPriceRateVotes(?int $priceRateVotes): self
    {
        $this->priceRateVotes = $priceRateVotes;

        return $this;
    }

    public function getGlobalRate(): ?int
    {
        return $this->GlobalRate;
    }

    public function setGlobalRate(?int $GlobalRate): self
    {
        $this->GlobalRate = $GlobalRate;

        return $this;
    }

    public function getGlobalRateVotes(): ?int
    {
        return $this->globalRateVotes;
    }

    public function setGlobalRateVotes(?int $globalRateVotes): self
    {
        $this->globalRateVotes = $globalRateVotes;

        return $this;
    }

    /**
     * @return Collection|Tags[]
     */
    public function getTags(): Collection
    {
        return $this->tags;
    }

    public function addTag(Tags $tag): self
    {
        if (!$this->tags->contains($tag)) {
            $this->tags[] = $tag;
        }

        return $this;
    }

    public function removeTag(Tags $tag): self
    {
        if ($this->tags->contains($tag)) {
            $this->tags->removeElement($tag);
        }

        return $this;
    }


}