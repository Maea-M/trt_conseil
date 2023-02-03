<?php

namespace App\Controller;
use App\Entity\Annoucement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnoucementController extends AbstractController
{
    #[Route('/annoucement/new')]
    public function create(Request $request): Response
    {
        $annoucement = new Annoucement();
        $form = $this->createForm(AnnoucementType::class, $annoucement);
        $form->handleRequest();
        if ($form->isSubmitted() && $form->isValid()){
            dump($form);
        }
        return $this->render('annoucement/form.html.twig', [
            "annoucement_form" => $form->createView()
        ]);
    }
}