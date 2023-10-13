<?php
require_once('model/m_house.php');

//INSTANCE HOUSE MODEL
$house = new House();

//VALIDATE URL AND REDIRECT TO VIEW/HOUSE_DETAIL
if (isset($_GET['view'])) {
    $view = explode('/', $_GET['view']);
    //IF VIEW[1] HAS DETALLE STRING, REDIRECT TO VIEW/V_HOUSE_DETAIL
    if ($view[1] == 'detalle') {
        $view_file = 'view/v_house_detail';

        //SET ID URL TO MODEL HOUSE VAR ID
        $house->setId((int)$view[2]);

        //SAVE RESULT QUERY DETAILHOUSE HOUSE MODEL
        $detail_house = $house->getDetailHouse();

        //IF FILE EXIST
        if (is_file($view_file . '.php')) {
            include $view_file . '.php';
            //IF NOT EXIST, REDIRECT TO ROOT
        } else {
            header('Location: /');
            exit();
        }
        //IF NOT EXIST GET['view], REDIRECT TO VIEW/V_HOUSE
    } else {
        //CALL ADS HOUSES VIEW/V_HOUSE
        $array_house = $house->getHouses();
        require_once('view/v_house.php');
    }
}
