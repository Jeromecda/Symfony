<?php

nameSpace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController {

    /**
     * @Route("/", name="app_home")
     */
    public function index():Response {
        return $this->render("home/index.html.twig");
    }

    /**
     * @Route("/contact", name="app_contact")
     */
    public function contact():Response {
        return $this->json("Hello contact!");
    }
}