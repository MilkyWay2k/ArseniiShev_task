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

    <h3>3.4 $title = "PHP is interesting”. Put this variable as a title marked as h1 (heading 1) in your HTML document. </h3>

    <h1><?php echo $title ?></h1>

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

    <h3>4. Take a screenshot that verifies, you have set up the development environment and include it as an image in ex1.php.</h3>
    <img style= "width: 800px" src="image1.png" alt="Image1">
<?php include "footer.php"?>