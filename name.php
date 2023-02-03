

<?php


$firstname = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_STRING); 
$lastname = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_STRING); 
$age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_STRING); 
$date = date('Y-m-d H:i:s') . "<br>"; 
echo $date; 

if(isset($firstname) && isset($lastname) && isset($age)) {
    $firstname = htmlspecialchars($_GET['first']);
    $lastname = htmlspecialchars($_GET['last']);
    $age = htmlspecialchars($_GET['age']);
    if(!empty($firstname) && !empty($lastname) && !empty($age)) {
        echo "Hi, my name is ".$firstname . " " . $lastname . "<br>"; 
        if($age < 18)
        echo "I am not old enough to vote in the United States." . "<br>"; 
        else 
        echo "I am old enough to vote in the United States." . "<br>"; 
        echo "Your age in days is " . $age * 365; 
        }
        else 
        echo "<font color='red'>". "You are missing a required parameters."."</font>"; 
}
else 
echo "<font color='red'>". "Not all data is set"."</font>";  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2</title>
</head>
<body>
    
</body>
</html>