<?php 
$title = "PHP is interesting";
$g1 = "5";
$g2 = "4";
$g3 = "5";
include "header.php"?>
    <h3>3.1 Write a simple PHP script to print your information (Name and your groupid).</h3>
    <?php
        echo "Hello world!<br>";
        echo "My name is Arsenii<br>";
        echo "My groupid is \"BBCAP22\"";
    ?>

    <h3>3.2 Write PHP code to display the following message.</h3>
    <?php
        echo "Hello world! My name is \"David\"";
    ?>

    <h3>3.3 Write the PHP code in to display the current date. </h3>
    <?php
        echo date("F j, Y, g:i a");
    ?>

    <script>
        document.write("<br>Hello world<br>");
    </script>
    <noscript>
        Please eneble JavaScript to work it
    </noscript>
    <input type="button" onclick="hello()" value="Click Me">

    <h3>3.4 $title = "PHP is interesting”. Put this variable as a title marked as h1 (heading 1) in your HTML document. </h3>

    <h1><?php echo $title ?></h1>
    <script>
        // window.alert("This will trigger an alert box");
        // window.alert(5+10);
    </script>

    <h3>3.5 Use HTML table into echo and include 3 columns S.n., Name, and grade.</h3>
    <?php 
        echo "<table>
        <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Pekka</td>
            <td style= 'text-align: right'>$g1</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Johanna</td>
            <td style= 'text-align: right'>$g2</td>
        </tr>
        <tr>
            <td>2</td>
            <td>John</td>
            <td style= 'text-align: right'>$g3</td>
        </tr>
      </table>"
    ?>

    <button onclick="add()">
        Click to Add
    </button>
    <hr>
    <p id="place1" style="color: red; background-color: yellow;"> </p>
    <span id="place2" style="color: red; background-color: green;"></span>
    <script>
        document.getElementById("place1").innerHTML = "This will go to place1";
        document.getElementById("place2").innerHTML = "This will go to span";
    </script>

    <h3>4. Take a screenshot that verifies, you have set up the development environment and include it as an image in ex1.php.</h3>
    <img style= "width: 800px" src="Images/image1.png" alt="Image1">

    <h2>Changing background</h2>
    <form>
        <input type="color" name="background" onchange="changeColor()">
    </form>
    <hr>
    <select id="bgchoice" onchange="changeBG()">
    <option></option>
    <option value="red">Red</option>
    <option value="ivory">Ivory</option>
    <option value="pink">Pink</option>
</select>
<?php include "footer.php"?>