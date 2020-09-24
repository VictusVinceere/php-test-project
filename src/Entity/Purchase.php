<?php

namespace App\Entity;

use App\Repository\PurchaseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PurchaseRepository::class)
 */
class Purchase
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
    private $product_name;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;


    public function getId() {
    return $this->id;
    }
    public function setId($id) {
    $this->id = $id;
    }


    public function getProductName() {
    return $this->product_name;
    }
    public function setProductName($product_name) {
    $this->product_name = $product_name;
    }


    public function getPrice() {
    return $this->price;
    }
    public function setPrice($price) {
    $this->price = $price;
    }

}
