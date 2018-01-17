<?php

/**
 * Created by PhpStorm.
 * User: c16024036
 * Date: 17/01/18
 * Time: 13:52
 */
class Library
{
    const MAX_BOOKS = 50000;
    private $name;
    private $address;
    private $max;
    private $books;

    /**
     * Library constructor.
     * @param $name
     * @param $address
     * @param $max
     */
    public function __construct($name, $address, $max)
    {
        $this->name = $name;
        $this->address = $address;
        if ($max>self::MAX_BOOKS)
            $this->max=self::MAX_BOOKS;
        else
            $this->max = $max;
        $this->books = array();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @param mixed $max
     */
    public function setMax($max)
    {
        $this->max = $max;
    }

    /**
     * @return array
     */
    public function getBooks()
    {
        return $this->books;
    }

    public function afficherLivres(){
        foreach ($this->books as $key => &$val)
        {
            echo  '</br>' . $val->afficherLivre() ;
        }
    }

    public function ajouterLivre($book){
        $this->books[] = $book;
    }

    public function enleverLivre($book){
        unset($this->books[$book]);
    }

    public function supprimerDoublons(){
        $this->books = array_unique($this->books);
    }

    public function lireDeuxBibliotheques($library){
        echo '<strong>' . $this->name . ' : </strong></br>';
        foreach ($this->books as $key => &$val)
        {
            echo '</br>' . $val->afficherLivre();
        }
        echo '<strong>' . $library->name . ' : </strong></br>';
        foreach ($library->books as $key => &$val)
        {
            echo '</br>' . $val->afficherLivre();
        }
    }

    public function triParAuteur(){
        asort($this->books, SORT_STRING);
    }
}