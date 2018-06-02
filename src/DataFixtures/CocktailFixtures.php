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
        /*** @var  $step_mojito Steps */
        $step1_mojito = $this->getReference("step1_mojito");
        $step2_mojito = $this->getReference("step2_mojito");
        $step3_mojito = $this->getReference("step3_mojito");
        $step4_mojito = $this->getReference("step4_mojito");
        $step5_mojito = $this->getReference("step5_mojito");
        $step6_mojito = $this->getReference("step6_mojito");
        $step7_mojito = $this->getReference("step7_mojito");
        $step8_mojito = $this->getReference("step8_mojito");
        $step1_americano = $this->setReference("step1_americano");
        $step2_americano = $this->setReference("step2_americano");
        $step3_americano = $this->setReference("step3_americano");
        $step4_americano = $this->setReference("step4_americano");
        $step1_balalaïka = $this->setReference("step1_balalaïka");
        $step2_balalaïka = $this->setReference("step2_balalaïka");
        $step1_coco = $this->setReference("step1_coco");
        $step2_coco = $this->setReference("step2_coco");
        $step3_coco = $this->setReference("step3_coco");
        $step4_coco = $this->setReference("step4_coco");
        $step1_cosmo = $this->setReference("step1_cosmo");
        $step2_cosmo = $this->setReference("step2_cosmo");
        $step3_cosmo = $this->setReference("step3_cosmo");
        $step4_cosmo = $this->setReference("step4_cosmo");
        $step1_bailey = $this->setReference("step1_bailey");
        $step2_bailey = $this->setReference("step2_bailey");

        /*** @var  $menthe_mojito Ingredients */
        $menthe_6 = $this->getReference("menthe_6");
        $citron_vert_1 = $this->getReference("citron_vert_1");
        $glace_10 = $this->getReference("glace_10");
        $rhum_blanc_4 = $this->getReference("rhum_blanc_4");
        $surcre_canne_2 = $this->getReference("surcre_canne_2");
        $eau_gazeuse_30 = $this->getReference("eau_gazeuse_30");
        $campari_4 = $this->getReference("campari_4");
        $vermouth_4 = $this->getReference("vermouth_4");
        $citron_1 = $this->getReference("citron_1");
        $orange_1 = $this->getReference("orange_1");
        $seltz_30 = $this->getReference("seltz_30");
        $glace_2 = $this->getReference("glace_2");
        $vodka_4 = $this->getReference("vodka_4");
        $cointreau_2 = $this->getReference("cointreau_2");
        $jus_citron_4 = $this->getReference("jus_citron_4");
        $noix_coco_1 = $this->getReference("noix_coco_1");
        $cranberry_2 = $this->getReference("cranberry_2");
        $baileys_1 = $this->getReference("baileys_1");
        $cafe_1 = $this->getReference("cafe_1");
        $chantilly_1 = $this->getReference("chantilly_1");


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
        $cockatil1->setSpeedRate(1);
        $cokctail1->setDifficultyRate(1);
        $cocktail1->setPriceRate(1);
        $cocktail1->addTag($caracteristique);
        $cocktail1->addTag($rhum);
        $cocktail1->addTag($context_soiree);

        $cocktail2 = new Cocktail();
        $cocktail2->setImage("https://static.cuisineaz.com/610x610/i14978-recette-de-mojito.jpeg");
        $cocktail2->setDescription("...");
        $cocktail2->setName("Americano");
        $cocktail2->addIngredient($campari_4);
        $cocktail2->addIngredient($vermouth_4);
        $cocktail2->addIngredient($citron_1);
        $cocktail2->addIngredient($orange_1);
        $cocktail2->addIngredient($seltz_30);
        $cocktail2->addIngredient($glace_2);
        $cocktail2->addStep($step1_americano);
        $cocktail2->addStep($step2_americano);
        $cocktail2->addStep($step3_americano);
        $cocktail2->addStep($step4_americano);
        $cockatil2->setSpeedRate(1);
        $cokctail2->setDifficultyRate(1);
        $cocktail2->setPriceRate(1);
        $cocktail2->addTag($caracteristique);
        $cocktail2->addTag($rhum);
        $cocktail2->addTag($context_soiree);

        $cocktail3 = new Cocktail();
        $cocktail3->setImage("https://static.cuisineaz.com/610x610/i14978-recette-de-mojito.jpeg");
        $cocktail3->setDescription("...");
        $cocktail3->setName("Balalaïka");
        $cocktail3->addIngredient($vodka_4);
        $cocktail3->addIngredient($cointreau_2);
        $cocktail3->addIngredient($jus_citron_4);
        $cocktail3->addIngredient($glace_2);
        $cocktail3->addStep($step1_balalaïka);
        $cocktail3->addStep($step2_balalaïka);
        $cockatil3->setSpeedRate(1);
        $cokctail3->setDifficultyRate(1);
        $cocktail3->setPriceRate(1);
        $cocktail3->addTag($caracteristique);
        $cocktail3->addTag($rhum);
        $cocktail3->addTag($context_soiree);

        $cocktail4 = new Cocktail();
        $cocktail4->setImage("https://static.cuisineaz.com/610x610/i14978-recette-de-mojito.jpeg");
        $cocktail4->setDescription("Parfait, pour un repas en amoureux. (Attention, il ne faut pas manger la noix de coco !)");
        $cocktail4->setName("Coco des amoureux");
        $cocktail4->addIngredient($noix_coco_1);
        $cocktail4->addIngredient($rhum_blanc_4);
        $cocktail4->addStep($step1_coco);
        $cocktail4->addStep($step2_coco);
        $cocktail4->addStep($step3_coco);
        $cocktail4->addStep($step4_coco);
        $cockatil4->setSpeedRate(3);
        $cokctail4->setDifficultyRate(2);
        $cocktail4->setPriceRate(3);
        $cocktail4->addTag($caracteristique);
        $cocktail4->addTag($rhum);
        $cocktail4->addTag($context_soiree);

        $cocktail5 = new Cocktail();
        $cocktail5->setImage("https://static.cuisineaz.com/610x610/i14978-recette-de-mojito.jpeg");
        $cocktail5->setDescription("Parfait, pour un repas en amoureux. (Attention, il ne faut pas manger la noix de coco !)");
        $cocktail5->setName("Cosmopolitan");
        $cocktail5->addIngredient($cranberry_2);
        $cocktail5->addIngredient($citron_vert_1);
        $cocktail5->addIngredient($cointreau_2);
        $cocktail5->addIngredient($vodka_4);
        $cocktail5->addStep($step1_cosmo);
        $cocktail5->addStep($step2_cosmo);
        $cocktail5->addStep($step3_cosmo);
        $cocktail5->addStep($step4_cosmo);
        $cockatil5->setSpeedRate(1);
        $cokctail5->setDifficultyRate(1);
        $cocktail5->setPriceRate(1);
        $cocktail5->addTag($caracteristique);
        $cocktail5->addTag($rhum);
        $cocktail5->addTag($context_soiree);

        $cocktail6 = new Cocktail();
        $cocktail6->setImage("https://static.cuisineaz.com/610x610/i14978-recette-de-mojito.jpeg");
        $cocktail6->setDescription("...");
        $cocktail6->setName("Bailey's Coffee");
        $cocktail6->addIngredient($baileys_1);
        $cocktail6->addIngredient($cafe_1);
        $cocktail6->addIngredient($chantilly_1);
        $cocktail6->addStep($step1_bailey);
        $cocktail6->addStep($step2_bailey);
        $cockatil6->setSpeedRate(1);
        $cokctail6->setDifficultyRate(1);
        $cocktail6->setPriceRate(1);
        $cocktail6->addTag($caracteristique);
        $cocktail6->addTag($rhum);
        $cocktail6->addTag($context_soiree);



        $this->setReference("Mojito", $cocktail1);
        $this->setReference("Americano", $cocktail2);
        $this->setReference("Balalaïka", $cocktail3);
        $this->setReference("Coco des amoureux", $cocktail4);
        $this->setReference("Cosmopolitan", $cocktail5);
        $this->setReference("Bailey's Coffee", $cocktail6);
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
