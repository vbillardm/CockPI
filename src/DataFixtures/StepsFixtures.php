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

        // Mojito
        $step1 = new Steps();
        $step1->setNStep(1);
        $step1->setName("Pilez la glace");
        $step1->setDescription("Mettez vos glaçons dans un torchon, refermez-le puis, à l'aide d'un rouleau à pâtisserie, pilez la glace.");
        $step1->setImage("http://static.750g.com/images/400-268/e1108253fa26cb4a4e4fd6f2e438b564/pilez-la-glace.jpg");
        $step1->addIngredient($glace_10);

        $step2 = new Steps();
        $step2->setNStep(2);
        $step2->setName("Versez les feuilles de menthe dans chaque verre");
        $step2->setDescription("On ne déchire pas les feuilles de menthe car les huiles essentielles se situent sur la surface. Cela permet aussi de ne pas avoir de petits bouts de menthe qui vont bloquer la paille. On les dépose juste au fond du verre.");
        $step2->setImage("http://static.750g.com/images/400-268/bbe01774d518f6d874658b10926db1e5/versez-les-feuilles-de-menthe-dans-chaque-verre.jpg");
        $step2->addIngredient($menthe_6);

        $step3 = new Steps();
        $step3->setNStep(3);
        $step3->setName("Coupez le citron");
        $step3->setDescription("Coupez le citron en deux puis chaque demi citron en 6 morceaux. Mettre les morceaux de citron dans chaque verre (1/2 citron).");
        $step3->setImage("http://static.750g.com/images/400-268/3ecda485db5cc68dc5232feebabe0b72/coupez-le-citron.jpg");
        $step3->addIngredient($citron_vert_demi_1);

        $step4 = new Steps();
        $step4->setNStep(4);
        $step4->setName("Ajoutez le sirop de sucre de canne");
        $step4->setDescription("Ajoutez le sirop de sucre de canne. Le fait d'utiliser un sucre liquide permet de ne pas sentir les cristaux du sucre à la dégustation du cocktail.");
        $step4->setImage("http://static.750g.com/images/400-268/098b4476bde2036c7b527287a4286b2c/ajoutez-le-sirop-de-sucre-de-canne.jpg");
        $step4->addIngredient($sucre_canne_2);

        $step5 = new Steps();
        $step5->setNStep(5);
        $step5->setName("Écrasez le citron");
        $step5->setDescription("Ecrasez le citron avec un pilon spécial cocktail. Il est important que la menthe soit au fond du verre afin qu'elle soit protégée à la fois par le sirop de sucre de canne et par les morceaux de citron.");
        $step5->setImage("http://static.750g.com/images/400-268/87a9413b0b44ee5885a6233dd2f75c91/pilez.jpg");
        $step5->addIngredient($citron_vert_demi_1);
        $step5->addIngredient($menthe_6);
        $step5->addIngredient($eau_gazeuse_30);

        $step6 = new Steps();
        $step6->setNStep(6);
        $step6->setName("Ajoutez la glace pilée");
        $step6->setDescription("Ajoutez la glace pilée en laissant 2 cm de libre. Plus il y a de glace, moins elle fondra rapidement.");
        $step6->setImage("http://static.750g.com/images/400-268/79c53be968c89b4c3c6576a3ad8e540a/ajoutez-la-glace-pilee.jpg");
        $step6->addIngredient($glace_10);

        $step7 = new Steps();
        $step7->setNStep(7);
        $step7->setName("Ajoutez le rhum");
        $step7->setDescription("Ajoutez le rhum.");
        $step7->setImage("http://static.750g.com/images/400-268/83184bdd21eaa33490bc9399dc2e630c/ajoutez-le-rhum.jpg");
        $step7->addIngredient($rhum_blanc_4);

        $step8 = new Steps();
        $step8->setNStep(8);
        $step8->setName("Ajoutez l'eau gazeuse");
        $step8->setDescription("Complétez avec l'eau gazeuse. Enfin, mélangez le cocktail afin que les saveur se mêlent.");
        $step8->setImage("http://static.750g.com/images/400-268/5faa21985822272138376f390d2fa8e6/ajoutez-l-eau-gazeuse.jpg");
        $step8->addIngredient($eau_gazeuse_30);

        // Americano
        $step9 = new Steps();
        $step9->setNStep(9);
        $step9->setName("Ajoutez l'alcool");
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
        $step11->setName("Ajoutez l'eau de Seltz");
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

        // Balalaika
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
        $step16->setName("Remplissez d'alcool");
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
        $step18->setDescription("Conservez au frigo, debout, pendant 3 semaines.");
        $step18->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step18->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step18->addIngredient($noix_coco_1);

        // Cosmopolitan
        $step19 = new Steps();
        $step19->setNStep(19);
        $step19->setName("Remplissez le shaker de glaçons");
        $step19->setDescription("Ajoutez les glaçons dans le fond du shaker");
        $step19->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step19->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step19->addIngredient($glace_2);

        $step20 = new Steps();
        $step20->setNStep(20);
        $step20->setName("Ajoutez tous les liquides");
        $step20->setDescription("Versez tous les autres ingrédients les uns après les autres : citron vert, jus de cranberry, cointreau et vodka.");
        $step20->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step20->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step20->addIngredient($citron_vert_demi_1);
        $step20->addIngredient($cranberry_2);
        $step20->addIngredient($cointreau_2);
        $step20->addIngredient($vodka_4);

        $step21 = new Steps();
        $step21->setNStep(21);
        $step21->setName("Frappez le shaker");
        $step21->setDescription("Frappez le shaker, puis versez dans un verre à cocktail.");
        $step21->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step21->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");

        // Bailey's coffee
        $step22 = new Steps();
        $step22->setNStep(22);
        $step22->setName("Versez les liquides");
        $step22->setDescription("Dans un grand verre ou une tasse, verser le bailey's et le café.");
        $step22->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step22->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step22->addIngredient($baileys_1);
        $step22->addIngredient($cafe_1);

        $step23 = new Steps();
        $step23->setNStep(23);
        $step23->setName("Garnissez votre verre");
        $step23->setDescription("Ajoutez sur le dessus la chantilly et parsemer de copeaux de chocolat si vous en avez.");
        $step23->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step23->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step23->addIngredient($chantilly_1);

        // Bloody Mary
        $step24 = new Steps();
        $step24->setNStep(24);
        $step24->setName("Préparez le jus de tomates");
        $step24->setDescription("Pour un résultat optimal, choisissez de préférence un extracteur de jus. Ainsi, après avoir lavé et taillé les tomates en dés, le jus que vous en tirerez sera beaucoup plus fluide et onctueux. Laissez le jus reposer quelques minutes.");
        $step24->setImage("http://static.750g.com/images/400-268/78ac2459ed9bce6ed2cccfb3931ebcbe/ajoutez-25-cl-de-jus-de-tomates.jpg");
        $step24->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step24->addIngredient($jus_tomate_12);

        $step25 = new Steps();
        $step25->setNStep(25);
        $step25->setName("Versez les autres liquides");
        $step25->setDescription("Versez le jus de tomates dans un verre à mélange, avec les autres ingrédients liquides.");
        $step25->setImage("http://static.750g.com/images/400-268/bb9c76dfe9864e4a94afb0b7b2e01f37/melangez.jpg");
        $step25->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step25->addIngredient($jus_tomate_12);
        $step25->addIngredient($tabasco_2);
        $step25->addIngredient($worcestershire_1);
        $step25->addIngredient($jus_citron_1);
        $step25->addIngredient($vodka_4);

        $step26 = new Steps();
        $step26->setNStep(26);
        $step26->setName("Ajoutez de la glace");
        $step26->setDescription("Ajoutez des glaçons pour le laisser refroidir sans pour autant diluer la préparation.");
        $step26->setImage("http://static.750g.com/images/400-268/d255847f970305c51534481a592a6767/ajoutez-quelques-glacons.jpg");
        $step26->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step26->addIngredient($glace_4);

        $step27 = new Steps();
        $step27->setNStep(27);
        $step27->setName("Assaisonnez le jus");
        $step27->setDescription("Dans un verre de type tumbler, versez le jus préparé, avec le sel de céleri, sel et poivre, à votre convenance.");
        $step27->setImage("http://static.750g.com/images/400-268/21e1eae4f087753692bd763062af778f/ajoutez-une-branche-de-celeri.jpg");
        $step27->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step27->addIngredient($celeri_1);
        $step27->addIngredient($sel_poivre_1);

        // Caïpirinha
        $step28 = new Steps();
        $step28->setNStep(28);
        $step28->setName("Coupez le citron");
        $step28->setDescription("Coupez le citron en 8 quartiers.");
        $step28->setUrl("https://www.youtube.com/watch?time_continue=3&v=2VqbpKknTHc");
        $step28->addIngredient($citron_vert_1);

        $step29 = new Steps();
        $step29->setNStep(29);
        $step29->setName("Pilez le citron");
        $step29->setDescription("Pilez les quartiers de citron dans un verre avec la cassonade.");
        $step29->setUrl("https://www.youtube.com/watch?v=7SF_okvaVS0");
        $step29->addIngredient($citron_vert_1);
        $step29->addIngredient($cassonade_3);

        $step30 = new Steps();
        $step30->setNStep(30);
        $step30->setName("Mélangez le cocktail");
        $step30->setDescription("Versez la glace pilée et la cachaça dans le verre et mélangez jusqu'à dissolution du sucre.");
        $step30->setUrl("https://www.youtube.com/watch?v=tt2umBoA6Ao");
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

        // Gin Fizz
        $step36 = new Steps();
        $step36->setNStep(36);
        $step36->setName("Ajoutez tous les ingrédients");
        $step36->setDescription("Mélangez tous les ingrédients dans un shaker.");
        $step36->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step36->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step36->addIngredient($gin_30);
        $step36->addIngredient($jus_citron_1);
        $step36->addIngredient($eau_gazeuse_30);
        $step36->addIngredient($sucre_canne_2);

        $step37 = new Steps();
        $step37->setNStep(37);
        $step37->setName("Ajoutez des glaçons.");
        $step37->setDescription("Ajoutez des glaçons.");
        $step37->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step37->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step37->addIngredient($glace_2);

        $step38 = new Steps();
        $step38->setNStep(38);
        $step38->setName("Agitez le shaker");
        $step38->setDescription("Agitez vigoureusement 10 secondes.");
        $step38->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step38->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");

        // Pina Colada
        $step39 = new Steps();
        $step39->setNStep(39);
        $step39->setName("Ajoutez les ingrédients");
        $step39->setDescription("Versez tous les ingrédients dans le mixer.");
        $step39->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step39->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step39->addIngredient($lait_coco_4);
        $step39->addIngredient($jus_ananas_12);
        $step39->addIngredient($rhum_brun_2);
        $step39->addIngredient($rhum_blanc_4);

        $step40 = new Steps();
        $step40->setNStep(40);
        $step40->setName("Conservez au frais");
        $step40->setDescription("Conservez au frais le mélange pendant quelques minutes.");
        $step40->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step40->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");

        $step41 = new Steps();
        $step41->setNStep(41);
        $step41->setName("Ajoutez la glace");
        $step41->setDescription("Au moment de servir, remplissez le verre de glace pilée.");
        $step41->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step41->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step41->addIngredient($glace_2);

        // Spritz
        $step42 = new Steps();
        $step42->setNStep(42);
        $step42->setName("Ajoutez la glace");
        $step42->setDescription("Mettez des glaçons dans un verre ballon.");
        $step42->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step42->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step42->addIngredient($glace_2);

        $step43 = new Steps();
        $step43->setNStep(43);
        $step43->setName("Ajoutez les liquides");
        $step43->setDescription("Verser le prosecco puis l'Aperol et ajoutez l'eau gazeuse.");
        $step43->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step43->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step43->addIngredient($prosecco_6);
        $step43->addIngredient($aperol_4);
        $step43->addIngredient($eau_gazeuse_2);

        $step44 = new Steps();
        $step44->setNStep(44);
        $step44->setName("Ajoutez la rondelle d'orange");
        $step44->setDescription("Plongez une rondelle d'orange.");
        $step44->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step44->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step44->addIngredient($rondelle_orange_1);

        // Cocktail de la Jamaïque
        $step45 = new Steps();
        $step45->setNStep(45);
        $step45->setName("Bouillir les fleurs d'hibiscus");
        $step45->setDescription("Versez 1l d’eau dans une casserole avec les fleurs d’hibiscus séchées et laissez bouillir jusqu’à obtenir une décoction de couleur rouge.");
        $step45->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step45->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step45->addIngredient($fleur_hibiscus_12);

        $step46 = new Steps();
        $step46->setNStep(46);
        $step46->setName("Mettre de côté les fleurs d'hibiscus");
        $step46->setDescription("Laissez refroidir, égouttez, enlevez les feuilles et réservez la décoction de fleurs de la Jamaïque.");
        $step46->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step46->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step46->addIngredient($fleur_hibiscus_12);

        $step47 = new Steps();
        $step47->setNStep(47);
        $step47->setName("Coupez les fraises");
        $step47->setDescription("Lavez et coupez les fraises.");
        $step47->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step47->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step47->addIngredient($fraise_60);

        $step48 = new Steps();
        $step48->setNStep(48);
        $step48->setName("Mélangez tous les ingrédients");
        $step48->setDescription("Dans un mixeur, versez la décoction de fleurs, les fraises, le sucre, la glace et la tequila. Mélangez jusqu’à l’obtention d’un cocktail homogène. Servez la préparation dans un verre");
        $step48->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step48->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step48->addIngredient($fleur_hibiscus_12);
        $step48->addIngredient($fraise_60);
        $step48->addIngredient($tequila_5);
        $step48->addIngredient($sucre_brun_25);
        $step48->addIngredient($glace_vanille_25);

        // Shot piquant
        $step49 = new Steps();
        $step49->setNStep(49);
        $step49->setName("Ajoutez le sirop de grenadine");
        $step49->setDescription("Dans un petit verre à shot, versez le sirop de grenadine.");
        $step49->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step49->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step49->addIngredient($grenadine_1);

        $step50 = new Steps();
        $step50->setNStep(50);
        $step50->setName("Ajoutez le tabasco");
        $step50->setDescription("Ajoutez 4-6 gouttes de tabasco.");
        $step50->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step50->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step50->addIngredient($tabasco_4);

        $step51 = new Steps();
        $step51->setNStep(51);
        $step51->setName("Ajoutez la vodka");
        $step51->setDescription("Versez très lentement la vodka, pour ne pas mélanger les ingrédients.");
        $step51->setImage("https://static.wixstatic.com/media/67f1c7cc5a75473588f659060a0ef5d1.jpg/v1/fill/w_783,h_522,al_c,q_90,usm_0.66_1.00_0.01/67f1c7cc5a75473588f659060a0ef5d1.webp");
        $step51->setUrl("https://www.youtube.com/watch?v=IGMes9rmVxE");
        $step51->addIngredient($vodka_3);
        

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
        $this->setReference("step1_balalaika", $step13);
        $this->setReference("step2_balalaika", $step14);
        $this->setReference("step1_coco", $step15);
        $this->setReference("step2_coco", $step16);
        $this->setReference("step3_coco", $step17);
        $this->setReference("step4_coco", $step18);
        $this->setReference("step1_cosmo", $step19);
        $this->setReference("step2_cosmo", $step20);
        $this->setReference("step3_cosmo", $step21);
        $this->setReference("step1_bailey", $step22);
        $this->setReference("step2_bailey", $step23);
        $this->setReference("step1_bloodymary", $step24);
        $this->setReference("step2_bloodymary", $step25);
        $this->setReference("step3_bloodymary", $step26);
        $this->setReference("step4_bloodymary", $step27);
        $this->setReference("step1_caipirinha", $step28);
        $this->setReference("step2_caipirinha", $step29);
        $this->setReference("step3_caipirinha", $step30);
        $this->setReference("step1_donpedro", $step31);
        $this->setReference("step2_donpedro", $step32);
        $this->setReference("step1_limoncello", $step33);
        $this->setReference("step2_limoncello", $step34);
        $this->setReference("step3_limoncello", $step35);
        $this->setReference("step1_ginfizz", $step36);
        $this->setReference("step2_ginfizz", $step37);
        $this->setReference("step3_ginfizz", $step38);
        $this->setReference("step1_pinacolada", $step39);
        $this->setReference("step2_pinacolada", $step40);
        $this->setReference("step3_pinacolada", $step41);
        $this->setReference("step1_spritz", $step42);
        $this->setReference("step2_spritz", $step43);
        $this->setReference("step3_spritz", $step44);
        $this->setReference("step1_jamaique", $step45);
        $this->setReference("step2_jamaique", $step46);
        $this->setReference("step3_jamaique", $step47);
        $this->setReference("step4_jamaique", $step48);
        $this->setReference("step1_shotpiquant", $step49);
        $this->setReference("step2_shotpiquant", $step50);
        $this->setReference("step3_shotpiquant", $step51);

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
        $manager->persist($step36);
        $manager->persist($step37);
        $manager->persist($step38);
        $manager->persist($step39);
        $manager->persist($step40);
        $manager->persist($step41);
        $manager->persist($step42);
        $manager->persist($step43);
        $manager->persist($step44);
        $manager->persist($step45);
        $manager->persist($step46);
        $manager->persist($step47);
        $manager->persist($step48);
        $manager->persist($step49);
        $manager->persist($step50);
        $manager->persist($step51);
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
