<?php  


namespace serverBros\hw3\models;

class movieReview extends genreModel {
    public $reviewTitle;
    public $reviewText;

    public function __construct($reviewTitle,$reviewText) {
        $this->reviewTitle = $reviewTitle;
        $this->reviewText = $reviewText;
    }   

    public function get_reviewTitle(){
        return $this->reviewTitle;
    }

    public function get_reviewText(){
        return $this->reviewText;
    }

}

?>