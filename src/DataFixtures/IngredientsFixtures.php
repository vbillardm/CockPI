<?php

namespace App\DataFixtures;

use App\Entity\Ingredients;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class IngredientsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $ingredient = new Ingredients();
        $ingredient->setName("Menthe");
        $ingredient->setQuantity("2");
        $ingredient->setUnity("Feuilles");
        $this->setReference("menthe_mojito", $ingredient);

        $ingredient2 = new Ingredients();
        $ingredient2->setName("Glace");
        $ingredient2->setQuantity("36");
        $ingredient2->setUnity("glaçons");
        $this->setReference("glace_mojito", $ingredient2);


        $manager->persist($ingredient);
        $manager->persist($ingredient2);
        $manager->flush();
    }
}
