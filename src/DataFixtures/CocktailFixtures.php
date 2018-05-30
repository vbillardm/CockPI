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
        $step1_mojito = $this->getReference("step1_mojito");
        /*** @var  $step_piller_glace_1 Steps */
        $step2_mojito = $this->getReference("step2_mojito");
        $step3_mojito = $this->getReference("step3_mojito");
        $step4_mojito = $this->getReference("step4_mojito");
        $step5_mojito = $this->getReference("step5_mojito");
        $step6_mojito = $this->getReference("step6_mojito");
        $step7_mojito = $this->getReference("step7_mojito");
        $step8_mojito = $this->getReference("step8_mojito");

        /*** @var  $menthe_mojito Ingredients */
        $menthe_6 = $this->getReference("menthe_6");
        /*** @var  $citron_vert Ingredients */
        $citron_vert_1 = $this->getReference("citron_vert_1");
        $glace_10 = $this->getReference("glace_10");
        $rhum_blanc_4 = $this->getReference("rhum_blanc_4");
        $surcre_canne_2 = $this->getReference("surcre_canne_2");
        $eau_gazeuse_30 = $this->getReference("eau_gazeuse_30");


        /*** @var  $caracteristique Tags */
        $caracteristique = $this->getReference("raffraichissant_cara");
        /*** @var  $context_soiree Tags */
        $context_soiree = $this->getReference("soirée_context");
        /*** @var  $rhum Tags */
        $rhum = $this->getReference("rhum_alcool");

        $cocktail1 = new Cocktail();
        $cocktail1->setImage("https://static.cuisineaz.com/610x610/i14978-recette-de-mojito.jpeg");
        $cocktail1->setDescription("Le Mojito est la star des cocktails au rhum. Crée à la Bodeguita del Medio, un bar de la Havane, à Cuba, il en est devenu la boisson nationale en 1946. On apprécie particulièrement la fraicheur des feuilles de menthe et l'exotisme du rhum Bacardi.");
        $cocktail1->setName("Mojito");
        $cocktail1->addIngredient($menthe_6);
        $cocktail1->addIngredient($citron_vert_1);
        $cocktail1->addIngredient($glace_10);
        $cocktail1->addIngredient($rhum_blanc_4);
        $cocktail1->addIngredient($surcre_canne_2);
        $cocktail1->addIngredient($eau_gazeuse_30);
        $cocktail1->addStep($step1_mojito);
        $cocktail1->addStep($step2_mojito);
        $cocktail1->addStep($step3_mojito);
        $cocktail1->addStep($step4_mojito);
        $cocktail1->addStep($step5_mojito);
        $cocktail1->addStep($step6_mojito);
        $cocktail1->addStep($step7_mojito);
        $cocktail1->addStep($step8_mojito);
        $cocktail1->addTag($caracteristique);
        $cocktail1->addTag($rhum);
        $cocktail1->addTag($context_soiree);

        $cocktail2 = new Cocktail();
        $cocktail2->setImage("https://static.cuisineaz.com/610x610/i14978-recette-de-mojito.jpeg");
        $cocktail2->setDescription("...");
        $cocktail2->setName("Pina Colada");
        $cocktail2->addIngredient($menthe_6);
        $cocktail2->addIngredient($citron_vert_1);
        $cocktail2->addIngredient($glace_10);
        $cocktail2->addIngredient($rhum_blanc_4);
        $cocktail2->addIngredient($surcre_canne_2);
        $cocktail2->addIngredient($eau_gazeuse_30);
        $cocktail2->addStep($step1_mojito);
        $cocktail2->addStep($step2_mojito);
        $cocktail2->addStep($step3_mojito);
        $cocktail2->addStep($step4_mojito);
        $cocktail2->addStep($step5_mojito);
        $cocktail2->addStep($step6_mojito);
        $cocktail2->addStep($step7_mojito);
        $cocktail2->addStep($step8_mojito);
        $cocktail2->addTag($caracteristique);
        $cocktail2->addTag($rhum);
        $cocktail2->addTag($context_soiree);


        $this->setReference("Mojito", $cocktail1);
        $this->setReference("Pina colada", $cocktail2);
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
