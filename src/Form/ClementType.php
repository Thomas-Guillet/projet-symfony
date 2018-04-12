<?php

namespace App\Form;

use App\Entity\Clement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
class ClementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('birthdate', BirthdayType::class, array('label' => 'Birthday', 'widget' => 'single_text', 'format' => 'dd/MM/yyyy'))
            ->add('email')
            ->add('save', SubmitType::class, array('label' => 'Create clement'))
            ->getForm();
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Clement::class,
        ]);
    }
}
