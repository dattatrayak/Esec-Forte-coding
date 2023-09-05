<?php
//Q3: Find the missing alphabet:
echo "</br>------------------------------------------------------------"; 
function findMissingCharacters($charString){
    $matchChart = 'abcdefghijklm';
    $count = 0; 
    //convert string to array
    $matchCharArray = str_split($matchChart); 
    for($i = 0; $i < strlen($charString); $i++){
    	// each element find in array if find then increment count 
        if(!in_array(strtolower($charString[$i]),$matchCharArray )){
            $count++;
        }
    }
 
    return $count;
    echo $count;
}

echo findMissingCharacters('abcdefghijklmqwqwxxzz');
