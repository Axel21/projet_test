<?php

namespace Vae\BaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RubriquesType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('slug')
            ->add('slugEn')
            ->add('nom')
            ->add('nomEn')
            ->add('contenu')
            ->add('contenuEn')
            ->add('image')
            ->add('sites')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Vae\BaseBundle\Entity\Rubriques'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'vae_basebundle_rubriques';
    }
}
