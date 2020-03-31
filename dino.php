<?php

class dinosaure
{

    private $_length;
    private $_life;
    protected $_damage;
    private $_type;
    private $_name;
    private $_gender;


    /**
     * Méthode constructeur de la classe mère Dinosaure
     * Attend en entrée 6 arguments
     * @$damage => représente les dégats que peut réaliser un dinosaure en une attaque // Float
     * @$length => représente la taille du dinosaure // Int
     * @$name => représente le nom du Dinosaure // String
     * @$type => représente le régime alimentaire du dinosaure //String
     * @$gender => représente le sexe du dinosaure
     * @$gender => représente le sexe du dinosaure
     *
     */
    public function __construct($length, $life, $damage, $type, $name, $gender)
    {

        $this->_length = $length;
        $this->_life = $life;
        $this->_damage = $damage;
        $this->_type = $type;
        $this->_name = $name;
        $this->_gender = $gender;
    }


// Ascesseurs GET
    public function getName()
    {
        return $this->_name;
    }

    public function getLife()
    {
        return $this->_life;
    }

    public function setLife($value)
    {
        $this->_life = $this->_life - $value;
    }

    public function getGender()
    {
        return $this->_gender;
    }

    public function getDamage()
    {
        return $this->_damage;
    }

    public function getType()
    {
        return $this->_type;
    }

// Ascesseurs Set

    public function getLength()
    {
        return $this->_length;
    }


}


class tyrex extends dinosaure
{

    private $_sizeArms;
    private $_nbrArms;


    public function __construct($length, $life, $damage, $name, $gender, $nbrArms, $sizeArms)
    {
        parent::__construct($length, $life, $damage, "sol", $name, $gender);
        $this->_nbrArms = $nbrArms;
        $this->_sizeArms = $sizeArms;
    }


    public function getNbrArms()
    {
        return $this->_nbrArms;
    }

    public function getSizeArms()
    {
        return $this->_sizeArms;
    }

    public function makeSeism($dualType, $defense)
    {
        if ($dualType == true) {
            $defense->setLife(10);

        }
    }

}


class pterodactyle extends dinosaure
{


    private $_sizeWings;
    private $_nbrWings = 2;


    public function __construct($length, $life, $damage, $name, $gender, $sizeWings)
    {
        parent::__construct($length, $life, $damage, "vol", $name, $gender);
        $this->_sizeWings = $sizeWings;
    }


    public function getNbrWings()
    {
        return $this->_nbrWings;
    }

    public function getSizeArms()
    {
        return $this->_sizeArms;
    }

    public function makeTornado($dualType)
    {
        if ($dualType == true) {
            $this->_damage = $this->_damage + 15;
        }
    }


}


?>


