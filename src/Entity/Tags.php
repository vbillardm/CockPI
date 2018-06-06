<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TagsRepository")
 * @ExclusionPolicy("all")
 */
class Tags
{

    const Tag_Context = "context";
    const Tag_Caracteristique = "caracteristique";
    const Tag_Alcools = "alcool";


    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @Expose
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     * @Expose
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=100)
     * @Expose
     */
    private $type;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Cocktail", mappedBy="tags")
     */
    private $cocktails;

    public function __construct()
    {
        $this->cocktails = new ArrayCollection();
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return Collection|Cocktail[]
     */
    public function getCocktails(): Collection
    {
        return $this->cocktails;
    }

    public function addCocktail(Cocktail $cocktail): self
    {
        if (!$this->cocktails->contains($cocktail)) {
            $this->cocktails[] = $cocktail;
            $cocktail->addTag($this);
        }

        return $this;
    }

    public function removeCocktail(Cocktail $cocktail): self
    {
        if ($this->cocktails->contains($cocktail)) {
            $this->cocktails->removeElement($cocktail);
            $cocktail->removeTag($this);
        }

        return $this;
    }
}
