<?php

class LongestSubstring {

    private $string;
    private $lengthCharacter;
    private $longestSubstring;

    public function setString($string = null) {
        $this->string = $string;

        $subs = array();
        for($i=0;$i<strlen($this->string);$i++) {
            $k = array();
            for($j=$i; $j<strlen($this->string); $j++) {
                if(!in_array( $this->string[$j], $k)) {
                    $k[] = $this->string[$j];
                }  
                else {
                    break; 
                }
            }
            $subs[] = implode("",$k);
        }
        $this->lengthCharacter = 0; 
        $this->longestSupstring = "";

        for($i=0; $i< count($subs); $i++)
        {
            if(strlen($subs[$i]) > $this->lengthCharacter) 
            { 
                $this->lengthCharacter = strlen($subs[$i]); 
                $this->longestSubstring = $subs[$i]; 
            }
        }
    }

    public function getLengthCharacter() {
        return $this->lengthCharacter;
    }

    public function getLongestSubstring() {
        return $this->longestSubstring;
    }    
}