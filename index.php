<?php 

require 'vendor/autoload.php';

use Keerthana\PossibleWords;

$dailKeynumbers ='6,7,9';// input numbers with comma separated

$possiblewords = new PossibleWords($dailKeynumbers);
$possiblewordsRes = $possiblewords->getWordsArray();



?>