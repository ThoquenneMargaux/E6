<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_6d0e34be8a28758859b7f089214aa6e176f369d3342f826ad9aff2a190a6538a extends Twig_Template
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
        $__internal_d45b4e6a320808ae11770c2c3550515c31e3cca41672d4bf5ee11737f54a210e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d45b4e6a320808ae11770c2c3550515c31e3cca41672d4bf5ee11737f54a210e->enter($__internal_d45b4e6a320808ae11770c2c3550515c31e3cca41672d4bf5ee11737f54a210e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d45b4e6a320808ae11770c2c3550515c31e3cca41672d4bf5ee11737f54a210e->leave($__internal_d45b4e6a320808ae11770c2c3550515c31e3cca41672d4bf5ee11737f54a210e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
";
    }
}
