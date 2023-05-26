<?php

namespace App\Models;

class ConfigurationModel extends Model
{
    protected $_id;
    protected $slogan;
    protected $number_watsapp;
    protected $maps_location;
    protected $email;
    protected $pays;
    protected $ville;
    protected $adress;
    protected $terme_licence;
    protected $social;
    protected $social_1;
    protected $social_2;
    protected $social_3;
    protected $social_4;
    protected $social_5;
    protected $description;
    protected $created_at;

    public function __construct()
    {
        $class = str_replace(__NAMESPACE__.'\\', '', __CLASS__);
        $virtual_Table= strtolower(str_replace('Model', '', $class));
        $this->table = 'hesed_'.$virtual_Table;
    }




    public function SaveModifications($donnee){
           $this->slogan=strip_tags($donnee['slonga']);
           $this->number_watsapp=strip_tags($donnee['number_w']);
           $this->maps_location=$donnee['maps'];
           $this->email=strip_tags($donnee['email']);
           $this->pays=strip_tags($donnee['pays']);
           $this->ville=strip_tags($donnee['ville']);
           $this->adress=strip_tags($donnee['adress']);
           $this->terme_licence=$donnee['terms'];
           $this->social=strip_tags($donnee['social']);
           $this->social_1=strip_tags($donnee['social_1']);
           $this->social_2=strip_tags($donnee['social_2']);
           $this->social_3=strip_tags($donnee['social_3']);
           $this->social_4=strip_tags($donnee['social_4']);
           $this->description=$donnee['descriptions'];


        
           $this->update(1, $this);
           echo json_encode(['message'=>"Vos modifications sont enregistrée avec succès."]);
           die;
           

    }

    /**
     * Get the value of _id
     */
    public function get_id()
    {
        return $this->_id;
    }

    /**
     * Set the value of _id
     */
    public function set_id($_id): self
    {
        $this->_id = $_id;

        return $this;
    }

    /**
     * Get the value of slogan
     */
    public function getSlogan()
    {
        return $this->slogan;
    }

    /**
     * Set the value of slogan
     */
    public function setSlogan($slogan): self
    {
        $this->slogan = $slogan;

        return $this;
    }

    /**
     * Get the value of number_watsapp
     */
    public function getNumberWatsapp()
    {
        return $this->number_watsapp;
    }

    /**
     * Set the value of number_watsapp
     */
    public function setNumberWatsapp($number_watsapp): self
    {
        $this->number_watsapp = $number_watsapp;

        return $this;
    }

    /**
     * Get the value of maps_location
     */
    public function getMapsLocation()
    {
        return $this->maps_location;
    }

    /**
     * Set the value of maps_location
     */
    public function setMapsLocation($maps_location): self
    {
        $this->maps_location = $maps_location;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of pays
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set the value of pays
     */
    public function setPays($pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get the value of ville
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     */
    public function setVille($ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of adress
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set the value of adress
     */
    public function setAdress($adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get the value of terme_licence
     */
    public function getTermeLicence()
    {
        return $this->terme_licence;
    }

    /**
     * Set the value of terme_licence
     */
    public function setTermeLicence($terme_licence): self
    {
        $this->terme_licence = $terme_licence;

        return $this;
    }

    /**
     * Get the value of social
     */
    public function getSocial()
    {
        return $this->social;
    }

    /**
     * Set the value of social
     */
    public function setSocial($social): self
    {
        $this->social = $social;

        return $this;
    }

    /**
     * Get the value of social_1
     */
    public function getSocial1()
    {
        return $this->social_1;
    }

    /**
     * Set the value of social_1
     */
    public function setSocial1($social_1): self
    {
        $this->social_1 = $social_1;

        return $this;
    }

    /**
     * Get the value of social_2
     */
    public function getSocial2()
    {
        return $this->social_2;
    }

    /**
     * Set the value of social_2
     */
    public function setSocial2($social_2): self
    {
        $this->social_2 = $social_2;

        return $this;
    }

    /**
     * Get the value of social_3
     */
    public function getSocial3()
    {
        return $this->social_3;
    }

    /**
     * Set the value of social_3
     */
    public function setSocial3($social_3): self
    {
        $this->social_3 = $social_3;

        return $this;
    }

    /**
     * Get the value of social_4
     */
    public function getSocial4()
    {
        return $this->social_4;
    }

    /**
     * Set the value of social_4
     */
    public function setSocial4($social_4): self
    {
        $this->social_4 = $social_4;

        return $this;
    }

    /**
     * Get the value of social_5
     */
    public function getSocial5()
    {
        return $this->social_5;
    }

    /**
     * Set the value of social_5
     */
    public function setSocial5($social_5): self
    {
        $this->social_5 = $social_5;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of created_at
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     */
    public function setCreatedAt($created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }
}