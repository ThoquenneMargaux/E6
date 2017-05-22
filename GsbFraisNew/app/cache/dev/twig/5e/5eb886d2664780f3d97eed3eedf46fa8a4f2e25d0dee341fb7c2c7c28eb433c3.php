<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8f09b2dabe2b1e8068e518ac301848be497d869a1a5cacd76554a66aadedd858 extends Twig_Template
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
        $__internal_23a3be33e83f20df3d521d5bdf207fda83c307fced0029dad1a15f95d87bde9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a3be33e83f20df3d521d5bdf207fda83c307fced0029dad1a15f95d87bde9c->enter($__internal_23a3be33e83f20df3d521d5bdf207fda83c307fced0029dad1a15f95d87bde9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_23a3be33e83f20df3d521d5bdf207fda83c307fced0029dad1a15f95d87bde9c->leave($__internal_23a3be33e83f20df3d521d5bdf207fda83c307fced0029dad1a15f95d87bde9c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}
*/
";
    }
}
