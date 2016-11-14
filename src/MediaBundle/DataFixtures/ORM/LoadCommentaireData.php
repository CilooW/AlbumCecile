<?php

/**
 * Created by PhpStorm.
 * User: ciloo
 * Date: 14/11/16
 * Time: 09:54
 */
use Doctrine\Common\DataFixtures\FixtureInterface;
use MediaBundle\Entity\Commentaire;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;

class LoadAlbumData extends AbstractFixture implements FixtureInterface
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $commentaire = new Commentaire();
        $commentaire->setAlbums('Studio Ghibli');
        $commentaire->setCommentaire('Absolument parfait');
        $commentaire->setUtilisateur('Ciloo');
        $commentaire->

        $manager->persist($commentaire);
        $manager->flush();
        $manager->clear();

        $this->addReference('comms', $commentaire);
    }

    public function getOrder()
    {
        return 2;
    }
}