<?php
require_once('db/db_connection.php');
require_once('model/m_ad.php');
require_once('model/m_blog.php');
require_once('model/m_review.php');

class Main
{

    private $db;
    public $ads;
    public $blogs;
    public $reviews;

    public function __construct()
    {
        $this->db = new Connection();
        $this->db = $this->db->Connect();

        $ad = new Ad();
        $this->ads = $ad->getAdsMain();

        $blog = new Blog();
        $this->blogs = $blog->getBlogsMain();

        $review = new Review();
        $this->reviews = $review->getReviewsMain();
    }
}
