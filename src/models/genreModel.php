<?php
namespace serverBros\hw3\models\genreModel;

class Genre {
    public $genreName;

    public function __construct($genreName){
        $this->genreName = $genreName;
    }
}

?>