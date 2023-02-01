<?php

namespace App\Form;

use App\Entity\Annoucement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnnoucementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $option)
    {
        $builder
            ->add("entitled", TextType::class, ["label" => "Titre"])
            ->add("description", TextareaType::class, ["label" => "Description du poste"])
            ->add("workplace", TextType::class, ["label" => "Lieu de travail"]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            "data_class"=> Annoucement::class
        ]);
    }
}