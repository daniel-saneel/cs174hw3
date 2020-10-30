<?php  


namespace serverBros\hw3\models;

require_once('config.php');

class movieReview extends Model {
    public $reviewTitle;
    public $reviewText;
    public $genreReviewName;

    public function __construct($reviewTitle,$reviewText,$genreReviewName) {
        $this->reviewTitle = $reviewTitle;
        $this->reviewText = $reviewText;
        $this->genreReviewName=$genreReviewName;
    }   

    public function get_reviewTitle(){
        return $this->reviewTitle;
    }

    public function get_reviewText(){
        return $this->reviewText;
    }

    public function get_genreReviewName(){
        return $this->genreReviewName;
    }

    public function insertMovieReview() {

         //use inherited variables 

         $insertReviewQuery = $connection->prepare("INSERT INTO Reviews(genreName, title, content, insertDate) VALUES(?,?,?,curdate())");
         $insertReviewQuery->bind_param("sss",$genreName,$reviewTitle,$reviewText);
 
         $genreName=$this->get_genreReviewName();
         $reviewTitle = $this->get_reviewTitle();
         $reviewText = $this->get_reviewText();
 
         $insertGenreQuery->execute();


    }

    public function deleteReview(){

        $deleteGenreQuery = $connection->prepare("DELETE FROM Reviews WHERE title=(?)");
        $deleteGenreQuery->bind_param("s",$reviewTitle);
        $genreName=$this->get_reviewTitle();
        $insertGenreQuery->execute();

    }


}

?>