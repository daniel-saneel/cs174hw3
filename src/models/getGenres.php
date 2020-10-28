<?php 

namespace serverBros\hw3\models;
require_once('config.php');

//this is the controller class that can be called everytime 
//you need to fetch the current list of genres in the db
//list of genre names will be stored in the array
class GetCurrentsGenres{
    public $servername;
    public $username;
    public $password;
    public $getGenreQuery;
    public $dbName;
    public $listofGenres;

function __construct(){
    $dbconfig = new config();
    $servername = $dbconfig::SERVERNAME;
    $username = $dbconfig::USERNAME;
    $password = $dbconfig:: PASSWORD;
    $dbName=$dbconfig::DBNAME; 
    $getGenreQuery= "SELECT name FROM Genres ORDER BY name ASC";
    $listofGenres = array();
}

function fetchGenres(){
    $connection = new mysqli($this->servername, $this->username, $this->password, $this->dbName);

    if($connection-> connect_error) {
        die("connection failed: " . $connection->connect_error);
    }

    $result= mysqli_query($connection, $getGenreQuery);

    //add elements of result set to array
    while($row = mysqli_fetch_row($result)){
        array_push($this->listofGenres, $row[0]);
        echo "inserted";
        
    }
    $result-> free_result();
    
    $connection->close();

    return $this->listofGenres;
}

}



?>