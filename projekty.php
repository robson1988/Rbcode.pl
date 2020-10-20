<?php
session_start();
$actual_link = "$_SERVER[REQUEST_URI]";

//$url = $_SERVER['HTTP_HOST'];

$linkExplode = explode('/', $actual_link);

$urlSlug = $linkExplode[2]; //na produkcje [2]

include_once "classes/db.connect.class.php";
include_once "classes/projects.class.php";
include_once "classes/showprojects.class.php";

$showRealization = new ProjectsView;
$showRealization->showOneProject($urlSlug);

include_once "includes/footer-inc.php";
