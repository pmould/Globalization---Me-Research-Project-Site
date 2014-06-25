<!DOCTYPE html>

<html lang="en">

    <head>

		<meta charset="UTF-8" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 

        <title></title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

        <meta name="description" content="" />

        <meta name="keywords" content="" />

        <meta name="author" content="Codrops" />

        <link rel="shortcut icon" href=""> 

		<link rel="stylesheet" type="text/css" href="css/style.css" />

        <link rel="stylesheet" type="text/css" href="css/sliderstyle.css" />

        <link rel="stylesheet" type="text/css" href="css/sliderstyleCustom.css" />

	

        <link rel="stylesheet" type="text/css" href="css/nonHomepageStyle.css" />

		<noscript>

			<link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />

            

		</noscript>

    </head>

	<style>

		#contactform .forminputcontact{

			

				display:inline-block;

				margin-bottom: 30px;

				border: 1px solid #999;

				

				-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);

				-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);

				box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);

			

		}

		

		#contactform input.button{

			height:30px;

			-webkit-border-radius: 10px;

			-moz-border-radius: 10px;

			border-radius: 10px;

			border: 1p solid #999;

			width:100px;

			

			position: relative;

			bottom: 38px;

			left: 20px;



}

		#contactform input.button:hover {

			background:#fff;

			color:#1dd2af;	

		}

	</style>

        <?php $currentPage = "About The Researcher";?>
	<?php include("includes/header.php"); ?>
            	<div id="main-content">

                <div class="content-wrapper">

                <h2> Contact</h2>
                <p>Chinekwu Obidoa Ph.D. MA. MPH. MS.  CPH</p>
                <p>Dr. Chinekwu Obidoa is an Assistant  Professor of Global Health at Mercer University in Macon, GA. Her areas of  research interest &amp; expertise include: Global Social Determinants of  Health; Emerging Adulthood; Spatial and Social Epidemiology of HIV/AIDS; the  Impact of Globalization on Health and Health Disparities, African Immigrants  Health. She is a mixed methods researcher who integrates qualitative,  quantitative, and geographic analytic methods in research. </p>
                <p>Her research has focused  specifically on the geographic and social aspects of HIV/AIDS, the factors  associated with HIV/AIDS risk in Nigerian youth, and the impact of  globalization on youth in Nigeria. Some of her work include: 
                  <em>Geographical Analysis of HIV/AIDS infection in Nigeria 1991-2001  (Obidoa &amp; Cromley, 2012) </em> 
                  <em>Factors associated with HIV/AIDS  Sexual Risk among Young Women aged 15-24 in Nigeria</em> (Obidoa, M&rsquo;Lan &amp; Scehnsul, 2012)</p>
                <p>Emerging Adulthood in West African Cultures: Nigeria &amp; Ghana (Dodor,  B., <strong>Obidoa, C</strong>., Tackie-Ofosu, V.,  Obidoa, M. &amp; Kalisch, H., 2013). </p>
                <p>Dr. Obidoa has received local and international recognition for  her work. She was awarded the New Investigator in Global Health (NIGH) award by  the Global Health Council twice in 2006 and 2011. In 2006 she was awarded this  recognition based on her work on HIV/AIDS risk among young women in Nigeria and  in 2011 she was awarded recognition for her work on globalization and Nigerian  youth.</p>
                <p>She holds a Ph.D. in Public Health,  a MA in Geography, a M.P.H in Public Health and a M.S. in International and  Area Studies with a concentration in African Studies. She is also certified in  Public Health. </p>
                <p>Contact Information</p>
                <p>Chinekwu Obidoa Ph.D.
                  Assistant Professor of Global Health
                  Department of International &amp; Global Studies
                  Mercer University
                  1400 Coleman Dr. Macon, GA 31207
                  Email: obidoa_c@mercer.edu
                  Phone office: (478) 301-2353<strong><u> </u></strong></p>
                <h2>
                  
                  <?php

// display form if user has not clicked submit

if (!isset($_POST["submit"]))

  {



  ?>
                  
                  
                  
                </h2>
                <form  id ="contactform" action="contact.php" method="POST" enctype=			"multipart/form-data">

    				<input type="hidden" name="action" value="submit"/> Your name:<br />

    				<input class="  forminputcontact" style="height:30px;"  name="name" type="text" value="" size="30"/> <br /> Your email:<br />

   					 <input class="forminputcontact" style="height:30px;"  name="from" type="text" value="" size="30"/> <br /> Subject:<br />

    				<input class="  forminputcontact" style="height:30px;"  name="subject" type="text" value="" size="30"/> <br />  Your message:<br />

   					 <textarea class="forminputcontact" name="message" rows="10" cols="40"> </textarea> 

                    

    				<input name="submit" class = "button" type="submit" value="Send Message"/>

                 

</form> 



  <?php 

  }

else

  // the user has submitted the form

  {

	

  // Check if the "from" input field is filled out

  if (isset($_POST["from"]))

    {

    $from = $_POST["from"]; // sender

    $subject = $_POST["subject"];

    $message = $_POST["message"];

    // message lines should not exceed 70 characters (PHP rule), so wrap it

    $message = wordwrap($message, 70);

    // send mail



    mail("paul_mould@hotmail.com",$subject,$message,"From: $from\n");

    echo "<h1>Thank you for sending us feedback</h1>";



    }

  }

?>

                    



                

                </div>





                

                </div>

                



            

			



<?php include("includes/footer.php"); ?>
        </div>



	</body>

</html>