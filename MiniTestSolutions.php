<?php 

//function to solve the question
function specialLooping($x){
 
    //make a looping with x range
    for($number = 1; $number <= $x ; $number++){
        
        //if number can divided by three and five
        if($number % 3 == 0 && $number % 5 == 0){
            //print "TigaLima" and continue to the next loop
            echo "TigaLima".PHP_EOL;
            continue;
        }

        //if number can only divided by five
        if($number % 5 == 0){
            //print "Lima" and continue to the next loop
            echo "Lima".PHP_EOL;
            continue;
        }

        //if number can only divided by three
        if($number % 3 == 0){
            //print "Tiga" and continue to the next loop
            echo "Tiga".PHP_EOL;
            continue;
        }      
        
        //print number that do not match the if statement above
        echo $number.PHP_EOL;
    }
}

// run the specialLooping
specialLooping(50);

?>
