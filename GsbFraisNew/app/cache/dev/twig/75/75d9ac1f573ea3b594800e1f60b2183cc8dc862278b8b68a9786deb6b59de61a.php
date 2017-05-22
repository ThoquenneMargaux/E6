<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6ce821f9693f6aeb31942614751509508c0cc605781477a9f5b4d61a014ef84e extends Twig_Template
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
        $__internal_165e8c1aff7bfadf08adea72526ae9080a45a5032f6f80f0bd914e3dee5c92e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165e8c1aff7bfadf08adea72526ae9080a45a5032f6f80f0bd914e3dee5c92e6->enter($__internal_165e8c1aff7bfadf08adea72526ae9080a45a5032f6f80f0bd914e3dee5c92e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_165e8c1aff7bfadf08adea72526ae9080a45a5032f6f80f0bd914e3dee5c92e6->leave($__internal_165e8c1aff7bfadf08adea72526ae9080a45a5032f6f80f0bd914e3dee5c92e6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return "{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
";
    }
}
