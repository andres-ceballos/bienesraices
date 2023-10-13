<?php
require_once('view/functions/functions.php');
require_once('model/m_main.php');

//INSTANCE MAIN MODEL
$Main = new Main();

//VALIDATE URL AND REDIRECT (FUNCTIONS) TO SPECIFIC CONTROLLER
if (isset($_GET['view'])) {
    $view = explode('/', $_GET['view']);

    //IF FILE EXIST
    if (is_file(friendlyURL($view) . '.php')) {
        include friendlyURL($view) . '.php';
        //IF NOT EXIST, REDIRECT TO ROOT
    } else {
        header('Location: /');
        exit();
    }
    //IF NOT EXIST GET['view], REDIRECT TO VIEW/V_MAIN
} else {

    //CALL ADS HOUSES, BLOGS AND REVIEWS VIEW/V_MAIN
    $array_house = $Main->houses;
    $array_blog = $Main->blogs;
    $array_review = $Main->reviews;
    require_once('view/v_main.php');
}
