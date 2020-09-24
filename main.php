<?php 
require __DIR__ . '/vendor/autoload.php';
use App\Entity\Client;//OOP part navigate by clicking on Client class
use App\Entity\Purchase;//OOP part navigate by clicking on Purchase class
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Driver\Connection;

$fQuit = false;


$connectionParams = array(
    'url' => 'mysql://root:12345@localhost/php-test-project',
);


function showClients($params){
$conn = DriverManager::getConnection($params);
$sql = "SELECT * FROM client";
$stmt = $conn->query($sql);
while ($row = $stmt->fetch()) {
    echo " ".$row['id']." ".$row['phone_number'] ." ". $row['email']. "\r\n";
}
}


function showPurchases($params) {
$conn = DriverManager::getConnection($params);	
$sql = "SELECT * FROM purchase";
$stmt = $conn->query($sql);
while ($row = $stmt->fetch()) {
   echo " ".$row['id']." ".$row['product_name'] ." ". $row['price']. "\r\n";
}
}

function doMenu(){
	echo "   *****Menu*****   \r\n";
	echo "   (1)Send notification via sms\r\n";
	echo "   (2)Send notification via email\r\n";
	echo "   (3)Quit\r\n";
	$choice = (int)readline();
	return $choice;
} 


	echo "All available information about clients\r\n";
	showClients($connectionParams);

	echo "\r\n";

	echo "All available information about purchases\r\n";
	showPurchases($connectionParams);

while(!$fQuit){
	$userHasSmsError=true;
	$userHasEmailError=false;
	echo "\r\n";

	$choice = doMenu();



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
			echo "Quit";
	}


}


?>	
