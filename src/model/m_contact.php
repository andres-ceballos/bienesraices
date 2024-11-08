<?php
require_once('db/db_connection.php');

class Contact
{
    private $db;
    private $role_id;
    private $name_user;
    private $email_user;
    private $phone_user;
    private $password_user;
    private $ta_message;
    private $property_type;
    private $price;
    private $contact_type;
    private $meet_date;
    private $meet_hour;
    private $stmt_result;

    public function __construct()
    {
        $this->db = Connection::Connect();
    }

    /**
     * Get the value of role_id
     */ 
    public function getRole_id()
    {
        return $this->role_id;
    }

    /**
     * Set the value of role_id
     *
     * @return  self
     */ 
    public function setRole_id($role_id)
    {
        $this->role_id = $role_id;

        return $this;
    }

    /**
     * Get the value of name_user
     */ 
    public function getName_user()
    {
        return $this->name_user;
    }

    /**
     * Set the value of name_user
     *
     * @return  self
     */ 
    public function setName_user($name_user)
    {
        $this->name_user = $name_user;

        return $this;
    }

    /**
     * Get the value of email_user
     */ 
    public function getEmail_user()
    {
        return $this->email_user;
    }

    /**
     * Set the value of email_user
     *
     * @return  self
     */ 
    public function setEmail_user($email_user)
    {
        $this->email_user = $email_user;

        return $this;
    }

    /**
     * Get the value of phone_user
     */ 
    public function getPhone_user()
    {
        return $this->phone_user;
    }

    /**
     * Set the value of phone_user
     *
     * @return  self
     */ 
    public function setPhone_user($phone_user)
    {
        $this->phone_user = $phone_user;

        return $this;
    }

    /**
     * Get the value of password_user
     */ 
    public function getPassword_user()
    {
        return $this->password_user;
    }

    /**
     * Set the value of password_user
     *
     * @return  self
     */ 
    public function setPassword_user($password_user)
    {
        $this->password_user = $password_user;

        return $this;
    }

    /**
     * Get the value of ta_message
     */ 
    public function getTa_message()
    {
        return $this->ta_message;
    }

    /**
     * Set the value of ta_message
     *
     * @return  self
     */ 
    public function setTa_message($ta_message)
    {
        $this->ta_message = $ta_message;

        return $this;
    }

    /**
     * Get the value of property_type
     */ 
    public function getProperty_type()
    {
        return $this->property_type;
    }

    /**
     * Set the value of property_type
     *
     * @return  self
     */ 
    public function setProperty_type($property_type)
    {
        $this->property_type = $property_type;

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
     * Get the value of contact_type
     */ 
    public function getContact_type()
    {
        return $this->contact_type;
    }

    /**
     * Set the value of contact_type
     *
     * @return  self
     */ 
    public function setContact_type($contact_type)
    {
        $this->contact_type = $contact_type;

        return $this;
    }

    /**
     * Get the value of meet_date
     */ 
    public function getMeet_date()
    {
        return $this->meet_date;
    }

    /**
     * Set the value of meet_date
     *
     * @return  self
     */ 
    public function setMeet_date($meet_date)
    {
        $this->meet_date = $meet_date;

        return $this;
    }

    /**
     * Get the value of meet_hour
     */ 
    public function getMeet_hour()
    {
        return $this->meet_hour;
    }

    /**
     * Set the value of meet_hour
     *
     * @return  self
     */ 
    public function setMeet_hour($meet_hour)
    {
        $this->meet_hour = $meet_hour;

        return $this;
    }

    /**
     * Get the value of stmt_result
     */ 
    public function getStmt_result()
    {
        return $this->stmt_result;
    }

    /**
     * Set the value of stmt_result
     *
     * @return  self
     */ 
    public function setStmt_result($stmt_result)
    {
        $this->stmt_result = $stmt_result;

        return $this;
    }
}