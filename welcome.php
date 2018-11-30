<html>
<body>
 <link rel="stylesheet" href="welcome.css">

<div id="d">
Welcome 
<?php echo $_POST["name"]." ".$_POST["title"]; ?>


<br>
Your email address is:
<?php echo $_POST["email"]; ?>
<br />
<br />
Your message is:
<?php echo $_POST["bericht"]; ?>




    <?php
$servername = "localhost";
$username = "oreiph";
$password = "1771128903";
$dbname = "oreiph_blog";
$table = "blog";
$name = $_POST["name"];
$title = $_POST["title"];
$email = $_POST["email"];
$blog = $_POST["bericht"];





$conn = mysqli_connect($servername, $username, $password, $dbname);

echo "<br>". "<br>";
echo "=============Available Databases================";
echo "<br>";

$sqlCommand= "show databases";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);

while ($row = $sqlUitvoer -> fetch_assoc())
{
foreach($row as $value) echo "<td>$value</td>" . "<br>";
}


echo "<br>". "<br>";
echo "=============Connecting to Database================";
echo "<br>";


$sqlCommand= "use oreiph_blog";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);





echo "<br>". "<br>";
echo "=============inserting to table blog================";
echo "<br>";


$sqlCommand= "INSERT INTO blog (name, title, blog,email)
VALUES ('$name', '$title', '$blog', '$email')";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);

if ($conn->query($sqlCommand) === TRUE) {
 $last_id = $conn->insert_id;
    
 echo "New record created successfully with ID: ". $last_id; 
} 
else 
{ echo "Error: " . $sqlUitvoer . "<br>" . $conn->error; 
} 



$sqlCommand= "describe blog";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);

//echo $sqlUitvoer;


?>




</div>


</body>
</html>