<?php
PHP
class person{

    public function getName()
    {
        return $this->name;
    }


    public function setName($name)
    {
        $this->name = $name;
    }

    public function getMidlename()
    {
        return $this->midlename;
    }

    public function setMidlename($midlename)
    {
        $this->midlename = $midlename;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }
    public $name;
    public $midlename;
    public $lastname;

    public function __construct($name, $midlename, $lastname)
    {
        $this->name = $name;
        $this->midlename = $midlename;
        $this->lastname = $lastname;
    }

}




