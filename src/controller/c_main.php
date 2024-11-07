<?php
require_once('view/functions/routes.php');
require_once('view/functions/functions.php');
require_once('model/m_main.php');

//INSTANCE MAIN MODEL
$Main = new Main();

//VALIDATE URL AND REDIRECT TO SPECIFIC CONTROLLER
if (isset($_GET['view'])) {
    $view = explode('/', $_GET['view']);

    //IF CONTROLLER FILE EXISTS
    if (is_file(viewURLToController($view))) {
        include viewURLToController($view);
    } else {
        //IF NOT EXIST, REDIRECT TO ROOT
        header('Location: /');
        exit();
    }
} else {
    //IF NOT EXIST GET['view], REDIRECT TO VIEW/V_MAIN
    $array_ad = $Main->ads;
    $array_blog = $Main->blogs;
    $array_review = $Main->reviews;

    require_once('view/v_main.php');
}
