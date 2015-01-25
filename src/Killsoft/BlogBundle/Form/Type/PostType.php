<?php

namespace Killsoft\BlogBundle\Form\Type;

use Symfony\Component\Form\Test\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text')
            ->add('category', 'text')
            ->add('text', 'textarea')
            ->add('tags', 'text')
            ->add('author', 'text')
            ->add('save', 'submit', array(
                'label' => 'add post'
            ))
            ->getForm();
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Killsoft\BlogBundle\Entity\Post'
        ));
    }

    public function getName()
    {
        return 'adding_form';
    }
}
