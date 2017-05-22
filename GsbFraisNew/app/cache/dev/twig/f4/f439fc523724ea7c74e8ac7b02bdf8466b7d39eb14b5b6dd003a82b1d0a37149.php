<?php

/* mttlgsbBundle:Default:accueil.html.twig */
class __TwigTemplate_339c31c65e3b1652c3d697045d8da86e2dba4c2234a64ccc66379123766d1126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mttlgsbBundle:Default:base.html.twig", "mttlgsbBundle:Default:accueil.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'entete' => array($this, 'block_entete'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mttlgsbBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1fd7c1f4be52de94cb54a514530226139e469e66d97adc39eaea6ffe3d6a1cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd7c1f4be52de94cb54a514530226139e469e66d97adc39eaea6ffe3d6a1cbb->enter($__internal_1fd7c1f4be52de94cb54a514530226139e469e66d97adc39eaea6ffe3d6a1cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mttlgsbBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fd7c1f4be52de94cb54a514530226139e469e66d97adc39eaea6ffe3d6a1cbb->leave($__internal_1fd7c1f4be52de94cb54a514530226139e469e66d97adc39eaea6ffe3d6a1cbb_prof);

    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        $__internal_f65245ad7634716d80cf6f14064e2e13d240a2e81fe13b59629deaecc648c497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f65245ad7634716d80cf6f14064e2e13d240a2e81fe13b59629deaecc648c497->enter($__internal_f65245ad7634716d80cf6f14064e2e13d240a2e81fe13b59629deaecc648c497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 3
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_f65245ad7634716d80cf6f14064e2e13d240a2e81fe13b59629deaecc648c497->leave($__internal_f65245ad7634716d80cf6f14064e2e13d240a2e81fe13b59629deaecc648c497_prof);

    }

    // line 6
    public function block_entete($context, array $blocks = array())
    {
        $__internal_8100e37ae12e5e272a75880103a71eb84485c8bafa120d13fb251196c4ff8401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8100e37ae12e5e272a75880103a71eb84485c8bafa120d13fb251196c4ff8401->enter($__internal_8100e37ae12e5e272a75880103a71eb84485c8bafa120d13fb251196c4ff8401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 7
        echo "        ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
    ";
        
        $__internal_8100e37ae12e5e272a75880103a71eb84485c8bafa120d13fb251196c4ff8401->leave($__internal_8100e37ae12e5e272a75880103a71eb84485c8bafa120d13fb251196c4ff8401_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d388519c22fd0399bfca51a41aae0df360ca74b597ff11983ad746d7ab4553eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d388519c22fd0399bfca51a41aae0df360ca74b597ff11983ad746d7ab4553eb->enter($__internal_d388519c22fd0399bfca51a41aae0df360ca74b597ff11983ad746d7ab4553eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "        <section id=\"about\" class=\"paralla-section\">
                <div class=\"container\">
                        <div class=\"row\">

                                <div class=\"col-md-20 col-sm-12\">
                                        <h3 class=\"wow fadeInDown\" data-wow-delay=\"0.2s\">SUIVI DU REMBOURSEMENT DES FRAIS</h3>
                                        <h1 class=\"wow fadeInDown\">Connectez vous: </h1>
                                        <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mttlgsb_connexion");
        echo "\"  class=\"btn btn-danger wow fadeInUp\" data-wow-delay=\"0.2s\">Connexion</a>
                                       
                                </div>

                        </div>
                </div>\t
        </section>
                                
                 
        
    ";
        
        $__internal_d388519c22fd0399bfca51a41aae0df360ca74b597ff11983ad746d7ab4553eb->leave($__internal_d388519c22fd0399bfca51a41aae0df360ca74b597ff11983ad746d7ab4553eb_prof);

    }

    public function getTemplateName()
    {
        return "mttlgsbBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  74 => 10,  68 => 9,  58 => 7,  52 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"mttlgsbBundle:Default:base.html.twig\" %}
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
                                        <h3 class=\"wow fadeInDown\" data-wow-delay=\"0.2s\">SUIVI DU REMBOURSEMENT DES FRAIS</h3>
                                        <h1 class=\"wow fadeInDown\">Connectez vous: </h1>
                                        <a href=\"{{ path('mttlgsb_connexion') }}\"  class=\"btn btn-danger wow fadeInUp\" data-wow-delay=\"0.2s\">Connexion</a>
                                       
                                </div>

                        </div>
                </div>\t
        </section>
                                
                 
        
    {% endblock %}
    
                ";
    }
}
