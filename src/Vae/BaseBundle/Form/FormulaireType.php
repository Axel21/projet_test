<?php

namespace Vae\BaseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FormulaireType extends AbstractType
{
   /**
    * @param FormBuilderInterface $builder
    * @param array $options
    */
   public function buildForm(FormBuilderInterface $builder, array $options)
   {
       $builder
           ->add('nom', 'text')
           ->add('mail', 'email')
           ->add('message','textarea')

       ;
   }
   
   /**
    * @param OptionsResolverInterface $resolver
    */
   public function setDefaultOptions(OptionsResolverInterface $resolver)
   {
       //$resolver->setDefaults(array(
       //    'data_class' => 'Ieps\CmsBaseBundle\Entity\Rubriques'
       //));
   }

   /**
    * @return string
    */
   public function getName()
   {
       return 'Vae_Basebundle_formulaires';
   }
}
