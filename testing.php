

Today is <?php echo date("l");?>. Here is the latest news. 

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
?>