<?php

namespace MediaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Album
 */
class Album
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;



    /**
     * @var string
     */
    private $artiste;

    /**
     * @var string
     */
    private $genre;

    /**
     * @var string
     */
    private $support;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set artiste
     *
     * @param string $artiste
     * @return Album
     */
    public function setArtiste($artiste)
    {
        $this->artiste = $artiste;

        return $this;
    }

    /**
     * Get artiste
     *
     * @return string 
     */
    public function getArtiste()
    {
        return $this->artiste;
    }

    /**
     * Set genre
     *
     * @param string $genre
     * @return Album
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set support
     *
     * @param string $support
     * @return Album
     */
    public function setSupport($support)
    {
        $this->support = $support;

        return $this;
    }

    /**
     * Get support
     *
     * @return string
     */
    public function getSupport()
    {
        return $this->support;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Album
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $comms;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comms = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add comm
     *
     * @param \MediaBundle\Entity\Commentaire $comm
     *
     * @return Album
     */
    public function addComm(\MediaBundle\Entity\Commentaire $comm)
    {
        $this->comms[] = $comm;

        return $this;
    }

    /**
     * Remove comm
     *
     * @param \MediaBundle\Entity\Commentaire $comm
     */
    public function removeComm(\MediaBundle\Entity\Commentaire $comm)
    {
        $this->comms->removeElement($comm);
    }

    /**
     * Get comms
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComms()
    {
        return $this->comms;
    }
}
