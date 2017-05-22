<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_23fca963df33b2c8fe3070e20928c70d978e5f67f9a50dd293574d8719588f27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49816fb74723c75bb4f6e67b67a1d709e59c554399934338be14b020daae492f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49816fb74723c75bb4f6e67b67a1d709e59c554399934338be14b020daae492f->enter($__internal_49816fb74723c75bb4f6e67b67a1d709e59c554399934338be14b020daae492f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49816fb74723c75bb4f6e67b67a1d709e59c554399934338be14b020daae492f->leave($__internal_49816fb74723c75bb4f6e67b67a1d709e59c554399934338be14b020daae492f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0aab77c3305d8ab17d6c7e1fed876754c78091bef13caba642bad0e6dc9396d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aab77c3305d8ab17d6c7e1fed876754c78091bef13caba642bad0e6dc9396d0->enter($__internal_0aab77c3305d8ab17d6c7e1fed876754c78091bef13caba642bad0e6dc9396d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0aab77c3305d8ab17d6c7e1fed876754c78091bef13caba642bad0e6dc9396d0->leave($__internal_0aab77c3305d8ab17d6c7e1fed876754c78091bef13caba642bad0e6dc9396d0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_957f343f78aadb1e3f9bde7c18f9ddfb0ed2288bc23393f62dddf288554d4736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_957f343f78aadb1e3f9bde7c18f9ddfb0ed2288bc23393f62dddf288554d4736->enter($__internal_957f343f78aadb1e3f9bde7c18f9ddfb0ed2288bc23393f62dddf288554d4736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_957f343f78aadb1e3f9bde7c18f9ddfb0ed2288bc23393f62dddf288554d4736->leave($__internal_957f343f78aadb1e3f9bde7c18f9ddfb0ed2288bc23393f62dddf288554d4736_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TwigBundle::layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
";
    }
}
