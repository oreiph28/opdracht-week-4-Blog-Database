
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="generator" content="ORNELIO REIPH">
        <meta name="dcterms.created" content="di, 20 nov 2018 14:45:23 GMT">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <title>BLOG</title>
        <link rel="stylesheet" href="blog.css">
        
    </head>


<body>


<div id="header" align="center"></div>

    <form class="blog" name="Blogform" method="post" action="create.php"> 
             <table align="center" class="table" width="450px">
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
							 <label for="email">email</label>
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
							 <textarea  name="bericht" cols="28" rows="9"  placeholder="Enter Blog" required></textarea>
							 </td>
				   </tr>
	         </table>
			 
			 <input id="submit" type="submit" />
  </form>
  

  <!-- ======================BLOG================================= -->

<button id="btn3" onclick="window.open('admin.php')">Administration</button>





<?php
//connection details
$servername = "localhost";
$username = "oreiph";
$password = "1771128903";
$dbname = "oreiph_blog";



$conn = mysqli_connect($servername, $username, $password, $dbname);
   if($conn->connect_errno){
                            echo "Connection failed " . $conn->connect_error; 
                            exit();
                           }


$sqlCommand ="SELECT * FROM blog ORDER BY ID DESC LIMIT 4";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);

if ($sqlUitvoer->num_rows>0){
                             while($row = $sqlUitvoer->fetch_assoc()){
?>
     <p id="blog" align="center">
<?php
      echo "<b>Datum: </b>".$row['date']. "<br>";
      echo "<b>Naam: </b>". $row['name'] . "<br>";
      echo "<b>Title: </b>".$row['title'] . "<br>";
      echo "<b>Email: </b>". $row['email']. "<br>". "<br>";
      echo "<b>Bericht: </b>". $row['blog']. "<br>";
      echo "<br>";
      echo "<br>";
?>
    </p>
<?php
                                                                       }
                              }else  {
                                      echo "no data";
                                     }

?>
      <form id="radio" action="text.php">
         <input type="radio" name="text" value="Small"> Small<br>
         <input type="radio" name="text" value="Bigg"> Bigg<br>
         <input type="radio" name="text" value="Bigger"> Bigger
      </form>
      
      <div id="footer" align="center"></div>
  
  </body>
</html>