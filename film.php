<?php
/**
 * FILM CLASS
 * 
 */
class Film {
    /**
     * ATTRIBUTES
     */
    public $title;
    public $description;
    public $year;

    /**
     * CONSTRUCTOR (implicit public)
     */
    function __construct($title, $description, $year) {
        $this->title = $title;
        $this->description = $description;
        $this->year = $year;
    }

    /**
     * GET EXERPT FOR FILM DESCRIPTION
     */
    public function getExerpt() {
        return substr($this->description, 0, 255);
    }
}