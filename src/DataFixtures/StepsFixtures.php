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


        // Mojito
        $step1 = new Steps();
        $step1->setNStep(1);
        $step1->setName("Pilez la glace");
        $step1->setDescription("Mettez vos glaçons dans un torchon, refermez-le puis, à l'aide d'un rouleau à pâtisserie, pilez la glace.");
        $step1->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step1->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step1->addIngredient($glace_10);

        $step2 = new Steps();
        $step2->setNStep(2);
        $step2->setName("Versez les feuilles de menthe dans chaque verre");
        $step2->setDescription("On ne déchire pas les feuilles de menthe car les huiles essentielles se situent sur la surface. Cela permet aussi de ne pas avoir de petits bouts de menthe qui vont bloquer la paille. On les dépose juste au fond du verre.");
        $step2->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step2->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step2->addIngredient($menthe_6);

        $step3 = new Steps();
        $step3->setNStep(3);
        $step3->setName("Coupez le citron");
        $step3->setDescription("Coupez le citron en deux puis chaque demi citron en 6 morceaux. Mettre les morceaux de citron dans chaque verre (1/2 citron).");
        $step3->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step3->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step3->addIngredient($citron_vert_demi_1);

        $step4 = new Steps();
        $step4->setNStep(4);
        $step4->setName("Ajoutez le sirop de sucre de canne");
        $step4->setDescription("Ajoutez le sirop de sucre de canne. Le fait d'utiliser un sucre liquide permet de ne pas sentir les cristaux du sucre à la dégustation du cocktail.");
        $step4->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step4->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step4->addIngredient($surcre_canne_2);

        $step5 = new Steps();
        $step5->setNStep(5);
        $step5->setName("Pilez");
        $step5->setDescription("Ecrasez le citron avec un pilon spécial cocktail. Il est important que la menthe soit au fond du verre afin qu'elle soit protégée à la fois par le sirop de sucre de canne et par les morceaux de citron.");
        $step5->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step5->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step5->addIngredient($citron_vert_demi_1);
        $step5->addIngredient($menthe_6);
        $step5->addIngredient($eau_gazeuse_30);

        $step6 = new Steps();
        $step6->setNStep(6);
        $step6->setName("Ajoutez la glace pilée");
        $step6->setDescription("Ajoutez la glace pilée en laissant 2 cm de libre. Plus il y a de glace, moins elle fondra rapidement.");
        $step6->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step6->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step6->addIngredient($glace_10);

        $step7 = new Steps();
        $step7->setNStep(7);
        $step7->setName("Ajoutez le rhum");
        $step7->setDescription("Ajoutez le rhum.");
        $step7->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step7->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step7->addIngredient($rhum_blanc_4);

        $step8 = new Steps();
        $step8->setNStep(8);
        $step8->setName("Ajoutez l'eau gazeuse");
        $step8->setDescription("Complétez avec l'eau gazeuse. Enfin, mélangez le cocktail afin que les saveur se mêlent.");
        $step8->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step8->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step8->addIngredient($eau_gazeuse_30);

        // Americano
        $step9 = new Steps();
        $step9->setNStep(9);
        $step9->setName("Ajouter l'alcool");
        $step9->setDescription("Préparez directement dans un grand verre. Mettez 2 cubes de glace. Versez le Campari et le vermouth italien.");
        $step9->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step9->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step9->addIngredient($glace_2);
        $step9->addIngredient($campari_4);
        $step9->addIngredient($vermouth_4);

        $step10 = new Steps();
        $step10->setNStep(10);
        $step10->setName("Mélangez le cocktail");
        $step10->setDescription("Brassez avec la cuillère à mélange.");
        $step10->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step10->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");

        $step11 = new Steps();
        $step11->setNStep(11);
        $step11->setName("Ajouter l'eau de Seltz");
        $step11->setDescription("Ajoutez de l'eau de Seltz, suivant votre goût.");
        $step11->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step11->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step11->addIngredient($seltz_30);

        $step12 = new Steps();
        $step12->setNStep(12);
        $step12->setName("Décorez votre cocktail");
        $step12->setDescription("Décorez avec un zeste de citron et un zeste d'orange.");
        $step12->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step12->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step12->addIngredient($citron_1);
        $step12->addIngredient($orange_1);

        // Balalaïka
        $step13 = new Steps();
        $step13->setNStep(13);
        $step13->setName("Ajoutez les glaçons");
        $step13->setDescription("Ajoutez les glaçons dans un verre haut.");
        $step13->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step13->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step13->addIngredient($glace_2);

        $step14 = new Steps();
        $step14->setNStep(14);
        $step14->setName("Ajoutez les liquides");
        $step14->setDescription("Verser la vodka, le cointreau et le jus de citron dans le verre.");
        $step14->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step14->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step14->addIngredient($vodka_4);
        $step14->addIngredient($cointreau_2);
        $step14->addIngredient($jus_citron_4);

        // Coco des amoureux
        $step15 = new Steps();
        $step15->setNStep(15);
        $step15->setName("Percez la noix de coco");
        $step15->setDescription("Percer la noix de coco en 3 endroits sur le dessus, et vider l'eau à l'intérieur.");
        $step15->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step15->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step15->addIngredient($noix_coco_1);

        $step16 = new Steps();
        $step16->setNStep(16);
        $step16->setName("Remplir d'alcool");
        $step16->setDescription("Remplir entièrement de rhum blanc.");
        $step16->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step16->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step16->addIngredient($rhum_blanc_4);

        $step17 = new Steps();
        $step17->setNStep(17);
        $step17->setName("Refermez la noix de coco");
        $step17->setDescription("Boucher les trous en retaillant un bouchon de liège, et fermer hermétiquement en faisant couler de la cire de bougie dessus.");
        $step17->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step17->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step17->addIngredient($noix_coco_1);

        $step18 = new Steps();
        $step18->setNStep(18);
        $step18->setName("Conservez pendant 3 semaines");
        $step18->setDescription("Ranger debout, au frigo, pendant 3 semaines.");
        $step18->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step18->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step18->addIngredient($noix_coco_1);

        // Cosmopolitan
        $step19 = new Steps();
        $step19->setNStep(19);
        $step19->setName("Remplir le shaker de glaçons");
        $step19->setDescription("Ajoutez les glaçons dans le fond du shaker");
        $step19->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step19->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step19->addIngredient($glace_2);

        $step20 = new Steps();
        $step20->setNStep(20);
        $step20->setName("Remplir le shaker de glaçons");
        $step20->setDescription("Ajouter les glaçons dans le fond du shaker.");
        $step20->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step20->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step20->addIngredient($glace_2);

        $step21 = new Steps();
        $step21->setNStep(21);
        $step21->setName("Ajoutez tous les liquides");
        $step21->setDescription("Versez tous les autres ingrédients les uns après les autres : citron vert, jus de cranberry, cointreau et vodka.");
        $step21->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step21->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step21->addIngredient($citron_vert_demi_1);
        $step21->addIngredient($cranberry_2);
        $step21->addIngredient($cointreau_2);
        $step21->addIngredient($vodka_4);

        $step22 = new Steps();
        $step22->setNStep(22);
        $step22->setName("Frappez le shaker");
        $step22->setDescription("Frappez le shaker, puis versez dans un verre à cocktail.");
        $step22->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step22->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");

        // Bailey's coffee
        $step23 = new Steps();
        $step23->setNStep(23);
        $step23->setName("Versez les liquides");
        $step23->setDescription("Dans un grand verre ou une tasse, verser le bailey's et le café.");
        $step23->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step23->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step23->addIngredient($baileys_1);
        $step23->addIngredient($cafe_1);

        $step24 = new Steps();
        $step24->setNStep(24);
        $step24->setName("Garnissez votre verre");
        $step24->setDescription("Ajoutez sur le dessus la chantilly et parsemer de copeaux de chocolat.");
        $step24->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step24->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step24->addIngredient($chantilly_1);

        // Bloody Mary
        $step25 = new Steps();
        $step25->setNStep(25);
        $step25->setName("Préparez le jus de tomates");
        $step25->setDescription("Pour un résultat optimal, choisissez de préférence un extracteur de jus. Ainsi, après avoir lavé et taillé les tomates en dés, le jus que vous en tirerez sera beaucoup plus fluide et onctueux. Laissez le jus reposer quelques minutes.");
        $step25->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step25->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step25->addIngredient($jus_tomate_12);

        $step26 = new Steps();
        $step26->setNStep(26);
        $step26->setName("Versez les autres liquides");
        $step26->setDescription("versez-le jus de tomates dans un verre à mélange, avec les autres ingrédients liquides, et des glaçons pour le laisser refroidir sans pour autant diluer la préparation.");
        $step26->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step26->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step26->addIngredient($jus_tomate_12);
        $step26->addIngredient($tabasco_2);
        $step26->addIngredient($worcestershire_1);
        $step26->addIngredient($jus_citron_1);
        $step26->addIngredient($vodka_4);

        $step27 = new Steps();
        $step27->setNStep(27);
        $step27->setName("Assaisonnez le jus");
        $step27->setDescription("Dans un verre de type tumbler, versez le jus préparé, avec le sel de céleri, sel et poivre, à votre convenance.");
        $step27->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step27->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step27->addIngredient($celeri_1);
        $step27->addIngredient($sel_poivre_1);

        // Caïpirinha
        $step28 = new Steps();
        $step28->setNStep(28);
        $step28->setName("Coupez le citron");
        $step28->setDescription("Coupez le citron en 8 quartiers.");
        $step28->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step28->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step28->addIngredient($citron_vert_1);

        $step29 = new Steps();
        $step29->setNStep(29);
        $step29->setName("Pilez le citron");
        $step29->setDescription("Pilez les quartiers de citron dans un verre avec la cassonade.");
        $step29->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step29->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step29->addIngredient($citron_vert_1);
        $step29->addIngredient($cassonade_3);

        $step30 = new Steps();
        $step30->setNStep(30);
        $step30->setName("Mélangez le cocktail");
        $step30->setDescription("Versez la glace pilée et la cachaça dans le verre et mélangez jusqu'à dissolution du sucre.");
        $step30->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step30->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step30->addIngredient($glace_4);
        $step30->addIngredient($cachaça_5);

        // Don Pedro
        $step31 = new Steps();
        $step31->setNStep(31);
        $step31->setName("Faire fonde la glace vanille");
        $step31->setDescription("Faire fondre la glace à la vanille (au micro-onde pendant quelques minutes, le temps qu'elle se ramolisse).");
        $step31->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step31->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step31->addIngredient($glace_vanille_25);

        $step32 = new Steps();
        $step32->setNStep(32);
        $step32->setName("Mélangez avec les liquides");
        $step32->setDescription("Mélanger à doses égale quelques rasades de whisky et de liqueur de café dans la glace liquéfiée. Ajustez suivant le goût.");
        $step32->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step32->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step32->addIngredient($liqueur_café_20);
        $step32->addIngredient($whisky_20);

        // Limoncello
        $step33 = new Steps();
        $step33->setNStep(33);
        $step33->setName("Macérez les citrons");
        $step33->setDescription("Faire macérer les zestes de citrons 10 jours dans 1/2 litre d'alcool.");
        $step33->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step33->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step33->addIngredient($alcool_90_50);
        $step33->addIngredient($citron_3);

        $step34 = new Steps();
        $step34->setNStep(34);
        $step34->setName("Mélangez le sucre et l'eau");
        $step34->setDescription("Diluez le sucre dans l'eau et mélangez.");
        $step34->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step34->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step34->addIngredient($sucre_400);
        $step34->addIngredient($eau_50);

        $step35 = new Steps();
        $step35->setNStep(35);
        $step35->setName("Mettre le tout dans une bouteille");
        $step35->setDescription("Mettre en bouteille et conservez au congélateur.");
        $step35->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step35->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");

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
        $this->setReference("step1_bloodymary", $step25);
        $this->setReference("step2_bloodymary", $step26);
        $this->setReference("step3_bloodymary", $step27);
        $this->setReference("step1_caipirinha", $step28);
        $this->setReference("step2_caipirinha", $step29);
        $this->setReference("step3_caipirinha", $step30);
        $this->setReference("step1_donpedro", $step31);
        $this->setReference("step2_donpedro", $step32);
        $this->setReference("step1_limoncello", $step33);
        $this->setReference("step2_limoncello", $step34);
        $this->setReference("step3_limoncello", $step35);


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
        $manager->persist($step25);
        $manager->persist($step26);
        $manager->persist($step27);
        $manager->persist($step28);
        $manager->persist($step29);
        $manager->persist($step30);
        $manager->persist($step31);
        $manager->persist($step32);
        $manager->persist($step33);
        $manager->persist($step34);
        $manager->persist($step35);
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
