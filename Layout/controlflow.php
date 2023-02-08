<?php include "header2.php"?>
<h3>1. Write a script that gets the current month and prints one of the following responses, depending on whether it's August or not.</h3>
<?php
$d = date("F");

if ($d == "August") {
    echo "It's $d, so it's still holiday.";
}
else {
    echo "Not August, this is $d so I don't have any holidays.";
}
?>
<br>

<h3>2. Assign colour red to a variable name $color and check to print one the following responses.</h3>
<?php
$color = "red";

if ($color == "red"){
    echo "The color is red.";
}
else {
    echo "The color is not red.";
}
?>
<br>

<h3>3. Write a program to grade students based on their total score for a subject. Use variable to hold the total score.</h3>
<?php
$grade = 81;

if ($grade > 80) {
    echo "Excellent";
}
else if ($grade <= 80 && $grade > 70) {
    echo "Great";
}
else if ($grade <= 70 && $grade > 60) {
    echo "Good";
}
else if ($grade <= 60 && $grade > 50) {
    echo "Pass";
}
else {
    echo "Fail";
}
?>
<br>

<h3>4. Write a program to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting.</h3>
<?php
if (isset($_POST["name"]) && isset($_POST["age"])) {
    $name = $_POST["name"];
    $age = $_POST["age"];

    if ($age >= 18) {
        echo "$name, is eligible for voting!";
    }
    else {
        echo "$name, you are nor eligible for voting!";
    }
} else {
?>
<form action="controlflow.php" method="post">
    <div class="row">
        <div class="col">
            <input type="text" name="name" required placeholder="Your name" class="form-control">
        </div>
        <div class="col">
            <input type="number" name="age" required placeholder="Your age" class="form-control"> <br>
        </div>
    </div>
    <input type="submit" value="Submit">
</form>
<?php
}
?>
<br>

<h3>5. In task 5, you used $_SERVER['HTTP_USER_AGENT']; to get the browser name.</h3>

<?php
$popular_browsers = ["Opera", "Edg", "Chrome", "Safari", "Firefox", "MSIE"];

$user_agent = $_SERVER['HTTP_USER_AGENT'];
$user_browser = 'Other less popular browsers';
foreach ($popular_browsers as $browser) {
    if (strpos($user_agent, $browser) !== false) {
        $user_browser = $browser;
        break;
    }
}

switch ($user_browser) {
    case 'Chrome':
        $user_browser = 'Chrome';
        break;
    case 'Safari':
        $user_browser = 'Safari';
        break;
    case 'Edg':
        $user_browser = 'Microsoft Edge';
        break;
}

echo "Your browser: " . $user_browser;

?>

<?php include "footer2.php" ?>