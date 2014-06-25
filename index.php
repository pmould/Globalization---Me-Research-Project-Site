<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>HomePage | Globalization & Me</title>
<meta name="viewport<!--  -->" content="width=device-width, initial-scale=1.0">
<meta name="description" content="You are invited to participate in a research study that seeks to explore the ways in which globalization is affecting the lives of young people and young adults in Africa. If you choose to participate you will be entered into a drawing of 10 cash prizes of $20 each." />
<meta name="keywords" content="Africa Globailization youth  West Africa Nigeria Ghana Liberia drawing cash prizes free entry social media lifestyle Dr. Obidoa Research" />
<meta name="author" content="Boakai Mamey & Paul Mould" />
<link rel="shortcut icon" href="">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/sliderstyle.css" />
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
<noscript>
<link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
</noscript>
</head><style></style>
<?php $currentPage = "Home";?>
   <body onload=""> 

        <div class="container">
		
          <header id= "headerhome" class="clearfix">
		  <div id= "headercontent">
		  
		  
          <h1></h1>

				<h1><a class="current" href="index.php">Globalization  <b>&amp;</b> Me </a><span id = "tagline"> Exploring the Impact of Globalization  through Social Media </span></h1>

				<nav class="nav">

       <?php 

		if (isset($currentPage))
{
	$nav = $currentPage == "Home" ? "<a class=\"current\" href=\"index.php\">Home</a>" : "<a  href=\"index.php\">Home</a>";

	$nav .= $currentPage == "About The Study" ? "<a class=\"current\" href=\"about.php\">About The Study</a>" : "<a href=\"about.php\">About The Study</a>";

	$nav .= $currentPage == "Submit" ? "<a class=\"current\" href=\"submit.php\">Submit Your Data</a>" : "<a  href=\"submit.php\">Submit Your Data</a>";

	$nav .= $currentPage == "About The Researcher" ? "<a class=\"current\" href=\"contact.php\">About The Researcher</a>" : "<a href=\"contact.php\">About The Researcher</a>";

		echo $nav;
}

	 ?>

					

                    

                

			  </nav>
				</div>
			</header>
  <div id="slider" class="sl-slider-wrapper">
    <div class="sl-slider">
      <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-1"></div>
          <h2>Researching Globalization In Africa </h2>
          <p>&nbsp;</p>
          <blockquote>
            <p>Identifing how different aspects of globalization affects  young people across the continent.</p>
          </blockquote>
        </div>
      </div>
      <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-2"></div>
          <h2>Do you live in one of the 55 countries in Africa...<br>
            and are you between the ages of 18-30?</h2>
          <blockquote>
            <p>Partcipate in an African-wide research study. Enter a drawing to win one of 10 cash prizes</p>
            <p>&nbsp;</p>
            <p id="secondline">Click <a id ="here_link" href="submit.php">here</a> now to get started.</ul>
            
          </blockquote>
        </div>
      </div>
      <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-3"></div>
          <h2>Submit a photo</h2>
          <blockquote>
            <p class="text-center">Entries submitted will all be entered into a drawing to win one of 10 cash prizes.</p>
          </blockquote>
        </div>
      </div>
      <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-4"></div>
          <h2 id="slide4"> Wandering which picture to upload? <br></h2>
          <blockquote>
            
            <p >Think about your life</p>
            <ul><li><span>How is globalization and the social change taking place in your country affecting your life right now?</span></li></ul>
          </blockquote>
        </div>
      </div>
      <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
        <div class="sl-slide-inner">
          <div class="bg-img bg-img-5"></div>
          <h2>Tell us about you.</h2>
          <p>&nbsp;</p>
          <blockquote>
            <p class="text-center"> Complete a very short demographic survey and tell us a little about you.</p>
            <p>&nbsp;</p>
          </blockquote>
        </div>
      </div>
    </div>
    <!-- /sl-slider -->
    
    <nav id="nav-dots" class="nav-dots"> <span class="nav-dot-current"></span> <span></span> <span></span> <span></span> <span></span> </nav>
  </div>
  <!-- /slider-wrapper -->
  
  <div id = "content_home" class="content-wrapper">
    <h2>Welcome</h2>
    <p>The Globalization and Me research study seeks to assess and analyze some of the effects of  globalization on youth lifestyles &amp;
     livelihoods in Africa through pictures.</p>
    <p>Africans between the ages of 18 and 30 who live in one of the 55 countries in Africa are invited to participate in this research study.
     If you choose to participate you will be entered into a drawing of 10 cash prizes of $20 each. </p>
    <p>To particpate complete the online survey and upload a photo that shows your  own true life experience showing how one or multiple aspects of globalization  has affected (or  is currently affecting)  your life. </p>
    <p>Click <a id ="here_link" href="submit.php">here</a> to get started!</p>
  </div>
  <?php include("includes/footer.php"); ?>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script> 
<script type="text/javascript" src="js/jquery.slitslider.js"></script> 
<script type="text/javascript">	



			$(function() {

				var Page = (function() {

					var $nav = $( '#nav-dots > span' ),



						slitslider = $( '#slider' ).slitslider( {



							onBeforeChange : function( slide, pos ) {



								$nav.removeClass( 'nav-dot-current' );



								$nav.eq( pos ).addClass( 'nav-dot-current' );

							}



						} ),



						init = function() {


							initEvents();


						},

						initEvents = function() {


							$nav.each( function( i ) {

								$( this ).on( 'click', function( event ) {
							var $dot = $( this );

									if( !slitslider.isActive() ) {

								$nav.removeClass( 'nav-dot-current' );



										$dot.addClass( 'nav-dot-current' );
								}

							slitslider.jump( i + 1 );
								return false;


								} );


							} );



						};


						return { init : init };


				})();


				Page.init();

			});

		</script>
</body>
</html>