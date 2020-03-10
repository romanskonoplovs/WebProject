

<?php 
    function console_log( $data ){
        echo '<script>';
        echo 'console.log('. json_encode( $data ) .')';
        echo '</script>';
      }
?>

<script type="text/javascript">
    // Prints the todays date.
    document.write("Today is " + Date());
    /*
        A multiline
        comment. Often is 
        very useful.
    */
</script>

<?php echo "Hello World!"; ?>
<hr>
<?php
    $username = "John Adams";
    echo $username;
    echo "<br>";
    $current_user = $username;
    echo $current_user;
    echo "<hr>";

    //Arrays:
    $team_of_workers = array("Mike", "Bill", "Mary", "Chris");
    //To print one of the names we use:
    echo $team_of_workers[2];
    //Output: Mary

    //Multi-dimensional array:
    $oxo = array(array('x', ' ', 'x'),
                 array('o', 'o', 'x'),
                 array('x', 'o', ' '));
    //Accessing multi-dimensional array:
    echo $oxo[1][2];
    //Output: x
?>
<hr>
<?php
    //Variable substitution:
    $count = 2;
    echo "This week there was $count amount of visitors!";
?>

<?php
    //Alternative multiline echo statement. Can be also used to assign string text to variable.
    $author = "Scott Adams";
    echo <<<_END
    Debugging is twice as hard as writing
    the code in the first place.
    Therefore, if you write the code as cleverly as possible,
    you are, by definition, not smart enough to debug it.
    
    - "$author"
    _END
?>
<hr>
<?php
    //Automatically transform string to int/double/float.
    $pi = "3.1415927";
    $number = 12345 * 67890;
    $result = $pi * $number;
    echo $result;
?>
<hr>
<?php
    //Constants.
    define("MY_NAME", "Romans Konoplovs");
    //Note that there is no need of $ sign when you call a defined constant,
    echo MY_NAME;
    echo "This is line " . __LINE__ . " of file " . __FILE__;
?>
<hr>
<?php
    //Static variable in the function is going to save its state.
    function test(){
        static $counter = 0;
        echo $counter;
        $counter++;
    }

    test();
    //Output: 0
    test();
    //Output: 1
    test();
    //Output: 2
?>
<br>
<?php
    //Example of == (equals) and === (identical)
    $a = "1000";
    $b = "+1000";
    //Outputs first statement. $a and $b are converted to integers.
    if ($a == $b) { echo "Numbers are equal."; }
    //Outputs nothing since stirngs are not equal.
    if ($a === $b) { echo "Strings are identical."; }

    echo "<br>";

    //Two more if statements but asking if two variables are NOT equal or identical.
    //Outputs nothing since $a and $b are equal in numeric perspective.
    if ($a != $b) { echo "Numbers are NOT equal."; }
    //Outputs "Strings are NOT identical." since as a strings $a and $b are NOT identical.
    if ($a !== $b) { echo "Strings are NOT identical."; }

    echo "<br>";
?>

<?php
     $fuel = 1;
    
     if ($fuel <= 1) {
         echo "Fill the tank.";
     } else {
         echo "You have enough.";
     }

     echo "<br>";
?>

<?php 
    //while loop.
    $count = 0;
    //We can put counter directly in the "while" condition.
    while(++$count <= 12) {
        echo "$count times 12 is " . $count * 12 . "!<br>";
    }
    echo "<hr>"
?>

<?php 
    function string_multiplyer($str, $n) {
        $result_string;
        for ($i = 0; $i < $n; $i++) {
            $result_string .= $str;
        }

        return $result_string;
    }

    echo string_multiplyer("TheString", 6) . "<br>";
?>

<?php
    function unique_order($your_string) {
        $str_array = str_split($your_string);
        $temp;
        $new_array = array();
        for ($i = 0; $i < count($str_array); $i++) {
            if ($str_array[$i] == $temp) {
                continue;
            }
            array_push($new_array, $str_array[$i]);
            $temp = $str_array[$i];
        }

        foreach ($new_array as $char) {
            echo $char . "<br>";
        }
    }

    unique_order(1123455);
?>

<?php
    function smallestInteger ($arr) {
        $temp = $arr[0];
        for ($i = 0; $i < count($arr); $i++) {
            if ($temp > $arr[$i]){
                $temp = $arr[$i];
            }
        }
        return $temp;
    }

    echo smallestInteger ([3, 5, 10, 1, 4, 55]) . "<hr>";
?>

<?php 
    function array_odd_or_even($arr) {
        $odd_array = array();
        $even_array = array();
        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] % 2 == 0) {
                array_push($even_array, $arr[$i]);
            } else {
                array_push($odd_array, $arr[$i]);
            }
        }

        if (count($even_array) < count($odd_array)){
            return $even_array[0];
        } else {
            return $odd_array[0];
        }
    }

    print array_odd_or_even([3,7,5,9,11,23,4]);
?>

<?php 
    function hashtag_gen($str) {
        $hashtag = '#';
        $stirng;
        $string_array = array();
        if (empty($str)) {
            return false;
        } elseif (strpos($str, 'a') == strlen($str)) {
            echo "String as long as char";
        
        } else {
            $string = ucwords($str);
            $string = str_replace(' ', '', $string);
            $string = trim($string);
            $hashtag .= $string;
            if (strlen($hashtag) < 140) {
                return $hashtag;
            } else {
                return false;
            }


        }
    }

    console_log(hashtag_gen("hellow world woman"));
?>