<?php 
 
require 'vendor/autoload.php';

use Keerthana\PossibleWords;

$dailKeynumbers ='2,3,4';// input numbers with comma separated

$possiblewords = new PossibleWords($dailKeynumbers);
$possiblewordsRes = $possiblewords->getWordsArray();
