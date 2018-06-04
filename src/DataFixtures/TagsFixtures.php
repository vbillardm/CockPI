<?php

namespace App\DataFixtures;

use App\Entity\Tags;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class TagsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // Caracteristique
        $tags1 = new Tags();
        $tags1->setType(Tags::Tag_Caracteristique);
        $tags1->setName("Frais");
        $this->setReference("frais_caract", $tags1);

        $tags2 = new Tags();
        $tags2->setType(Tags::Tag_Caracteristique);
        $tags2->setName("Gourmand");
        $this->setReference("gourmand_caract", $tags2);

        $tags3 = new Tags();
        $tags3->setType(Tags::Tag_Caracteristique);
        $tags3->setName("Rapide");
        $this->setReference("rapide_caract", $tags3);

        $tags4 = new Tags();
        $tags4->setType(Tags::Tag_Caracteristique);
        $tags4->setName("Fruité");
        $this->setReference("fruité_caract", $tags4);

        $tags5 = new Tags();
        $tags5->setType(Tags::Tag_Caracteristique);
        $tags5->setName("Sucré");
        $this->setReference("sucré_caract", $tags5);

        $tags6 = new Tags();
        $tags6->setType(Tags::Tag_Caracteristique);
        $tags6->setName("Épicé");
        $this->setReference("épicé_caract", $tags6);

        $tags7 = new Tags();
        $tags7->setType(Tags::Tag_Caracteristique);
        $tags7->setName("Pétillant");
        $this->setReference("pétillant_caract", $tags7);

        $tags8 = new Tags();
        $tags8->setType(Tags::Tag_Caracteristique);
        $tags8->setName("Original");
        $this->setReference("original_caract", $tags8);

        $tags9 = new Tags();
        $tags9->setType(Tags::Tag_Caracteristique);
        $tags9->setName("Classique");
        $this->setReference("classique_caract", $tags9);

        $tags10 = new Tags();
        $tags10->setType(Tags::Tag_Caracteristique);
        $tags10->setName("Élégant");
        $this->setReference("élégant_caract", $tags10);

        //Contexte
        $tags11 = new Tags();
        $tags11->setType(Tags::Tag_Context);
        $tags11->setName("une soirée entre amis");
        $this->setReference("soirée_context", $tags11);

        $tags12 = new Tags();
        $tags12->setType(Tags::Tag_Context);
        $tags12->setName("un repas en amoureux");
        $this->setReference("repas_amoureux_context", $tags12);

        $tags13 = new Tags();
        $tags13->setType(Tags::Tag_Context);
        $tags13->setName("une grosse fête");
        $this->setReference("fête_context", $tags13);

        $tags14 = new Tags();
        $tags14->setType(Tags::Tag_Context);
        $tags14->setName("un apéro");
        $this->setReference("apéro_context", $tags14);

        $tags15 = new Tags();
        $tags15->setType(Tags::Tag_Context);
        $tags15->setName("chiller");
        $this->setReference("chiller_context", $tags15);

        $tags16 = new Tags();
        $tags16->setType(Tags::Tag_Context);
        $tags16->setName("se bourrer la gueule rapidement");
        $this->setReference("bourrer_gueule_context", $tags16);

        $tags17 = new Tags();
        $tags17->setType(Tags::Tag_Context);
        $tags17->setName("devenir un vrai barman");
        $this->setReference("vrai_barman_context", $tags17);

        $tags18 = new Tags();
        $tags18->setType(Tags::Tag_Context);
        $tags18->setName("se vanter");
        $this->setReference("vanter_context", $tags18);

        $tags19 = new Tags();
        $tags19->setType(Tags::Tag_Context);
        $tags19->setName("se remettre d'une gueule de bois");
        $this->setReference("remettre_gueule_context", $tags19);

        /*$tags20 = new Tags();
        $tags20->setType(Tags::Tag_Context);
        $tags20->setName("????");
        $this->setReference("????_context", $tags20);*/

        // Alcool
        $tags21 = new Tags();
        $tags21->setType(Tags::Tag_Alcools);
        $tags21->setName("Whisky");
        $this->setReference("whisky_alcool", $tags21);

        $tags22 = new Tags();
        $tags22->setType(Tags::Tag_Alcools);
        $tags22->setName("Vodka");
        $this->setReference("vodka_alcool", $tags22);

        $tags23 = new Tags();
        $tags23->setType(Tags::Tag_Alcools);
        $tags23->setName("Rhum");
        $this->setReference("rhum_alcool", $tags23);

        $tags24 = new Tags();
        $tags24->setType(Tags::Tag_Alcools);
        $tags24->setName("Campari");
        $this->setReference("campari_alcool", $tags24);

        $tags25 = new Tags();
        $tags25->setType(Tags::Tag_Alcools);
        $tags25->setName("Cointreau");
        $this->setReference("cointreau_alcool", $tags25);

        $tags26 = new Tags();
        $tags26->setType(Tags::Tag_Alcools);
        $tags26->setName("Bailey's");
        $this->setReference("bailey_alcool", $tags26);

        $tags27 = new Tags();
        $tags27->setType(Tags::Tag_Alcools);
        $tags27->setName("Cachaça");
        $this->setReference("cachaça_alcool", $tags27);

        $tags28 = new Tags();
        $tags28->setType(Tags::Tag_Alcools);
        $tags28->setName("Alcool à 90");
        $this->setReference("alcool_90_alcool", $tags28);


        $manager->persist($tags1);
        $manager->persist($tags2);
        $manager->persist($tags3);
        $manager->persist($tags4);
        $manager->persist($tags5);
        $manager->persist($tags6);
        $manager->persist($tags7);
        $manager->persist($tags8);
        $manager->persist($tags9);
        $manager->persist($tags10);
        $manager->persist($tags11);
        $manager->persist($tags12);
        $manager->persist($tags13);
        $manager->persist($tags14);
        $manager->persist($tags15);
        $manager->persist($tags16);
        $manager->persist($tags17);
        $manager->persist($tags18);
        $manager->persist($tags19);
        //$manager->persist($tags20);
        $manager->persist($tags21);
        $manager->persist($tags22);
        $manager->persist($tags23);
        $manager->persist($tags24);
        $manager->persist($tags25);
        $manager->persist($tags26);
        $manager->persist($tags27);
        $manager->persist($tags28);
        $manager->flush();
    }
}
