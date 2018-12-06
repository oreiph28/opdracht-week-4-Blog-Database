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
                         <label><b>Id:</b></label>
                     </td>
					 
                     <td>
                         <input id="id1" type="text" placeholder="Enter Id" name="id" required><br/>
                     </td>
                   </tr>
 
 
                 <tr>
                    <td>
                         <label><b>Name:</b></label>
                    </td>
                    <td>
                         <input id="id2" type="text" placeholder="Enter name" name="name" required><br/>
                    </td>
                 </tr>
 
                <tr>
                   <td>
                         <label><b>Title:</b></label>
                   </td>             
				   <td>
                         <input id="id3" type="text" placeholder="Enter title" name="title" required><br/>
                   </td>
                </tr>

                <tr>
                   <td>
                         <label><b>Email:</b></label>
                   </td>
                   <td>
                         <input id="id4" type="text" placeholder="Email" name="email" required>
                   </td>
                </tr>
  
                <tr>			             
                   <td>
                         <label><b>Bericht:</b></label>
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

     <button >Read Topic</button><br/>
            <table class="table">
                 
                     
                <tr>
                   <td>
                         <label><b>Topic:</b></label>
                   </td>
                   <td>
                         <input type="text" placeholder="Enter Table Name" name="table" required>
                   </td>
                </tr>
               
			     <tr>
                   <td>
                         <label><b>Rows:</b></label>
                   </td>
                   <td>
                         <input type="text" placeholder="Enter number of Table Rows" name="rows" required>
                   </td>
                </tr>
  
                
           </table>

</form>	 
  <br />

<form action="functions/read_Id.php" method="post">
		    <button >Read ID</button><br/>
            <table class="table">
                 
                     
                <tr>
                   <td>
                         <label><b>Topic:</b></label>
                   </td>
                   <td>
                         <input type="text" placeholder="Enter Table Name" name="table" required>
                   </td>
                </tr>
               
			     <tr>
                   <td>
                         <label><b>Id:</b></label>
                   </td>
                   <td>
                         <input type="text" placeholder="Enter ID Numer " name="id" required>
                   </td>
                </tr>
  
                
           </table>
             
</form>
  <br />

		   
<form action="functions/read_Subject.php" method="post">
		    <button>Read subject</button><br/>
            <table class="table">
                 
                     
                <tr>
                   <td>
                         <label><b>Topic:</b></label>
                   </td>
                   <td>
                         <input type="text" placeholder="Enter Table Name" name="table" required>
                   </td>
                </tr>
               
			     <tr>
                   <td>
                         <label><b>Subj:</b></label>
                   </td>
                   <td>
                         <input type="text" placeholder="Enter Topic Subject " name="subject" required>
                   </td>
                </tr>

               <tr>
                   <td>
                         <label><b>Rows:</b></label>
                   </td>
                   <td>
                         <input type="text" placeholder="Enter Number of Table Rows" name="rows" required>
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
                         <label><b>Id:</b></label>
                     </td>
					 
                     <td>
                         <input id="id11" type="text" placeholder="Enter Id" name="id" required><br/>
                     </td>
                   </tr>
 
 
                 <tr>
                    <td>
                         <label><b>Name:</b></label>
                    </td>
                    <td>
                         <input id="id12" type="text" placeholder="Enter name" name="name" required><br/>
                    </td>
                 </tr>
 
                <tr>
                   <td>
                         <label><b>Title:</b></label>
                   </td>             
				   <td>
                         <input id="id13" type="text" placeholder="Enter title" name="title" required><br/>
                   </td>
                </tr>

                <tr>
                   <td>
                         <label><b>Email:</b></label>
                   </td>
                   <td>
                         <input id="id14" type="text" placeholder="Email" name="email" required>
                   </td>
                </tr>
  
                <tr>			             
                   <td>
                         <label><b>Bericht:</b></label>
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
                         <label><b>Id:</b></label>
                     </td>
					 
                     <td>
                         <input id="id16" type="text" placeholder="Enter Id" name="id" required><br/>
                     </td>
                   </tr>
 
 
                 <tr>
                    <td>
                         <label><b>Name:</b></label>
                    </td>
                    <td>
                         <input id="id17" type="text" placeholder="Enter name" name="name" required><br/>
                    </td>
                 </tr>
 
                <tr>
                   <td>
                         <label><b>Title:</b></label>
                   </td>             
				   <td>
                         <input id="id18" type="text" placeholder="Enter title" name="title" required><br/>
                   </td>
                </tr>

                <tr>
                   <td>
                         <label><b>Email:</b></label>
                   </td>
                   <td>
                         <input id="id19" type="text" placeholder="Email" name="email" required>
                   </td>
                </tr>
  
                <tr>			             
                   <td>
                         <label><b>Bericht:</b></label>
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
                         <label><b>Id:</b></label>
                     </td>
					 
                     <td>
                         <input id="id21" type="text" placeholder="Enter Id" name="id" required><br/>
                     </td>
                   </tr>
 
 
                 <tr>
                    <td>
                         <label><b>Name:</b></label>
                    </td>
                    <td>
                         <input id="id22" type="text" placeholder="Enter name" name="name" required><br/>
                    </td>
                 </tr>
 
                <tr>
                   <td>
                         <label><b>Title:</b></label>
                   </td>             
				   <td>
                         <input id="id23" type="text" placeholder="Enter title" name="title" required><br/>
                   </td>
                </tr>

                <tr>
                   <td>
                         <label><b>Email:</b></label>
                   </td>
                   <td>
                         <input id="id24" type="text" placeholder="Email" name="email" required>
                   </td>
                </tr>
  
                <tr>			             
                   <td>
                         <label><b>Bericht:</b></label>
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
                         <label><b>Id:</b></label>
                     </td>
					 
                     <td>
                         <input id="id26" type="text" placeholder="Enter Id" name="id" required><br/>
                     </td>
                   </tr>
 
 
                 <tr>
                    <td>
                         <label><b>Name:</b></label>
                    </td>
                    <td>
                         <input id="id27" type="text" placeholder="Enter name" name="name" required><br/>
                    </td>
                 </tr>
 
                <tr>
                   <td>
                         <label><b>Title:</b></label>
                   </td>             
				   <td>
                         <input id="id28" type="text" placeholder="Enter title" name="title" required><br/>
                   </td>
                </tr>

                <tr>
                   <td>
                         <label><b>Email:</b></label>
                   </td>
                   <td>
                         <input id="id29" type="text" placeholder="Email" name="email" required>
                   </td>
                </tr>
  
                <tr>			             
                   <td>
                         <label><b>Bericht:</b></label>
                   </td>
                   <td id="30">
                         <textarea name="blog" cols="28" rows="9"  placeholder="Enter Blog" required></textarea>
                   </td>
                </tr>
           </table>

</form>
 </div>
  
  


</div>
   <div id="AdminText">
 </div>

  </body>
</html>