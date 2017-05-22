<?php

/* mttlgsbBundle:Default:accueilVisiteur.html.twig */
class __TwigTemplate_9791ec5e503587fe1945d0712c07d7098dc6e148f3d190604e8e80f3745ab879 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mttlgsbBundle:Default:base_Visiteur.html.twig", "mttlgsbBundle:Default:accueilVisiteur.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'entete' => array($this, 'block_entete'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mttlgsbBundle:Default:base_Visiteur.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20b99cd6760231a83a48727436caac05e64a6f3dceadd515cd57887d246f4fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b99cd6760231a83a48727436caac05e64a6f3dceadd515cd57887d246f4fa9->enter($__internal_20b99cd6760231a83a48727436caac05e64a6f3dceadd515cd57887d246f4fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mttlgsbBundle:Default:accueilVisiteur.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20b99cd6760231a83a48727436caac05e64a6f3dceadd515cd57887d246f4fa9->leave($__internal_20b99cd6760231a83a48727436caac05e64a6f3dceadd515cd57887d246f4fa9_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc30edf301f02a964f284028363cc5604d7d6b1ee252b6f488a29827e3afe965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc30edf301f02a964f284028363cc5604d7d6b1ee252b6f488a29827e3afe965->enter($__internal_fc30edf301f02a964f284028363cc5604d7d6b1ee252b6f488a29827e3afe965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_fc30edf301f02a964f284028363cc5604d7d6b1ee252b6f488a29827e3afe965->leave($__internal_fc30edf301f02a964f284028363cc5604d7d6b1ee252b6f488a29827e3afe965_prof);

    }

    // line 6
    public function block_entete($context, array $blocks = array())
    {
        $__internal_30c39d4596f5055c26facc9583b121159abcfe964d6cb1a67dd2e0818ab3cb3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30c39d4596f5055c26facc9583b121159abcfe964d6cb1a67dd2e0818ab3cb3a->enter($__internal_30c39d4596f5055c26facc9583b121159abcfe964d6cb1a67dd2e0818ab3cb3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 7
        echo "        ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
    ";
        
        $__internal_30c39d4596f5055c26facc9583b121159abcfe964d6cb1a67dd2e0818ab3cb3a->leave($__internal_30c39d4596f5055c26facc9583b121159abcfe964d6cb1a67dd2e0818ab3cb3a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e69fa47f5c6071060ccfb3cf5c28bc6e5d2880b80b79496684c3e27ccc5973be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e69fa47f5c6071060ccfb3cf5c28bc6e5d2880b80b79496684c3e27ccc5973be->enter($__internal_e69fa47f5c6071060ccfb3cf5c28bc6e5d2880b80b79496684c3e27ccc5973be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "        <section id=\"about\" class=\"paralla-section\">
                <div class=\"container\">
                        <div class=\"row\">

                                <div class=\"col-md-20 col-sm-12\">
                                        <h3 class=\"wow fadeInDown\" data-wow-delay=\"0.2s\">Bienvenue</h3>
                                        <h1 class=\"wow fadeInDown\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "nom"), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "prenom"), "method"), "html", null, true);
        echo "</h1>

                                </div>

                        </div>
                </div>\t
        </section>
                                
                 
        
    ";
        
        $__internal_e69fa47f5c6071060ccfb3cf5c28bc6e5d2880b80b79496684c3e27ccc5973be->leave($__internal_e69fa47f5c6071060ccfb3cf5c28bc6e5d2880b80b79496684c3e27ccc5973be_prof);

    }

    public function getTemplateName()
    {
        return "mttlgsbBundle:Default:accueilVisiteur.html.twig";
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
        return "{% extends \"mttlgsbBundle:Default:base_Visiteur.html.twig\" %}
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
                                        <h1 class=\"wow fadeInDown\">{{ app.session.get('nom')}} {{ app.session.get('prenom')}}</h1>

                                </div>

                        </div>
                </div>\t
        </section>
                                
                 
        
    {% endblock %}";
    }
}
