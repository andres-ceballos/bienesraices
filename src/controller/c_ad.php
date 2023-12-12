<?php
require_once('model/m_ad.php');

//INSTANCE AD MODEL
$ad = new Ad();

//VALIDATE URL AND REDIRECT TO VIEW/AD_DETAIL
if (isset($_GET['view'])) {
    $view = explode('/', $_GET['view']);
    //IF VIEW[1] HAS DETALLE STRING, REDIRECT TO VIEW/V_AD_DETAIL
    if ($view[1] == 'detalle') {
        $view_file = 'view/v_ad_detail';

        //SET ID URL TO MODEL AD VAR ID
        $ad->setId((int)$view[2]);

        //SAVE RESULT QUERY DETAIL AD MODEL
        $detail_ad = $ad->getDetailAd();

        //IF FILE EXIST
        if (is_file($view_file . '.php')) {
            include $view_file . '.php';
            //IF NOT EXIST, REDIRECT TO ROOT
        } else {
            header('Location: /');
            exit();
        }
        //IF NOT EXIST GET['view], REDIRECT TO VIEW/V_AD
    } else {
        //CALL ADS VIEW/V_AD
        $array_ad = $ad->getAds();
        require_once('view/v_ad.php');
    }
}
