<?php

namespace App\DataFixtures;

use App\Entity\Steps;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class StepsFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $glace = $this->getReference("glace_mojito");

        $step = new Steps();
        $step->setName("Piller la glace");
        $step->setDescription("Pilles la glace connard");
        $step->setNStep(1);
        $step->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step->addIngredient($glace);

        $this->setReference("step1_mojito", $step);

        $manager->persist($step);
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
            IngredientsFixtures::class,
        );
    }
}
