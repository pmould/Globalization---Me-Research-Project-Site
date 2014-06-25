  <?php
  session_start(); //new session starts here
if($_SESSION["isLoggedIn"]!=1){
	 header("Location: index.php");
exit;
}
	require_once 'login.php';
	
function mysql_entities_fix_string($string)
{
	return htmlentities(mysql_fix_string($string));
}	

function mysql_fix_string($string)
{
	if (get_magic_quotes_gpc()) $string = stripslashes($string);
	return mysql_real_escape_string($string);
}
  
  ?>
 
  <!DOCTYPE html>
  <html>
  <head> 
  
      <title> G&M </title>
      
      <meta charset= "utf-8">
      <meta name="Revisit-After" content="30 Days" />
  <meta name="robots" content="index" />
      <meta name = "description" content =" Gened web application, Mercer University CLA Evaluation">
      <meta name = "author" content ="Boakai Mamey">
       
  <link href='http://fonts.googleapis.com/css?family=Expletus+Sans:700' rel='stylesheet' type='text/css'> 
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>   
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>    
    
  
  <link rel="stylesheet" href="styles/all.css" />
  <link rel="stylesheet" href="main.css" type="text/css"/>  <link rel="stylesheet" type="text/css" href="../css/style.css" />
       
  
 
 
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
      
      <body > 	<div class="container">	<?php $currentPage = "gm_admin_in";?>  <?php include("includes/headeradmin.php"); ?>    <div id="main-content">    <div class="content-wrapper">
 
  <div id = "designer">
  <a href="#" id="addNew"> Add new Admin</a>
  </div>
  
  
 
  
  
 <!-- page wrapper -->

  
      <?php
	  $con = mysql_connect($db_hostname, $db_username, $db_password);
	  // Try to open your DataBase
	if (!mysql_select_db($db_database, $con))
	  {
	   die ('Could not open DB: ' . mysql_error());
	  }
	  	if (!$con)
	  {
	  die('Could not connect to mySQL: ' . mysql_error());
	  }
	  
	  
	  $filesQr = mysql_query("SELECT * FROM Uploads",$con);
	
	if(!$filesQr) 
	{
	 die('Could not retrieve data: ' . mysql_error());
	}
	echo "<h1> Research Participants </h1>";
echo "<table id = 'tlbShowUploads'>";
	echo" <thead> 
		<th class='left'></th>
		<th class='center'> Name </th>
		<th class='center'> Pictures </th>
		<th class='left'>Date Uploaded </th>
		</tr></thead>";
		
	while($upFiles = mysql_fetch_array($filesQr))
  {
	  $file = $upFiles['File'];
	 echo "<tr>";
   echo "<td>" . $upFiles['ID'] . "</td>";
  echo "<td>" . $upFiles['Name'] . "</td>";
  echo "<td> <a href ='../Uploads/$file' target='_blank'>" . $file . "</a></td>";
  echo "<td>" . $upFiles['Date'] . "</td>";
 // echo "<td><button class='dloadBtn'> Download </button></td>";
  echo "</tr>";
 
  }
echo "</table>";
	  
	  
	  
      	if($_POST['newADMBtn']){
      $salt1 = "qm&h*"; // added to password for security
      $salt2 = "pg!@";
    $fixTempPass = (mysql_entities_fix_string($_POST['reADMPass']));
	$tempName =  mysql_entities_fix_string($_POST['ADMName']);
	$tempEmail =  mysql_entities_fix_string($_POST['ADMEmail']);
	  $newPass = sha1($salt1.$fixTempPass.$salt2);
	$tempUname = (mysql_entities_fix_string ($_POST['ADMUname']));

	  
	$sql="INSERT INTO Users (Name, UserName, Password, Email)
	VALUES
	('$tempName','$tempUname','$newPass','$tempEmail')";
		
	if (!mysql_query($sql,$con))
	  die('Error adding New Urser: ' . mysql_error());
	  
	  echo"<p class = 'success' id = 'mes' >New Admin added successfull</p>";
	  echo"<script>
	myTimer('mes');
	 </script>";
	  
	mysql_close($con);
}
  
  ?>
  
        <!-- Add New Admin div -->
<div id="newAdmin" >
     
        <a href = "#"> <img  src="close.jpg" id = 'closeLink2'/></a>
      
<h1>Add A New Admin</h1>
   <br />
    <form  name="newAdm" action = "Admin.php" method="post">
  <label  class = "txtboxLabels" for="ADMName" >Name:</label>
  
    <input class = "signUpBoxes textinput" type="text" name="ADMName"  required>
    <br>
    <br>
    <label  class = "txtboxLabels" for="ADMUname" >Username:</label>
    
    <input class = "signUpBoxes textinput" type="text" name="ADMUname" required>
    <br>
<br>

 <label class = "txtboxLabels" for="ADMPass" > Password:</label>
 <input class = "signUpBoxes textinput" type="password"  id = "Pas1" name="ADMPass" required  ><br>
<br>

 <label class = "txtboxLabels" for="reADMPass" > Re-Enter Password:</label>
 <input class = "signUpBoxes  textinput" type="password" name="reADMPass" id = "rePas2"  onKeyUp="myFunction('Pas1', 'rePas2', 'ChPassText2','newADMBtn' );" required> <span id = "ChPassText2" class = "red"> </span>
   <br>
<br>

<label class = "txtboxLabels" for="ADMEmail" id="ADMEmail"> Email:</label>
 <input class = "signUpBoxes textinput" type="email" name="ADMEmail" required  ><br>
<br>
    
  <input class = 'CPButton button' type="submit" id = "newADMBtn" name="newADMBtn" value="Add Admin" >
 <br>
 </form>	  
   	</div>
  </div>

  
      
  
  
  
      <!-- Main body section -->
  
  <div class="push"></div><!-- fix for footer to stay at the bottom -->
       <div id="seeThrough" class="seeThrough"></div>           </div>  	</div>    <?php include("includes/footer.php"); ?>   </div>
          <script>
    // animation for showing and hiding the div for changing password
  $(document).ready(function() {
      
  $("#addNew").click(function () {
     
         $( "#seeThrough" ).show("clip", { });
        $( "#newAdmin" ).show("drop", { direction: "down" }, 500);
  
        $("#closeLink2").click(function () {
     
         $( "#seeThrough" ).hide("clip", { });
        $( "#newAdmin" ).hide("clip", { }, 200);
  
  });
        
  });
  
    });
  
  </script>
  </body>
  
  </html>