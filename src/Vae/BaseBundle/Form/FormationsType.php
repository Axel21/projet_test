<?php

namespace Vae\BaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Doctrine\ORM\EntityRepository;


class FormationsType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('nomEn')
            ->add('description')
            ->add('descriptionEn')
            ->add('debut')
            ->add('fin')
            ->add('prix')
            ->add('maxInscrit')
            ->add('rubriques','entity', array(
                               'class'    => 'VaeBaseBundle:Rubriques',
                               'property' => 'Sites.nom',
                               'query_builder' => function(EntityRepository $r) {
                                                    return $r->createQueryBuilder('f')
                                                             ->setParameter('Formations', 'Formations')
                                                             ->setParameter('Ateliers', 'Ateliers')
                                                             ->where('f.nom = :Formations')
                                                             ->orWhere('f.nom = :Ateliers');
                                                             
                                                 },
                               'multiple' => false))  
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Vae\BaseBundle\Entity\Formations'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'vae_basebundle_formations';
    }
}
