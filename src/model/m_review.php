<?php
require_once('db/db_connection.php');

class Review
{
    private $db;
    private $id;
    private $user_id;
    private $title;
    private $description;
    private $url_img;
    private $created_at;
    private $updated_at;

    public function __construct()
    {
        $this->db = Connection::Connect();
    }



    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of user_id
     */
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * Set the value of user_id
     *
     * @return  self
     */
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of url_img
     */
    public function getUrl_img()
    {
        return $this->url_img;
    }

    /**
     * Set the value of url_img
     *
     * @return  self
     */
    public function setUrl_img($url_img)
    {
        $this->url_img = $url_img;

        return $this;
    }

    /**
     * Get the value of created_at
     */
    public function getCreated_at()
    {
        return $this->created_at;
    }

    /**
     * Set the value of created_at
     *
     * @return  self
     */
    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the value of updated_at
     */
    public function getUpdated_at()
    {
        return $this->updated_at;
    }

    /**
     * Set the value of updated_at
     *
     * @return  self
     */
    public function setUpdated_at($updated_at)
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getReviewsMain()
    {
        try {
            $sql = "SELECT * FROM reviews ";
            $sql .= "INNER JOIN users ";
            $sql .= "ON reviews.user_id = users.id_user ";
            $sql .= "ORDER BY id_review DESC LIMIT 1";
            $result = $this->db->query($sql);
            $this->db = null;
        } catch (Exception $e) {
            echo 'Error ' . $e->getMessage();
        }

        return $result;
    }
}
