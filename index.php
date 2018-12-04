
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="generator" content="ORNELIO REIPH">
        <meta name="dcterms.created" content="di, 20 nov 2018 14:45:23 GMT">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <title>BLOG</title>
        <link rel="stylesheet" href="index.css">
        <link rel="stylesheet" href="navigation.css"> 
			  
    </head>

<body>
<?php include 'topic.php';?>

<div id="header" align="center"></div>
<!-- ====================NAVIGATION BAR -->
<div class="navbar">
 
  <div class="subnav">
    <button class="subnavbtn">About <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#company">Company</a>
      <a href="#team">Team</a>
      <a href="#careers">Careers</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Topics <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
     <a href="javascript:void(0);" class="icon" onclick="myNews()">NEWS</a>
	 <a href="javascript:void(0);" class="icon" onclick="mySport()">SPORT</a>
	 <a href="javascript:void(0);" class="icon" onclick="myCulture()">CULTURE</a>
	 <a href="javascript:void(0);" class="icon" onclick="myPolitics()">POLITICS</a>
	  <a href="javascript:void(0);" class="icon" onclick="myPolitics()">MOST POPULAR TOPICS</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Login <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
       <a href="javascript:void(0);" class="icon" onclick="document.getElementById('id02').style.display='block'">Admin_Login</a>
       <a href="javascript:void(0);" class="icon" onclick="document.getElementById('id01').style.display='block'">User_Login</a>
    </div>
  </div>
  <a href="contact.php">Contact</a>
    <a href="registration.php">Register</a>
</div>

  

<!-- =======================User Login============================== -->
<h1 align="center" id="text3">BLOGS OF THE DAY</h1>

<form id="id01"  class="login"  action="user_login.php" method="post">
      <div class="imgcontainer">
	       <img src="images/login.jpg" alt="login" class="login">
	  </div>
	  
	  <div class="container">
	       <label for="uname"><b>Username</b></label>
		   <input type="text" placeholder="Enter Username" name="uname" required>
		   
		   <label for="psw"><b>Password</b></label>
	       <input type="password" placeholder="Enter Password" name="psw" required>
		   
		   <button class="button_login" type="submit">Login</button>
		   
		   <label>
		       <input type="checkbox" checked="checked" name="remember">Remember
		   </label>	   
	  </div>

	  <div class="container" style="background-color:#f1f1f1">
    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
	
  </div>
</form>





<!-- =======================Admin Login============================== -->

<form id="id02"  class="login"  action="login.php" method="post">
      <div class="imgcontainer">
	       <img src="images/login.jpg" alt="login" class="login">
	  </div>
	  
	  <div class="container">
	       <label for="uname"><b>Username</b></label>
		   <input type="text" placeholder="Enter Username" name="uname" required>
		   
		   <label for="psw"><b>Password</b></label>
	       <input type="password" placeholder="Enter Password" name="psw" required>
		   
		   <button class="button_login" type="submit">Login</button>
		   
		   <label>
		       <input type="checkbox" checked="checked" name="remember">Remember
		   </label>	   
	  </div>

	  <div class="container" style="background-color:#f1f1f1">
    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
	
  </div>
</form>


  
  <!-- ===========================================================================================
  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  ============================================================================================= -->
  
  
  <p id="blog" align="center"> 
 
   <?php
$servername = "localhost";
$username = "oreiph";
$password = "1771128903";
$dbname = "myblog";

$conn = mysqli_connect($servername, $username, $password, $dbname);
   if($conn->connect_errno){
                            echo "Connection failed " . $conn->connect_error; 
                            exit();
                           }

$sqlCommand ="SELECT * FROM news ORDER BY ID DESC LIMIT 4";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);

if ($sqlUitvoer->num_rows>0){

                             while($row = $sqlUitvoer->fetch_assoc()){
							 						 
      echo "<b>Naam: </b>". $row['name'] . "<br>";
      echo "<b>Title: </b>".$row['title'] . "<br>";
      echo "<b>Email: </b>". $row['email']. "<br>". "<br>";
      echo "<b>Bericht: </b>". $row['blog']. "<br>";
      echo "<br>";
      echo "<br>";
	 }}
    				   
echo "connected to server";

?> 
   
  </p>
 
  

  
  <!-- ===========================================================================================
  +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
  ============================================================================================= -->  

   <script type="text/javascript">
 function myNews(){
 
 
  document.getElementById("text3").innerHTML = "NEWS";
var result="<?php news1();?>";
document.getElementById("blog").innerHTML = result;
 } 
</script> 



  <?php
function news1() {
$servername = "localhost";
$username = "oreiph";
$password = "1771128903";
$dbname = "myblog";

$conn = mysqli_connect($servername, $username, $password, $dbname);
   if($conn->connect_errno){
                            echo "Connection failed " . $conn->connect_error; 
                            exit();
                           }

$sqlCommand ="SELECT * FROM news ORDER BY ID DESC LIMIT 4";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);

if ($sqlUitvoer->num_rows>0){

                             while($row = $sqlUitvoer->fetch_assoc()){						 
							 
      echo "<b>Naam: </b>". $row['name'] . "<br>";
      echo "<b>Title: </b>".$row['title'] . "<br>";
      echo "<b>Email: </b>". $row['email']. "<br>". "<br>";
      echo "<b>Bericht: </b>". $row['blog']. "<br>";
      echo "<br>";
      echo "<br>";
	 }}
    				   
echo "connected to server";

}
?>
  
  
<!--  =======================================politics============================ -->

   <script type="text/javascript">
 function myPolitics(){
  
  document.getElementById("text3").innerHTML = "POLITICS";
var result="<?php politics1();?>";
document.getElementById("blog").innerHTML = result;
 } 
</script> 



  <?php
function politics1() {
$servername = "localhost";
$username = "oreiph";
$password = "1771128903";
$dbname = "myblog";

$conn = mysqli_connect($servername, $username, $password, $dbname);
   if($conn->connect_errno){
                            echo "Connection failed " . $conn->connect_error; 
                            exit();
                           }

$sqlCommand ="SELECT * FROM politics ORDER BY ID DESC LIMIT 4";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);

if ($sqlUitvoer->num_rows>0){

                             while($row = $sqlUitvoer->fetch_assoc()){						 
							 
      echo "<b>Naam: </b>". $row['name'] . "<br>";
      echo "<b>Title: </b>".$row['title'] . "<br>";
      echo "<b>Email: </b>". $row['email']. "<br>". "<br>";
      echo "<b>Bericht: </b>". $row['blog']. "<br>";
      echo "<br>";
      echo "<br>";
	 }}
    				   
echo "connected to server";

}
?>
  
  
 <!--  =======================================sport============================ -->

   <script type="text/javascript">
 function mySport(){
  
  document.getElementById("text3").innerHTML = "SPORT";
var result="<?php sport1();?>";
document.getElementById("blog").innerHTML = result;
 } 
</script> 


  <?php
function sport1() {
$servername = "localhost";
$username = "oreiph";
$password = "1771128903";
$dbname = "myblog";

$conn = mysqli_connect($servername, $username, $password, $dbname);
   if($conn->connect_errno){
                            echo "Connection failed " . $conn->connect_error; 
                            exit();
                           }

$sqlCommand ="SELECT * FROM sport ORDER BY ID DESC LIMIT 4";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);

if ($sqlUitvoer->num_rows>0){

                             while($row = $sqlUitvoer->fetch_assoc()){						 
							 
      echo "<b>Naam: </b>". $row['name'] . "<br>";
      echo "<b>Title: </b>".$row['title'] . "<br>";
      echo "<b>Email: </b>". $row['email']. "<br>". "<br>";
      echo "<b>Bericht: </b>". $row['blog']. "<br>";
      echo "<br>";
      echo "<br>";
	 }}
    				   
echo "connected to server";

}
?> 
  
  
 <!--  =======================================Culture============================ -->

   <script type="text/javascript">
 function myCulture(){
  
  document.getElementById("text3").innerHTML = "CULTURE";
var result="<?php culture1();?>";
document.getElementById("blog").innerHTML = result;
 } 
</script> 



  <?php
function culture1() {
$servername = "localhost";
$username = "oreiph";
$password = "1771128903";
$dbname = "myblog";

$conn = mysqli_connect($servername, $username, $password, $dbname);
   if($conn->connect_errno){
                            echo "Connection failed " . $conn->connect_error; 
                            exit();
                           }

$sqlCommand ="SELECT * FROM culture ORDER BY ID DESC LIMIT 4";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);

if ($sqlUitvoer->num_rows>0){

                             while($row = $sqlUitvoer->fetch_assoc()){
					 
      echo "<b>Naam: </b>". $row['name'] . "<br>";
      echo "<b>Title: </b>".$row['title'] . "<br>";
      echo "<b>Email: </b>". $row['email']. "<br>". "<br>";
      echo "<b>Bericht: </b>". $row['blog']. "<br>";
      echo "<br>";
      echo "<br>";
	 }}
    				   
echo "connected to server";

}
?> 
  

  </body>
</html>