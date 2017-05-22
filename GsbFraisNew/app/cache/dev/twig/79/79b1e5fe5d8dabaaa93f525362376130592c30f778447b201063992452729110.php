<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_3a74fad8300484bf0a7efb5ddbad3627e09a7f2f5c99139a5b6ecc8ee1a97c28 extends Twig_Template
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
        $__internal_bf5939a6b7ae4bafdb6cbd8f7334d783e75447d9ff8643ed543c024874bb95a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf5939a6b7ae4bafdb6cbd8f7334d783e75447d9ff8643ed543c024874bb95a9->enter($__internal_bf5939a6b7ae4bafdb6cbd8f7334d783e75447d9ff8643ed543c024874bb95a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_bf5939a6b7ae4bafdb6cbd8f7334d783e75447d9ff8643ed543c024874bb95a9->leave($__internal_bf5939a6b7ae4bafdb6cbd8f7334d783e75447d9ff8643ed543c024874bb95a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
