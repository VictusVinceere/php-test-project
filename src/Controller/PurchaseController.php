<?php

namespace App\Controller;
use App\Entity\Purchase;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class PurchaseController extends AbstractController
{
    /**
     * @Route("/purchase/save", name="purchase")
     */
    public function saveData()
    {   
        $em = $this->getDoctrine()->getManager();

        $purchase1 = new Purchase();
        $purchase1->setId("15");
        $purchase1->setProductName("Samsung-s2");
        $purchase1->setPrice("233");
        $em->persist($purchase1);
        $em->flush();


        $purchase2 = new Purchase();
        $purchase2 ->setId("55");
        $purchase2->setProductName("iPhone3");
        $purchase2->setPrice("333");
        $em->persist($purchase2);
        $em->flush();


        $purchase3 = new Purchase();
        $purchase3 -> setId("66");
        $purchase3->setProductName("Meizu");
        $purchase3->setPrice("211");
        $em->persist($purchase3);
        $em->flush();
        return new Response("purchase3 created with ID".$purchase3->getId()."\r\n");
    }
}
