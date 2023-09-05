///Q2: Custom Parser:
function parse($inputString) {
    $output = [];
    $value = 0;

    for ($i = 0; $i < strlen($inputString); $i++) {
        $char = $inputString[$i];
        
        //using the if else conditions
      	/*  
		if($char == 'p'){
		  $value += 1; 
		} else if($char == 'm'){
		    $value -= 1; 
		} else if($char == 's'){
		    $value *= $value; 
		} else if($char == 'o'){
		     $output[] = $value;
		}
        */
        
        // using switch condition        
        switch ($char) {
            case 'p':
                $value += 1;
                break;
            case 'm':
                $value -= 1;
                break;
            case 's':
                $value *= $value;
                break;
            case 'o':
                $output[] = $value;
                break;
            default:
                // Skip invalid characters
                break;
        }
    }

    return $output;
}

// Example usage:
$inputString = "ppppsmoso";
$result = parse($inputString);
print_r($result);
