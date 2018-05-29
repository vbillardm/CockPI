<?php

namespace App\DataFixtures;

use App\Entity\Cocktail;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class CocktailFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $step_piller_glace_1 = $this->getReference("step1_mojito");
        $menthe_mojito = $this->getReference("menthe_mojito");
        $caracteristique = $this->getReference("raffraichissant_cara");
        $context_soiree = $this->getReference("soirée_context");
        $rhum = $this->getReference("rhum_alcool");

        $cocktail = new Cocktail();
        $cocktail->setImage("https://static.cuisineaz.com/610x610/i14978-recette-de-mojito.jpeg");
        $cocktail->setDescription("Hehehehehe c'est bon le mojito ma duuuuuude");
        $cocktail->setName("Mojito");
        $cocktail->addIngredient($menthe_mojito);
        $cocktail->addStep($step_piller_glace_1);
        $cocktail->addTag($caracteristique);
        $cocktail->addTag($rhum);
        $cocktail->addTag($context_soiree);


        $this->setReference("Mojito", $cocktail);
        $manager->persist($cocktail);
        $manager->flush();
    }

    /**
     * This method must return an array of fixtures classes
     * on which the implementing class depends on
     *
     * @return array
     */
    public function getDependencies()
    {
        return array(
            StepsFixtures::class,
            IngredientsFixtures::class,
            TagsFixtures::class
        );
    }
}
