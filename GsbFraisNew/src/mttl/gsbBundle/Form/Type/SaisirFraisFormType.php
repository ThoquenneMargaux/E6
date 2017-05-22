<?php
namespace mttl\gsbBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use mttl\gsbBundle\Data\SaisirFraisClass;

class SaisirFraisFormType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('etape','number',array('label'=>'Forfait Etape'))
                ->add('kilometrique','number',array('label'=>'Frais Kilométrique'))
                ->add('hotel','number',array('label'=>'Nuitée Hôtel'))
                ->add('restaurant','number',array('label'=>'Repas restaurant'))
                ->add('valider','submit')
                ->add('annuler','reset');
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array('data_class'=>'mttl\gsbBundle\Form\Data\SaisirFraisClass'));
    }
    
    public function getName(){
        return 'saisirFrais';
    }

    

}