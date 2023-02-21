<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Faker\Factory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker  = Factory::create('fr_FR');
        $faker->addProvider(new \Liior\Faker\Prices($faker));
        $faker->addProvider(new \Bezhanov\Faker\Provider\Commerce($faker));

        for ($p = 0; $p < 100; $p++) {
            $product = new Product;
            $product->setName($faker->productName)
                ->setPrice($faker->price(4000, 20000))
                ->setSlug($faker->slug());

            $manager->persist($product);
        }

        $manager->flush();
    }
}
