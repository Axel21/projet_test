<?php

namespace Vae\BaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Doctrine\ORM\EntityRepository;

class LiensType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('titreEn')
            ->add('url')
            ->add('type')
            ->add('sites','entity', array(
                               'class'    => 'VaeMultiSiteBundle:Sites',
                               'property' => 'nom'
                               ));
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Vae\BaseBundle\Entity\Liens'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'vae_basebundle_liens';
    }
}
