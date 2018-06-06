<?php

namespace App\DataFixtures;

use App\Entity\Ingredients;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class IngredientsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $ingredient1 = new Ingredients();
        $ingredient1->setName("Menthe");
        $ingredient1->setQuantity(6);
        $ingredient1->setUnity("feuilles de menthe");
        $this->setReference("menthe_6", $ingredient1);

        $ingredient2 = new Ingredients();
        $ingredient2->setName("Citron vert");
        $ingredient2->setQuantity(1);
        $ingredient2->setUnity("demi de citron vert");
        $this->setReference("citron_vert_demi_1", $ingredient2);

        $ingredient3 = new Ingredients();
        $ingredient3->setName("Glaçons");
        $ingredient3->setQuantity(10);
        $ingredient3->setUnity("glaçons");
        $this->setReference("glace_10", $ingredient3);

        $ingredient4 = new Ingredients();
        $ingredient4->setName("Rhum Blanc");
        $ingredient4->setQuantity(4);
        $ingredient4->setUnity("cl de rhum blanc");
        $this->setReference("rhum_blanc_4", $ingredient4);

        $ingredient5 = new Ingredients();
        $ingredient5->setName("Sirop de sucre de canne");
        $ingredient5->setQuantity(2);
        $ingredient5->setUnity("cl de sucre de canne");
        $this->setReference("sucre_canne_2", $ingredient5);

        $ingredient6 = new Ingredients();
        $ingredient6->setName("Eau gazeuse");
        $ingredient6->setQuantity(30);
        $ingredient6->setUnity("cl d'eau gazeuse");
        $this->setReference("eau_gazeuse_30", $ingredient6);

        $ingredient7 = new Ingredients();
        $ingredient7->setName("Campari");
        $ingredient7->setQuantity(4);
        $ingredient7->setUnity("cl de Campari");
        $this->setReference("campari_4", $ingredient7);

        $ingredient8 = new Ingredients();
        $ingredient8->setName("Vermouth italien");
        $ingredient8->setQuantity(4);
        $ingredient8->setUnity("cl de vermouth italien");
        $this->setReference("vermouth_4", $ingredient8);

        $ingredient9 = new Ingredients();
        $ingredient9->setName("Citron");
        $ingredient9->setQuantity(1);
        $ingredient9->setUnity("citron");
        $this->setReference("citron_1", $ingredient9);

        $ingredient10 = new Ingredients();
        $ingredient10->setName("Orange");
        $ingredient10->setQuantity(1);
        $ingredient10->setUnity("orange");
        $this->setReference("orange_1", $ingredient10);

        $ingredient11 = new Ingredients();
        $ingredient11->setName("Eau de Seltz");
        $ingredient11->setQuantity(30);
        $ingredient11->setUnity("cl d'eau de Seltz");
        $this->setReference("seltz_30", $ingredient11);

        $ingredient12 = new Ingredients();
        $ingredient12->setName("Glaçons");
        $ingredient12->setQuantity(2);
        $ingredient12->setUnity("glaçons");
        $this->setReference("glace_2", $ingredient12);

        $ingredient13 = new Ingredients();
        $ingredient13->setName("Vodka");
        $ingredient13->setQuantity(4);
        $ingredient13->setUnity("cl de vodka");
        $this->setReference("vodka_4", $ingredient13);

        $ingredient14 = new Ingredients();
        $ingredient14->setName("Cointreau");
        $ingredient14->setQuantity(2);
        $ingredient14->setUnity("cl de cointreau");
        $this->setReference("cointreau_2", $ingredient14);

        $ingredient15 = new Ingredients();
        $ingredient15->setName("Citron");
        $ingredient15->setQuantity(4);
        $ingredient15->setUnity("cl de jus de citron");
        $this->setReference("jus_citron_4", $ingredient15);

        $ingredient16 = new Ingredients();
        $ingredient16->setName("Noix de coco");
        $ingredient16->setQuantity(1);
        $ingredient16->setUnity("moitié de noix de coco");
        $this->setReference("noix_coco_1", $ingredient16);

        $ingredient17 = new Ingredients();
        $ingredient17->setName("Jus de cranberry");
        $ingredient17->setQuantity(2);
        $ingredient17->setUnity("cl de jus de cranberry");
        $this->setReference("cranberry_2", $ingredient17);

        $ingredient18 = new Ingredients();
        $ingredient18->setName("Bailey's");
        $ingredient18->setQuantity(1);
        $ingredient18->setUnity("verre de liqueur de bailey's");
        $this->setReference("baileys_1", $ingredient18);

        $ingredient19 = new Ingredients();
        $ingredient19->setName("Café");
        $ingredient19->setQuantity(1);
        $ingredient19->setUnity("café");
        $this->setReference("cafe_1", $ingredient19);

        $ingredient20 = new Ingredients();
        $ingredient20->setName("Chantilly");
        $ingredient20->setQuantity(1);
        $ingredient20->setUnity("dose de crème chantilly");
        $this->setReference("chantilly_1", $ingredient20);

        $ingredient21 = new Ingredients();
        $ingredient21->setName("Sel de céleri");
        $ingredient21->setQuantity(1);
        $ingredient21->setUnity("pincée de sel de céleri");
        $this->setReference("celeri_1", $ingredient21);

        $ingredient22 = new Ingredients();
        $ingredient22->setName("Sel et Poivre");
        $ingredient22->setQuantity(1);
        $ingredient22->setUnity("pincée de sel et de poivre");
        $this->setReference("sel_poivre_1", $ingredient22);

        $ingredient23 = new Ingredients();
        $ingredient23->setName("Tabasco");
        $ingredient23->setQuantity(2);
        $ingredient23->setUnity("gouttes de tabasco");
        $this->setReference("tabasco_2", $ingredient23);

        $ingredient24 = new Ingredients();
        $ingredient24->setName("Worcestershire");
        $ingredient24->setQuantity(1);
        $ingredient24->setUnity("cl de sauce Worcestershire");
        $this->setReference("worcestershire_1", $ingredient24);

        $ingredient25 = new Ingredients();
        $ingredient25->setName("Jus de tomates");
        $ingredient25->setQuantity(12);
        $ingredient25->setUnity("cl de jus de tomates");
        $this->setReference("jus_tomate_12", $ingredient25);

        $ingredient26 = new Ingredients();
        $ingredient26->setName("Jus de citron");
        $ingredient26->setQuantity(1);
        $ingredient26->setUnity("cl de jus de citron");
        $this->setReference("jus_citron_1", $ingredient26);

        $ingredient27 = new Ingredients();
        $ingredient27->setName("Cachaça");
        $ingredient27->setQuantity(5);
        $ingredient27->setUnity("cl de cachaça");
        $this->setReference("cachaça_5", $ingredient27);

        $ingredient28 = new Ingredients();
        $ingredient28->setName("Citron vert");
        $ingredient28->setQuantity(1);
        $ingredient28->setUnity("citron vert");
        $this->setReference("citron_vert_1", $ingredient28);

        $ingredient29 = new Ingredients();
        $ingredient29->setName("Cassonade");
        $ingredient29->setQuantity(3);
        $ingredient29->setUnity("cuillères de cassonade");
        $this->setReference("cassonade_3", $ingredient29);

        $ingredient30 = new Ingredients();
        $ingredient30->setName("Glaçons");
        $ingredient30->setQuantity(4);
        $ingredient30->setUnity("glaçons pillés");
        $this->setReference("glace_4", $ingredient30);

        $ingredient31 = new Ingredients();
        $ingredient31->setName("Glace vanille");
        $ingredient31->setQuantity(25);
        $ingredient31->setUnity("cl de glace vanille");
        $this->setReference("glace_vanille_25", $ingredient31);

        $ingredient32 = new Ingredients();
        $ingredient32->setName("Liqueur de café");
        $ingredient32->setQuantity(20);
        $ingredient32->setUnity("cl de liqueur de café");
        $this->setReference("liqueur_café_20", $ingredient32);

        $ingredient33 = new Ingredients();
        $ingredient33->setName("Whisky");
        $ingredient33->setQuantity(20);
        $ingredient33->setUnity("cl de whisky");
        $this->setReference("whisky_20", $ingredient33);

        $ingredient34 = new Ingredients();
        $ingredient34->setName("Alcool à 90");
        $ingredient34->setQuantity(50);
        $ingredient34->setUnity("cl d'Alcool à 90");
        $this->setReference("alcool_90_50", $ingredient34);

        $ingredient35 = new Ingredients();
        $ingredient35->setName("Sucre");
        $ingredient35->setQuantity(400);
        $ingredient35->setUnity("g de sucre");
        $this->setReference("sucre_400", $ingredient35);

        $ingredient36 = new Ingredients();
        $ingredient36->setName("Eau");
        $ingredient36->setQuantity(50);
        $ingredient36->setUnity("cl d'eau");
        $this->setReference("eau_50", $ingredient36);

        $ingredient37 = new Ingredients();
        $ingredient37->setName("Citron");
        $ingredient37->setQuantity(3);
        $ingredient37->setUnity("citron");
        $this->setReference("citron_3", $ingredient37);

        $ingredient38 = new Ingredients();
        $ingredient38->setName("Gin");
        $ingredient38->setQuantity(30);
        $ingredient38->setUnity("cl de gin");
        $this->setReference("gin_30", $ingredient38);

        $ingredient39 = new Ingredients();
        $ingredient39->setName("Lait de coco");
        $ingredient39->setQuantity(4);
        $ingredient39->setUnity("cl de lait de coco");
        $this->setReference("lait_coco_4", $ingredient39);

        $ingredient40 = new Ingredients();
        $ingredient40->setName("Jus d'ananas");
        $ingredient40->setQuantity(12);
        $ingredient40->setUnity("cl de jus d'ananas");
        $this->setReference("jus_ananas_12", $ingredient40);

        $ingredient41 = new Ingredients();
        $ingredient41->setName("Rhum Brun");
        $ingredient41->setQuantity(2);
        $ingredient41->setUnity("cl de rhum brun");
        $this->setReference("rhum_brun_2", $ingredient41);

        $ingredient42 = new Ingredients();
        $ingredient42->setName("Prosecco (vin blanc pétillant)");
        $ingredient42->setQuantity(6);
        $ingredient42->setUnity("cl de prosecco");
        $this->setReference("prosecco_6", $ingredient42);

        $ingredient43 = new Ingredients();
        $ingredient43->setName("Apérol");
        $ingredient43->setQuantity(4);
        $ingredient43->setUnity("cl d'Apérol'");
        $this->setReference("aperol_4", $ingredient43);

        $ingredient44 = new Ingredients();
        $ingredient44->setName("Eau gazeuse");
        $ingredient44->setQuantity(2);
        $ingredient44->setUnity("cl d'eau gazeuse");
        $this->setReference("eau_gazeuse_2", $ingredient44);

        $ingredient45 = new Ingredients();
        $ingredient45->setName("Rondelle d'orange");
        $ingredient45->setQuantity(1);
        $ingredient45->setUnity("rondelle d'orange");
        $this->setReference("rondelle_orange_1", $ingredient45);

        $ingredient46 = new Ingredients();
        $ingredient46->setName("Fleur d'hibiscus");
        $ingredient46->setQuantity(12);
        $ingredient46->setUnity("g de fleurs d'hibiscus");
        $this->setReference("fleur_hibiscus_12", $ingredient46);

        $ingredient47 = new Ingredients();
        $ingredient47->setName("Fraise");
        $ingredient47->setQuantity(60);
        $ingredient47->setUnity("g de fraises");
        $this->setReference("fraise_60", $ingredient47);

        $ingredient48 = new Ingredients();
        $ingredient48->setName("Tequila");
        $ingredient48->setQuantity(5);
        $ingredient48->setUnity("cl de tequila");
        $this->setReference("tequila_5", $ingredient48);

        $ingredient49 = new Ingredients();
        $ingredient49->setName("Sucre brun");
        $ingredient49->setQuantity(25);
        $ingredient49->setUnity("g de sucre brun");
        $this->setReference("sucre_brun_25", $ingredient49);

        $ingredient50 = new Ingredients();
        $ingredient50->setName("Sirop de grenadine");
        $ingredient50->setQuantity(1);
        $ingredient50->setUnity("ml de sirop de grenadine");
        $this->setReference("grenadine_1", $ingredient50);

        $ingredient51 = new Ingredients();
        $ingredient51->setName("Tabasco");
        $ingredient51->setQuantity(5);
        $ingredient51->setUnity("gouttes de tabasco");
        $this->setReference("tabasco_4", $ingredient51);

        $ingredient52 = new Ingredients();
        $ingredient52->setName("Vodka");
        $ingredient52->setQuantity(3);
        $ingredient52->setUnity("ml de vodka");
        $this->setReference("vodka_3", $ingredient52);

        $manager->persist($ingredient1);
        $manager->persist($ingredient2);
        $manager->persist($ingredient3);
        $manager->persist($ingredient4);
        $manager->persist($ingredient5);
        $manager->persist($ingredient6);
        $manager->persist($ingredient7);
        $manager->persist($ingredient8);
        $manager->persist($ingredient9);
        $manager->persist($ingredient10);
        $manager->persist($ingredient11);
        $manager->persist($ingredient12);
        $manager->persist($ingredient13);
        $manager->persist($ingredient14);
        $manager->persist($ingredient15);
        $manager->persist($ingredient16);
        $manager->persist($ingredient17);
        $manager->persist($ingredient18);
        $manager->persist($ingredient19);
        $manager->persist($ingredient20);
        $manager->persist($ingredient21);
        $manager->persist($ingredient22);
        $manager->persist($ingredient23);
        $manager->persist($ingredient24);
        $manager->persist($ingredient25);
        $manager->persist($ingredient26);
        $manager->persist($ingredient27);
        $manager->persist($ingredient28);
        $manager->persist($ingredient29);
        $manager->persist($ingredient30);
        $manager->persist($ingredient31);
        $manager->persist($ingredient32);
        $manager->persist($ingredient33);
        $manager->persist($ingredient34);
        $manager->persist($ingredient35);
        $manager->persist($ingredient36);
        $manager->persist($ingredient37);
        $manager->persist($ingredient38);
        $manager->persist($ingredient39);
        $manager->persist($ingredient40);
        $manager->persist($ingredient41);
        $manager->persist($ingredient42);
        $manager->persist($ingredient43);
        $manager->persist($ingredient44);
        $manager->persist($ingredient45);
        $manager->persist($ingredient46);
        $manager->persist($ingredient47);
        $manager->persist($ingredient48);
        $manager->persist($ingredient49);
        $manager->persist($ingredient50);
        $manager->persist($ingredient51);
        $manager->persist($ingredient52);
        $manager->flush();
    }
}
