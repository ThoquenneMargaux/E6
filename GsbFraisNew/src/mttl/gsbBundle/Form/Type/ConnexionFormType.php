<?php
namespace mttl\gsbBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use mttl\gsbBundle\Data\ConnexionClass;

class ConnexionFormType extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('login','text',array('required'=>true))
                ->add('mdp','password',array('label'=>'Mot De Passe', 'required'=>true))
                ->add('profil','choice',
                        array('choices'=>array('visiteur'=>'Visiteur',
                            'comptable'=>'Comptable')))
                ->add('valider','submit');
    }
    
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array('data_class'=>'mttl\gsbBundle\Form\Data\ConnexionClass'));
    }
    
    public function getName(){
        return 'connexion';
    }

    

}