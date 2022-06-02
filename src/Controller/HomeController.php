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
        $a = "Home";
        return $this->render("pages/home.html.twig", ["title" => $a]);
    }

    /**
     * @Route("/blog", name="app_blog")
     */
    public function blog():Response {
        return $this->render("pages/blog.html.twig");
    }

    /**
     * @Route("/contact", name="app_contact")
     */
    public function contact():Response {
        return $this->render("pages/contact.html.twig");
    }

    /**
     * @Route("/apropos", name="app_Apropos")
     */
    public function apropos():Response {
        return $this->render("pages/apropos.html.twig");
    }


    /**
     * @Route("/contact", name="app_contact")
     */
    // public function contact():Response {
    //     return $this->json("Hello contact!");
    // }
}