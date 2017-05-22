<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_86c5dee3abe4293d9e71dff92414124010e53d5d0dd438c21c80c4b06f18dd18 extends Twig_Template
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
        $__internal_9aecdba921aaa30e4c3f74facdd0b9ac6084e1d05181a3336d20a346419e0fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aecdba921aaa30e4c3f74facdd0b9ac6084e1d05181a3336d20a346419e0fdf->enter($__internal_9aecdba921aaa30e4c3f74facdd0b9ac6084e1d05181a3336d20a346419e0fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9aecdba921aaa30e4c3f74facdd0b9ac6084e1d05181a3336d20a346419e0fdf->leave($__internal_9aecdba921aaa30e4c3f74facdd0b9ac6084e1d05181a3336d20a346419e0fdf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}
";
    }
}
