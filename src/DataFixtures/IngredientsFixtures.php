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
        $ingredient1->setQuantity("6");
        $ingredient1->setUnity("feuilles de menthe");
        $this->setReference("menthe_6", $ingredient1);

        $ingredient2 = new Ingredients();
        $ingredient2->setName("Citron vert");
        $ingredient2->setQuantity("1");
        $ingredient2->setUnity("demi citron vert");
        $this->setReference("citron_vert_1", $ingredient2);

        $ingredient3 = new Ingredients();
        $ingredient3->setName("Glaçons");
        $ingredient3->setQuantity("10");
        $ingredient3->setUnity("glaçons");
        $this->setReference("glace_10", $ingredient3);

        $ingredient4 = new Ingredients();
        $ingredient4->setName("Rhum Blanc");
        $ingredient4->setQuantity("4");
        $ingredient4->setUnity("cl de rhum blanc");
        $this->setReference("rhum_blanc_4", $ingredient4);

        $ingredient5 = new Ingredients();
        $ingredient5->setName("Sirop de sucre de canne");
        $ingredient5->setQuantity("2");
        $ingredient5->setUnity("cl de surcre de canne");
        $this->setReference("surcre_canne_2", $ingredient5);

        $ingredient6 = new Ingredients();
        $ingredient6->setName("Eau gazeuse");
        $ingredient6->setQuantity("30");
        $ingredient6->setUnity("cl d'eau gazeuse");
        $this->setReference("eau_gazeuse_30", $ingredient6);

        $manager->persist($ingredient1);
        $manager->persist($ingredient2);
        $manager->persist($ingredient3);
        $manager->persist($ingredient4);
        $manager->persist($ingredient5);
        $manager->persist($ingredient6);
        $manager->flush();
    }
}
