<?php

namespace serverBros\hw3\models;

require_once('config.php');
require_once('moviewReview.php');

//get All reviews associated with a given genre, to render on the page for a given genre 
//under the reviews list
class getReviews extends Model {
public $reviewList;
public $getReviewsQuery;
public $genreName;


function __construct($genreName){
    $this->genreName=$genreName;
    $reviewList=array();
}

function get_genreName(){
    return $this->genreName;
}

function fetchReviews() {
    $getReviewsQuery = $connection->prepare("SELECT title FROM Reviews WHERE genreName = (?) ORDER BY insertDate DESC");
    $getReviewsQuery->bind_param("s",$genreName);
    $genreName = get_genreName();
    $result = mysqli_query($connection,$getReviewsQuery);
   

    while($row = mysqli_fetch_row($result)){
        array_push($this->reviewList, $row[0]);
        echo "inserted";
        
    }
    $result-> free_result();
    

    return $reviewList;

}


}