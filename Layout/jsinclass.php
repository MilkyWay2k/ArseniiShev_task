<?php
$title = "JavaScript Events";
include "header2.php";
?>
<h2>A simple button to display date </h2>
<button onclick="this.innerHTML = Date()">Click to know date </button><br>
<h2> Make a button and a place holder as paragraph for the date</h2>
<button onclick="getElementById('p1').innerHTML = Date()">Click to know date </button><br>
<p id="p1"></p>

<h2>Change the background color</h2>
<form>
<input type="color" id="background" onchange="changeColor()">
</form>
<hr>
<h2>Change the font color</h2>
<form>
<input type="color" id="fcolor" onchange="changeFcolor()">
</form>
<hr>
<h2>On mouse Over & On Mouse Out</h2>

<span onmouseover="this.style.color = 'blue';
                    this.style.backgroundColor = 'yellow';
                    this.style.fontSize = '2em';"
      onmouseout = "this.style.color = 'green';
                    this.style.backgroundColor = 'orange';
                    this.style.fontSize = '1.2em';">Some text</span>

<?php include "footer2.php" ?>