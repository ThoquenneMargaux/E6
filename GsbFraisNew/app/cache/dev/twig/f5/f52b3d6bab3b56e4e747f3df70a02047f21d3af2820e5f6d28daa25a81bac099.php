<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_439eab3d01c48c18e65e426b55878dd582f443132fc1e329075ff467bd78e2b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fc7d480c410336009a2ee7cf4ee9665849fb8fb84fff0ccb54d7ad0c7f5578bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7d480c410336009a2ee7cf4ee9665849fb8fb84fff0ccb54d7ad0c7f5578bf->enter($__internal_fc7d480c410336009a2ee7cf4ee9665849fb8fb84fff0ccb54d7ad0c7f5578bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_fc7d480c410336009a2ee7cf4ee9665849fb8fb84fff0ccb54d7ad0c7f5578bf->leave($__internal_fc7d480c410336009a2ee7cf4ee9665849fb8fb84fff0ccb54d7ad0c7f5578bf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include 'TwigBundle:Exception:error.xml.twig' %}
";
    }
}
