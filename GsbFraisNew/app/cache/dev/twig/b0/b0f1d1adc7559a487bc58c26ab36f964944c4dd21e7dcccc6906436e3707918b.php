<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_fefc191072eab0fcb157a692649df25de62d301f7ed9aa923d11398ae990926d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00ad5adb45e5a0648a6b73632f81cb4c9a7fb4588f1d036811cd3f21dd2223e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ad5adb45e5a0648a6b73632f81cb4c9a7fb4588f1d036811cd3f21dd2223e3->enter($__internal_00ad5adb45e5a0648a6b73632f81cb4c9a7fb4588f1d036811cd3f21dd2223e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_00ad5adb45e5a0648a6b73632f81cb4c9a7fb4588f1d036811cd3f21dd2223e3->leave($__internal_00ad5adb45e5a0648a6b73632f81cb4c9a7fb4588f1d036811cd3f21dd2223e3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9b6aa65fa02a652e200a515368bfc9c470b4ad1a045b7ce44313b81bdeef29c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b6aa65fa02a652e200a515368bfc9c470b4ad1a045b7ce44313b81bdeef29c7->enter($__internal_9b6aa65fa02a652e200a515368bfc9c470b4ad1a045b7ce44313b81bdeef29c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9b6aa65fa02a652e200a515368bfc9c470b4ad1a045b7ce44313b81bdeef29c7->leave($__internal_9b6aa65fa02a652e200a515368bfc9c470b4ad1a045b7ce44313b81bdeef29c7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSource()
    {
        return "{% block panel '' %}
";
    }
}
