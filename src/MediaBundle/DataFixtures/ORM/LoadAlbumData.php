<?php

/**
 * Created by PhpStorm.
 * User: ciloo
 * Date: 14/11/16
 * Time: 09:54
 */
use Doctrine\Common\DataFixtures\FixtureInterface;
use MediaBundle\Entity\Album;
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
        $album = new Album();
        $album->setTitle('Studio Ghibli Best Of');
        $album->setArtiste('Joe Hisaishi');
        $album->setGenre('Soul');
        $album->setSupport('Cassette');

        $manager->persist($album);
        $manager->flush();
        $manager->clear();

        $this->addReference('album-ghibli', $album);
    }

    public function getOrder()
    {
        return 1;
    }
}