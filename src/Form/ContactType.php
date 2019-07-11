<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add( child: 'nom', type: TextType::class)
            ->add( child: 'prenom', type: TextType::class)
            ->add( child: 'adresse', type: TextType::class)
            ->add( child: 'cp', type: NumberType::class)
            ->add( child: 'ville', type: TextType::class)
            ->add( child: 'pays', type: CountryType::class)
            ->add( child: 'email', type: EmailType::class)
            ->add( child: 'telephone', type: TelType::class)
            ->add( child: 'conditions', type: CheckboxType::class)
            ->add( child: 'envoyer', type: SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            //'data_class' => Contact::class,
        ]);
    }
}
