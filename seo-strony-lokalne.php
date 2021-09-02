<?php
session_start();

$actual_link = "$_SERVER[REQUEST_URI]";

//$url = $_SERVER['HTTP_HOST'];

$linkExplode = explode('/', $actual_link);

$urlSlug = $linkExplode[2]; //na produkcje [2]

include_once "classes/db.connect.class.php";
include_once "classes/seoPagesLocal.class.php";
include_once "classes/showSeoPagesLocal.class.php";
include_once "classes/showAdverts.class.php";

$showRealization = new SeoLocalPagesView;
$showRealization->showOnePage($urlSlug);

include_once "includes/modal.php";
include_once "includes/footer-inc.php";
