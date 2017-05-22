<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b07f26afb69e611cc2082f2ac795217d0359db737becc88ed998c699d4864ffa extends Twig_Template
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
        $__internal_b9684a6502da62fb1be0ac095846a8b47370214c8a963f5a6053f8018fed95ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9684a6502da62fb1be0ac095846a8b47370214c8a963f5a6053f8018fed95ab->enter($__internal_b9684a6502da62fb1be0ac095846a8b47370214c8a963f5a6053f8018fed95ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b9684a6502da62fb1be0ac095846a8b47370214c8a963f5a6053f8018fed95ab->leave($__internal_b9684a6502da62fb1be0ac095846a8b47370214c8a963f5a6053f8018fed95ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
