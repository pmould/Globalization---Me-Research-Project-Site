      <?php 
      		// Code to handle after the Submit Data Button is clicked
      		// Adds error messages to error array and prints them out as alerts
      		// P
           if(isset($_POST['submitdata'])) 
           {
           	$errorpage = ""; // Error message string for over file size
           	$complete="";  // Message string for a successful upload
           	// Accept checkbock was not clicked 
           	// Output error message to the error array
          	 if ( !isset($_POST['consentcheck']))
          	 {
           		$errorpage .=  "<p><span class=\"warning\">Accept the Agreement to particpate before submitting your photo</span></p>";
           	 }
           	 //Script to upload photo to server at '/uploadfiles/$fullname'
           	 //Validate file size
           	 //Script for a successful form completion
			if(!empty($_FILES['uploaded_file']['name'])) {
				$errors     = array();
				$maxsize    = 2097152;  //2MB in bytes
				
				//Acceptable filetypes for the photo upload
				$acceptable = array(
						'application/pdf',
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
					$errors[] = 'Invalid file type. Only PDF, JPG, GIF and PNG types are accepted.';
				}
				//Script for a successful form completion 
				// Upload photo to server
				if(count($errors) === 0) {

					$fullname = trim($_POST['fullname']);// Removes the spaces in the full name so that file can be stored as the particpants full name
					$fileName = $_FILES['uploaded_file']['name']; // get the filename
					
					
			$tempFile = $_FILES['uploaded_file']['tmp_name']; // get temp file name.
					
					$ext = end(explode(".", $fileName)); //get the file extention
				$newFileName = $fullname.'.'.$ext; // name the file the name of the person + the file extention

				 $moved = move_uploaded_file($tempFile, "Uploads/" .$newFileName);
				 echo $newFileName . " ". $tempFile. " " . $ext;
				 echo $moved;
  				if (!$moved)
				{
				echo $errorpage .="(Opps... upload NOT successful)"; 
				echo $complete = "<p><span class=\"success form_messages submit_succ\"> Thank you for submitting your photo!</span></p>";
				}
				
				//	move_uploaded_file($_FILES['uploaded_file']['tmp_name'], "\uploadedfiles\\$fullname"); //Upload photo to the uploadfiles directory as the fullname
					//Success messsage for completing photo entry 
					
				} else {
					//Output the Errors if any for max file size, not selectiong the Accept Checkbox and invalid filetype
					foreach($errors as $error) {
						echo '<script>alert("'.$error.'");</script>';
					}
			
				}
			}
			else // No File was uploaded. Add error message(No Photo Uploaded) to the error html string
			{
				$errorpage .= "<p><span class=\" warning\"> Upload a photo before clicking the \"Sumbit Data\" button</span></p>";
			}
			
           }
		   else
		   
		   echo "no";

           ?>