<?php
namespace Vae\AdminBundle\Form;

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
            ->add('description', null, array(
                    'attr' => array(
                        'class' => 'ckeditor')

                ))
            ->add('descriptionEn', null, array(
                'attr' => array(
                    'class' => 'ckeditor')
                ))
            ->add('debut', 'datetime', array(
                    'widget' => 'single_text',
                    'attr' => array('class' => 'datetime')
                ))
            ->add('fin', 'datetime', array(
                    'widget' => 'single_text',
                    'attr' => array('class' => 'datetime')
                ))
            ->add('prix')
            ->add('maxInscrit', 'text')
            ->add('rubriques', 'entity', array(
                    'class' => 'VaeBaseBundle:rubriques',
                    'property' => 'Sites.nom',
                    'query_builder' => function(EntityRepository $r){
                      return $r->createQueryBuilder('f')
                               ->setParameter('Formations', 'Formations')
                               ->setParameter('Ateliers', 'Ateliers')
                               ->where('f.nom = :Formations')
                               ->orWhere('f.nom = :Ateliers');
                    },
                ))
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
        return 'Vae_basebundle_formations';
    }
}


