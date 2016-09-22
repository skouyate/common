<?php

namespace CommonBundle\Entity;

/**
 * Class répresentant un menu de navigation
 *
 * @author skouyate
 */
class Menu {
    
    /**
     *
     * @var integer 
     */
    private $id;
    
    /**
     *
     * @var libelle
     */
    private $libelle;
    
    /**
     *
     * @var integer
     */
    private $ordre;
    
    /**
     *
     * @var integer
     */
    private $niveau;
    
    /**
     *
     * @var integer
     */
    private $menuPereId;
    
    /**
     *
     * @var Array 
     */
    private $menuFils = array();
    
    /**
     *
     * @var string
     */
    private $urlAction;
    
    function __construct($id, $libelle, $ordre, $niveau, $menuPereId, $urlAction) {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->ordre = $ordre;
        $this->niveau = $niveau;
        $this->menuPereId = $menuPereId;
        $this->urlAction = $urlAction;
    }

    function getId() {
        return $this->id;
    }

    function getLibelle() {
        return $this->libelle;
    }

    function getOrdre() {
        return $this->ordre;
    }

    function getNiveau() {
        return $this->niveau;
    }

    function getMenuPereId() {
        return $this->menuPereId;
    }

    function getUrlAction() {
        return $this->urlAction;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    function setOrdre($ordre) {
        $this->ordre = $ordre;
    }

    function setNiveau($niveau) {
        $this->niveau = $niveau;
    }

    function setMenuPereId($menuPereId) {
        $this->menuPereId = $menuPereId;
    }
    
    /**
     * 
     * @param type $urlAction
     */
    function setUrlAction($urlAction) {
        $this->urlAction = $urlAction;
    }

    function getMenuFils(){
        return $this->menuFils;
    }
    
    public function addMenuFils(Menu $menuFils){
        $this->menuFils [] = $menuFils;
    }
    
    public function aPourFils($urlAction){
        foreach ($this->menuFils as $menu){
            if($menu->getUrlAction() == $urlAction){
                return true;
            }
        }
        return false;
    }
}
