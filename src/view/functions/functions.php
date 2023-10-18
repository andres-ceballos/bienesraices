<?php

//DATE FORMAT TO dd/MM/AAAA
function dateFormat($bd_date)
{
    $newDateFormat = date("d/m/Y", strtotime($bd_date));

    return $newDateFormat;
}

//CURRENT URL VALIDATION SHOW INFO TEMPLATE/HEADER AND TEMPLATE/HOUSE_AD
function urlCurrent()
{
    $url = $_SERVER['REQUEST_URI'];

    return $url;
}

//REDIRECT FRIENDLY URL NAME TO FILES .PHP C_MAIN
function friendlyURL($view)
{
    if ($view[0] == 'nosotros') {
        $controller_file = 'controller/c_us';
    } else if ($view[0] == 'anuncios') {
        $controller_file = 'controller/c_house';
    } else if ($view[0] == 'blog') {
        $controller_file = 'controller/c_blog';
    }

    return $controller_file;
}

//FORMAT PRICE NUMBER IN ADS MAIN, ADS PAGE AND DETAIL AD PAGE
function formatMoneyNumber($money){
    $format_money = number_format($money, 0, ',', '.');

    return $format_money;
}
