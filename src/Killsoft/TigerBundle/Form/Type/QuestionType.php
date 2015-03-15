<?php

namespace Killsoft\TigerBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class QuestionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username', 'text')
            ->add('phonenumber')
            ->add('mail', 'text')
            ->add('subject', 'textarea')
            ->add('save', 'submit', array(
                'label' => 'add question'
            ))
            ->getForm();
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'csrf_protection'   => true,
            'method' => 'POST'
        ));
    }

    public function getName()
    {
        return 'tiger_question';
    }
}