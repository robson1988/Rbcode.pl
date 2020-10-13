<?php

$actual_link = "$_SERVER[REQUEST_URI]";
//echo $actual_link."<br>";

$linkExplode = explode('/', $actual_link);

echo $linkExplode[1]."<br>";
echo $linkExplode[2]."<br>";


 ?>
