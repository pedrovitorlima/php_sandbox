<?php
    #When using double quotes, php can interpret variable values inside {}
    #ex:. "{$myVar}" .  "this will print $myVar";
    #This not happens with use of single quotes.



    #String tests
    $myPresentation = "Hi, my name is Pedro Rodrigues!";
    $person_name = "Ted";

    #printing a string
    #echo "Hi! My name is {$person_name}" #way 1
    #echo "Hi! My name is $person_name" . $person_name; #way 2
    print("Hi! My name is $person_name"); #print function aways return 1

    echo "<br />";

    #the same as rtrim, removing blank spaces of my right side
    echo chop($myPresentation . '   ');

    echo "<br />";

    #return a String of the char code specified
    echo $myPresentation . chr(27) . '.';
    #this is more useful:
    #sprintf("I'm adding a space character to this string: %c", 27);

    echo "<br />";

    #divide a string in small pieces
    echo chunk_split($myPresentation, 3);

    echo "<br />";

    #return infos about a string
    #this can return a lot of format values, including arrays
    #to config, pass the mode on parameter
    #1 will return a byte-value array with char as label and value as frequency
    #count_chars("this is another big string, but to count", 1);
   
    #return the size of a string
    echo "The size of my presentation string is " . strlen($myPresentation);

    echo "<br />";

    #uper case on first chars of every word on my string
    echo ucwords($myPresentation);

    echo "<br />";

    #uper case on first char of all string
    echo ucfirst($myPresentation);

    echo "<br />";

    #count words on a string
    echo str_word_count($myPresentation);

    echo "<br />";
    
    #return first location of a string inside another
    echo strpos($myPresentation, "Pedro");
    echo "<br />";

    #replace String on String
    echo str_replace("Pedro", "my_name", $myPresentation);
    echo "<br />";
    
    #reverse a string
    echo strrev($myPresentation);
    echo "<br />";
    
    #substring from 0 to $param (start from 0)
    echo substr($myPresentation, 3);
    
    #substring from 2 to 8 
    echo "<br />";
    echo substr($myPresentation, 2, 8);
    echo "<br />";
    
    #last two chars
    echo substr($myPresentation, -2);
    echo "<br />";
    
    #infos about the var
    var_dump($myPresentation);
    echo "<br />";
    
    #trims a string
    trim('      ' . $myPresentation . '         ');
    echo "<br />";
    var_dump($myPresentation);
    echo "<br />";

    #upper and lower entire string
    echo strtoupper($myPresentation);
    echo "<br />";
    echo strtolower($myPresentation);
    echo "<br />";

    $values = array(true, false, "str", true, false, 1, 2, 1.12, "myVar");

    foreach($values as $value) {
        if (is_string($value)) {
            echo "{$value} is a string <br />";
        }
    }
    echo "<br />";

    #compress a big string using gz
    $big_str = "Lorem Ipsum is simply dummy text of the
     printing and typesetting industry. Lorem Ipsum has
      been the industry's standard dummy text ever since
       the 1500s, when an unknown printer took a galley of 
       type and scrambled it to make a type specimen book.
        It has survived not only five centuries, but also the 
        leap into electronic typesetting, remaining essentially 
        unchanged. It was popularised in the 1960s with the 
        release of Letraset sheets containing Lorem Ipsum 
        passages, and more recently with desktop publishing 
        software like Aldus PageMaker including versions of 
        Lorem Ipsum.";
    $big_str = gzcompress($big_str);
    echo $big_str;
    echo "<br />";

    #now uncompress the string
    echo gzuncompress($big_str);
    echo "<br />";
?>
