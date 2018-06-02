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
                    // !!!!!!!!!!!!!!!!!!!! ATTENTION AUX NUMBER_TAGS !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        //Contexte
        $tags = new Tags();
        $tags->setType(Tags::Tag_Context);
        $tags->setName("Soirée entre amis");
        $this->setReference("soirée_context", $tags);

        // Alcool
        $tags2 = new Tags();
        $tags2->setType(Tags::Tag_Alcools);
        $tags2->setName("Whisky");
        $this->setReference("Whisky_alcool", $tags2);

        $tags4 = new Tags();
        $tags4->setType(Tags::Tag_Alcools);
        $tags4->setName("Vodka");
        $this->setReference("vodka_alcool", $tags4);

        $tags5 = new Tags();
        $tags5->setType(Tags::Tag_Alcools);
        $tags5->setName("Rhum");
        $this->setReference("rhum_alcool", $tags5);

        $tags5 = new Tags();
        $tags5->setType(Tags::Tag_Alcools);
        $tags5->setName("Campari");
        $this->setReference("campari_alcool", $tags5);


        // Caracteristique
        $tags3 = new Tags();
        $tags3->setType(Tags::Tag_Caracteristique);
        $tags3->setName("raffraichissant");
        $this->setReference("raffraichissant_cara", $tags3);

        $manager->persist($tags);
        $manager->persist($tags2);
        $manager->persist($tags3);
        $manager->persist($tags4);
        $manager->persist($tags5);

        $manager->flush();
    }
}
