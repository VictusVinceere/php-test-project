<?php 
require __DIR__ . '/vendor/autoload.php';
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping as ORM;


$driver = new PHPDriver('/config/php/Entities.Client.php');
$em->getConfiguration()->setMetadataDriverImpl($driver);


$conn = array(
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/db.sqlite',
);


$fQuit = false;

class clientGroup {
	protected $clientGroups = array();
}

class productGroup {
	protected $productGroups = array();
}



class Client {
	protected $id;
	protected $phone_number;
	protected $email;

	protected $clientGroups;

	//Client groups
	public function __construct() {
	$this->clientGroups =  new ArrayCollection();
	}

	//Set and get Methods
	public function getId() {
	return $this->id;
	}
	public function setId($id) {
	$this->id = $id;
	}


	public function getPhoneNumber() {
	return $this->phone_number;
	}
	public function setPhoneNumber($phone_number) {
	$this->phone_number = $phone_number;
	}


	public function getEmail() {
	return $this->email;
	}
	public function setEmail($email) {
	$this->email = $email;
	}


	public function getClientGroups() {
	return $this->clientGroups;
	}
	public function assignToClientGroup(clientGroup $clientGroup) {
	$this->clientGroups[] = $clientGroup;
	}
	public function removeFromClientGroups(clientGroup $clientGroup) {
	$this->getClientGroups()->removeElement($clientGroup);
	}

}



class Product {
	protected $id;
	protected $product_name;
	protected $price;

	protected $productGroups;

	//Product groups
	public function __construct() {
	$this->productGroups = new ArrayCollection();
	}

	//Set and get Methods
	public function getId() {
	return $this->id;
	}
	public function setId($id) {
	$this->id = $id;
	}


	public function getProductName() {
	return $this->phone_number;
	}
	public function setProductName($phone_number) {
	$this->phone_number = $phone_number;
	}


	public function getPrice() {
	return $this->price;
	}
	public function setPrice($email) {
	$this->price = $price;
	}


	public function getProductGroups() {
	return $this->productGroups;
	}
	public function assignToProductGroup(productGroup $productGroup) {
	$this->productGroups[] = $pruductGroup;
	}
	public function removeFromProductGroups(productGroup $productGroup) {
	$this->getClientGroups()->removeElement($clientGroup);
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



while(!$fQuit){


	$clientGroup1 = new clientGroup();

	$client1 = new Client();
	$client1->setId("15");
	$client1->setPhoneNumber("888-88-82");
	$client1->setEmail("hello@mail.com");

	$client1->assignToClientGroup($clientGroup1);
	$em->persist($client1);
	$em->flush();
	echo "Client1 created with ID".$client1->getId()."\r\n";

	$client2 = new Client();
	$client2->setId("12");
	$client2->setPhoneNumber("883-83-82");
	$client2->setEmail("hellkfo@mail.com");

	$client2->assignToClientGroup($clientGroup);
	$em->persist($client2);
	$em->flush();
	echo "Client2 created with ID".$client1->getId()."\r\n";

	$client3 = new Client();
	$client3->setId("10");
	$client3->setPhoneNumber("881-28-82");
	$client3->setEmail("hellnoo@mail.com");

	$client3->assignToClientGroup($clientGroup);
	$em->persist($client3);
	$em->flush();
	echo "Client1 created with ID".$client1->getId()."\r\n";



	$userHasSmsError = true;
	$userHasEmailError = false;
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
	}


}


?>	