
       <?php
		
$username = "oreiph";
$password = "1771128903";
$dbname = "oreiph_blog";
$servername = "localhost";
$date = date("Y-m-d H:i:s");

$conn = mysqli_connect($servername, $username, $password);		
		
$name = $_POST["name"];
$title = $_POST["title"];
$email = $_POST["email"];
$file = $_FILES['image']['name'];
$blog = mysqli_real_escape_string($conn, $_POST['image_text']);

$sqlCommand1= "use oreiph_blog";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand1);

//=========================sending to database=========================
$sqlCommand = "INSERT INTO blog (name, title, blog,email,file)
VALUES ('$name', '$title', '$blog', '$email','$file')";
//$sqlUitvoer	= mysqli_query($conn,$sqlCommand);

if ($conn->query($sqlCommand) === TRUE) 
{
 $last_id = $conn->insert_id;   
 ?>
 <h1 id="record">
 
 <?php echo "New record created succesfully with ID: #". $last_id;?>
 
 </h1>
 
 
 
 <?php
} 
else 
{ 
echo "Error: " . $sqlUitvoer . "<br>" . $conn->error; 
} 
echo "<br>";		
			

// =========================retreiving from database==================== 		
$sqlCommand ="SELECT * FROM blog ORDER BY ID DESC LIMIT 15";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);
          
			while ($row = $sqlUitvoer -> fetch_assoc())
             {
           
				
				<?php
    while ($row = mysqli_fetch_array($sqlUitvoer)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['file']."' >";
		echo "<p>".$row['name']."</p>";
		echo "<p>".$row['title']."</p>";
		echo "<p>".$row['email']."</p>";
      	echo "<p>".$row['blog']."</p>";
      echo "</div>";
    }
	
   <?php
$conn->close();
?>