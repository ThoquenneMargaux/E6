<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a4c71fcad13067b2ab7bd10388e8e4dc1687fbd40395d5868f31baf98c0fed27 extends Twig_Template
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
        $__internal_b661f045742059721e4368d5da8cb134ff0a8bf4e4a5ced2b59e167832c1f32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b661f045742059721e4368d5da8cb134ff0a8bf4e4a5ced2b59e167832c1f32f->enter($__internal_b661f045742059721e4368d5da8cb134ff0a8bf4e4a5ced2b59e167832c1f32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b661f045742059721e4368d5da8cb134ff0a8bf4e4a5ced2b59e167832c1f32f->leave($__internal_b661f045742059721e4368d5da8cb134ff0a8bf4e4a5ced2b59e167832c1f32f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
