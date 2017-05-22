<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_acf2ef8d0ee568bbcaa9f65ee70e7a785022639c5b3cadd551d5fe62a48bd979 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_81834301911804c568286713cd3460ec61c96ddd2738cb432fb6b8750b6fb649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81834301911804c568286713cd3460ec61c96ddd2738cb432fb6b8750b6fb649->enter($__internal_81834301911804c568286713cd3460ec61c96ddd2738cb432fb6b8750b6fb649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81834301911804c568286713cd3460ec61c96ddd2738cb432fb6b8750b6fb649->leave($__internal_81834301911804c568286713cd3460ec61c96ddd2738cb432fb6b8750b6fb649_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_73732c1f34aad9ffcb2929c92f9ba635b251362e061588a8cd0dd110890bae31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73732c1f34aad9ffcb2929c92f9ba635b251362e061588a8cd0dd110890bae31->enter($__internal_73732c1f34aad9ffcb2929c92f9ba635b251362e061588a8cd0dd110890bae31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_73732c1f34aad9ffcb2929c92f9ba635b251362e061588a8cd0dd110890bae31->leave($__internal_73732c1f34aad9ffcb2929c92f9ba635b251362e061588a8cd0dd110890bae31_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_404de77f55556f04061779f7dc4ad8d6bdedd2827740bbafdb32e269bd176765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404de77f55556f04061779f7dc4ad8d6bdedd2827740bbafdb32e269bd176765->enter($__internal_404de77f55556f04061779f7dc4ad8d6bdedd2827740bbafdb32e269bd176765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_404de77f55556f04061779f7dc4ad8d6bdedd2827740bbafdb32e269bd176765->leave($__internal_404de77f55556f04061779f7dc4ad8d6bdedd2827740bbafdb32e269bd176765_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b062e17902fda29949db2dd71a8352816437f2abec79d8ea9f31e3f53cc272b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b062e17902fda29949db2dd71a8352816437f2abec79d8ea9f31e3f53cc272b->enter($__internal_9b062e17902fda29949db2dd71a8352816437f2abec79d8ea9f31e3f53cc272b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_9b062e17902fda29949db2dd71a8352816437f2abec79d8ea9f31e3f53cc272b->leave($__internal_9b062e17902fda29949db2dd71a8352816437f2abec79d8ea9f31e3f53cc272b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
";
    }
}
