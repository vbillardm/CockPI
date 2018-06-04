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
        $step1_bloodymary = $this->setReference("step1_bloodymary");
        $step2_bloodymary = $this->setReference("step2_bloodymary");
        $step3_bloodymary = $this->setReference("step3_bloodymary");
        $step1_caipirinha = $this->setReference("step1_caipirinha");
        $step2_caipirinha = $this->setReference("step2_caipirinha");
        $step3_caipirinha = $this->setReference("step3_caipirinha");
        $step1_donpedro = $this->setReference("step1_donpedro");
        $step2_donpedro = $this->setReference("step2_donpedro");
        $step1_limoncello = $this->setReference("step1_limoncello");
        $step2_limoncello = $this->setReference("step2_limoncello");
        $step3_limoncello = $this->setReference("step3_limoncello");


        /*** @var  $menthe_mojito Ingredients */
        $menthe_6 = $this->getReference("menthe_6");
        $citron_vert_demi_1 = $this->getReference("citron_vert_demi_1");
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
        $celeri_1 = $this->getReference("celeri_1");
        $sel_poivre_1 = $this->getReference("sel_poivre_1");
        $tabasco_2 = $this->getReference("tabasco_2");
        $worcestershire_1 = $this->getReference("worcestershire_1");
        $jus_tomate_12 = $this->getReference("jus_tomate_12");
        $jus_citron_1 = $this->getReference("jus_citron_1");
        $cachaça_5 = $this->getReference("cachaça_5");
        $citron_vert_1 = $this->getReference("citron_vert_1");
        $cassonade_3 = $this->getReference("cassonade_3");
        $glace_4 = $this->getReference("glace_4");
        $alcool_90_50 = $this->getReference("alcool_90_50");
        $sucre_400 = $this->getReference("sucre_400");
        $eau_50 = $this->getReference("eau_50");
        $citron_3 = $this->getReference("citron_3");


        /*** @var  $caracteristique Tags */
        $frais_caract = $this->getReference("frais_caract");
        $gourmand_caract = $this->getReference("gourmand_caract");
        $rapide_caract = $this->getReference("rapide_caract");
        $fruité_caract = $this->getReference("fruité_caract");
        $sucré_caract = $this->getReference("sucré_caract");
        $épicé_caract = $this->getReference("épicé_caract");
        $pétillant_caract = $this->getReference("pétillant_caract");
        $original_caract = $this->getReference("original_caract");
        $classique_caract = $this->getReference("classique_caract");
        $élégant_caract = $this->getReference("élégant_caract");
        /*** @var  $context_soiree Tags */
        $soirée_context = $this->getReference("soirée_context");
        $repas_amoureux_context = $this->getReference("repas_amoureux_context");
        $fête_context = $this->getReference("fête_context");
        $apéro_context = $this->getReference("apéro_context");
        $chiller_context = $this->getReference("chiller_context");
        $bourrer_gueule_context = $this->getReference("bourrer_gueule_context");
        $vrai_barman_context = $this->getReference("vrai_barman_context");
        $vanter_context = $this->getReference("vanter_context");
        $remettre_gueule_context = $this->getReference("remettre_gueule_context");
        /*** @var  $rhum Tags */
        $whisky_alcool = $this->getReference("whisky_alcool");
        $vodka_alcool = $this->getReference("vodka_alcool");
        $rhum_alcool = $this->getReference("rhum_alcool");
        $campari_alcool = $this->getReference("campari_alcool");
        $cointreau_alcool = $this->getReference("cointreau_alcool");
        $bailey_alcool = $this->getReference("bailey_alcool");
        $cachaça_alcool = $this->getReference("cachaça_alcool");
        $alcool_90_alcool = $this->getReference("alcool_90_alcool");

        $cocktail1 = new Cocktail();
        $cocktail1->setImage("https://mixthatdrink.com/wp-content/uploads/2010/12/candy-cane-cocktail-3-600x600.jpg");
        $cocktail1->setDescription("Le Mojito est la star des cocktails au rhum. Crée à la Bodeguita del Medio, un bar de la Havane, à Cuba, il en est devenu la boisson nationale en 1946. On apprécie particulièrement la fraicheur des feuilles de menthe et l'exotisme du rhum Bacardi.");
        $cocktail1->setName("Mojito");
        $cocktail1->addIngredient($menthe_6);
        $cocktail1->addIngredient($citron_vert_demi_1);
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
        $cocktail1->addTag($frais_caract);
        $cocktail1->addTag($classique_caract);
        $cocktail1->addTag($soirée_context);
        $cocktail1->addTag($bourrer_gueule_context);
        $cocktail1->addTag($rhum_alcool);

        $cocktail2 = new Cocktail();
        $cocktail2->setImage("https://mixthatdrink.com/wp-content/uploads/2010/12/candy-cane-cocktail-3-600x600.jpg");
        $cocktail2->setDescription("L'Americano est un savoureux cocktail originaire d'Italie.");
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
        $cocktail2->addTag($élégant_caract);
        $cocktail2->addTag($apéro_context);
        $cocktail2->addTag($vrai_barman_context);
        $cocktail2->addTag($campari_alcool);

        $cocktail3 = new Cocktail();
        $cocktail3->setImage("https://mixthatdrink.com/wp-content/uploads/2010/12/candy-cane-cocktail-3-600x600.jpg");
        $cocktail3->setDescription("Aussi appelé Troïka, il peut se boire aussi en shot, devenant ainsi un Kamikaze.");
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
        $cocktail3->addTag($frais_caract);
        $cocktail3->addTag($sucré_caract);
        $cocktail3->addTag($chiller_context);
        $cocktail3->addTag($repas_amoureux_context);
        $cocktail3->addTag($vodka_alcool);
        $cocktail3->addTag($cointreau_alcool);

        $cocktail4 = new Cocktail();
        $cocktail4->setImage("https://mixthatdrink.com/wp-content/uploads/2010/12/candy-cane-cocktail-3-600x600.jpg");
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
        $cocktail4->addTag($original_caract);
        $cocktail4->addTag($frais_caract);
        $cocktail4->addTag($repas_amoureux_context);
        $cocktail4->addTag($rhum_alcool);

        $cocktail5 = new Cocktail();
        $cocktail5->setImage("https://mixthatdrink.com/wp-content/uploads/2010/12/candy-cane-cocktail-3-600x600.jpg");
        $cocktail5->setDescription("Un grand classique des soirées mondaines souvent appelé par son nom abrégé : Cosmo.");
        $cocktail5->setName("Cosmopolitan");
        $cocktail5->addIngredient($cranberry_2);
        $cocktail5->addIngredient($citron_vert_demi_1);
        $cocktail5->addIngredient($cointreau_2);
        $cocktail5->addIngredient($vodka_4);
        $cocktail5->addStep($step1_cosmo);
        $cocktail5->addStep($step2_cosmo);
        $cocktail5->addStep($step3_cosmo);
        $cocktail5->addStep($step4_cosmo);
        $cockatil5->setSpeedRate(1);
        $cokctail5->setDifficultyRate(1);
        $cocktail5->setPriceRate(1);
        $cocktail5->addTag($fruité_caract);
        $cocktail5->addTag($élégant_caract);
        $cocktail5->addTag($repas_amoureux_context);
        $cocktail5->addTag($soirée_context);
        $cocktail5->addTag($vodka_alcool);
        $cocktail5->addTag($cointreau_alcool);

        $cocktail6 = new Cocktail();
        $cocktail6->setImage("https://mixthatdrink.com/wp-content/uploads/2010/12/candy-cane-cocktail-3-600x600.jpg");
        $cocktail6->setDescription("Le Bailey's Coffee est le voisin de l'Irish Coffee. Il s'agit d'une autre spécialité irlandaise, à base de café.");
        $cocktail6->setName("Bailey's Coffee");
        $cocktail6->addIngredient($baileys_1);
        $cocktail6->addIngredient($cafe_1);
        $cocktail6->addIngredient($chantilly_1);
        $cocktail6->addStep($step1_bailey);
        $cocktail6->addStep($step2_bailey);
        $cockatil6->setSpeedRate(1);
        $cokctail6->setDifficultyRate(1);
        $cocktail6->setPriceRate(1);
        $cocktail6->addTag($gourmand_caract);
        $cocktail6->addTag($rapide_caract);
        $cocktail6->addTag($chiller_context);
        $cocktail6->addTag($bailey_alcool);

        $cocktail7 = new Cocktail();
        $cocktail7->setImage("https://mixthatdrink.com/wp-content/uploads/2010/12/candy-cane-cocktail-3-600x600.jpg");
        $cocktail7->setDescription("Cocktail classique et sanglant, le Bloody Mary est légendaire et aurait été imaginé sur un comptoir parisien...");
        $cocktail7->setName("Bloody Mary");
        $cocktail7->addIngredient($celeri_1);
        $cocktail7->addIngredient($sel_poivre_1);
        $cocktail7->addIngredient($tabasco_2);
        $cocktail7->addIngredient($worcestershire_1);
        $cocktail7->addIngredient($vodka_4);
        $cocktail7->addIngredient($jus_tomate_12);
        $cocktail7->addIngredient($jus_citron_1);
        $cocktail7->addStep($step1_bloodymary);
        $cocktail7->addStep($step2_bloodymary);
        $cocktail7->addStep($step3_bloodymary);
        $cockatil7->setSpeedRate(1);
        $cokctail7->setDifficultyRate(1);
        $cocktail7->setPriceRate(1);
        $cocktail7->addTag($remettre_gueule_context);
        $cocktail7->addTag($épicé_caract);
        $cocktail7->addTag($vodka_alcool);

        $cocktail8 = new Cocktail();
        $cocktail8->setImage("https://mixthatdrink.com/wp-content/uploads/2010/12/candy-cane-cocktail-3-600x600.jpg");
        $cocktail8->setDescription("Appelé aussi 'la petite caipira' est un cocktail brésilien préparé à base de cachaça.");
        $cocktail8->setName("Caïpirinha");
        $cocktail8->addIngredient($citron_vert_1);
        $cocktail8->addIngredient($cassonade_3);
        $cocktail8->addIngredient($glace_4);
        $cocktail8->addIngredient($cachaça_5);
        $cocktail8->addStep($step1_caipirinha);
        $cocktail8->addStep($step2_caipirinha);
        $cocktail8->addStep($step3_caipirinha);
        $cockatil8->setSpeedRate(1);
        $cokctail8->setDifficultyRate(1);
        $cocktail8->setPriceRate(1);
        $cocktail8->addTag($frais_caract);
        $cocktail8->addTag($rapide_caract);
        $cocktail8->addTag($sucré_caract);
        $cocktail8->addTag($repas_amoureux_context);
        $cocktail8->addTag($apéro_context);
        $cocktail8->addTag($chiller_context);
        $cocktail8->addTag($cachaça_alcool);

        $cocktail9 = new Cocktail();
        $cocktail9->setImage("https://mixthatdrink.com/wp-content/uploads/2010/12/candy-cane-cocktail-3-600x600.jpg");
        $cocktail9->setDescription("Le Don Pedro est un classique rétro des années 1970 issu de l'Afrique du Sud.");
        $cocktail9->setName("Don Pedro");
        $cocktail9->addIngredient($glace_vanille_25);
        $cocktail9->addIngredient($liqueur_café_20);
        $cocktail9->addIngredient($whisky_20);
        $cocktail9->addStep($step1_donpedro);
        $cocktail9->addStep($step2_donpedro);
        $cockatil9->setSpeedRate(1);
        $cokctail9->setDifficultyRate(1);
        $cocktail9->setPriceRate(3);
        $cocktail9->addTag($original_caract);
        $cocktail9->addTag($gourmand_caract);
        $cocktail9->addTag($chiller_context);
        $cocktail9->addTag($vanter_context);
        $cocktail9->addTag($whisky_alcool);

        $cocktail10 = new Cocktail();
        $cocktail10->setImage("https://mixthatdrink.com/wp-content/uploads/2010/12/candy-cane-cocktail-3-600x600.jpg");
        $cocktail10->setDescription("Le limoncello est un produit phare de la côte sorrento-amalfitaine et de Capri. A boire en shot");
        $cocktail10->setName("Limoncello");
        $cocktail10->addIngredient($alcool_90_50);
        $cocktail10->addIngredient($sucre_400);
        $cocktail10->addIngredient($eau_50);
        $cocktail10->addIngredient($citron_3);
        $cocktail10->addStep($step1_limoncello);
        $cocktail10->addStep($step2_limoncello);
        $cockatil10->setSpeedRate(1);
        $cokctail10->setDifficultyRate(1);
        $cocktail10->setPriceRate(3);
        $cocktail10->addTag($frais_caract);
        $cocktail10->addTag($bourrer_gueule_context);
        $cocktail10->addTag($fête_context);
        $cocktail10->addTag($vanter_context);
        $cocktail10->addTag($whisky_alcool);


        $this->setReference("Mojito", $cocktail1);
        $this->setReference("Americano", $cocktail2);
        $this->setReference("Balalaïka", $cocktail3);
        $this->setReference("Coco des amoureux", $cocktail4);
        $this->setReference("Cosmopolitan", $cocktail5);
        $this->setReference("Bailey's Coffee", $cocktail6);
        $this->setReference("Bloody Mary", $cocktail7);
        $this->setReference("Cachaça", $cocktail8);
        $this->setReference("Don Pedro", $cocktail9);
        $this->setReference("Limoncello", $cocktail10);
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
