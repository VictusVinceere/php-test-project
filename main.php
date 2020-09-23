<?php 

$fQuit = false;


function userMenu(){

}

function doMenu(){
	echo "   *****Menu*****   \r\n";
	echo "   (1)Send notification via sms\r\n";
	echo "   (2)Send notification via email\r\n";
	echo "   (3)Quit\r\n";

	$choice = (int)readline();
	return $choice;
} 



while(!$fQuit){
	$choice = doMenu();
	$userHasSmsError = true;
	$userHasEmailError = false;
	switch($choice) {
		case 1:
			if(!$userHasSmsError) {
				echo "Sms notifications sent successfully\r\n";
			}else{
				echo "Sorry an error with sms notification\r\n";
			}
			break;
		case 2:
			if(!$userHasEmailError){	
				echo "Email notifications sent successfully\r\n";
			}else{
				echo "Sorry an error with email notifications\r\n";
			}
			break;
		case 3:
			$fQuit = true;
	}


}


?>	