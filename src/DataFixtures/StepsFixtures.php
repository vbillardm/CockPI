<?php

namespace App\DataFixtures;

use App\Entity\Ingredients;
use App\Entity\Steps;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class StepsFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // reference for ingredients
        /*** @var  $glace Ingredients */
        $glace = $this->getReference("glace_mojito");
        /*** @var  $menthe Ingredients */
        $menthe = $this->getReference("menthe_mojito");

        $step = new Steps();
        $step->setName("Piller la glace");
        $step->setDescription("Pilles la glace connard");
        $step->setNStep(1);
        $step->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step->addIngredient($glace);

        $step2 = new Steps();
        $step2->setName("ajouter la menthe");
        $step2->setDescription("Mets de la menthe c'est stylay");
        $step2->setNStep(2);
        $step2->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step2->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step2->addIngredient($menthe);

        //set reference to get it from cocktail fixtures
        $this->setReference("step1_mojito", $step);
        $this->setReference("step2_mojito", $step2);

        $manager->persist($step);
        $manager->persist($step2);
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
