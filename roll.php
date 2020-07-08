
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" type= "text/css" href="stylesheet.css"> 
  <title>
A Simple Dice Roll Game
    </title>
<body>
    <div class = "title">
<h1>Dice Roll Game</h1>

</div>
<form method = "POST" action = "roll.php">

<div class ="main">
<?php
//input from the user
echo "please enter a number between 1 and 6:";

?>
</div>
<div class ="buttons">
<input type= "text" name = "roll" class = "roll_input">
<button type = "submit" class= "task_button" name = "submit"> submit roll </button>
</form>
</div>
<?php 
//variables needed to read user input and random dice generator
    $roll = $_POST['roll'];
    $submit = $_POST['submit'];
    $dice = rand(1,6);

//validation 
    if (empty($_POST['roll']) && isset ($_POST['submit']))
    {
        echo "Empty field, please enter a number";
        die();
    }

//print out input results of the user when submitted
    if (isset($_POST['roll']) && isset ($_POST['submit']))
    {
    echo "your input is : ".$roll;
    echo "<br>";
    echo "dice roll: ". $dice;
//conditional statment to see if the input is equal to dice roll 

    if ($roll == $dice){
    echo " correct";
    } else {
    echo " wrong";
    }
}
?>
</body>


</html>

