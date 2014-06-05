<?php
namespace Vae\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Vae\MultiSiteBundle\VaeMultiSiteBundle;

use Doctrine\ORM\EntityRepository;

class AgendasType extends AbstractType
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
            ->add('contenu', null, array(
                    'attr' => array(
                        'class' => 'ckeditor')

                ))
            ->add('contenuEn', null, array(
                'attr' => array(
                    'class' => 'ckeditor')
                ))
            ->add('date', null, array(
                    'widget' => 'single_text',
                    'format' => 'dd-MM-yyyy',
                    'attr' => array('class' => 'date')
                ))
            ->add('sites', 'entity',array(
                    'class' => 'VaeMultiSiteBundle:sites',
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
            'data_class' => 'Vae\BaseBundle\Entity\Agendas'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Vae_basebundle_agendas';
    }
}
