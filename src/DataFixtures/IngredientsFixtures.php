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
        $this->setReference("citron_vert_1", $ingredient2);

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
        $ingredient5->setUnity("cl de surcre de canne");
        $this->setReference("surcre_canne_2", $ingredient5);

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
        $ingredient20->setUnity("dose de crème chantilly et des copeaux de chocolat (à défaut un peu de cacao non sucré)");
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
        $this->setReference("worcestershire_0.5", $ingredient24);

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
        $manager->flush();
    }
}
