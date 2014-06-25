   <body> 

        <div class="container">

          <header class="clearfix">

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

			</header>

