<?php
$title = "Update your info";
include "../Layout/header2.php";
$a = $_GET["id"];
include "db.php";
$result = mysqli_query($conn,"Select * from studentinfo where id='$a' ");
$row = mysqli_fetch_array($result);
?>
<h2>Update your information below</h2>
<form name="update" method="post" action="">
    <input type="text" name="fname" placeholder="First name" required value="<?php echo $row["fname"];?>"><br><br>
    <input type="text" name="lname" placeholder="Last name" required value="<?php echo $row["lname"];?>"><br><br>
    <input type="text" name="city" placeholder="City" required value="<?php echo $row["city"];?>"><br><br>
    <select name="groupid" value="<?php echo $row["groupid"];?>">
        <option value="BBCAP22">BBCAP22</option>
        <option value="BBCAP21">BBCAP21</option>
        <option value="Others">Others</option>
    </select><br><br>

<input type="submit" value="Update your information" name="submit"> <br><br>
<input type="submit" value="Delete your information" name="delete"> <br>
</form>


<?php
    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $query = mysqli_query($conn, "UPDATE studentinfo SET fname = '$fname', lname = '$lname' where id = '$a' ");
    if ($query){
        echo "<h2> Your information is updated successfully</h2>";
    }
    else { echo "Record not Modified"; }
    }
?>
 <?php include "../Layout/footer2.php" ?>