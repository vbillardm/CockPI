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
        /*** @var  $menthe_6 Ingredients */
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

        // Mojito
        $step1 = new Steps();
        $step1->setNStep(1);
        $step1->setName("Pilez la glace");
        $step1->setDescription("Mettez vos glaçons dans un torchon, refermez-le puis, à l'aide d'un rouleau à pâtisserie, pilez la glace.");
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
        $step7->setDescription("Ajoutez le rhum.");
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

        // Americano
        $step9 = new Steps();
        $step9->setNStep(9);
        $step9->setName("Ajouter l'alcool");
        $step9->setDescription("Préparez directement dans un grand verre. Mettez 2 cubes de glace. Versez le Campari et le vermouth italien.");
        $step9->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step9->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step9->addIngredient($glace_2);
        $step9->addIngredient($campari_4);
        $step9->addIngredient($vermouth_4);

        $step10 = new Steps();
        $step10->setNStep(10);
        $step10->setName("Mélangez le cocktail");
        $step10->setDescription("Brassez avec la cuillère à mélange.");
        $step10->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step10->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");

        $step11 = new Steps();
        $step11->setNStep(11);
        $step11->setName("Ajouter l'eau de Seltz");
        $step11->setDescription("Ajoutez de l'eau de Seltz, suivant votre goût.");
        $step11->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step11->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step11->addIngredient($seltz_30);

        $step12 = new Steps();
        $step12->setNStep(12);
        $step12->setName("Décorez votre cocktail");
        $step12->setDescription("Décorez avec un zeste de citron et un zeste d'orange.");
        $step12->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step12->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step12->addIngredient($citron_1);
        $step12->addIngredient($orange_1);

        // Balalaïka
        $step13 = new Steps();
        $step13->setNStep(13);
        $step13->setName("Ajoutez les glaçons");
        $step13->setDescription("Ajoutez les glaçons dans un verre haut.");
        $step13->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step13->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step13->addIngredient($glace_2);

        $step14 = new Steps();
        $step14->setNStep(14);
        $step14->setName("Ajoutez les liquides");
        $step14->setDescription("Verser la vodka, le cointreau et le jus de citron dans le verre.");
        $step14->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step14->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step14->addIngredient($vodka_4);
        $step14->addIngredient($cointreau_2);
        $step14->addIngredient($jus_citron_4);

        // Coco des amoureux
        $step15 = new Steps();
        $step15->setNStep(15);
        $step15->setName("Percez la noix de coco");
        $step15->setDescription("Percer la noix de coco en 3 endroits sur le dessus, et vider l'eau à l'intérieur.");
        $step15->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step15->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step15->addIngredient($noix_coco_1);

        $step16 = new Steps();
        $step16->setNStep(16);
        $step16->setName("Remplir d'alcool");
        $step16->setDescription("Remplir entièrement de rhum blanc.");
        $step16->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step16->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step16->addIngredient($rhum_blanc_4);

        $step17 = new Steps();
        $step17->setNStep(17);
        $step17->setName("Refermez la noix de coco");
        $step17->setDescription("Boucher les trous en retaillant un bouchon de liège, et fermer hermétiquement en faisant couler de la cire de bougie dessus.");
        $step17->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step17->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step17->addIngredient($noix_coco_1);

        $step18 = new Steps();
        $step18->setNStep(18);
        $step18->setName("Conservez pendant 3 semaines");
        $step18->setDescription("Ranger debout, au frigo, pendant 3 semaines.");
        $step18->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step18->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step18->addIngredient($noix_coco_1);

        // Cosmopolitan
        $step19 = new Steps();
        $step19->setNStep(19);
        $step19->setName("Remplir le shaker de glaçons");
        $step19->setDescription("Ajoutez les glaçons dans le fond du shaker");
        $step19->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step19->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step19->addIngredient($glace_2);

        $step20 = new Steps();
        $step20->setNStep(20);
        $step20->setName("Remplir le shaker de glaçons");
        $step20->setDescription("Ajouter les glaçons dans le fond du shaker.");
        $step20->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step20->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step20->addIngredient($glace_2);

        $step21 = new Steps();
        $step21->setNStep(21);
        $step21->setName("Ajoutez tous les liquides");
        $step21->setDescription("Versez tous les autres ingrédients les uns après les autres : citron vert, jus de cranberry, cointreau et vodka.");
        $step21->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step21->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step21->addIngredient($citron_vert_1);
        $step21->addIngredient($cranberry_2);
        $step21->addIngredient($cointreau_2);
        $step21->addIngredient($vodka_4);

        $step22 = new Steps();
        $step22->setNStep(22);
        $step22->setName("Frappez le shaker");
        $step22->setDescription("Frappez le shaker, puis versez dans un verre à cocktail.");
        $step22->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step22->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");

        // Bailey's coffee
        $step23 = new Steps();
        $step23->setNStep(23);
        $step23->setName("Versez les liquides");
        $step23->setDescription("Dans un grand verre ou une tasse, verser le bailey's et le café.");
        $step23->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step23->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step23->addIngredient($baileys_1);
        $step23->addIngredient($cafe_1);

        $step24 = new Steps();
        $step24->setNStep(24);
        $step24->setName("Garnissez votre verre");
        $step24->setDescription("Ajoutez sur le dessus la chantilly et parsemer de copeaux de chocolat.");
        $step24->setImage("https://www.autobrasseur.fr/1017-tm_thickbox_default/mortier-porcelaine-pillon-13cm-diam.jpg");
        $step24->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step24->addIngredient($chantilly_1);



        //set reference to get it from cocktail fixtures
        $this->setReference("step1_mojito", $step1);
        $this->setReference("step2_mojito", $step2);
        $this->setReference("step3_mojito", $step3);
        $this->setReference("step4_mojito", $step4);
        $this->setReference("step5_mojito", $step5);
        $this->setReference("step6_mojito", $step6);
        $this->setReference("step7_mojito", $step7);
        $this->setReference("step8_mojito", $step8);
        $this->setReference("step1_americano", $step9);
        $this->setReference("step2_americano", $step10);
        $this->setReference("step3_americano", $step11);
        $this->setReference("step4_americano", $step12);
        $this->setReference("step1_balalaïka", $step13);
        $this->setReference("step2_balalaïka", $step14);
        $this->setReference("step1_coco", $step15);
        $this->setReference("step2_coco", $step16);
        $this->setReference("step3_coco", $step17);
        $this->setReference("step4_coco", $step18);
        $this->setReference("step1_cosmo", $step19);
        $this->setReference("step2_cosmo", $step20);
        $this->setReference("step3_cosmo", $step21);
        $this->setReference("step4_cosmo", $step22);
        $this->setReference("step1_bailey", $step23);
        $this->setReference("step2_bailey", $step24);


        $manager->persist($step1);
        $manager->persist($step2);
        $manager->persist($step3);
        $manager->persist($step4);
        $manager->persist($step5);
        $manager->persist($step6);
        $manager->persist($step7);
        $manager->persist($step8);
        $manager->persist($step9);
        $manager->persist($step10);
        $manager->persist($step11);
        $manager->persist($step12);
        $manager->persist($step13);
        $manager->persist($step14);
        $manager->persist($step15);
        $manager->persist($step16);
        $manager->persist($step17);
        $manager->persist($step18);
        $manager->persist($step19);
        $manager->persist($step20);
        $manager->persist($step21);
        $manager->persist($step22);
        $manager->persist($step23);
        $manager->persist($step24);
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
