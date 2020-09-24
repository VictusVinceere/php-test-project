<?php

namespace App\Controller;

use App\Entity\Client;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class ClientController extends AbstractController
{
    /**
     * @Route("/client/save", name="client")
     */
    public function saveData()
    {   
        $em = $this->getDoctrine()->getManager();

        $client1 = new Client();
        $client1->setId("15");
        $client1->setPhoneNumber("888-88-82");
        $client1->setEmail("hello@mail.com");
        $em->persist($client1);
        $em->flush();

        $client2 = new Client();
        $client2->setId("12");
        $client2->setPhoneNumber("883-83-82");
        $client2->setEmail("hellkfo@mail.com");
        $em->persist($client2);
        $em->flush();


        $client3 = new Client();
        $client3->setId("10");
        $client3->setPhoneNumber("881-28-82");
        $client3->setEmail("hellnoo@mail.com");
        $em->persist($client3);
        $em->flush();
        return new Response("Client3 created with ID".$client3->getId()."\r\n");
    }
}
