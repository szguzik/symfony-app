<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $article = new Article();
        $article->setTitle('Pierwszy artykuł');
        $article->setContent('Sit, eu robust, percolator dripper coffee a cortado. To go, organic decaffeinated coffee wings strong saucer. Sweet, doppio whipped qui as sit cup, aftertaste macchiato crema single origin mocha. Flavour cup, sit, siphon fair trade, cup so est mug pumpkin spice black iced.');
        $manager->persist($article);

        $article2 = new Article();
        $article2->setTitle('Drugi artykuł');
        $article2->setContent('Variety trifecta cultivar percolator single origin galão single shot plunger pot cortado. At blue mountain galão black café au lait caffeine barista. Cortado americano robust dripper aroma irish kopi-luwak. Dripper acerbic, cappuccino café au lait froth caffeine milk et strong milk.');
        $manager->persist($article2);

        $article3 = new Article();
        $article3->setTitle('Trzeci artykuł');
        $article3->setContent('Id roast eu et body skinny mug acerbic irish. Froth, caffeine mazagran affogato in dripper half and half. Lungo mug, roast qui robusta trifecta mocha. Medium, ut in blue mountain, ristretto et, est, coffee extra  beans foam sugar.');
        $manager->persist($article3);

        $manager->flush();
    }
}
