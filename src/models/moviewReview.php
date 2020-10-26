<?php 

class moviewReview {
    public $reviewTitle;
    public $reviewText;

    public function __construct($reviewTitle,$reviewText) {
        $this->reviewTitle = $reviewTitle;
        $this->reviewText = $reviewText;
    }   

}

?>