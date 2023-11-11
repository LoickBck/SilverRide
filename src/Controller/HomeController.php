<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route('/', name: 'homepage')
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    /**
     * @Route("/accueil", name="accueil_garage")
     */
    public function accueilGarage(): Response
    {
        return $this->render('accueil/index.html.twig', [
            'garage_name' => 'SilverRide',
            'description' => 'Votre source de voitures de qualité.',
            //autres données de présentation
        ]);
    }
}
