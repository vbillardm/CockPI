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
        $tags = new Tags();
        $tags->setType(Tags::Tag_Context);
        $tags->setName("Soirée entre amis");
        $this->setReference("soirée_context", $tags);

        $tags2 = new Tags();
        $tags2->setType(Tags::Tag_Alcools);
        $tags2->setName("Whisky");
        $this->setReference("Whisky_alcool", $tags2);

        $tags4 = new Tags();
        $tags4->setType(Tags::Tag_Alcools);
        $tags4->setName("Vodka");
        $this->setReference("vodka_alcool", $tags4);

        $tags3 = new Tags();
        $tags3->setType(Tags::Tag_Caracteristique);
        $tags3->setName("raffraichissant");
        $this->setReference("raffraichissant_cara", $tags3);

        $manager->persist($tags);
        $manager->persist($tags2);
        $manager->persist($tags3);
        $manager->persist($tags4);

        $manager->flush();
    }
}
