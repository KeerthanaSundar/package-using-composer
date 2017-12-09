<?php 

namespace Keerthana;

class PossibleWords 
{
   
   

   public function __Construct($dailKeynumbers)
    {
        $this->numArray = explode(',', $dailKeynumbers);
        $this->numlen   = count($this->numArray);
        $this->charArray = array("", "", "ABC", "DEF", "GHI", "JKL","MNO", "PQRS", "TUV", "WXYZ");
    }

    function getWordsArray(){
        //$result = array();
        $WordsArray= $this->recursion($this->numArray,0,array(),$this->numlen);
    }
	
	function recursion($numArray,$currentLen,$result,$stringlen){
    
     	
	    if ($currentLen == $stringlen)
	    {

	        //echo $newArray = implode('', $result).'<br>';
           $this->display(implode('', $result));
	        return; 
	    }


     	$charArray = $this->charArray;
     	$offset    = $numArray[$currentLen];
     	$charArrCount = strlen($charArray[$offset]);// count of letters in offset position $charArray[2] ='ABC' length = 3;
    
    //loop for all charcters according to given digits
	    for ($i=0; $i < $charArrCount; $i++)
	    {
	       
	        $result[$currentLen] = $charArray[$offset][$i];
	        $this->recursion($numArray, $currentLen+1, $result, $stringlen);
	        //If 0 or 1 comes return from there
	        if($offset == 0 || $offset == 1)
	        { 
	            $this->display('');
	            return;
	        }
	    }
	}

	public function display($result = '')
    {
        printf(($result ? $result  : 'No Possible Words Found'));
        echo "\n";
        //return;
    }


}