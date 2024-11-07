<?php
//DATE FORMAT TO dd/MM/AAAA
function dateFormat($bd_date)
{
    $newDateFormat = date("d/m/Y", strtotime($bd_date));

    return $newDateFormat;
}

//FORMAT PRICE NUMBER IN ADS MAIN, ADS PAGE AND DETAIL AD PAGE
function formatMoneyNumber($money)
{
    $format_money = number_format($money, 0, ',', '.');

    return $format_money;
}
