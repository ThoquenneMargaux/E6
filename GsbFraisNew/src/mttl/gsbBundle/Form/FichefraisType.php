<?php

namespace mttl\gsbBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FichefraisType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('mois')
            ->add('nbjustificatifs')
            ->add('montantvalide')
            ->add('datemodif')
            ->add('idetat')
            ->add('idvisiteur')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'mttl\gsbBundle\Entity\Fichefrais'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mttl_gsbbundle_fichefrais';
    }
}
