<?php

//VALIDATE IF DATA POST EXISTS
if (isset($_POST['action'])) {
    $action = $_POST['action'];

    //CALL CONTACT MODEL
    require_once('../model/m_contact.php');

    //INSTANCE CONTACT MODEL
    $contact = new Contact();

    if ($action == 'insert') {

        //VARIABLES FROM CONTACT FORM, PASS TO AJAX AND CONTROLLER
        $contact->setName_user($_POST['name_user']);
        $contact->setEmail_user($_POST['e_mail']);
        $contact->setPhone_user($_POST['phone_number']);
        $contact->setTa_message($_POST['ta_message']);
        $contact->setAd_action($_POST['ad_action']);
        $contact->setPrice($_POST['price']);
        $contact->setContact_type($_POST['contact_type']);
        $contact->setMeet_date($_POST['datetime']);
        $contact->setMeet_hour($_POST['hour']);

        //MODEL METHOD TO SAVE REQUEST
        $contact->saveRequest();

        //VALIDATE IF INSERT QUERY HAS RESULT TRUE OR FALSE
        if ($contact->getStmt_result() == 'savedRequest') {
            $response = array(
                'response' => 'InsertSuccess',
            );
        } else {
            $response = array(
                'response' => 'Error ' . $contact->getStmt_result(),
            );
        }
    }

    die(json_encode($response));
    
} else {
    require_once('view/v_contact.php');
}
