<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 50; $i++) {
            $produit = new Produit();
            $produit->setLibelle('Carte Graphique n°' . $i);
            $produit->setPrix(mt_rand(150, 3500));
            $produit->setQuantite(mt_rand(0, 1000));
            $manager->persist($produit);
        }
        $manager->flush();
    }
}
