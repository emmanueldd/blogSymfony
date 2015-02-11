<?php

namespace Blog\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', array('label' => 'Titre'))
            ->add('content', 'textarea', array('label' => 'Contenu'))
            ->add('thumb', 'url', array('required' => false, 'label' => 'Image attaché'))
            ->add('author', 'text', array('label' => 'Auteur'))
            ->add('category_id')
//            ->add('createdAt')
//            ->add('updatedAt')
            ->add('keywords', 'text', array('label' => 'Mots clés'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Blog\BlogBundle\Entity\Post'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'blog_blogbundle_post';
    }
}
