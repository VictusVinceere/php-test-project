<?php 

$fQuit = false;


class Client {
	protected $id;
	protected $phone_number;
	protected $email;

	protected $clientGroups;

	//Client groups
	public function __construct() {
	this->clientGroups = new ArrayCollection(); 
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
	return $this->id;
	}
	public function setEmail($email) {
	$this->id = $id;
	}


	public function getClientGroups() {
	return $this->groups;
	}
	public function assignToClientGroup(Group $group) {
	$this->groups[] = $group;
	}

	public function removeClientFromGroups(Group $group) {
	$this->getGroups()->removeElement($group);
	}


}


class Product {
	protected $id;
	protected $product_name;
	protected $price;

	protected $productGroups;

	//Product groups
	public function __construct() {
	this->productGroups = new ArrayCollection();
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
	return $this->id;
	}
	public function setPrice($email) {
	$this->id = $id;
	}


	public function getProductGroups() {
	return $this->groups;
	}
	public function assignToProductGroup(Group $group) {
	$this->groups[] = $group;
	}

	public function removeProductFromGroups(Group $group) {
	$this->getGroups()->removeElement($group);
	}	

}





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