<?php

namespace App\Controller;
use App\Entity\Annoucement;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnnoucementController extends AbstractController
{
    #[Route('annoucement/new')]
    public function create(): Response
    {
        $annoucement = new Annoucement();
        $form = $this->createForm(AnnoucementType::class, $annoucement);
        return $this->render('annoucement/form.html.twig', [
            "annoucemnet_form" => $form->createView()
        ]);
    }
}