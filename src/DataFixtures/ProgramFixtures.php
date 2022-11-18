<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
  const program = [
    [
      'title' => 'Walking Dead',
      'synopsis' => 'Une série de zombies',
      'poster' => 'https://fr.web.img6.acsta.net/pictures/19/10/31/10/44/1910311.jpg',
      'category' => 'category_Horreur',
    ],
    [
      'title' => 'Game of Thrones',
      'synopsis' => 'Une série de dragons',
      'poster' => 'https://fr.web.img6.acsta.net/pictures/19/10/31/10/44/1910311.jpg',
      'category' => 'category_Fantastique',
    ],
    [
      'title' => 'Breaking Bad',
      'synopsis'=> 'Une série de drogue',
      'poster' => 'https://fr.web.img6.acsta.net/pictures/19/10/31/10/44/1910311.jpg',
      'category' => 'category_Dramatique',
    ],
    [
      'title' => 'The Walking Dead',
      'synopsis' => 'Une série de zombies',
      'poster' => 'https://fr.web.img6.acsta.net/pictures/19/10/31/10/44/1910311.jpg',
      'category' => 'category_Horreur',
    ],
    [
      'title' => 'La Casa de Papel',
      'synopsis' => 'Une série de braquage',
      'poster' => ' https://fr.web.img6.acsta.net/pictures/19/10/31/10/44/1910311.jpg',
      'category' => 'category_Action',
    ]

    
];
    public function load(ObjectManager $manager)
    { 
      foreach (self::program as $programData) {
        $program = new Program();
        $program->setTitle($programData['title']);
        $program->setSynopsis($programData['synopsis']);
        $program->setPoster($programData['poster']);
        $program->setCategory($this->getReference($programData['category']));
        $manager->persist($program);
      }
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
          CategoryFixtures::class,
        ];
    }


}