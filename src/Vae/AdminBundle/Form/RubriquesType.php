<?php
namespace Vae\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Doctrine\ORM\EntityRepository;

class RubriquesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('contenu', null, array(
                    'attr' => array(
                        'class' => 'ckeditor')

                ))
            ->add('contenuEn', null, array(
                'attr' => array(
                    'class' => 'ckeditor')
                ))
            ->add('file')
            ->add('sites', 'entity', array(
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
            'data_class' => 'Vae\BaseBundle\Entity\Rubriques'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Vae_basebundle_rubriques';
    }
}
