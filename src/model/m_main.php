<?php

require_once('db/db_connection.php');
require_once('model/m_house.php');
require_once('model/m_blog.php');
require_once('model/m_review.php');

class Main
{
    private $db;
    public $houses;
    public $blogs;
    public $reviews;

    public function __construct()
    {
        $this->db = new Connection();
        $this->db = $this->db->Connect();
        
        $house = new House();
        $this->houses = $house->getHousesMain();

        $blog = new Blog();
        $this->blogs = $blog->getBlogsMain();

        $review = new Review();
        $this->reviews = $review->getReviewsMain();
    }
}
