<?php
namespace serverBros\hw3\models;
require_once('config.php');

class Genre extends Model {
    public $genreName;

    //constructor for the genre object 
    public function __construct($genreName){
        $this->genreName = $genreName;
    }

    //return the name of this genre object 
    public function get_genreName() {
        return $this->genreName;
    }

    public function insertGenre(){
        //use inherited variables 

        $insertGenreQuery = $connection->prepare("INSERT INTO Genres(name) VALUES(?)");
        $insertGenreQuery->bind_param("s",$genreName);

        $genreName=$this->get_genreName();

        $insertGenreQuery->execute();

    }

    public function deleteGenre(){

        $deleteGenreQuery = $connection->prepare("DELETE FROM Genres WHERE name=(?)");
        $deleteGenreQuery->bind_param("s",$genreName);
        $genreName=$this->get_genreName();
        $insertGenreQuery->execute();



    }
}

?>