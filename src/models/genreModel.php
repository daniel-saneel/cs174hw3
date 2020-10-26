<?php
namespace serverBros\hw3\models;

class Genre {
    public $genreName;

    //constructor for the genre object 
    public function __construct($genreName){
        $this->genreName = $genreName;
    }

    //return the name of this genre object 
    public function get_genreName() {
        return $this->genreName;
    }
}

?>