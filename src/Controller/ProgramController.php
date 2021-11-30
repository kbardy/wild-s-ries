<?php

// src/Controller/ProgramController.php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;


Class ProgramController extends AbstractController

{

    /**

     * @Route("/program/", name="program_index")

     */

    public function index(): Response

    {
        return $this->render('program/index.html.twig', [

            'website' => 'Wild Séries',
     
         ]);
    }

     /**

      * Correspond à la route /program/new et au name "program_show"

      * @Route("/program/{id}",  requirements={"id"="\d+"}, methods={"GET"}, name="program_show")

      */
    public function show(): Response
    {
    return $this->render('program/show.html.twig', ['id' => 4]);
    }
}