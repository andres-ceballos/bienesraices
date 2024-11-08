<?php
require_once('model/m_ad.php');

//INSTANCE AD MODEL
$ad = new Ad();

//VALIDATE URL AND REDIRECT TO SPECIFIC CONTROLLER
if (isset($_GET['view'])) {
    $view = explode('/', $_GET['view']);

    //VALIDATE IF IT IS DETAIL OR AD
    if ($view[1] == 'detalle') {
        //IF CONTROLLER FILE EXISTS
        if (is_file(viewURLToController($view))) {
            include viewURLToController($view);
        } else {
            //IF NOT EXIST, REDIRECT TO ROOT
            header('Location: /');
            exit();
        }
    } else {
        //CALL ADS VIEW/V_AD
        $array_ad = $ad->getAds();
        require_once('view/v_ad.php');
    }
}
