  <!DOCTYPE html>
  <html>
  <head> 
  
      <title> Admin Login | Globalization &amp; Me </title>
      
      <meta charset= "utf-8">
      <meta name="Revisit-After" content="30 Days" />
  <meta name="robots" content="index" />
      <meta name = "description" content =" Gened web application, Mercer University CLA Evaluation">
      <meta name = "author" content ="Boakai Mamey">
       
  <link href='http://fonts.googleapis.com/css?family=Expletus+Sans:700' rel='stylesheet' type='text/css'> 
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>   
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>    
    
  	<link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link rel="stylesheet" href="styles/all.css" />
  <link rel="stylesheet" href="main.css" type="text/css"/>
       
  
 
 
       <style>
      
        /* style for welcome message */
      #rr{
  position:absolute;
      top:25px;
      right:30px;
      height:20px;
      width:auto;
      border:none;
  
      text-align:right;
      color:#8e8e8e;
      
  }
  
  
  
  .checkedSelection{
      background-color:#cce6ff !important;
  }
  
          
      </style>
      

      
     <script>
	 
  </script>
      
  </head>
      
      <body >	<div class="container">
	<?php $currentPage = "gm_admin";?>  <?php include("includes/header.php"); ?>    <div id="main-content">    <div class="content-wrapper">      
  <?php
 //new session starts here
  session_start();
  
      $salt1 = "qm&h*"; // added to password for security
      $salt2 = "pg!@";
      require_once 'login.php';	// file to login to db
      
      
  function mysql_entities_fix_string($string)	// function for fixing html entities
  {
      return htmlentities(mysql_fix_string($string));
  }	
  
  function mysql_fix_string($string) //fix string for msql db
  {
      if (get_magic_quotes_gpc()) $string = stripslashes($string);
      return mysql_real_escape_string($string);
  }
  
  // code block for changing password
  //if button is clicked for changiing password
  if(@$_POST['updatePass'])
  {
      
      $con = mysql_connect($db_hostname, $db_username, $db_password);
  
      if (!$con)
        {
        die('Could not connect to mySQL: (cp) ' . mysql_error());
        }
  
      // Try to open your DataBase
      if (!mysql_select_db($db_database, $con))
        {
         die ('Could not open DB: ' . mysql_error());
        }
        // sent the textbox vals throug the string fixing functions
        $na = (mysql_entities_fix_string($_POST['CPuname']));
          $tp = (mysql_entities_fix_string($_POST['CPNewPassword']));
          $fixtp = sha1($salt1.$tp.$salt2);
          $tempEmail = (mysql_entities_fix_string($_POST['CPEmail']));
          
      $result = mysql_query("SELECT * FROM Users WHERE UserName = '$na'",$con);
      if(!$result) 
      {
       die('Could not retrieve data: ' . mysql_error());
      }
          
          $row = mysql_fetch_array($result);
          
       if ($row['UserName'] != $na )
          echo"<p class = 'message'>The username $na does not exist</p>";	
          
       else if ($row['Email'] != $tempEmail)
          echo"<p class = 'message'>The email $tempEmail does not exist</p>";
          
      
          
      else
      {
      //everything is great so update the password
      $stmt = "UPDATE Users
  SET Password='$fixtp'
  WHERE UserName='$na' and Email = '$tempEmail'";
  
      $retval = mysql_query($stmt, $con);
      if(!$retval )
    die('Could not update data: ' . mysql_error());
  else
  echo "<p class = 'success'>Your Password was successfully Changed</p>";
  }
  
  mysql_close($con);
  
  }
  
      //users sign in
  // if the sign in button is clicked
  if (isset ($_POST['signin']))
  {
      $con = mysql_connect($db_hostname, $db_username, $db_password);
  
      if (!$con)
        {
        die('Could not connect to mySQL: ' . mysql_error());
        }
  
      // Try to open Db
      if (!mysql_select_db($db_database, $con))
        {
         die ('Could not open DB: ' . mysql_error());
        }
        
      $fixPass = (mysql_entities_fix_string($_POST[SIpassword]));
      $pass = sha1($salt1.$fixPass.$salt2);
      $uname = (mysql_entities_fix_string($_POST[SIusername]));
      
        
      $result = mysql_query("SELECT * FROM Users WHERE UserName = '$uname'",$con);
      
      $row = mysql_fetch_array($result);
      
      mysql_close($con);
  if($uname == $row['UserName'])   //if username mathes
   	 {		
      	if ($row['Password'] == $pass )//then check password
     	 {
     		 $_SESSION["isLoggedIn"]=1; //setting a varable so that later i know that this user is logged in
       	  $_SESSION["uname"]= $row['UserName'];
		   header("Location: Admin.php");
  
  		  }
     	 else //password is wrong
          {
              echo "<p class = 'message' >Invalid Password </p>";
          }
 	 }
 	 else //username is wrong
      { 
      	echo "<p class = 'message' >Invalid Username </p>";
      }
  }//post signin form
  

      
      //for loging out
  if(isset($_GET["action"]))
  {
      if($_GET["action"])
      {
  
          session_unset();
          //unset all session variables
  
          session_destroy();
          // destroy session
		   header("Location: ../index.php");
      }
  }
  
  if(isset($_POST["action"]))
  {
      if($_POST["action"])
      {
  
          session_unset();
          //unset all session variables
  
          session_destroy();
          // destroy session
      }
  }
  ?>
 
      
    <!-- header -->
    <script>
    // animation for showing and hiding the div for changing password
  $(document).ready(function() {
      
  $("#frgotPsswd").click(function () {
     
         $( "#seeThrough" ).show("clip", { });
        $( "#changePass" ).show("drop", { direction: "down" }, 500);
  
        $("#closeLink").click(function () {
     
         $( "#seeThrough" ).hide("clip", { });
        $( "#changePass" ).hide("clip", { }, 200);
  
  });
        
  });
  
    });
  
  </script>            <div id = "profLoginClickable"> 
  <div id = "sigInDiv" >
  
  <form id = "signInForm" name="signInInfo"  action="." method="post">
  <fieldset id = "fs">
      <legend > Admin Login</legend>
  
  <br />
  <br />
  <br />
  
  <label class = "signInLabels" for="SIusername" > Username:</label>
   <input id = "signInbox" class = "signInbox" type="text" name="SIusername"   required autofocus><br /> <br />
    <label class = "signInLabels" for="SIpassword"> Password:</label>
    <input class = "signInbox" type="password" name="SIpassword" required> 
    &nbsp;
    <a  href="#" id = "frgotPsswd" >Forgot password?</a>
    <br />
    
    <input id = "btnSignIn" class="button" type="submit" name="signin" value="Login">
    <br />
    
                                  
      <br />
      <br />
      
    </fieldset>
    
    </form>
    
    
    
    </div>
      <!-- Main body section -->  
  <section id = "mainSection">
   <!-- change password div -->
  <div id="changePass" class="">
       
          <a href = "#"> <img  src="close.jpg" id = 'closeLink'/></a>
        
  <h1>Retrieve your password!</h1>
     <br />
      <br />
      <form  name="passChange" action = "." method="post">
    <label  class = "txtboxLabels" for="CPNewPassword" >New Password:</label>
    
      <input class = "signUpBoxes" type="password" name="CPNewPassword" id = "CPNewPassword" required>
      <br>
      <br>
      <label  class = "txtboxLabels" for="VPassword" >Verify Password:</label>
      
      <input class = "signUpBoxes" type="password" name="VPassword" id = "VPassword" onKeyUp = "myFunction('CPNewPassword', 'VPassword', 'passwdCheck','updatePass' );" required>
      <span class = "red" id = "passwdCheck"  >  </span>
      <br>
  <br>
  
   <label class = "txtboxLabels" for="CPuname" id="NameLbl"> Username:</label>
   <input class = "signUpBoxes" type="text" name="CPuname" required id="CPuname" ><br>
  <br>
  
  <label class = "txtboxLabels" for="CPEmail" id="EmailLbl"> Email:</label>
   <input class = "signUpBoxes" type="email" name="CPEmail" required id="CPEmail" ><br>
  <br>
      
    <input class = 'CPButton button' type="submit" id = "updatePass" name="updatePass" value="Change Password">
    
   <br>
   </form>	  
      </div>
     <!-- change password div ends --> 
      
      
      
  
  </section>
  <div class="push"></div><!-- fix for footer to stay at the bottom -->
    <!-- wrapper div ends -->
   
     <!-- outerContainer div ends -->
    </div>  </div>
    <?php include("includes/footer.php"); ?>   </div>   <div id="seeThrough" class="seeThrough"></div>
  </body>
  
  </html>