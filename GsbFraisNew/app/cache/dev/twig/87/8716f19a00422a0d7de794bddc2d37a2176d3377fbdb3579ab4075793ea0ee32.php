<?php

/* mttlgsbBundle:Default:accueilComptable.html.twig */
class __TwigTemplate_ef2cb2adedb5e1724af894924c72700877817fb55503eedb9095ad0b270b6588 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mttlgsbBundle:Default:base_Comptable.html.twig", "mttlgsbBundle:Default:accueilComptable.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'entete' => array($this, 'block_entete'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mttlgsbBundle:Default:base_Comptable.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0a006cf2ebd299dd9f343099b420fa2252d5d37a1d755dc668a607a372d5179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a006cf2ebd299dd9f343099b420fa2252d5d37a1d755dc668a607a372d5179->enter($__internal_f0a006cf2ebd299dd9f343099b420fa2252d5d37a1d755dc668a607a372d5179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mttlgsbBundle:Default:accueilComptable.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0a006cf2ebd299dd9f343099b420fa2252d5d37a1d755dc668a607a372d5179->leave($__internal_f0a006cf2ebd299dd9f343099b420fa2252d5d37a1d755dc668a607a372d5179_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_653d8fd9623a08db69a1544eb754c3ff7d845adf14acabebb383d5de246d223d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_653d8fd9623a08db69a1544eb754c3ff7d845adf14acabebb383d5de246d223d->enter($__internal_653d8fd9623a08db69a1544eb754c3ff7d845adf14acabebb383d5de246d223d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_653d8fd9623a08db69a1544eb754c3ff7d845adf14acabebb383d5de246d223d->leave($__internal_653d8fd9623a08db69a1544eb754c3ff7d845adf14acabebb383d5de246d223d_prof);

    }

    // line 6
    public function block_entete($context, array $blocks = array())
    {
        $__internal_aa7502c22b089d15c099f3e6477ac11c72b398cfd92a4cf12986f87d908d6904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa7502c22b089d15c099f3e6477ac11c72b398cfd92a4cf12986f87d908d6904->enter($__internal_aa7502c22b089d15c099f3e6477ac11c72b398cfd92a4cf12986f87d908d6904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 7
        echo "        ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
    ";
        
        $__internal_aa7502c22b089d15c099f3e6477ac11c72b398cfd92a4cf12986f87d908d6904->leave($__internal_aa7502c22b089d15c099f3e6477ac11c72b398cfd92a4cf12986f87d908d6904_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d5ff3ea4faad4b3392511b65ff890101118e19d3a9d525c550b715334e7ed14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d5ff3ea4faad4b3392511b65ff890101118e19d3a9d525c550b715334e7ed14->enter($__internal_6d5ff3ea4faad4b3392511b65ff890101118e19d3a9d525c550b715334e7ed14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "        <section id=\"about\" class=\"paralla-section\">
                <div class=\"container\">
                        <div class=\"row\">

                                <div class=\"col-md-20 col-sm-12\">
                                        <h3 class=\"wow fadeInDown\" data-wow-delay=\"0.2s\">Bienvenue</h3>
                                        <h1 class=\"wow fadeInDown\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "nomComptable"), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "prenomComptable"), "method"), "html", null, true);
        echo "</h1>
                                        
                                       
                                </div>

                        </div>
                </div>\t
        </section>
                                
                 
        
    ";
        
        $__internal_6d5ff3ea4faad4b3392511b65ff890101118e19d3a9d525c550b715334e7ed14->leave($__internal_6d5ff3ea4faad4b3392511b65ff890101118e19d3a9d525c550b715334e7ed14_prof);

    }

    public function getTemplateName()
    {
        return "mttlgsbBundle:Default:accueilComptable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 16,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"mttlgsbBundle:Default:base_Comptable.html.twig\" %}
{% block head %}
    {{ parent() }}
{% endblock %}

    {% block entete %}
        {{ parent() }}
    {% endblock %}
    {% block body %}
        <section id=\"about\" class=\"paralla-section\">
                <div class=\"container\">
                        <div class=\"row\">

                                <div class=\"col-md-20 col-sm-12\">
                                        <h3 class=\"wow fadeInDown\" data-wow-delay=\"0.2s\">Bienvenue</h3>
                                        <h1 class=\"wow fadeInDown\">{{ app.session.get('nomComptable')}} {{ app.session.get('prenomComptable')}}</h1>
                                        
                                       
                                </div>

                        </div>
                </div>\t
        </section>
                                
                 
        
    {% endblock %}";
    }
}
