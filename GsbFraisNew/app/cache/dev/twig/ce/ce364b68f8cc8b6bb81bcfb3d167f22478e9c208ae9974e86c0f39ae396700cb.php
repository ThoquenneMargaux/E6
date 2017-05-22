<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_916716d686a6ec2e5c08c3be000f2e72761b603406f8a77dad65cf6acc23b121 extends Twig_Template
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
        $__internal_a45c85cd2a0519efd5026bafe819498ca05ce76990f79e4ce426a5bb849f5000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a45c85cd2a0519efd5026bafe819498ca05ce76990f79e4ce426a5bb849f5000->enter($__internal_a45c85cd2a0519efd5026bafe819498ca05ce76990f79e4ce426a5bb849f5000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_a45c85cd2a0519efd5026bafe819498ca05ce76990f79e4ce426a5bb849f5000->leave($__internal_a45c85cd2a0519efd5026bafe819498ca05ce76990f79e4ce426a5bb849f5000_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
";
    }
}
