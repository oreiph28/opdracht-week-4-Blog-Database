<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="ma, 03 dec 2018 13:15:26 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
	      <link rel="stylesheet" href="navigation.css"> 
	        <link rel="stylesheet" href="contact.css">
    <title></title>
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>

<div id="header" align="center"></div>
<!-- ====================NAVIGATION BAR -->
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
  
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Login <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
       <a href="javascript:void(0);" class="icon" onclick="document.getElementById('id02').style.display='block'">Admin_Login</a>
       <a href="javascript:void(0);" class="icon" onclick="document.getElementById('id01').style.display='block'">User_Login</a>
    </div>
  </div>
 
    <a href="registration.php">Register</a>
</div>

<h1 align="center" id="text3">CONTACT</h1>




<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: #FF8D2E;
}

* {
    box-sizing: border-box;
}



/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #FF8D2E;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
</head>
<body>

<form action="functions/register_page.php" method="post">
  <div class="container">
    <h1>Contact</h1>

    <hr>

	 <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

	<label><b>Text</b></label>
	<textarea name="form" cols="80" rows="20" placeholder="Enter Text" required></textarea>
    <hr>

    <button type="submit"  class="registerbtn">Register</button>
  </div>

  </div>
</form>


  </body>
</html>