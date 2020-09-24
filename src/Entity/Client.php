<?php

namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $phoneNumber;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;


    public function getId() {
    return $this->id;
    }
    public function setId($id) {
    $this->id = $id;
    }


    public function getPhoneNumber() {
    return $this->phone_number;
    }
    public function setPhoneNumber($phoneNumber) {
    $this->phoneNumber = $phoneNumber;
    }


    public function getEmail() {
    return $this->email;
    }
    public function setEmail($email) {
    $this->email = $email;
    }




}
