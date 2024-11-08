<?php
//INSTANCE AD MODEL
$ad = new Ad();

//SET ID URL TO MODEL AD VAR ID
$ad->setId((int)$view[2]);

//SAVE RESULT QUERY DETAIL AD MODEL
$detail_ad = $ad->getDetailAd();

require_once('view/v_ad_detail.php');
