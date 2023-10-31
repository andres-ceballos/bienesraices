<?php
require_once('db/db_connection.php');

class Contact
{
    private $db;
    private $name_user;
    private $email_user;
    private $phone_user;
    private $ta_message;
    private $ad_action;
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
     * Get the value of ad_action
     */
    public function getAd_action()
    {
        return $this->ad_action;
    }

    /**
     * Set the value of ad_action
     *
     * @return  self
     */
    public function setAd_action($ad_action)
    {
        $this->ad_action = $ad_action;

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
     * Get the value of stmt_confirmation
     */
    public function getStmt_result()
    {
        return $this->stmt_result;
    }

    /**
     * Set the value of stmt_confirmation
     *
     * @return  self
     */
    public function setStmt_result($stmt_result)
    {
        $this->stmt_result = $stmt_result;

        return $this;
    }

    public function saveRequest()
    {
        try {
            $query = "INSERT INTO users (role_id, name_user, email_user, email_verified_at, phone_user, password_user, created_at, update_at) ";
            $query .= "VALUES (2, :u_name_user, :u_email_user, NULL, :u_phone_user, 'w1th0u4', NOW(), NOW()); ";
            $stmt = $this->db->prepare($query);
            $stmt->execute(array(":u_name_user" => $this->name_user, ":u_email_user" => $this->email_user, ":u_phone_user" => $this->phone_user));

            $last_user_id = $this->db->lastInsertId();

            //VALIDATE IF INSERT QUERY HAS RESULT TRUE OR FALSE
            $result = $stmt->rowCount();

            if ($result > 0) {
                $stmt_result = 'true';
            } else {
                $stmt_result = 'false';
            }

            $query = "INSERT INTO requests (user_id, detail, ad_action, price, contact_type, meet_datetime, created_at, updated_at) ";
            $query .= "VALUES (:u_user_id, :u_ta_message, :u_ad_action, :u_price, :u_contact_type,:u_meet_datetime, NOW(), NOW()); ";
            $stmt = $this->db->prepare($query);
            $stmt->execute(array(":u_user_id" => $last_user_id, ":u_ta_message" => $this->ta_message, ":u_ad_action" => $this->ad_action, ":u_price" => $this->price, ":u_contact_type" => $this->contact_type, ":u_meet_datetime" => $this->meet_date . " " . $this->meet_hour));

            //VALIDATE IF INSERT QUERY HAS RESULT TRUE OR FALSE
            $result = $stmt->rowCount();

            if ($stmt_result == 'true' && $result > 0) {
                $this->setStmt_result('savedRequest');
            } else {
                $this->setStmt_result('unsavedRequest');
            }

            //CLOSE STATEMENT AND CONNECTION
            $stmt->closeCursor();
            $this->db = null;
        } catch (Exception $e) {
            $this->setStmt_result('Exception ' . $e->getMessage());
        }
    }

    public function saveRequestBk()
    {
        try {
            $query = "INSERT INTO requests (name_user, email_user, phone_user, detail, ad_action, price, contact_type, meet_datetime, created_at, updated_at) ";
            $query .= "VALUES (:u_name_user, :u_e_mail, :u_phone_number, :u_ta_message, :u_ad_action, :u_price, :u_contact_type,:u_meet_datetime, NOW(), NOW())";
            $stmt = $this->db->prepare($query);
            $stmt->execute(array(":u_name_user" => $this->name_user, ":u_e_mail" => $this->email_user, ":u_phone_number" => $this->phone_user, ":u_ta_message" => $this->ta_message, ":u_ad_action" => $this->ad_action, ":u_price" => $this->price, ":u_contact_type" => $this->contact_type, ":u_meet_datetime" => $this->meet_date . " " . $this->meet_hour));

            //VALIDATE IF INSERT QUERY HAS RESULT TRUE OR FALSE
            $result = $stmt->rowCount();

            if ($result > 0) {
                $this->setStmt_result('true');
            } else {
                $this->setStmt_result('false');
            }

            //CLOSE STATEMENT AND CONNECTION
            $stmt->closeCursor();
            $this->db = null;
        } catch (Exception $e) {
            $this->setStmt_result('Exception ' . $e->getMessage());
        }
    }
}
