<?php

/* mttlgsbBundle:Default:cSuivisFiche.html.twig */
class __TwigTemplate_84281c3906bffe47c354492e6fb706cc066307b1c3148515ecd572af68b8f0cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mttlgsbBundle:Default:base_Comptable.html.twig", "mttlgsbBundle:Default:cSuivisFiche.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'titre' => array($this, 'block_titre'),
            'entete' => array($this, 'block_entete'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mttlgsbBundle:Default:base_Comptable.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_935163d82473d0574b2ca719625ec242e3ffb72b3b164b57e20757f22471920e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_935163d82473d0574b2ca719625ec242e3ffb72b3b164b57e20757f22471920e->enter($__internal_935163d82473d0574b2ca719625ec242e3ffb72b3b164b57e20757f22471920e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mttlgsbBundle:Default:cSuivisFiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_935163d82473d0574b2ca719625ec242e3ffb72b3b164b57e20757f22471920e->leave($__internal_935163d82473d0574b2ca719625ec242e3ffb72b3b164b57e20757f22471920e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c5ac93655fcc8e7f1a0c550a2b0aa70044088c8bc7df233e584d196db8a7606f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ac93655fcc8e7f1a0c550a2b0aa70044088c8bc7df233e584d196db8a7606f->enter($__internal_c5ac93655fcc8e7f1a0c550a2b0aa70044088c8bc7df233e584d196db8a7606f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    ";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        
        $__internal_c5ac93655fcc8e7f1a0c550a2b0aa70044088c8bc7df233e584d196db8a7606f->leave($__internal_c5ac93655fcc8e7f1a0c550a2b0aa70044088c8bc7df233e584d196db8a7606f_prof);

    }

    public function block_titre($context, array $blocks = array())
    {
        $__internal_684553babb51b6aa9730bc68ad1db43f770bf8ca89387d253bb4e4a7dfcbcd17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684553babb51b6aa9730bc68ad1db43f770bf8ca89387d253bb4e4a7dfcbcd17->enter($__internal_684553babb51b6aa9730bc68ad1db43f770bf8ca89387d253bb4e4a7dfcbcd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo " <title>GSB - Page Renseigner fiche de frais</title> ";
        
        $__internal_684553babb51b6aa9730bc68ad1db43f770bf8ca89387d253bb4e4a7dfcbcd17->leave($__internal_684553babb51b6aa9730bc68ad1db43f770bf8ca89387d253bb4e4a7dfcbcd17_prof);

    }

    // line 8
    public function block_entete($context, array $blocks = array())
    {
        $__internal_7dbd04d1905dce1a8a356348b2dc97816b6e53ecbdd7c6e4df9f641bc0bd9da1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dbd04d1905dce1a8a356348b2dc97816b6e53ecbdd7c6e4df9f641bc0bd9da1->enter($__internal_7dbd04d1905dce1a8a356348b2dc97816b6e53ecbdd7c6e4df9f641bc0bd9da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 9
        echo "        ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
    ";
        
        $__internal_7dbd04d1905dce1a8a356348b2dc97816b6e53ecbdd7c6e4df9f641bc0bd9da1->leave($__internal_7dbd04d1905dce1a8a356348b2dc97816b6e53ecbdd7c6e4df9f641bc0bd9da1_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_2add4bd84e4f667ef01e0184c14f54567d467839fd724d546906bb057c9ad929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2add4bd84e4f667ef01e0184c14f54567d467839fd724d546906bb057c9ad929->enter($__internal_2add4bd84e4f667ef01e0184c14f54567d467839fd724d546906bb057c9ad929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "     <section id=\"team\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12\">
                        <div class=\"section-title\">
                            <strong>Suivis des fiche de frais </strong>
                                <hr>
                        </div>
                    </div>
                    
                    <div class=\"col-md-24 col-sm-12 wow fadeIn\" data-wow-delay=\"0.9s\">
                        <div class=\"team-wrapper\">
                          
                              
                              
                            <input type=\"button\" value=\"Retour\" onclick=\"history.go(-1)\">
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
         <table class='table table-bordered'>
            <thead >
               <tr>
                    <td class=\"info\">
                      Visiteur
                    </td>
                    <td class=\"info\">
                      Fiche
                    </td>
                    <td class=\"info\">
                        
                    </td>
                    
               </tr>
            </thead>
            <tbody>
                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fiches"]) ? $context["fiches"] : $this->getContext($context, "fiches")));
        foreach ($context['_seq'] as $context["_key"] => $context["fiche"]) {
            // line 53
            echo "                <tr>
                   
                     <td>
                          ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "idvisiteur", array()), "nom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["fiche"], "idvisiteur", array()), "prenom", array()), "html", null, true);
            echo "      
                     </td>
                            
                     <td>
                         ";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["fiche"], "idfichefrais", array()), "html", null, true);
            echo "
                     </td>
                     <td>
                         <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mttlgsb_cDescriptifFiche", array("idfichefrais" => $this->getAttribute($context["fiche"], "idfichefrais", array()))), "html", null, true);
            echo "\">Voir</a> 
                     </td>
                  
                </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fiche'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "            </tbody>
            </table>
    ";
        
        $__internal_2add4bd84e4f667ef01e0184c14f54567d467839fd724d546906bb057c9ad929->leave($__internal_2add4bd84e4f667ef01e0184c14f54567d467839fd724d546906bb057c9ad929_prof);

    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f70c9d0caa14f30e8b01f604feff397459a557beeb61900b3b2d04efa36f85b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70c9d0caa14f30e8b01f604feff397459a557beeb61900b3b2d04efa36f85b7->enter($__internal_f70c9d0caa14f30e8b01f604feff397459a557beeb61900b3b2d04efa36f85b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 73
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
        
        $__internal_f70c9d0caa14f30e8b01f604feff397459a557beeb61900b3b2d04efa36f85b7->leave($__internal_f70c9d0caa14f30e8b01f604feff397459a557beeb61900b3b2d04efa36f85b7_prof);

    }

    public function getTemplateName()
    {
        return "mttlgsbBundle:Default:cSuivisFiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 73,  174 => 72,  165 => 68,  154 => 63,  148 => 60,  139 => 56,  134 => 53,  130 => 52,  89 => 13,  83 => 12,  73 => 9,  67 => 8,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"mttlgsbBundle:Default:base_Comptable.html.twig\" %}

{% block head %}
    {{ parent() }}
    {% block titre %} <title>GSB - Page Renseigner fiche de frais</title> {% endblock %}
{% endblock %}

    {% block entete %}
        {{ parent() }}
    {% endblock %}
    
    {% block body %}
     <section id=\"team\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12\">
                        <div class=\"section-title\">
                            <strong>Suivis des fiche de frais </strong>
                                <hr>
                        </div>
                    </div>
                    
                    <div class=\"col-md-24 col-sm-12 wow fadeIn\" data-wow-delay=\"0.9s\">
                        <div class=\"team-wrapper\">
                          
                              
                              
                            <input type=\"button\" value=\"Retour\" onclick=\"history.go(-1)\">
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
         <table class='table table-bordered'>
            <thead >
               <tr>
                    <td class=\"info\">
                      Visiteur
                    </td>
                    <td class=\"info\">
                      Fiche
                    </td>
                    <td class=\"info\">
                        
                    </td>
                    
               </tr>
            </thead>
            <tbody>
                {%for fiche in fiches%}
                <tr>
                   
                     <td>
                          {{fiche.idvisiteur.nom}} {{fiche.idvisiteur.prenom}}      
                     </td>
                            
                     <td>
                         {{fiche.idfichefrais}}
                     </td>
                     <td>
                         <a href=\"{{ path('mttlgsb_cDescriptifFiche',{\"idfichefrais\":fiche.idfichefrais})}}\">Voir</a> 
                     </td>
                  
                </tr>
                  {%endfor%}
            </tbody>
            </table>
    {% endblock %}
    
    {% block footer %}
        {{ parent() }}
    {% endblock %}";
    }
}
