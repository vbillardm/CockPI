<?php

namespace App\DataFixtures;

use App\Entity\Cocktail;
use App\Entity\Ingredients;
use App\Entity\Steps;
use App\Entity\Tags;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class CocktailFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        /*** @var  $step_menthe Steps */
        $step_menthe = $this->getReference("step2_mojito");
        /*** @var  $step_piller_glace_1 Steps */
        $step_piller_glace_1 = $this->getReference("step1_mojito");

        /*** @var  $menthe_mojito Ingredients */
        $menthe_mojito = $this->getReference("menthe_mojito");
        /*** @var  $glace_mojito Ingredients */
        $glace_mojito = $this->getReference("glace_mojito");

        /*** @var  $caracteristique Tags */
        $caracteristique = $this->getReference("raffraichissant_cara");
        /*** @var  $context_soiree Tags */
        $context_soiree = $this->getReference("soirée_context");
        /*** @var  $rhum Tags */
        $rhum = $this->getReference("rhum_alcool");

        $cocktail = new Cocktail();
        $cocktail->setImage("https://static.cuisineaz.com/610x610/i14978-recette-de-mojito.jpeg");
        $cocktail->setDescription("Hehehehehe c'est bon le mojito ma duuuuuude");
        $cocktail->setName("Mojito");
        $cocktail->addIngredient($glace_mojito);
        $cocktail->addIngredient($menthe_mojito);
        $cocktail->addStep($step_piller_glace_1);
        $cocktail->addStep($step_menthe);
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
