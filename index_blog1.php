<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="ma, 03 dec 2018 13:15:26 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
	      <link rel="stylesheet" href="navigation.css"> 
	        <link rel="stylesheet" href="index_blog.css">
    <title></title>
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
<?php include 'topic.php';?>

<div id="header" align="center"></div>


<!-- ====================NAVIGATION BAR =====================================
============================================================================
====================================================================      -->

<div class="navbar">
  <a href="index.php">Home</a>
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
	 <a href="news.php" class="icon" onclick="myNews()">NEWS2</a>
	 
	 
	 <a href="javascript:void(0);" class="icon" onclick="mySport()">SPORT</a>
	 <a href="javascript:void(0);" class="icon" onclick="myCulture()">CULTURE</a>
	 <a href="javascript:void(0);" class="icon" onclick="myPolitics()">POLITICS</a>
	  <a href="javascript:void(0);" class="icon" onclick="myPolitics()">MOST POPULAR TOPICS</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Admin <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
       <a href="javascript:void(0);" class="icon" onclick="document.getElementById('id01').style.display='block'">Login</a>
     
    </div>
  </div>
  <a href="contact.php">Contact</a>
    <a href="registration.php">Register</a>
</div>



<!--   =================================================================
==================================BLOG TEXT==========================
==================================================================== -->
<h1 align="center" id="text3">BLOGS OF THE DAY</h1>

<!--   =================================================================
=================================LOGIN==================================
==================================================================== -->
<form id="id01"  class="login"  action="login.php" method="post">
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


<!--   =================================================================
=============================BLOG INPUT FORM============================
==================================================================== -->

    <form class="blog" id="blog_news" name="Blogform" method="post" action="create.php"> 
             <table  class="table" width="450px">
	               <tr>
				             <td>
							 <label for="name">name</label>
							 </td>
				             <td>
							 <input type="text" name="name" maxlength="50" size="31" placeholder="Enter Name" required/>
							 </td>
				   </tr>
	
	               <tr>
				             <td>
							 <label for="title">title</label>
							 </td>
				             <td>
							 <input type="text" name="title" maxlength="50" size="31" placeholder="Enter Title" required/>
							 </td>
				   </tr>
	          
			       <tr>
				             <td>
							 <label  for="email">email</label>
							 </td>
				             <td>
							 <input type="text" name="email" maxlength="50" size="31" placeholder="Enter email" required/>
							 </td>
				   </tr>
	               
				   <tr>
				             <td id="btn">
							 <label for="bericht">bericht</label>
							 </td>
				             <td id="blog_b">
							 <textarea name="bericht" cols="28" rows="9"  placeholder="Enter Blog" required></textarea>
							 </td>
				   </tr>
	         </table>
			 
			  <input id="submit" type="submit" />
			  <br/>
			  <input id="file" type="file" name="fileToUpload" />
		
			
			 
 	 
  </form>
  
  
 
<!--   =================================================================
=============================BLOG OUTPUT FORM===========================
==================================================================== --> 
  
  <p id="blog"> 
 
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
 
  
<!--   =================================================================
=============================SCRIPT===========================
==================================================================== --> 
    
  
  

  </body>
</html>