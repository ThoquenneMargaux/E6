<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_233fc843239a27fe3104833a2cfb4cf339f2cca3d2a1c2025e73a23168ebe4f9 extends Twig_Template
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
        $__internal_4a99f676a2adf432c1ccada921011b8dfea23c8a2cc71415cd00982517eb9fd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a99f676a2adf432c1ccada921011b8dfea23c8a2cc71415cd00982517eb9fd6->enter($__internal_4a99f676a2adf432c1ccada921011b8dfea23c8a2cc71415cd00982517eb9fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4a99f676a2adf432c1ccada921011b8dfea23c8a2cc71415cd00982517eb9fd6->leave($__internal_4a99f676a2adf432c1ccada921011b8dfea23c8a2cc71415cd00982517eb9fd6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
