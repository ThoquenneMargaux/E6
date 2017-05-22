<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c53f32620bc268c4d21246e0a242f77ac11679b5480cca4ced52e3e1e9c14b45 extends Twig_Template
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
        $__internal_7dcfb350d691e210740a251dc6af0e790c80e93ca59f439917ef4527c5845186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dcfb350d691e210740a251dc6af0e790c80e93ca59f439917ef4527c5845186->enter($__internal_7dcfb350d691e210740a251dc6af0e790c80e93ca59f439917ef4527c5845186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7dcfb350d691e210740a251dc6af0e790c80e93ca59f439917ef4527c5845186->leave($__internal_7dcfb350d691e210740a251dc6af0e790c80e93ca59f439917ef4527c5845186_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "/*
{{ status_code }} {{ status_text }}

*/
";
    }
}
