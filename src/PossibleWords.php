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

    public function getWordsArray()
    {
        $WordsArray= $this->recursion($this->numArray, 0, array(), $this->numlen);
    }
    
    protected function recursion($numArray, $currentLen, $result, $stringlen)
    {
        if ($currentLen == $stringlen) {
            $this->display(implode('', $result));
            return;
        }

        $charArray = $this->charArray;
        $offset    = $numArray[$currentLen];
        $charArrCount = strlen($charArray[$offset]);// count of letters in offset position $charArray[2] ='ABC' length = 3;
        
        //If 0 or 1 comes return from there
        if ($offset == 0 || $offset == 1) {
            $this->display(implode('', $result));
            return;
        }
    
        //loop for all charcters according to given digits
        for ($i=0; $i < $charArrCount; $i++) {
            $result[$currentLen] = $charArray[$offset][$i];
            $this->recursion($numArray, $currentLen+1, $result, $stringlen);
        }
    }

    public function display($result = '')
    {
        printf(($result ? $result  : 'No Possible Words Found'));
        echo "\n";
    }
}
