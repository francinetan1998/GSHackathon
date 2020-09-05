<?php

class Points {

    private $category;
    private $opt;    
    private $points;
    
    public function __construct($category, $opt, $points) {
        $this->uid = $category;
        $this->fullname = $opt;
        $this->points = $points;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getOption() {
        return $this->opt;
    }

    public function getPoints() {
        return $this->points;
    }
}

?>