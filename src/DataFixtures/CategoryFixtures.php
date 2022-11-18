<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture

{
    const CATEGORIES = [
        "Action",
        "Animation",
        "Aventure",
        "Comédie",
        "Fantastique",
        "Horreur",
        "Guerre",
        "Documentaire",
        "Western",
        "Musical",
        "Dramatique",
        "Biographique",
    ];
    public function load(ObjectManager $manager)
    {
        foreach (self::CATEGORIES as $categoryName) {
            $category = new Category();
            $category->setName($categoryName);
            $manager->persist($category);
            $this->addReference('category_' . $categoryName, $category);
        }
        $manager->flush();
    }
}