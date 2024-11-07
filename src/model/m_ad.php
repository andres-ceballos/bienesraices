<?php

require_once('db/db_connection.php');

class Ad
{

    private $db;
    public $id;
    public $title;
    public $description;
    public $price;
    public $cant_bedroom;
    public $cant_bathroom;
    public $cant_parking;
    public $url_img;
    public $created_at;
    public $updated_at;

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
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of cant_bedroom
     */
    public function getCant_bedroom()
    {
        return $this->cant_bedroom;
    }

    /**
     * Set the value of cant_bedroom
     *
     * @return  self
     */
    public function setCant_bedroom($cant_bedroom)
    {
        $this->cant_bedroom = $cant_bedroom;

        return $this;
    }

    /**
     * Get the value of cant_bathroom
     */
    public function getCant_bathroom()
    {
        return $this->cant_bathroom;
    }

    /**
     * Set the value of cant_bathroom
     *
     * @return  self
     */
    public function setCant_bathroom($cant_bathroom)
    {
        $this->cant_bathroom = $cant_bathroom;

        return $this;
    }

    /**
     * Get the value of cant_parking
     */
    public function getCant_parking()
    {
        return $this->cant_parking;
    }

    /**
     * Set the value of cant_parking
     *
     * @return  self
     */
    public function setCant_parking($cant_parking)
    {
        $this->cant_parking = $cant_parking;

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

    public function getAdsMain()
    {
        try {
            $sql = "SELECT * FROM ads ORDER BY id_ad DESC LIMIT 3";
            $result = $this->db->query($sql);
            $this->db = null;
        } catch (Exception $e) {
            echo 'Error ' . $e->getMessage();
        }

        return $result;
    }
}
