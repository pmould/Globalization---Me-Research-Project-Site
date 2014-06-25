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

		<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>

		<noscript>

			<link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />

		</noscript>

    </head>

        <?php $currentPage = "Home";?>
	<?php include("includes/header.php"); ?>


            <div id="slider" class="sl-slider-wrapper">



				<div class="sl-slider">

				

					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="sl-slide-inner">

							<div class="bg-img bg-img-1"></div>

							<h2>Submit a Photo.</h2>

							<blockquote>

							  <p>Submit. a photo and win amazing prizes. You could be a 1st, 2nd, or 3rd winner.</p>

							</blockquote>

						</div>

					</div>

					

					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">

						<div class="sl-slide-inner">

							<div class="bg-img bg-img-2"></div>

							<h2>Submit a 2 minutes video clip.</h2>

							<blockquote>

							  <p>Submit a picture and a 2 minutes video clip showing the most salient impact of globalization on your life.</p>

							</blockquote>

						</div>

					</div>

					

					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">

						<div class="sl-slide-inner">

							<div class="bg-img bg-img-3"></div>

							<h2>Tell us about you.</h2>

							<blockquote>

							  <p>Complete a very short demographic survey and tell us a little about you.</p></blockquote>

						</div>

					</div>

					

					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">

						<div class="sl-slide-inner">

							<div class="bg-img bg-img-4"></div>

							<h2>Wandering which picture to upload?</h2>

							<blockquote>

							  <p>Pictures will be judged based on several criteria including: relevance to topic of study, clarity &amp; quality of the picture, and inclusiveness of information.</p></blockquote>

						</div>

					</div>

					

					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">

						<div class="sl-slide-inner">

							<div class="bg-img bg-img-5"></div>

							<h2>So are you between the ages of 18-30?</h2>

							<blockquote><p> Click <a href="#">here</a> now to get started. You could be the 1st 2nd or 3rd winner of our cash prizes.</p></blockquote>

						</div>

					</div>

				</div><!-- /sl-slider -->



				<nav id="nav-dots" class="nav-dots">

					<span class="nav-dot-current"></span>

					<span></span>

					<span></span>

					<span></span>

					<span></span>

				</nav>



			</div><!-- /slider-wrapper -->



			<div class="content-wrapper">

				<h2>Welcome</h2>

				<p>

You are invited to participate in a research study that seeks to explore the ways in which globalization is affecting the lives of young people and young adults in Africa. If you choose to participate you will be entered into a photo contest.

 </p>

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



				/**

				 * Notes: 

				 * 

				 * example how to add items:

				 */



				/*

				

				var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');

				

				// call the plugin's add method

				ss.add($items);



				*/

			

			});

		</script>

	</body>

</html>