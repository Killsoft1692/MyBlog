<?php

namespace Killsoft\TigerBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RecallType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text')
            ->add('subject', 'textarea')
            ->add('save', 'submit', array(
                'label' => 'Добавить отзыв'
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
        return 'tiger_recall';
    }
}