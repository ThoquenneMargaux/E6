<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_e91ac1da2eb9fd62beee2364a10781c66a0fca60ce392e1d9c3f6cd0accd270f extends Twig_Template
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
        $__internal_5658c625a9053d023957dc15e9cc80eb68c29ff2272581b6daa1857d96cb8922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5658c625a9053d023957dc15e9cc80eb68c29ff2272581b6daa1857d96cb8922->enter($__internal_5658c625a9053d023957dc15e9cc80eb68c29ff2272581b6daa1857d96cb8922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_5658c625a9053d023957dc15e9cc80eb68c29ff2272581b6daa1857d96cb8922->leave($__internal_5658c625a9053d023957dc15e9cc80eb68c29ff2272581b6daa1857d96cb8922_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
    }
}
