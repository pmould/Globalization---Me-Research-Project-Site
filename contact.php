<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Contact Researcher | Globalization & Me</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="You are invited to participate in a research study that seeks to explore the ways in which globalization is affecting the lives of young people and young adults in Africa. If you choose to participate you will be entered into a a drawing of 10 cash prizes of $20 each." />
<meta name="keywords" content="Africa Globailization youth  West Africa Nigeria Ghana Liberia photo contest free entry social media lifestyle  Dr. Obidoa Research" />
<meta name="author" content="Boakai Mamey & Paul Mould" />
<link rel="shortcut icon" href="">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/sliderstyle.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script>
$(document).ready(function() {
    $(".jumper").on("click", function( e ) {

        e.preventDefault();

        $("body, html").animate({ 
            scrollTop: $( $(this).attr('href') ).offset().top 
        }, 400);

    });
});
</script>
</head>
    <style></style>
    <?php $currentPage = "About The Researcher";?>
    <?php include("includes/header.php"); ?>
  <div id="main-content">
    <div class="content-wrapper">
    <h1>About The Researcher</h1>
    <div id="contact_header" class="clearfix">
    <div id="contact_img">
    <img src="images/obidoa.jpg">
    </div>
    <div id ="contact_button">
    <span id="research_edu">Chinekwu Obidoa<br> Ph.D. MA. MPH. MS. CPH</span>
    <button onclick="" href="#contactinfohead" class ="button jumper">Contact Researcher</button>
    </div>
    
    </div>

      <article class ="article_lists">Dr. Chinekwu Obidoa is an Assistant Professor of Global Health at Mercer University in Macon, GA. Her areas of research interest &amp; expertise include: Global Social Determinants of Health; Emerging Adulthood; Spatial and Social Epidemiology of HIV/AIDS; the Impact of Globalization on Health and Health Disparities, African Immigrants Health. She is a mixed methods researcher who integrates qualitative, quantitative, and geographic analytic methods in research.  </article>
      <article class ="article_lists" id="worklist">Some of her work include: 
      <ul>
      	<li><span><a target="_blank" href="http://www.publishing.waldenu.edu/do/search/?q=obidoa&start=0&context=2169645"><b>Obidoa, C. A.</b> & Cromley, R. G. (2012) Geographical analysis of HIV/AIDS infection in Nigeria 1991-2001.  Journal of Social, Behavioral and Health Sciences, 6(1), 13-29</a></span></li>
        <li><span><a target="_blank" href="http://www.publichealthinafrica.org/index.php/jphia/article/view/jphia.2012.e15"><b>Obidoa, C. A.</b>, M'Lan, C. E., & Schensul, S. L. (2012). Factors associated with HIV/AIDS sexual risk among young women aged 15-24 years in Nigeria. Journal of Public Health in Africa, 3(1): DOI: 10.4081/jphia.2012.e15</a></span></li>
        <li><span>Emerging Adulthood in West African Cultures: Nigeria & Ghana (Dodor, B.,<b> Obidoa, C.</b>, Tackie-Ofosu, V., Obidoa, M. & Kalisch, H., 2013)</span></li>
      </ul>
      </article>
      <article class ="article_lists">Dr. Obidoa has received local and international recognition for her work. She was awarded the New Investigator in Global Health (NIGH) award by the Global Health Council twice in 2006 and 2011. In 2006 she was awarded this recognition based on her work on HIV/AIDS risk among young women in Nigeria and in 2011 she was awarded recognition for her work on globalization and Nigerian youth.</article>
      
      <article class ="article_lists">She holds a Ph.D. in Public Health, a M.A. in Geography (Medical), a M.P.H in Public Health and a M.S. in International and Area Studies with a concentration in African Studies.</article>
      <br>
      <div="contactbottompage" class="clearfix">
      <div id="contactinfohead">
      <h2 >Contact Information</h2>
      <article class ="article_lists">
        <h3> Address</h3>
        Dr. Chinekwu Obidoa<br>
        Department of International &amp; Global Studies<br>
        Mercer University<br>
        1400 Coleman Dr. Macon, GA 31207 </article>
      <article class ="article_lists">
        <h3>Email</h3>
        obidoa_c@mercer.edu </article>
      <article class ="article_lists">
        <h3>Phone office</h3>
        (478) 301-2353</article>
        </div>
      <?php
// display form if user has not clicked submit

if (!isset($_POST["submit"]))
  {
  ?>
      
      <form  id ="contactform" class="clearfix" action="contact.php" method="POST" enctype=			"multipart/form-data">
        <h2>Contact Form</h2>
        <input type="hidden" name="action" value="submit"/>
        <div class = "forminput">Your name:
          <input class="textinput" style="height:30px;"  name="name" type="text" value="" size="30"/>
        </div>
        <div class = "forminput"> Your email:
          <input class="textinput" style="height:30px;"  name="from" type="text" value="" />
        </div>
        <div class = "forminput">Subject:
          <input class="textinput" style="height:30px;"  name="subject" type="text" value="" />
        </div>
        <div class = "forminput"> Your message:
          <textarea class="textareainput" name="message" rows="10" cols="40"> </textarea>
        </div>
        <div class = "forminput">
        <input id="contactMsgBtn" name="submit" class = "button" type="submit" value="Send Message"/>
        </div>
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







    mail("obidoa_c@mercer.edu",$subject,$message,"From: $from\n");



    echo "<h1>Thank you for sending us feedback</h1>";







    }



  }



?>
</div>
    </div>
  </div>
  <?php include("includes/footer.php"); ?>
</div>
</body>
</html>