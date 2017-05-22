<?php

/* mttlgsbBundle:Default:index.html.twig */
class __TwigTemplate_434accdc06e7095622687c8d3f64dd616b641c89ee4440da84c9ec73e76f1281 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mttlgsbBundle:Default:accueil.html.twig", "mttlgsbBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "mttlgsbBundle:Default:accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5ad79c56367e9ccdc705aa18d3b250ec5a1fd96b9fdc120404261f37a89d9b48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad79c56367e9ccdc705aa18d3b250ec5a1fd96b9fdc120404261f37a89d9b48->enter($__internal_5ad79c56367e9ccdc705aa18d3b250ec5a1fd96b9fdc120404261f37a89d9b48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mttlgsbBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ad79c56367e9ccdc705aa18d3b250ec5a1fd96b9fdc120404261f37a89d9b48->leave($__internal_5ad79c56367e9ccdc705aa18d3b250ec5a1fd96b9fdc120404261f37a89d9b48_prof);

    }

    public function getTemplateName()
    {
        return "mttlgsbBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"mttlgsbBundle:Default:accueil.html.twig\" %}
";
    }
}
