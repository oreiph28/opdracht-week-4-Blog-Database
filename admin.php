<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="ma, 03 dec 2018 14:43:29 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
	<link rel="stylesheet" href="administration2.css">
	<link rel="stylesheet" href="navigation.css">
    <title>Administration</title>
    

  </head>
  <body>

<div id="header"></div>

<!-- ====================NAVIGATION BAR =====================================
============================================================================
====================================================================      -->
 <div class="navbar">
	  <div class="subnav">
         <a href="index.php">Home</a>
		 <a href="about.php">About</a>
		 <a href="index_blog.php">User</a>
	   </div>
     
	  <div class="subnav">
           <button class="subnavbtn">Topics <i class="fa fa-caret-down"></i></button>
                  <div class="subnav-content">
                       <a href="index_news.php">NEWS</a>
	                   <a href="index_sport.php">SPORT</a>
	                   <a href="index_culture.php">CULTURE</a>
	                   <a href="index_politics.php">POLITICS</a>
	                   <a href="index.php">MOST POPULAR TOPICS</a>
                  </div>
      </div> 
       <a href="contact_form.php">Contact</a>
       <a href="registration.php">Register</a>
 </div>

   
<!--   =================================================================
============================ADMINISTRATION TEXT=========================
==================================================================== -->
<h1 id="text3">Administration</h1>


 <!-- ==============================================================
 ===========================ADMIN PANEL===========================
 ================================================================ -->
<div class="admin_Back">
<h1 id="panel_T">User Panel</h1>
</div>

<!-- Admin  Menu -->
<div class="adminMenu">
<!--  create -->
<form action="functions/create.php" method="post">

     <button id="btn_create">Create</button><br/>
            <table class="table">
                  <tr>
                     <td>
                         <label for="id"><b>Id:</b></label>
                     </td>
					 
                     <td>
                         <input id="id1" type="text" placeholder="Enter Id" name="id" required><br/>
                     </td>
                   </tr>
 
 
                 <tr>
                    <td>
                         <label for="name"><b>Name:</b></label>
                    </td>
                    <td>
                         <input id="id2" type="text" placeholder="Enter name" name="name" required><br/>
                    </td>
                 </tr>
 
                <tr>
                   <td>
                         <label  for="title"><b>Title:</b></label>
                   </td>             
				   <td>
                         <input id="id3" type="text" placeholder="Enter title" name="title" required><br/>
                   </td>
                </tr>

                <tr>
                   <td>
                         <label for="email"><b>Email:</b></label>
                   </td>
                   <td>
                         <input id="id4" type="text" placeholder="Email" name="email" required>
                   </td>
                </tr>
  
                <tr>			             
                   <td>
                         <label for="blog"><b>Bericht:</b></label>
                   </td>
                   <td id="id5">
                         <textarea name="blog" cols="28" rows="9"  placeholder="Enter Blog" required></textarea>
                   </td>
                </tr>
           </table>

</form>
 
 
 
 
 
 
 
<!-- Admin  Menu -->
<div class="adminMenu1">
<!--  read -->
<form action="functions/read.php" method="post">

     <button id="btn_read">Read Topic</button><br/>
            <table class="table">
                 
                     
                <tr>
                   <td>
                         <label for="email"><b>Table:</b></label>
                   </td>
                   <td>
                         <input id="id9" type="text" placeholder="Enter Table Name" name="table" required>
                   </td>
                </tr>
               
			     <tr>
                   <td>
                         <label for="email"><b>Rows:</b></label>
                   </td>
                   <td>
                         <input id="id9" type="text" placeholder="Enter number of Table Rows" name="rows" required>
                   </td>
                </tr>
  
                
           </table>

</form>	 


<form action="functions/read_Id.php" method="post">
		    <button id="btn_read">Read ID</button><br/>
            <table class="table">
                 
                     
                <tr>
                   <td>
                         <label for="email"><b>Table:</b></label>
                   </td>
                   <td>
                         <input id="id9" type="text" placeholder="Enter Table Name" name="table" required>
                   </td>
                </tr>
               
			     <tr>
                   <td>
                         <label for="email"><b>ID:</b></label>
                   </td>
                   <td>
                         <input id="id9" type="text" placeholder="Enter ID Numer " name="id" required>
                   </td>
                </tr>
  
                
           </table>
             
</form>


		   
<form action="functions/read_Subject.php" method="post">
		    <button id="btn_read">Read subject</button><br/>
            <table class="table">
                 
                     
                <tr>
                   <td>
                         <label for="email"><b>Table:</b></label>
                   </td>
                   <td>
                         <input id="id9" type="text" placeholder="Enter Table Name" name="table" required>
                   </td>
                </tr>
               
			     <tr>
                   <td>
                         <label for="email"><b>Subject:</b></label>
                   </td>
                   <td>
                         <input id="id9" type="text" placeholder="Enter Topic Subject " name="subject" required>
                   </td>
                </tr>

               <tr>
                   <td>
                         <label for="email"><b>Rows:</b></label>
                   </td>
                   <td>
                         <input id="id9" type="text" placeholder="Enter Number of Table Rows" name="rows" required>
                   </td>
                </tr>
           </table>
		   
</form>
 </div>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
<!-- Admin  Menu -->
<div class="adminMenu2">
<!--  update -->
<form action="functions/update.php" method="post">

     <button id="btn_update">Update</button><br/>
            <table class="table">
                  <tr>
                     <td>
                         <label for="id"><b>Id:</b></label>
                     </td>
					 
                     <td>
                         <input id="id11" type="text" placeholder="Enter Id" name="id" required><br/>
                     </td>
                   </tr>
 
 
                 <tr>
                    <td>
                         <label for="name"><b>Name:</b></label>
                    </td>
                    <td>
                         <input id="id12" type="text" placeholder="Enter name" name="name" required><br/>
                    </td>
                 </tr>
 
                <tr>
                   <td>
                         <label  for="title"><b>Title:</b></label>
                   </td>             
				   <td>
                         <input id="id13" type="text" placeholder="Enter title" name="title" required><br/>
                   </td>
                </tr>

                <tr>
                   <td>
                         <label for="email"><b>Email:</b></label>
                   </td>
                   <td>
                         <input id="id14" type="text" placeholder="Email" name="email" required>
                   </td>
                </tr>
  
                <tr>			             
                   <td>
                         <label for="blog"><b>Bericht:</b></label>
                   </td>
                   <td id="id15">
                         <textarea name="blog" cols="28" rows="9"  placeholder="Enter Blog" required></textarea>
                   </td>
                </tr>
           </table>

</form>
 </div>
 
 <br/>
 

<!-- Admin  Menu -->
<div class="adminMenu3">
<!--  delete -->
<form action="functions/delete.php" method="post">

     <button id="btn_delete">Delete</button><br/>
            <table class="table">
                  <tr>
                     <td>
                         <label for="id"><b>Id:</b></label>
                     </td>
					 
                     <td>
                         <input id="id16" type="text" placeholder="Enter Id" name="id" required><br/>
                     </td>
                   </tr>
 
 
                 <tr>
                    <td>
                         <label for="name"><b>Name:</b></label>
                    </td>
                    <td>
                         <input id="id17" type="text" placeholder="Enter name" name="name" required><br/>
                    </td>
                 </tr>
 
                <tr>
                   <td>
                         <label  for="title"><b>Title:</b></label>
                   </td>             
				   <td>
                         <input id="id18" type="text" placeholder="Enter title" name="title" required><br/>
                   </td>
                </tr>

                <tr>
                   <td>
                         <label for="email"><b>Email:</b></label>
                   </td>
                   <td>
                         <input id="id19" type="text" placeholder="Email" name="email" required>
                   </td>
                </tr>
  
                <tr>			             
                   <td>
                         <label for="email"><b>Bericht:</b></label>
                   </td>
                   <td id="20">
                         <textarea name="blog" cols="28" rows="9"  placeholder="Enter Blog" required></textarea>
                   </td>
                </tr>
           </table>

</form>
 </div>

<!-- Admin  Menu -->
<div class="adminMenu4">
<!--  right -->
<form action="functions/right.php" method="post">

     <button id="btn_right">Right</button><br/>
            <table class="table">
                  <tr>
                     <td>
                         <label for="id"><b>Id:</b></label>
                     </td>
					 
                     <td>
                         <input id="id21" type="text" placeholder="Enter Id" name="id" required><br/>
                     </td>
                   </tr>
 
 
                 <tr>
                    <td>
                         <label for="name"><b>Name:</b></label>
                    </td>
                    <td>
                         <input id="id22" type="text" placeholder="Enter name" name="name" required><br/>
                    </td>
                 </tr>
 
                <tr>
                   <td>
                         <label  for="title"><b>Title:</b></label>
                   </td>             
				   <td>
                         <input id="id23" type="text" placeholder="Enter title" name="title" required><br/>
                   </td>
                </tr>

                <tr>
                   <td>
                         <label for="email"><b>Email:</b></label>
                   </td>
                   <td>
                         <input id="id24" type="text" placeholder="Email" name="email" required>
                   </td>
                </tr>
  
                <tr>			             
                   <td>
                         <label for="blog"><b>Bericht:</b></label>
                   </td>
                   <td id="25">
                         <textarea name="blog" cols="28" rows="9"  placeholder="Enter Blog" required></textarea>
                   </td>
                </tr>
           </table>

</form>
 </div>
 

<!-- Admin  Menu -->
<div class="adminMenu5">
<!--  left -->
<form action="functions/left.php" method="post">

     <button id="btn_left">Left</button><br/>
            <table class="table">
                  <tr>
                     <td>
                         <label for="id"><b>Id:</b></label>
                     </td>
					 
                     <td>
                         <input id="id26" type="text" placeholder="Enter Id" name="id" required><br/>
                     </td>
                   </tr>
 
 
                 <tr>
                    <td>
                         <label for="name"><b>Name:</b></label>
                    </td>
                    <td>
                         <input id="id27" type="text" placeholder="Enter name" name="name" required><br/>
                    </td>
                 </tr>
 
                <tr>
                   <td>
                         <label  for="title"><b>Title:</b></label>
                   </td>             
				   <td>
                         <input id="id28" type="text" placeholder="Enter title" name="title" required><br/>
                   </td>
                </tr>

                <tr>
                   <td>
                         <label for="email"><b>Email:</b></label>
                   </td>
                   <td>
                         <input id="id29" type="text" placeholder="Email" name="email" required>
                   </td>
                </tr>
  
                <tr>			             
                   <td>
                         <label for="email"><b>Bericht:</b></label>
                   </td>
                   <td id="30">
                         <textarea name="blog" cols="28" rows="9"  placeholder="Enter Blog" required></textarea>
                   </td>
                </tr>
           </table>

</form>
 </div>
  
  

   <p id="create">Assignment</p>
<!-- ==========================================================================
=========================DATABASE OUTPUT=======================================
============================================================================ -->

 
 
 <!-- Admin Input -->
 <div class="AdminInput"></div>

 <!--  Server Data -->  
   <table id="data" width="1350">
            <colgroup>
                      <col span="1" style="background-color:red">
                      <col span="3" style="background-color:#FFDC7B">
	                  <col span="2" style="background-color:white">
            </colgroup>
			
	<thead>
            <tr>
                 <th id="col_id">ID</th>
				 <th id="col_name">Name</th>
				 <th id="col_title">File Title</th>
				 <th id="col_email">Email</th>
			     <th id="col_blog">Blog</th>
				 <th id="col_file">File</th>
            </tr>
   </thead>
            <tbody>
		
        <?php         
$username = "oreiph";
$password = "1771128903";
$dbname = "myblog";
$servername = "localhost";
$date = date("Y-m-d H:i:s");

$conn = mysqli_connect($servername, $username, $password);
$sqlCommand1= "use myblog";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand1);

			
// =========================retreiving from database==================== 		
$sqlCommand ="SELECT * FROM sport ORDER BY ID DESC LIMIT 10";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);
          
			//while ($row = $sqlUitvoer -> fetch_assoc())
			while ($row = mysqli_fetch_array($sqlUitvoer)) 
             {
            ?>	
                <tr>
                    <td><?php echo $row['ID']?></td>
                    <td><?php echo $row['name']?></td>
					<td><?php echo $row['title']?></td>
                    <td><?php echo $row['email']?></td>
					<td><?php echo $row['blog']?></td>   
					<td><?php echo $row['file']?></td>                
                </tr>
            <?php
           }
            ?>
            </tbody>
     </table>
  
   <?php
   
 $sqlCommand ="SELECT * FROM sport ORDER BY ID DESC LIMIT 10";

$sqlUitvoer	= mysqli_query($conn,$sqlCommand);

if ($sqlUitvoer->num_rows>0){

         while ($row = mysqli_fetch_array($sqlUitvoer)) {
      
      	
		echo "<p id='blog2'>"."<b>"."File Id: "."</b>".$row['ID']."<br>";
		echo "<b>"."User Name: "."</b>".$row['name']."<br>";
		echo "<b>"."User Email: "."</b>".$row['email']."<br>";
		echo "<b>"."File Name: "."</b>".$row['title']."<br>";
		echo "<img id='img1' src='images/".$row['file']."' >"."</p>";
		
     
    }}
    				   
   
   
$conn->close();
?>

</div>
   <div id="AdminText">
 </div>
 
 
 
 
 
  </body>
</html>