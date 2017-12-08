<?php 
require 'vendor/autoload.php';
printf("Right now am %s years old", Carbon\Carbon::createFromDate(1990, 11, 25)->age);
?>