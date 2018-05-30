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
        /*** @var  $menthe Ingredients */
        $menthe_6 = $this->getReference("menthe_6");
        /*** @var  $citron_vert Ingredients */
        $citron_vert_1 = $this->getReference("citron_vert_1");
        $glace_10 = $this->getReference("glace_10");
        $rhum_blanc_4 = $this->getReference("rhum_blanc_4");
        $surcre_canne_2 = $this->getReference("surcre_canne_2");
        $eau_gazeuse_30 = $this->getReference("eau_gazeuse_30");


        $step1 = new Steps();
        $step1->setNStep(1);
        $step1->setName("Pilez la glace");
        $step1->setDescription("Mettez vos glaçons dans un torchon, refermez-le puis, à l'aide d'un rouleau à pâtisserie, pilez la glace..");
        $step1->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step1->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step1->addIngredient($glace_10);

        $step2 = new Steps();
        $step2->setNStep(2);
        $step2->setName("Versez les feuilles de menthe dans chaque verre");
        $step2->setDescription("On ne déchire pas les feuilles de menthe car les huiles essentielles se situent sur la surface. Cela permet aussi de ne pas avoir de petits bouts de menthe qui vont bloquer la paille. On les dépose juste au fond du verre.");
        $step2->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step2->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step2->addIngredient($menthe_6);

        $step3 = new Steps();
        $step3->setNStep(3);
        $step3->setName("Coupez le citron");
        $step3->setDescription("Coupez le citron en deux puis chaque demi citron en 6 morceaux. Mettre les morceaux de citron dans chaque verre (1/2 citron).");
        $step3->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step3->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step3->addIngredient($citron_vert_1);

        $step4 = new Steps();
        $step4->setNStep(4);
        $step4->setName("Ajoutez le sirop de sucre de canne");
        $step4->setDescription("Ajoutez le sirop de sucre de canne. Le fait d'utiliser un sucre liquide permet de ne pas sentir les cristaux du sucre à la dégustation du cocktail.");
        $step4->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step4->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step4->addIngredient($surcre_canne_2);

        $step5 = new Steps();
        $step5->setNStep(5);
        $step5->setName("Pilez");
        $step5->setDescription("Ecrasez le citron avec un pilon spécial cocktail. Il est important que la menthe soit au fond du verre afin qu'elle soit protégée à la fois par le sirop de sucre de canne et par les morceaux de citron.");
        $step5->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step5->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step5->addIngredient($citron_vert_1);
        $step5->addIngredient($menthe_6);
        $step5->addIngredient($eau_gazeuse_30);

        $step6 = new Steps();
        $step6->setNStep(6);
        $step6->setName("Ajoutez la glace pilée");
        $step6->setDescription("Ajoutez la glace pilée en laissant 2 cm de libre. Plus il y a de glace, moins elle fondra rapidement.");
        $step6->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step6->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step6->addIngredient($glace_10);

        $step7 = new Steps();
        $step7->setNStep(7);
        $step7->setName("Ajoutez le rhum");
        $step7->setDescription("Ajoutez le rhum");
        $step7->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step7->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step7->addIngredient($rhum_blanc_4);

        $step8 = new Steps();
        $step8->setNStep(8);
        $step8->setName("Ajoutez l'eau gazeuse");
        $step8->setDescription("Complétez avec l'eau gazeuse. Enfin, mélangez le cocktail afin que les saveur se mêlent.");
        $step8->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step8->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step8->addIngredient($eau_gazeuse_30);


        //set reference to get it from cocktail fixtures
        $this->setReference("step1_mojito", $step1);
        $this->setReference("step2_mojito", $step2);
        $this->setReference("step3_mojito", $step3);
        $this->setReference("step4_mojito", $step4);
        $this->setReference("step5_mojito", $step5);
        $this->setReference("step6_mojito", $step6);
        $this->setReference("step7_mojito", $step7);
        $this->setReference("step8_mojito", $step8);


        $manager->persist($step1);
        $manager->persist($step2);
        $manager->persist($step3);
        $manager->persist($step4);
        $manager->persist($step5);
        $manager->persist($step6);
        $manager->persist($step7);
        $manager->persist($step8);
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
