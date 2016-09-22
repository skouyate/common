<?php

namespace Lexbase\CommonBundle\Model;

/**
 * Description of Habilitation
 *
 * @author skouyate
 */
class Habilitation {
    
   private $idMenu;
   
   private $idProfile;

   function __construct($idMenu, $idProfile) {
       $this->idMenu = $idMenu;
       $this->idProfile = $idProfile;
   }

   function getIdMenu() {
       return $this->idMenu;
   }

   function getIdProfile() {
       return $this->idProfile;
   }

   function setIdMenu($idMenu) {
       $this->idMenu = $idMenu;
   }

   function setIdProfile($idProfile) {
       $this->idProfile = $idProfile;
   }
    
}
 