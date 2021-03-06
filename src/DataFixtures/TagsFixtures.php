<?php

namespace App\DataFixtures;

use App\Entity\Tags;
use Doctrine\Bundle\FixturesBundle\Fixture;
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
        $tags11->setName("entre amis");
        $this->setReference("soirée_context", $tags11);

        $tags12 = new Tags();
        $tags12->setType(Tags::Tag_Context);
        $tags12->setName("en couple");
        $this->setReference("repas_amoureux_context", $tags12);

        $tags13 = new Tags();
        $tags13->setType(Tags::Tag_Context);
        $tags13->setName("fête");
        $this->setReference("fête_context", $tags13);

        $tags14 = new Tags();
        $tags14->setType(Tags::Tag_Context);
        $tags14->setName("apéro");
        $this->setReference("apéro_context", $tags14);

        $tags15 = new Tags();
        $tags15->setType(Tags::Tag_Context);
        $tags15->setName("chiller");
        $this->setReference("chiller_context", $tags15);

        $tags16 = new Tags();
        $tags16->setType(Tags::Tag_Context);
        $tags16->setName("être bourré");
        $this->setReference("bourrer_gueule_context", $tags16);

        $tags17 = new Tags();
        $tags17->setType(Tags::Tag_Context);
        $tags17->setName("expert");
        $this->setReference("vrai_barman_context", $tags17);

        $tags18 = new Tags();
        $tags18->setType(Tags::Tag_Context);
        $tags18->setName("épater");
        $this->setReference("classe_context", $tags18);

        $tags19 = new Tags();
        $tags19->setType(Tags::Tag_Context);
        $tags19->setName("décuver");
        $this->setReference("remettre_gueule_context", $tags19);

        $tags20 = new Tags();
        $tags20->setType(Tags::Tag_Context);
        $tags20->setName("repas");
        $this->setReference("repas_context", $tags20);

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

        $tags29 = new Tags();
        $tags29->setType(Tags::Tag_Alcools);
        $tags29->setName("Gin");
        $this->setReference("gin_alcool", $tags29);

        $tags30 = new Tags();
        $tags30->setType(Tags::Tag_Alcools);
        $tags30->setName("Vin");
        $this->setReference("vin_alcool", $tags30);

        $tags31 = new Tags();
        $tags31->setType(Tags::Tag_Alcools);
        $tags31->setName("Tequila");
        $this->setReference("tequila_alcool", $tags31);


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
        $manager->persist($tags20);
        $manager->persist($tags21);
        $manager->persist($tags22);
        $manager->persist($tags23);
        $manager->persist($tags24);
        $manager->persist($tags25);
        $manager->persist($tags26);
        $manager->persist($tags27);
        $manager->persist($tags28);
        $manager->persist($tags29);
        $manager->persist($tags30);
        $manager->persist($tags31);
        $manager->flush();
    }
}
