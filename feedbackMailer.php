<!--
feedbackMailer.php

Contains code to mail the feedback to Greg (Or whoever is specified in mail())
-->
<?php
if($_POST["feedback"]){
	$msg = wordwrap($_POST["feedback"],70); //wrap text to fit in email
	$result = mail('jikenouy@ualberta.ca', 'Feedback Form', $msg, 'From: feedback@csl.augustana.ualberta.ca');

	//FOR ERROR CHECKING. REMOVE WHEN THIS WORKS
	if($result){
		echo "SENT";
	}
	else{
		echo "Failed";
	}
}
?>