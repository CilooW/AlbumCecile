testAlbum
=========

A Symfony project created on November 14, 2016, 9:17 am.

suivi la procédure jusqu'au point 7.

1. Créer un projet symfony lts : OK
2. Créer un Bundle Media : OK
3. Créer une entité Album : OK
4. Générer son CRUD : OK
5. Avoir le choix entre 3 genres et 3 support à la création d'un album : OK
6. Mise en page simple de l'index et du formulaire : En cours
7. Créer une entité commentaire : OK
8. Faire une relation OneToMany: OK, mais j'ai voulu ajouter des fixture, et la jointure est pas ok dans la fixture.

Ma fixture a visiblement un problème de relation. Message d'erreur lors du fixture load:
  [Doctrine\ORM\ORMInvalidArgumentException]                                                                          
  A new entity was found through the relationship 'MediaBundle\Entity\Commentaire#albums' that was not configured to  
   cascade persist operations for entity: MediaBundle\Entity\Album@000000006f4b374200000000604bf91c. To solve this i  
  ssue: Either explicitly call EntityManager#persist() on this unknown entity or configure cascade persist  this ass  
  ociation in the mapping for example @ManyToOne(..,cascade={"persist"}). If you cannot find out which entity causes  
   the problem implement 'MediaBundle\Entity\Album#__toString()' to get a clue.  
   
   problème lors de la creation d'un commentaire.


