
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="generator" content="ORNELIO REIPH">
    <meta name="dcterms.created" content="di, 20 nov 2018 14:45:23 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>ADMINISTRATION</title>
    <link rel="stylesheet" href="admin.css">
	<link rel="stylesheet" href="navigation.css">
  </head>
  
<body>

<!--    HEADER  -->
 <div id="header"></div>
 
<!-- NAVIGATION BAR -->
      <div class="navbar">
         <a href="index.php">Home</a>
             <div class="subnav">
                 <button class="subnavbtn">About <i class="fa fa-caret-down"></i></button>
                  <div class="subnav-content">
                      <a href="#company">Company</a>
                      <a href="#team">Team</a>
             </div>
             </div> 
         <a href="#contact">Contact</a>
       </div>
 
 <!--  IMAGE-->
 <form class="image" name="Blogform" method="post"> </form> 
  
 <!-- Administration text -->
 <h1 id="text">ADMINISTRATION</h1>
 
<!-- ==========================================================================
===============================================================================
============================================================================ -->
 
 <!-- Admin Input -->
 <div class="AdminInput">
	
</div>

 <!--  Server Data -->  
   <table id="data" style="width:600px; line-height=30px;">
            <colgroup>
                      <col span="1" style="background-color:red">
                      <col span="3" style="background-color:#FFDC7B">
	                  <col style="background-color:white">
            </colgroup>
			
	<thead>
            <tr>
                 <th>ID</th>
				 <th>Name</th>
				 <th>Title</th>
				 <th>Email</th>
			     <th>Blog</th>
            </tr>
   </thead>
            <tbody>
		
        <?php         
$username = "oreiph";
$password = "1771128903";
$dbname = "oreiph_blog";
$servername = "localhost";
$date = date("Y-m-d H:i:s");

$conn = mysqli_connect($servername, $username, $password);
$sqlCommand1= "use oreiph_blog";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand1);

			
// =========================retreiving from database==================== 		
$sqlCommand ="SELECT * FROM blog ORDER BY ID DESC LIMIT 10";
$sqlUitvoer	= mysqli_query($conn,$sqlCommand);
          
			while ($row = $sqlUitvoer -> fetch_assoc())
             {
            ?>	
                <tr>
                    <td><?php echo $row['ID']?></td>
                    <td><?php echo $row['name']?></td>
					<td><?php echo $row['title']?></td>
                    <td><?php echo $row['email']?></td>
					<td><?php echo $row['blog']?></td>                  
                </tr>
            <?php
           }
            ?>
            </tbody>
     </table>
  
   <?php
$conn->close();
?>

</div>


 <!-- ==============================================================
 ====================================================================
 ================================================================ -->

<!-- Admin  Menu -->
<div class="adminMenu">
<!--  right -->
<form action="functions/create.php" method="post">

     <button>Create</button><br/>
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

     <button>Read</button><br/>
            <table class="table">
                  <tr>
                     <td>
                         <label for="id"><b>Id:</b></label>
                     </td>
					 
                     <td>
                         <input id="id6" type="text" placeholder="Enter Id" name="id" required><br/>
                     </td>
                   </tr>
 
 
                 <tr>
                    <td>
                         <label for="name"><b>Name:</b></label>
                    </td>
                    <td>
                         <input id="id7" type="text" placeholder="Enter name" name="name" required><br/>
                    </td>
                 </tr>
 
                <tr>
                   <td>
                         <label  for="title"><b>Title:</b></label>
                   </td>             
				   <td>
                         <input id="id8" type="text" placeholder="Enter title" name="title" required><br/>
                   </td>
                </tr>

                <tr>
                   <td>
                         <label for="email"><b>Email:</b></label>
                   </td>
                   <td>
                         <input id="id9" type="text" placeholder="Email" name="email" required>
                   </td>
                </tr>
  
                <tr>			             
                   <td>
                         <label for="blog"><b>Bericht:</b></label>
                   </td>
                   <td id="id10">
                         <textarea name="blog" cols="28" rows="9"  placeholder="Enter Blog" required></textarea>
                   </td>
                </tr>
           </table>

</form>
 </div>
 
 
<!-- Admin  Menu -->
<div class="adminMenu2">
<!--  right -->
<form action="functions/update.php" method="post">

     <button>Update</button><br/>
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
<!--  right -->
<form action="functions/delete.php" method="post">

     <button>Delete</button><br/>
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

     <button>Right</button><br/>
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
<!--  right -->
<form action="functions/left.php" method="post">

     <button>Left</button><br/>
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
 
 <br/>
 
<!--  Footer -->   
 <div id="footer" align="center"></div>
 
 
<!--          SCRIPTS   -->
<!--
<script type="text/javascript">

    document.getElementById("right").onclick = function () {
        location.href = "functions/right.php";
    };
</script>
 
 <script type="text/javascript">
    document.getElementById("create").onclick = function () {
        location.href = "functions/create.php";
    };
</script>
 
 
 <script type="text/javascript">
    document.getElementById("read").onclick = function () {
        location.href = "functions/read.php";
    };
</script>
 
 
 <script type="text/javascript">
    document.getElementById("update").onclick = function () {
        location.href = "functions/update.php";
    };
</script>
 
 <script type="text/javascript">
    document.getElementById("delete").onclick = function () {
        location.href = "functions/delete.php";
    };
</script>
 
 <script type="text/javascript">
    document.getElementById("left").onclick = function () {
        location.href = "functions/left.php";
    };
</script>
 
 -->
 </body>
</html>