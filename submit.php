<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8" />
<title>Submit Data | Globalization & Me</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description"
	content="You are invited to participate in a research study that seeks to explore the ways in which globalization is affecting the lives of young people and young adults in Africa. If you choose to participate you will be entered into a drawing of 10 cash prizes of $20 each." />
<meta name="keywords"
	content="Africa Globailization youth  West Africa Nigeria Ghana Liberia photo Dr. Obidoa Research contest free entry social media lifestyle" />
<meta name="author" content="Boakai Mamey &amp; Paul Mould" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/sliderstyle.css" />
<noscript>
	<link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
</noscript>
<script
	src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>

</script>
<script>
	function validate_sub()
	{
		
	    var c= document.getElementById('check_one');
	    var d= document.getElementById('check_two');
	   
	        if (c.type=='checkbox'&& d.type=='checkbox')
	        {
	            if (c.checked  && d.checked )
		            {document.getElementsByName("submitdata")[0].removeAttribute("disabled");
		            	$("#submitmsg").css("display","none");
		            }
	            else
	            {
	            	document.getElementsByName("submitdata")[0].setAttribute("disabled", "disabled");
	            }
	        }
	        
	    }
</script>
<script>
 $(document).ready(function(){ 

   $("#submitmsg").hover(
	function(){
		if ( $('#submitdata').is(':disabled') )
		{
		    $("#msg_disabled").css("opacity","1");
	    }
    
	}
    ,
    function(){
        $("#msg_disabled").css("opacity","0");
        }
 	 ); 
 
 }); 
</script>

</head>

<?php $currentPage = "Submit";?>
<?php include("includes/header.php"); require_once 'login.php';  ?>
<div id="main-content">
	<div class="content-wrapper">
		<div id="contestinfo">
			<h1>Submit Your Data</h1>
			<p>
				<b>This is a mixed methods study. All you have to do is:</b>
			<ul>
				<li><span>Submit a picture showing the most important
						impact of globalization on your life based on your perspective</span></li>
				<li><span>Complete a short demographic survey and
						description of your photo</span></li>
			</ul>
			</p>
			<article class="article_lists">
				<h3>Photo Requirements</h3>
				<ul>
					<li><span>The photo MUST be your original property </span></li>
					<li><span>The photo must not violate copyright or the
							laws of the country in which it was taken </span></li>
					<li><span>Only one picture can be submitted by the same
							participant</span></li>
					<li><span>The picture has to be less than 2MB</span></li>
					<li><span>It can be in any of these formats: Jpeg, PNG,
							BITMAP</span></li>
					<li><span>Photos must not be modified or digitally
							altered in any way</span></li>
					<li><span>The Photo MUST not contain any explicit
							images of people or scenarios- does not show a naked person or
							sexual activity</span></li>
					<li><span>If you do not want your face seen on the
							photo you can indicate in the submission form</span></li>
				</ul>
			</article>
			<article class="article_lists">
				<h3>Criteria to be considered for the drawing</h3>
				<ul type="disc">
					<li><span>Relevance to topic of the research study </span></li>
					<li><span>Clarity &amp; quality of the picture </span></li>
					<li><span>Description of the contents of the photo</span></li>
				</ul>
			</article>
			<article class="article_lists">

				<h3>Drawing Prizes</h3>
				<ul style="display: inline-block;">
					<li><span>10 cash prizes of $20 each</span></li>
				</ul>
				<div id="prizes">
					<span style="text-decoration: underline;">Winners</span> will be
					contacted through the contact information they provide<br>
					Check back here to find out the date the winners will be announced
				</div>
				<!-- Winners</span> will be contacted through the  contact information they provide.<br> 
The winners will be announced on<br><span style="text-decoration: underline;"> 
August 12<sup style="display:inline-block;border-bottom:1px solid #FFF; padding-bottom:5px;">th</sup> 2014</span>,
 the 2014 International Youth Day. -->
			</article>
			<article class="article_lists">
				<h3>Entry Requirements</h3>
				<ul>
					<li><span>You must complete the whole entry to be
							eligible to be considered in the drawing</span></li>
					<li><span>You can only submit one entry</span></li>
				</ul>
			</article>
		</div>
		<!-- Endo of Contest Information -->

		<?php 

	  $fullname = "";
	  $checked = '';
	  $errors = array(); // Error message string for over file size

        $success = "";

      		// Code to handle after the Submit Data Button is clicked     	

           if(isset($_POST['submitdata'])) 

           {

           	$errors = array(); // Error message string for over file size

			// Error message string for over file size

			

		$fullname = trim($_POST['fullname']);// Removes the spaces in the full name so that file can be stored as the particpants full name

           	

           	// Accept checkbock was not clicked 

           	// Output error message to the error array

          	 if ( !isset($_POST['consentcheck']))

          	 {

           		$errors[] =  "Accept the Agreement to particpate before submitting your photo";

           	 }

			 else

			 $checked = 'checked';

           	 //Script to upload photo to server at '/uploadfiles/$fullname'

           	 //Validate file size

           	 //Script for a successful form completion

			if(!empty($_FILES['uploaded_file']['name'])) {

				$maxsize    = 2097152;  //2MB in bytes

				

				//Acceptable filetypes for the photo upload

				$acceptable = array(

						'image/jpeg',

						'image/jpg',

						'image/gif',

						'image/png'

				);

				

				// IF file size is over 2MB put errror message in error array

				if(($_FILES['uploaded_file']['size'] >= $maxsize) || ($_FILES["uploaded_file"]["size"] == 0)) {

					$errors[] = 'File too large. File must be less than 2 megabytes.';

				}

			

				if(!in_array($_FILES['uploaded_file']['type'], $acceptable) && (!empty($_FILES["uploaded_file"]["type"])))

				{

					$errors[] = 'Invalid file type. Only JPG, GIF and PNG types are accepted.';

				}

				
				if(count($errors) === 0) {



					$fileName = $_FILES['uploaded_file']['name']; // get the filename

			$tempFile = $_FILES['uploaded_file']['tmp_name']; // get temp file name.

					

					$ext = end(explode(".", $fileName)); //get the file extention

				$newFileName = $fullname.'.'.$ext; // name the file the name of the person + the file extention



$moved = move_uploaded_file($tempFile, "Uploads/" .$newFileName);
					
$con = mysql_connect($db_hostname, $db_username, $db_password);

	if (!$con)
	  {
	  die('Could not connect to mySQL: ' . mysql_error());
	  }

	// Try to open your DataBase
	if (!mysql_select_db($db_database, $con))
	  {
	   die ('Could not open DB: ' . mysql_error());
	  }
	  
	$sql="INSERT INTO Uploads (Name, File)
	VALUES
	('$fullname','$newFileName')";
		
	if (!mysql_query($sql,$con))
	  die('Error adding New Urser: ' . mysql_error());
	  
	  echo"<p class = 'success' id = 'mes' >New Admin added successfull</p>";
	  echo"<script>
	myTimer('mes');
	 </script>";
	  
	mysql_close($con);
  				if (!$moved)
  					
				echo $errors[] ="(Opps... upload NOT successful)";
				else
				{	
					$fullname = "";
					$success = "<p class='success article_lists'>Thank you for submitting your photo.</p>";
					
				}
				} 
			}
			else // No File was uploaded. Add error message(No Photo Uploaded) to the error html string
			{
				$errors[] = "Upload a photo before clicking the Sumbit Data button";
			}
           }
           ?>

		<!--This is the Photo Submit Form it returns the page at the location of the start of the photo survey form on the page by the link tag:'formlink' above -->
		<form id="sumbitform" name="submitphotoform" action="submit.php#end"
			method="POST" enctype="multipart/form-data">

			<input type="hidden" name="action" value="submit" />

			<div id="termscond">
				<h2 class="steps">Step 1</h2>
				<span class="surveyMessage"> You <u>must</u> agree before you
					participate
				</span>
				<h2>Terms and Conditions</h2>
				<p>
					Read the research entry terms and conditions <a id="here_link"
						href="ParticipantConsentForm.pdf" target="_blank">here</a>
				</p>
				<div class="checkboxln">
					<input onblur="validate_sub()" onchange="validate_sub()"
						id="check_one" class="checkbox" type="checkbox"
						name="consentcheck" value="" <?php echo $checked ?>> <b>I
						have read and agree to the Terms & Conditions</b>
				</div>
				<h2>Aggrement to Participate</h2>
				<p>
					<iframe id="agree_iframe" src="agreement.php"> </iframe>
				</p>
				<!-- <p> I agree to participate in this study.  I understand that this study seeks to examine the different effects of  globalization on the lifestyles &amp; livelihoods of young people across  Africa. I understand that the findings of this study will be shared within  academic circles at conferences and in journal articles. I understand that by  submitting a photo, I am acknowledging that I am between the ages of 18-30 and  live in a country in Africa and that I voluntarily chose to participate in the  study. I give the researcher the rights to use and reproduce the photo for  purposes of research and dissemination of research findings only. I give the  researcher royalty-free license to use my photo in research presentations.</p>
 -->
				<div class="checkboxln">
					<input onblur="validate_sub()" onchange="validate_sub()"
						id="check_two" class="checkbox" type="checkbox"
						name="consentcheck" value="" <?php echo $checked ?>> <b>Accept</b>
				</div>
			</div>
			<div id="photosubmission">
				<h2 class="steps">Step 2</h2>
				<h2>Photo Submission Form</h2>
				<div class="forminput ">
					<label>Full Name </label> <input class="textinput" name="fullname"
						type="text" value="<?php echo $fullname ?>" />
				</div>
				<div class="forminput">
					<label for="uploaded_file">Upload Photo</label> <input class=""
						type="file" name="uploaded_file" id="uploaded_file">
				</div>
			</div>
			<section id="dataEntryForm">
				<h2 class="steps">Step 3</h2>
				<span class="surveyMessage"> Your survey must be completed
					before your photo is considered for the drawing</span>
				<h2>Research Entry Survey Form</h2>
				<div id="surveyMonkeyInfo">
					<div>
						<script
							src="https://www.surveymonkey.com/jsEmbed.aspx?sm=WwwJftB_2bCmKbUMappUiEog_3d_3d"> </script>
			</section>
			<div id="submitarea" class="inline forminput">
				<h2 class="steps">Complete</h2>
				<?php
		if(count($errors) >0)
		{
			//$output = "<p class='warning'>";
			$output='';
			foreach($errors as $error) 
						$output.= "<p class=\"article_lists warning\">" . $error . "</p>";
						
					//$output.= "</ul>";
					
					echo $output;
		
		}
		if ($success !== "")
		echo $success;
					 ?>
				<a name="end"></a>
				<div id="sdata">
					<div id="submitmsg"></div>
					<input onblur="validate_sub()" onchange="validate_sub()"
						id="submitdata" class="button" name="submitdata" type="submit"
						value="Submit Data" />
				</div>
				<div id="msg_disabled">Check the the agreement and terms &amp;
					conditions checkboxes before submitting</div>

			</div>
		</form>


	</div>
</div>
<?php include("includes/footer.php"); ?>
</div>
<script>

  document.addEventListener("DOMContentLoaded", function(event) {

	document.querySelector('#surveyMonkeyInfo div iframe').height = 1045;

 document.querySelector('#surveyMonkeyInfo div iframe').style.overflow = "hidden";
 document.querySelector('#surveyMonkeyInfo div iframe').style.border = "#1dd2af solid 2px";

  });

</script>

</body>
</html>