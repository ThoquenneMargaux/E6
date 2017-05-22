<?php

namespace mttl\gsbBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use mttl\gsbBundle\Data\validerFicheClass;
use mttl\gsbBundle\Entity\VisiteurRepository;

class validerFicheType extends AbstractType{
    
    private $comptable;
    
    function __construct($comptable) {
        $this->comptable = $comptable;
    }
   
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $comptable = $this->comptable;
        
        $builder
                ->add('mois',  'date', array('widget' => 'choice',
                    'label' => 'Mois' , 
                    'format' => 'yyyy-MM-dd'))
                ->add('visiteurs', 'entity',array(
                    'class' => 'mttlgsbBundle:Visiteur',
                    'property' => 'getNomPrenom',
                    'query_builder'=> function(VisiteurRepository $er) use ($comptable) {
                        return $er->getVisiteurComptable($comptable);
                    }))
                    ->add('valider','submit');
             
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array('data_class'=>'mttl\gsbBundle\Form\Data\validerFicheClass'));
    }
    
    public function getName(){
        return 'consulterFiche';
    }

    

}