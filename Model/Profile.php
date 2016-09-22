<?php

namespace CommonBundle\Entity;

/**
 * Classe réprenstant le profil d'un utilisateur 
 *
 * @author skouyate
 */
class Profile {
    /**
     *
     * @var integer
     */
    private $id;
    /**
     *
     * @var string
     */
    private $libelle;
    /**
     *
     * @var string
     * Type de profil d'un utilisateur 
     * GA pour la GA
     * CONTRIB pour la contribution
     */
    private $type;
    
    public function __construct($id, $libelle, $type) {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->type = $type;
    }  
    
}
