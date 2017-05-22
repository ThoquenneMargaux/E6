<?php

namespace mttl\gsbBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LignefraisforfaitType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idfraisforfait', 'entity',array(
                'class' => 'mttlgsbBundle:Fraisforfait',
                'property' => 'libelle'
            ))
            ->add('quantite')
            /*->add('idfichefrais')*/
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'mttl\gsbBundle\Entity\Lignefraisforfait'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mttl_gsbbundle_lignefraisforfait';
    }
}
