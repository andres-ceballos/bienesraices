<?php

require_once('model/m_main.php');
$Main = new Main();

$array_house = $Main->houses;
$array_blog = $Main->blogs;
$array_review = $Main->reviews;

require_once('view/v_main.php');
