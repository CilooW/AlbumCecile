<?php

namespace MediaBundle\Entity;

/**
 * Commentaire
 */
class Commentaire
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $utilisateur;

    /**
     * @var string
     */
    private $commentaire;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set utilisateur
     *
     * @param string $utilisateur
     *
     * @return Commentaire
     */
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return string
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
    /**
     * @var \MediaBundle\Entity\Album
     */
    private $albums;


    /**
     * Set albums
     *
     * @param \MediaBundle\Entity\Album $albums
     *
     * @return Commentaire
     */
    public function setAlbums(\MediaBundle\Entity\Album $albums = null)
    {
        $this->albums = $albums;

        return $this;
    }

    /**
     * Get albums
     *
     * @return \MediaBundle\Entity\Album
     */
    public function getAlbums()
    {
        return $this->albums;
    }
}
