<?php
namespace Vae\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Doctrine\ORM\EntityRepository;

class ProduitsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', 'text')
            ->add('nomEn')
            ->add('description', null, array(
                    'attr' => array(
                        'class' => 'ckeditor')

                ))
            ->add('descriptionEn', null, array(
                'attr' => array(
                    'class' => 'ckeditor')
                ))
            ->add('file')
            ->add('prix', 'text')
            ->add('disponible', null, array(
                'required' => false))
            ->add('vendre', null, array(
                'required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Vae\BoutiqueBundle\Entity\Produits'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Vae_boutique_bundle_produits';
    }
}
