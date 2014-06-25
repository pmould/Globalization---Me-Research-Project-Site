<!DOCTYPE html>

<html lang="en">

    <head>

		<meta charset="UTF-8" />
        <title>Submit Data</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

        <meta name="description" content="Research" />

        <meta name="keywords" content="Dr Obidoa, Research" />

        <meta name="author" content="Boakai Mamey, Paul Mould" /> 

		<link rel="stylesheet" type="text/css" href="css/style.css" />

        <link rel="stylesheet" type="text/css" href="css/sliderstyle.css" />

        <link rel="stylesheet" type="text/css" href="css/sliderstyleCustom.css" />

        <link rel="stylesheet" type="text/css" href="css/nonHomepageStyle.css" />

		<noscript>

			<link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />

		</noscript>

    </head>

	<style>

		iframe{
			overflow:hidden !important;
		}

		li {

			font-size: 17px;	

			margin-left: 50px;

		}

		

		.forminput

		{
				padding: 30px 20px 0 0;

		}

		

		.forminput .textin, .forminput select {

			

			border: 1px solid #999;

			height: 30px;

			-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);

			-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);

			box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);

			

		}

		.upload {

			margin-top: 10px;	

		}

		

		



		

		.checkbox {

			height: 18px;

			width: 18px;

			display: inline-block;

			float: left;

			margin-right: 10px;	

		}

	

	</style>

        <?php $currentPage = "Submit";?>
	<?php include("includes/header.php"); ?>
            	<div id="main-content">

                <div class="content-wrapper">

                <h2> Submit Your Data</h2>

                <p><b>This is a mixed methods study that will involve data collection through social media, specifically pictures and a one minute video clip, a short demographic survey and photo narrative.</b> 

                <ul>

                <li><span>Submit a picture and a 2 minute video clip showing the most salient impact of globalization on Nigerian youth lives showing your own perspective. </span></li>

                <li><span>Submit a video clip to serve as confirmation that the study to confirm you are are the person in the picture that would be submitted. </span></li>

                <li><span>Please complete a short demographic survey and  a short narrative of the contents of the picture at the end of the form.</span></li>

                </ul>

                </p>

                <section id="dataEntryForm">
<div id="surveyMonkeyInfo"><div><script src="https://www.surveymonkey.com/jsEmbed.aspx?sm=WwwJftB_2bCmKbUMappUiEog_3d_3d"> </script></div></div>   
                <h3> Submission Form</h3>

                <form  action="" method="POST" enctype=			"multipart/form-data">

    				<input type="hidden" name="action" value="submit"/> 

                    <div class = "forminput"> <label>First name </label>
                    <input class="textin" name="fname" type="text" value="" /> </div>

                     

                    <div class = "forminput">Last Name <input class="textin" name="lname" type="text" value=""/></div> 
                     <div class = "forminput"> First name <input class="textin" name="fname" type="text" value="" /> </div> 

   					<div class = "forminput">Age 

                    <select>
	<?php
	 for($i = 18; $i<31; $i++)
		 {
			$val = $i == 18 ? "<option value=\"$i\" selected=\"$i\">$i</option>" :" <option value=\"$i\">$i</option>";
				echo $val;
		} 
		
		?>
                    </select>

                  

                    </div> <br /> 

                    

                    

                    

     				<?php

					

						$states    = array( "AB" => "Abia", "AJ" => "Abuja", "AN" => "Anambra",               			 "AD" => "Adamawa", "AK" => "Akwa Ibom",                "BA" => "Bauchi",                "BY" => "Bayelsa",               			 "BE" => "Benue",                "BO" => "Borno",                "CR" => "Cross River",                "DE" => "Delta",               			 "ED" => "Edo",                "EK" => "Ekiti",                "EB" => "Ebonyi",                "EN" => "Enugu",              			  "GO" => "Gombe",                "IM" => "Imo",                "KN" => "Kano",                "LA" => "Lagos",             			   "NS" => "Nassarawa",                "JI" => "Jigawa",                "KB" => "Kebbi",                "KD" => "Kaduna", "KG" => "Kogi",                "KT" => "Katsina",                "KW" => "Kwara",                "NR" => "Niger", "OG" => "Ogun",                "ON" => "Ondo",                "OS" => "Osun",                "OY" => "Oyo", "PL" => "Plateau",                "RV" => "Rivers",                "SO" => "Sokoto",                "TA" => "Taraba", "YB" => "Yobe",                "ZM" => "Zamfara"                       );

					?>

					

                    <div class = "forminput">State

					<select class="boxex" name="state">

					<?php foreach($states as $key => $value)

					{ ?>

					<option value="<?php echo$key; ?>"><?php echo $value; ?></option>

					<?php } ?>

					</select></div> <br > 

					

                    <div class = "forminput"><label for="filephoto">Upload Photo:</label>

<input  class="boxex" type="file" name="filephoto" id="filephoto">

<input class="upload button" type="submit" name="uploadphoto" value="Upload Photo"></div>

					<div class = "forminput"><label for="filevideo">Upload Video:</label>

<input type="file" name="filevideo" id="filevideo">

<input class="upload button" type="submit" name="uploadvideo" value="Upload Video"></div>

<div class = "forminput "><input class = "checkbox" type="checkbox"    name="consentcheck" value="check"> I consent to participate and have my picture used in this research project</div>

    

    				<div class = "forminput"><input class = "button"name="submitdata" type="submit" value="Submit Data"/> </div>

</form> 

			</section>

                </div>

                </div>

			

            

			



		
<?php include("includes/footer.php"); ?>
        </div>

<script>
  document.addEventListener("DOMContentLoaded", function(event) {
	document.querySelector('#surveyMonkeyInfo div iframe').height = 1170;
 document.querySelector('#surveyMonkeyInfo div iframe').style.overflow = "hidden";
  });
</script>

	</body>

</html>