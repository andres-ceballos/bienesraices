<?php

if (isset($_POST['action'])) {
    $response = array(
        'response' => 'InsertSuccess',
        'post' => $_POST
    );

    die(json_encode($response));
    
} else {
    require_once('view/v_contact.php');
}
