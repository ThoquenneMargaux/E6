<?php

/* base.html.twig */
class __TwigTemplate_f60f784ec493f82addfe1b9ea55c89c2cf26aaf9049a450e02482b184c740e55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30007409d151770f628eadc73f096ac8a92a3cb9d3bea07c88600fb213d672fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30007409d151770f628eadc73f096ac8a92a3cb9d3bea07c88600fb213d672fb->enter($__internal_30007409d151770f628eadc73f096ac8a92a3cb9d3bea07c88600fb213d672fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_30007409d151770f628eadc73f096ac8a92a3cb9d3bea07c88600fb213d672fb->leave($__internal_30007409d151770f628eadc73f096ac8a92a3cb9d3bea07c88600fb213d672fb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_80a47ea931df303ca7114e666266c5c7b82626cf887596219efbe82cd5e6be6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80a47ea931df303ca7114e666266c5c7b82626cf887596219efbe82cd5e6be6c->enter($__internal_80a47ea931df303ca7114e666266c5c7b82626cf887596219efbe82cd5e6be6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_80a47ea931df303ca7114e666266c5c7b82626cf887596219efbe82cd5e6be6c->leave($__internal_80a47ea931df303ca7114e666266c5c7b82626cf887596219efbe82cd5e6be6c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d361cfc1bb67be4a1199cab3ce16a59266dcfe4b011eec642b66f961155f1a67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d361cfc1bb67be4a1199cab3ce16a59266dcfe4b011eec642b66f961155f1a67->enter($__internal_d361cfc1bb67be4a1199cab3ce16a59266dcfe4b011eec642b66f961155f1a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d361cfc1bb67be4a1199cab3ce16a59266dcfe4b011eec642b66f961155f1a67->leave($__internal_d361cfc1bb67be4a1199cab3ce16a59266dcfe4b011eec642b66f961155f1a67_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_af04a91f69cb711b2a06fbf3d1b847e7fccf290838c6453de063fa1687b6f7d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af04a91f69cb711b2a06fbf3d1b847e7fccf290838c6453de063fa1687b6f7d2->enter($__internal_af04a91f69cb711b2a06fbf3d1b847e7fccf290838c6453de063fa1687b6f7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_af04a91f69cb711b2a06fbf3d1b847e7fccf290838c6453de063fa1687b6f7d2->leave($__internal_af04a91f69cb711b2a06fbf3d1b847e7fccf290838c6453de063fa1687b6f7d2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_db1d2289a77560751270e1ec80a5bafcbca73c8231cc895adc10913f5e44326d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1d2289a77560751270e1ec80a5bafcbca73c8231cc895adc10913f5e44326d->enter($__internal_db1d2289a77560751270e1ec80a5bafcbca73c8231cc895adc10913f5e44326d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_db1d2289a77560751270e1ec80a5bafcbca73c8231cc895adc10913f5e44326d->leave($__internal_db1d2289a77560751270e1ec80a5bafcbca73c8231cc895adc10913f5e44326d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
";
    }
}
