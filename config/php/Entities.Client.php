<?php
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
?>
