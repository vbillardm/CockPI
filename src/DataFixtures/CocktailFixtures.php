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
            // !!!!!!!!!!!!!!! VERIFIER LES LISTES !!!!!!!!!!!!!!!
        /*** @var  $step_mojito Steps */
        $step1_mojito = $this->getReference("step1_mojito");
        $step2_mojito = $this->getReference("step2_mojito");
        $step3_mojito = $this->getReference("step3_mojito");
        $step4_mojito = $this->getReference("step4_mojito");
        $step5_mojito = $this->getReference("step5_mojito");
        $step6_mojito = $this->getReference("step6_mojito");
        $step7_mojito = $this->getReference("step7_mojito");
        $step8_mojito = $this->getReference("step8_mojito");
        $step1_americano = $this->getReference("step1_americano");
        $step2_americano = $this->getReference("step2_americano");
        $step3_americano = $this->getReference("step3_americano");
        $step4_americano = $this->getReference("step4_americano");
        $step1_balalaika = $this->getReference("step1_balalaika");
        $step2_balalaika = $this->getReference("step2_balalaika");
        $step1_coco = $this->getReference("step1_coco");
        $step2_coco = $this->getReference("step2_coco");
        $step3_coco = $this->getReference("step3_coco");
        $step4_coco = $this->getReference("step4_coco");
        $step1_cosmo = $this->getReference("step1_cosmo");
        $step2_cosmo = $this->getReference("step2_cosmo");
        $step3_cosmo = $this->getReference("step3_cosmo");
        $step1_bailey = $this->getReference("step1_bailey");
        $step2_bailey = $this->getReference("step2_bailey");
        $step1_bloodymary = $this->getReference("step1_bloodymary");
        $step2_bloodymary = $this->getReference("step2_bloodymary");
        $step3_bloodymary = $this->getReference("step3_bloodymary");
        $step4_bloodymary = $this->getReference("step4_bloodymary");
        $step1_caipirinha = $this->getReference("step1_caipirinha");
        $step2_caipirinha = $this->getReference("step2_caipirinha");
        $step3_caipirinha = $this->getReference("step3_caipirinha");
        $step1_donpedro = $this->getReference("step1_donpedro");
        $step2_donpedro = $this->getReference("step2_donpedro");
        $step1_limoncello = $this->getReference("step1_limoncello");
        $step2_limoncello = $this->getReference("step2_limoncello");
        $step3_limoncello = $this->getReference("step3_limoncello");
        $step1_ginfizz = $this->getReference("step1_ginfizz");
        $step2_ginfizz = $this->getReference("step2_ginfizz");
        $step3_ginfizz = $this->getReference("step3_ginfizz");
        $step1_pinacolada = $this->getReference("step1_pinacolada");
        $step2_pinacolada = $this->getReference("step2_pinacolada");
        $step3_pinacolada = $this->getReference("step3_pinacolada");
        $step1_spritz = $this->getReference("step1_spritz");
        $step2_spritz = $this->getReference("step2_spritz");
        $step3_spritz = $this->getReference("step3_spritz");
        $step1_jamaique = $this->getReference("step1_jamaique");
        $step2_jamaique = $this->getReference("step2_jamaique");
        $step3_jamaique = $this->getReference("step3_jamaique");
        $step4_jamaique = $this->getReference("step4_jamaique");
        $step1_shotpiquant = $this->getReference("step1_shotpiquant");
        $step2_shotpiquant = $this->getReference("step2_shotpiquant");
        $step3_shotpiquant = $this->getReference("step3_shotpiquant");


        /*** @var  $menthe_mojito Ingredients */
        $menthe_6 = $this->getReference("menthe_6");
        $citron_vert_demi_1 = $this->getReference("citron_vert_demi_1");
        $glace_10 = $this->getReference("glace_10");
        $rhum_blanc_4 = $this->getReference("rhum_blanc_4");
        $sucre_canne_2 = $this->getReference("sucre_canne_2");
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
        $glace_vanille_25 = $this->getReference("glace_vanille_25");
        $liqueur_café_20 = $this->getReference("liqueur_café_20");
        $whisky_20 = $this->getReference("whisky_20");
        $gin_30 = $this->getReference("gin_30");
        $lait_coco_4 = $this->getReference("lait_coco_4");
        $jus_ananas_12 = $this->getReference("jus_ananas_12");
        $rhum_brun_2 = $this->getReference("rhum_brun_2"); 
        $prosecco_6 = $this->getReference("prosecco_6");
        $aperol_4 = $this->getReference("aperol_4");
        $eau_gazeuse_2 = $this->getReference("eau_gazeuse_2");
        $rondelle_orange_1 = $this->getReference("rondelle_orange_1");
        $fleur_hibiscus_12 = $this->getReference("fleur_hibiscus_12");
        $fraise_60 = $this->getReference("fraise_60");  
        $tequila_5 = $this->getReference("tequila_5");  
        $sucre_brun_25 = $this->getReference("sucre_brun_25");
        $grenadine_1 = $this->getReference("grenadine_1");  
        $tabasco_4 = $this->getReference("tabasco_4");  
        $vodka_3 = $this->getReference("vodka_3");  


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
        $classe_context = $this->getReference("classe_context");
        $remettre_gueule_context = $this->getReference("remettre_gueule_context");
        $repas_context = $this->getReference("repas_context");

        /*** @var  $rhum Tags */
        $whisky_alcool = $this->getReference("whisky_alcool");
        $vodka_alcool = $this->getReference("vodka_alcool");
        $rhum_alcool = $this->getReference("rhum_alcool");
        $campari_alcool = $this->getReference("campari_alcool");
        $cointreau_alcool = $this->getReference("cointreau_alcool");
        $bailey_alcool = $this->getReference("bailey_alcool");
        $cachaça_alcool = $this->getReference("cachaça_alcool");
        $alcool_90_alcool = $this->getReference("alcool_90_alcool");
        $gin_alcool = $this->getReference("gin_alcool");
        $vin_alcool = $this->getReference("vin_alcool");
        $tequila_alcool = $this->getReference("tequila_alcool");

        $cocktail1 = new Cocktail();
        $cocktail1->setImage("https://assets.epicurious.com/photos/560d78877b55306961bf340c/1:1/w_600%2Ch_600/242527.jpg");
        $cocktail1->setDescription("Le Mojito est la star des cocktails au rhum. Crée à la Bodeguita del Medio, un bar de la Havane, à Cuba, il en est devenu la boisson nationale en 1946. On apprécie particulièrement la fraicheur des feuilles de menthe et l'exotisme du rhum Bacardi.");
        $cocktail1->setName("Mojito");
        $cocktail1->addIngredient($menthe_6);
        $cocktail1->addIngredient($citron_vert_demi_1);
        $cocktail1->addIngredient($glace_10);
        $cocktail1->addIngredient($rhum_blanc_4);
        $cocktail1->addIngredient($sucre_canne_2);
        $cocktail1->addIngredient($eau_gazeuse_30);
        $cocktail1->addStep($step1_mojito);
        $cocktail1->addStep($step2_mojito);
        $cocktail1->addStep($step3_mojito);
        $cocktail1->addStep($step4_mojito);
        $cocktail1->addStep($step5_mojito);
        $cocktail1->addStep($step6_mojito);
        $cocktail1->addStep($step7_mojito);
        $cocktail1->addStep($step8_mojito);
        $cocktail1->setSpeedRate(1);
        $cocktail1->setDifficultyRate(1);
        $cocktail1->setPriceRate(1);
        $cocktail1->addTag($frais_caract);
        $cocktail1->addTag($classique_caract);
        $cocktail1->addTag($soirée_context);
        $cocktail1->addTag($bourrer_gueule_context);
        $cocktail1->addTag($rhum_alcool);

        $cocktail2 = new Cocktail();
        $cocktail2->setImage("http://www.cookingglory.com/wp-content/uploads/2013/01/negroni.jpg");
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
        $cocktail2->setSpeedRate(1);
        $cocktail2->setDifficultyRate(1);
        $cocktail2->setPriceRate(1);
        $cocktail2->addTag($élégant_caract);
        $cocktail2->addTag($apéro_context);
        $cocktail2->addTag($vrai_barman_context);
        $cocktail2->addTag($campari_alcool);

        $cocktail3 = new Cocktail();
        $cocktail3->setImage("https://gss0.baidu.com/-Po3dSag_xI4khGko9WTAnF6hhy/zhidao/pic/item/c8177f3e6709c93dab77e71d983df8dcd0005457.jpg");
        $cocktail3->setDescription("Aussi appelé Troïka, il peut se boire aussi en shot, devenant ainsi un Kamikaze.");
        $cocktail3->setName("Balalaïka");
        $cocktail3->addIngredient($vodka_4);
        $cocktail3->addIngredient($cointreau_2);
        $cocktail3->addIngredient($jus_citron_4);
        $cocktail3->addIngredient($glace_2);
        $cocktail3->addStep($step1_balalaika);
        $cocktail3->addStep($step2_balalaika);
        $cocktail3->setSpeedRate(1);
        $cocktail3->setDifficultyRate(1);
        $cocktail3->setPriceRate(1);
        $cocktail3->addTag($frais_caract);
        $cocktail3->addTag($sucré_caract);
        $cocktail3->addTag($rapide_caract);
        $cocktail3->addTag($chiller_context);
        $cocktail3->addTag($repas_amoureux_context);
        $cocktail3->addTag($vodka_alcool);
        $cocktail3->addTag($cointreau_alcool);

        $cocktail4 = new Cocktail();
        $cocktail4->setImage("http://cache.magicmaman.com/data/photo/w600_c18/xo/noix-de-coco.jpg");
        $cocktail4->setDescription("Parfait, pour un repas en amoureux. (Attention, il ne faut pas manger la noix de coco !)");
        $cocktail4->setName("Coco des amoureux");
        $cocktail4->addIngredient($noix_coco_1);
        $cocktail4->addIngredient($rhum_blanc_4);
        $cocktail4->addStep($step1_coco);
        $cocktail4->addStep($step2_coco);
        $cocktail4->addStep($step3_coco);
        $cocktail4->addStep($step4_coco);
        $cocktail4->setSpeedRate(3);
        $cocktail4->setDifficultyRate(2);
        $cocktail4->setPriceRate(3);
        $cocktail4->addTag($original_caract);
        $cocktail4->addTag($frais_caract);
        $cocktail4->addTag($repas_amoureux_context);
        $cocktail4->addTag($rhum_alcool);

        $cocktail5 = new Cocktail();
        $cocktail5->setImage("http://static.750g.com/images/600-600/b4e76c7b088fccca4dbb16dce7ad73b2/thinkstockphotos-667123210.jpg");
        $cocktail5->setDescription("Un grand classique des soirées mondaines souvent appelé par son nom abrégé : Cosmo.");
        $cocktail5->setName("Cosmopolitan");
        $cocktail5->addIngredient($cranberry_2);
        $cocktail5->addIngredient($citron_vert_demi_1);
        $cocktail5->addIngredient($cointreau_2);
        $cocktail5->addIngredient($vodka_4);
        $cocktail5->addStep($step1_cosmo);
        $cocktail5->addStep($step2_cosmo);
        $cocktail5->addStep($step3_cosmo);
        $cocktail5->setSpeedRate(1);
        $cocktail5->setDifficultyRate(1);
        $cocktail5->setPriceRate(1);
        $cocktail5->addTag($fruité_caract);
        $cocktail5->addTag($élégant_caract);
        $cocktail5->addTag($classique_caract);
        $cocktail5->addTag($repas_amoureux_context);
        $cocktail5->addTag($soirée_context);
        $cocktail5->addTag($vodka_alcool);
        $cocktail5->addTag($cointreau_alcool);

        $cocktail6 = new Cocktail();
        $cocktail6->setImage("https://mixthatdrink.com/wp-content/uploads/2010/10/cafe-nelson-cocktail-600x600.jpg");
        $cocktail6->setDescription("Le Bailey's Coffee est le voisin de l'Irish Coffee. Il s'agit d'une autre spécialité irlandaise, à base de café.");
        $cocktail6->setName("Bailey's Coffee");
        $cocktail6->addIngredient($baileys_1);
        $cocktail6->addIngredient($cafe_1);
        $cocktail6->addIngredient($chantilly_1);
        $cocktail6->addStep($step1_bailey);
        $cocktail6->addStep($step2_bailey);
        $cocktail6->setSpeedRate(1);
        $cocktail6->setDifficultyRate(1);
        $cocktail6->setPriceRate(1);
        $cocktail6->addTag($gourmand_caract);
        $cocktail6->addTag($rapide_caract);
        $cocktail6->addTag($chiller_context);
        $cocktail6->addTag($bailey_alcool);

        $cocktail7 = new Cocktail();
        $cocktail7->setImage("http://static.750g.com/images/600-600/35970562dda864222e4a1354eb74bfdf/au-placard-les-smoothies-detox-vive-le-bon-vieux-bloody-mary.jpg");
        $cocktail7->setDescription("Cocktail classique et sanglant, le Bloody Mary est légendaire et aurait été imaginé sur un comptoir parisien...");
        $cocktail7->setName("Bloody Mary");
        $cocktail7->addIngredient($celeri_1);
        $cocktail7->addIngredient($sel_poivre_1);
        $cocktail7->addIngredient($tabasco_2);
        $cocktail7->addIngredient($worcestershire_1);
        $cocktail7->addIngredient($vodka_4);
        $cocktail7->addIngredient($jus_tomate_12);
        $cocktail7->addIngredient($jus_citron_1);
        $cocktail7->addIngredient($glace_4);
        $cocktail7->addStep($step1_bloodymary);
        $cocktail7->addStep($step2_bloodymary);
        $cocktail7->addStep($step3_bloodymary);
        $cocktail7->addStep($step4_bloodymary);
        $cocktail7->setSpeedRate(1);
        $cocktail7->setDifficultyRate(1);
        $cocktail7->setPriceRate(1);
        $cocktail7->addTag($épicé_caract);
        $cocktail7->addTag($gourmand_caract);
        $cocktail7->addTag($remettre_gueule_context);
        $cocktail7->addTag($soirée_context);
        $cocktail7->addTag($vodka_alcool);

        $cocktail8 = new Cocktail();
        $cocktail8->setImage("https://cdn.liquor.com/wp-content/uploads/2011/01/19170658/coco-caipirinha-cocktail.jpg");
        $cocktail8->setDescription("Appelé aussi 'la petite caipira' est un cocktail brésilien préparé à base de cachaça.");
        $cocktail8->setName("Caïpirinha");
        $cocktail8->addIngredient($citron_vert_1);
        $cocktail8->addIngredient($cassonade_3);
        $cocktail8->addIngredient($glace_4);
        $cocktail8->addIngredient($cachaça_5);
        $cocktail8->addStep($step1_caipirinha);
        $cocktail8->addStep($step2_caipirinha);
        $cocktail8->addStep($step3_caipirinha);
        $cocktail8->setSpeedRate(1);
        $cocktail8->setDifficultyRate(1);
        $cocktail8->setPriceRate(1);
        $cocktail8->addTag($frais_caract);
        $cocktail8->addTag($sucré_caract);
        $cocktail8->addTag($repas_amoureux_context);
        $cocktail8->addTag($apéro_context);
        $cocktail8->addTag($chiller_context);
        $cocktail8->addTag($cachaça_alcool);

        $cocktail9 = new Cocktail();
        $cocktail9->setImage("http://www.eatout.co.za/wp-content/uploads/2013/11/Dom-Pedro-16.jpg");
        $cocktail9->setDescription("Le Don Pedro est un classique rétro des années 1970 issu de l'Afrique du Sud.");
        $cocktail9->setName("Don Pedro");
        $cocktail9->addIngredient($glace_vanille_25);
        $cocktail9->addIngredient($liqueur_café_20);
        $cocktail9->addIngredient($whisky_20);
        $cocktail9->addStep($step1_donpedro);
        $cocktail9->addStep($step2_donpedro);
        $cocktail9->setSpeedRate(1);
        $cocktail9->setDifficultyRate(1);
        $cocktail9->setPriceRate(3);
        $cocktail9->addTag($original_caract);
        $cocktail9->addTag($gourmand_caract);
        $cocktail9->addTag($chiller_context);
        $cocktail9->addTag($classe_context);
        $cocktail9->addTag($whisky_alcool);

        $cocktail10 = new Cocktail();
        $cocktail10->setImage("https://i.pinimg.com/originals/6f/98/93/6f989325dee37d941bfce281e1cd7b81.jpg");
        $cocktail10->setDescription("Le limoncello est un produit phare de la côte sorrento-amalfitaine et de Capri. A boire en shot");
        $cocktail10->setName("Limoncello");
        $cocktail10->addIngredient($alcool_90_50);
        $cocktail10->addIngredient($sucre_400);
        $cocktail10->addIngredient($eau_50);
        $cocktail10->addIngredient($citron_3);
        $cocktail10->addStep($step1_limoncello);
        $cocktail10->addStep($step2_limoncello);
        $cocktail10->setSpeedRate(1);
        $cocktail10->setDifficultyRate(1);
        $cocktail10->setPriceRate(3);
        $cocktail10->addTag($frais_caract);
        $cocktail10->addTag($bourrer_gueule_context);
        $cocktail10->addTag($fête_context);
        $cocktail10->addTag($classe_context);
        $cocktail10->addTag($whisky_alcool);

        $cocktail11 = new Cocktail();
        $cocktail11->setImage("https://i.pinimg.com/originals/06/75/7d/06757dba94fad6c690eb300806440791.jpg");
        $cocktail11->setDescription("Variante du Gin tonic, ce cocktail possède la particularité d'être très rafraichissant.");
        $cocktail11->setName("Gin Fizz");
        $cocktail11->addIngredient($gin_30);
        $cocktail11->addIngredient($jus_citron_1);
        $cocktail11->addIngredient($eau_gazeuse_30);
        $cocktail11->addIngredient($sucre_canne_2);
        $cocktail11->addIngredient($glace_2);
        $cocktail11->addStep($step1_ginfizz);
        $cocktail11->addStep($step2_ginfizz);
        $cocktail11->addStep($step3_ginfizz);
        $cocktail11->setSpeedRate(1);
        $cocktail11->setDifficultyRate(1);
        $cocktail11->setPriceRate(1);
        $cocktail11->addTag($pétillant_caract);
        $cocktail11->addTag($sucré_caract);
        $cocktail11->addTag($frais_caract);
        $cocktail11->addTag($apéro_context);
        $cocktail11->addTag($chiller_context);
        $cocktail11->addTag($gin_alcool);

        $cocktail12 = new Cocktail();
        $cocktail12->setImage("https://i.pinimg.com/736x/97/5f/3f/975f3f18e87ae011b8a146697220fe8a--good-enough-pi%C3%B1a-colada.jpg");
        $cocktail12->setDescription("La Piña Colada est un cocktail apéritif et exotique d'origine espagnole");
        $cocktail12->setName("Piña Colada");
        $cocktail12->addIngredient($lait_coco_4);
        $cocktail12->addIngredient($jus_ananas_12);
        $cocktail12->addIngredient($rhum_brun_2);
        $cocktail12->addIngredient($rhum_blanc_4);
        $cocktail12->addIngredient($glace_2);
        $cocktail12->addStep($step1_pinacolada);
        $cocktail12->addStep($step2_pinacolada);
        $cocktail12->addStep($step3_pinacolada);
        $cocktail12->setSpeedRate(2);
        $cocktail12->setDifficultyRate(2);
        $cocktail12->setPriceRate(2);
        $cocktail12->addTag($frais_caract);
        $cocktail12->addTag($fruité_caract);
        $cocktail12->addTag($élégant_caract);
        $cocktail12->addTag($classique_caract);
        $cocktail12->addTag($repas_amoureux_context);
        $cocktail12->addTag($chiller_context);
        $cocktail12->addTag($rhum_alcool);

        $cocktail13 = new Cocktail();
        $cocktail13->setImage("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6vW2nXc1TH7YKhycUORPqeoA1Nl-IHqRui9cBNUJfBmAGSYWN");
        $cocktail13->setDescription("Le spritz est un cocktail alcoolisé largement consommé en apéritif dans les grandes villes de la Vénétie et également répandu dans toute l'Italie.");
        $cocktail13->setName("Spritz");
        $cocktail13->addIngredient($lait_coco_4);
        $cocktail13->addIngredient($jus_ananas_12);
        $cocktail13->addIngredient($rhum_brun_2);
        $cocktail13->addIngredient($rhum_blanc_4);
        $cocktail13->addIngredient($glace_2);
        $cocktail13->addStep($step1_pinacolada);
        $cocktail13->addStep($step2_pinacolada);
        $cocktail13->addStep($step3_pinacolada);
        $cocktail13->setSpeedRate(1);
        $cocktail13->setDifficultyRate(1);
        $cocktail13->setPriceRate(2);
        $cocktail13->addTag($frais_caract);
        $cocktail13->addTag($fruité_caract);
        $cocktail13->addTag($élégant_caract);
        $cocktail13->addTag($apéro_context);
        $cocktail13->addTag($chiller_context);
        $cocktail13->addTag($vin_alcool);

        $cocktail14 = new Cocktail();
        $cocktail14->setImage("https://asideofsweet.com/wp-content/uploads/2016/08/Hibiscus-Agua-Fresca-Cocktail-Recipe-3311sq.jpg");
        $cocktail14->setDescription("Idéal pour les moments de chaleur, cette boisson très désaltérante se boit fraîche avec des glaçons.");
        $cocktail14->setName("Cocktail de la Jamaïque");
        $cocktail14->addIngredient($fleur_hibiscus_12);
        $cocktail14->addIngredient($fraise_60);
        $cocktail14->addIngredient($tequila_5);
        $cocktail14->addIngredient($sucre_brun_25);
        $cocktail14->addIngredient($glace_vanille_25);
        $cocktail14->addStep($step1_jamaique);
        $cocktail14->addStep($step2_jamaique);
        $cocktail14->addStep($step3_jamaique);
        $cocktail14->addStep($step4_jamaique);
        $cocktail14->setSpeedRate(2);
        $cocktail14->setDifficultyRate(2);
        $cocktail14->setPriceRate(1);
        $cocktail14->addTag($gourmand_caract);
        $cocktail14->addTag($original_caract);
        $cocktail14->addTag($fruité_caract);
        $cocktail14->addTag($élégant_caract);
        $cocktail14->addTag($repas_amoureux_context);
        $cocktail14->addTag($vrai_barman_context);
        $cocktail14->addTag($classe_context);
        $cocktail14->addTag($tequila_alcool);

        $cocktail15 = new Cocktail();
        $cocktail15->setImage("https://www.thecocktaildb.com/images/media/drink/yrtypx1473344625.jpg");
        $cocktail15->setDescription("Appelé aussi Flat Line, c'est un shoot très puissant.");
        $cocktail15->setName("Shot piquant");
        $cocktail15->addIngredient($grenadine_1);
        $cocktail15->addIngredient($tabasco_4);
        $cocktail15->addIngredient($vodka_3);
        $cocktail15->addStep($step1_shotpiquant);
        $cocktail15->addStep($step2_shotpiquant);
        $cocktail15->addStep($step3_shotpiquant);
        $cocktail15->setSpeedRate(1);
        $cocktail15->setDifficultyRate(1);
        $cocktail15->setPriceRate(1);
        $cocktail15->addTag($rapide_caract);
        $cocktail15->addTag($épicé_caract);
        $cocktail15->addTag($soirée_context);
        $cocktail15->addTag($fête_context);
        $cocktail15->addTag($bourrer_gueule_context);
        $cocktail15->addTag($vodka_alcool);

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
        $this->setReference("Gin Fizz", $cocktail11);
        $this->setReference("Piña Colada", $cocktail12);
        $this->setReference("Spritz", $cocktail13);
        $this->setReference("Cocktail de la Jamaïque", $cocktail14);
        $this->setReference("Shot piquant", $cocktail15);

        $manager->persist($cocktail1);
        $manager->persist($cocktail2);
        $manager->persist($cocktail3);
        $manager->persist($cocktail4);
        $manager->persist($cocktail5);
        $manager->persist($cocktail6);
        $manager->persist($cocktail7);
        $manager->persist($cocktail8);
        $manager->persist($cocktail9);
        $manager->persist($cocktail10);
        $manager->persist($cocktail11);
        $manager->persist($cocktail12);
        $manager->persist($cocktail13);
        $manager->persist($cocktail14);
        $manager->persist($cocktail15);
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
