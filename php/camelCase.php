<?php 

//Q1: Convert String to Camel Case:
function camelCase($inputString, $delimiter = '_') {

    // Remove underscores and split the string by $delimiter
    $words = explode($delimiter, $inputString);
    $i = 0;
    
    foreach($words as $value){
    
        //get first char and make uppercase
        $firstLetter = strtoupper(substr($value, 0, 1));
        
        //rest string make lowercase
        $restOfWord  = strtolower(substr($value, 1));
        
        //combine the two string first letter is capiltal
        $words[$i] =$firstLetter .$restOfWord; 
        
        $i++;
    }
    //return the string 
    return implode($words);
} 
//"the-test-case" gets converted to "theTestCase"

//"The_First_Word_Capital" gets converted to "TheFirstWordCapital"
$camaleCase = camelCase('the-test-case','-');
echo $camaleCase; 
?>
