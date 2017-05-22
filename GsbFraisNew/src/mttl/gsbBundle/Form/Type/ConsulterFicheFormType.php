<?php

namespace mttl\gsbBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use mttl\gsbBundle\Data\ConsulterFicheClass;

class ConsulterFicheFormType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('mois',  'date', array('widget' => 'choice',
                    'label' => 'Mois' , 
                    'years' => range (2015 , 2050) ,
                    'format' => 'yyyy-MM-dd'));
             
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array('data_class'=>'mttl\gsbBundle\Form\Data\ConsulterFicheClass'));
    }
    
    public function getName(){
        return 'consulterFiche';
    }

    

}
