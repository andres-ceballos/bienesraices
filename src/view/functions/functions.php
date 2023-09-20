<?php

function dateFormat($bd_date)
{
    $newDateFormat = date("d/m/Y", strtotime($bd_date));

    return $newDateFormat;
}
