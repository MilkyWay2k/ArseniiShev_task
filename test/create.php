<?php
$title = "A simple CRUD app";
include "../Layout/header2.php"; ?>

<form method="post" onsubmit="return crud()" name="form1">
    <input type="text" id="fname" name="fname" placeholder="First name" required><br>
    <input type="text" name="lname" placeholder="Last name" required><br>
    <input type="text" name="city" placeholder="City" required><br>
    <select name="groupid" style="margin-right: 3%;">
        <option value="BBCAP22">BBCAP22</option>
        <option value="BBCAP21">BBCAP21</option>
        <option value="Others">Others</option>
    </select>
    <input type="submit" value="Submit" name="submit">
</form>
<?php
if(isset($_POST["submit"])){
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$city = $_POST["city"];
$groupid = $_POST["groupid"];
    include "db.php";
    $sql = "insert into studentinfo (fname,lname,city,groupid)
    values('$fname', '$lname', '$city', '$groupid')";
    if ($conn->query($sql)=== TRUE){
        echo "Your information is added successfully";
    }
    else{
        echo "Error:" . $conn->error;
    }
}
?>

<?php include "../Layout/footer2.php" ?>