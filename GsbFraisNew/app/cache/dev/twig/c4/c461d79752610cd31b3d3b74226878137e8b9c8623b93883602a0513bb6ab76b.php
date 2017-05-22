<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_cd5b05002362cdc84a8c9625242751175c8a8f00e52b625790e45d8d7c4c035c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e7dd0e5f1a0d9f2b09cc052ad151378ceed30901037dd7e0c01122466ec56ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e7dd0e5f1a0d9f2b09cc052ad151378ceed30901037dd7e0c01122466ec56ae->enter($__internal_3e7dd0e5f1a0d9f2b09cc052ad151378ceed30901037dd7e0c01122466ec56ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e7dd0e5f1a0d9f2b09cc052ad151378ceed30901037dd7e0c01122466ec56ae->leave($__internal_3e7dd0e5f1a0d9f2b09cc052ad151378ceed30901037dd7e0c01122466ec56ae_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_39f3061664f0ccc8e6397005389c18efd77a19f5849c2bb74999a2efc135c887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f3061664f0ccc8e6397005389c18efd77a19f5849c2bb74999a2efc135c887->enter($__internal_39f3061664f0ccc8e6397005389c18efd77a19f5849c2bb74999a2efc135c887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_39f3061664f0ccc8e6397005389c18efd77a19f5849c2bb74999a2efc135c887->leave($__internal_39f3061664f0ccc8e6397005389c18efd77a19f5849c2bb74999a2efc135c887_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9daccb9590355891151938aebead22f252b8b919176f00d596d5cde18d1386e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9daccb9590355891151938aebead22f252b8b919176f00d596d5cde18d1386e->enter($__internal_f9daccb9590355891151938aebead22f252b8b919176f00d596d5cde18d1386e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_f9daccb9590355891151938aebead22f252b8b919176f00d596d5cde18d1386e->leave($__internal_f9daccb9590355891151938aebead22f252b8b919176f00d596d5cde18d1386e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2c7635dd63c956b99b07b02fe006926c0c17f33eedc29fa4117e7d7489060f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c7635dd63c956b99b07b02fe006926c0c17f33eedc29fa4117e7d7489060f1->enter($__internal_c2c7635dd63c956b99b07b02fe006926c0c17f33eedc29fa4117e7d7489060f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_c2c7635dd63c956b99b07b02fe006926c0c17f33eedc29fa4117e7d7489060f1->leave($__internal_c2c7635dd63c956b99b07b02fe006926c0c17f33eedc29fa4117e7d7489060f1_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_c60ded16afd4c64ee287c56a3edc4ff90b14a4a5fc502684d2e4b4fab39ed08e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c60ded16afd4c64ee287c56a3edc4ff90b14a4a5fc502684d2e4b4fab39ed08e->enter($__internal_c60ded16afd4c64ee287c56a3edc4ff90b14a4a5fc502684d2e4b4fab39ed08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c60ded16afd4c64ee287c56a3edc4ff90b14a4a5fc502684d2e4b4fab39ed08e->leave($__internal_c60ded16afd4c64ee287c56a3edc4ff90b14a4a5fc502684d2e4b4fab39ed08e_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
";
    }
}
