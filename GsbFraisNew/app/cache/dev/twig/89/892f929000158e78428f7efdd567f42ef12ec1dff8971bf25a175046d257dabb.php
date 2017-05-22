<?php

/* mttlgsbBundle:Default:connexion.html.twig */
class __TwigTemplate_376de842ecdbce14686f11a9efa91b9aea95cae55f627498aef43d66d6c51812 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mttlgsbBundle:Default:base.html.twig", "mttlgsbBundle:Default:connexion.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'titre' => array($this, 'block_titre'),
            'entete' => array($this, 'block_entete'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mttlgsbBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_218d1915796d0072aa7595c1b9ee5b4f8453c1d8bc120b4522f845578d71190f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_218d1915796d0072aa7595c1b9ee5b4f8453c1d8bc120b4522f845578d71190f->enter($__internal_218d1915796d0072aa7595c1b9ee5b4f8453c1d8bc120b4522f845578d71190f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mttlgsbBundle:Default:connexion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_218d1915796d0072aa7595c1b9ee5b4f8453c1d8bc120b4522f845578d71190f->leave($__internal_218d1915796d0072aa7595c1b9ee5b4f8453c1d8bc120b4522f845578d71190f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9625aafe975d19eea30889a3d298110a6b5433cf938f23ba3db516355f03255b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9625aafe975d19eea30889a3d298110a6b5433cf938f23ba3db516355f03255b->enter($__internal_9625aafe975d19eea30889a3d298110a6b5433cf938f23ba3db516355f03255b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    ";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        
        $__internal_9625aafe975d19eea30889a3d298110a6b5433cf938f23ba3db516355f03255b->leave($__internal_9625aafe975d19eea30889a3d298110a6b5433cf938f23ba3db516355f03255b_prof);

    }

    public function block_titre($context, array $blocks = array())
    {
        $__internal_26f26a5006c59b31d1ad1b8f9fac3fbc7399364a1b47fe5d8a875a2a45167ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26f26a5006c59b31d1ad1b8f9fac3fbc7399364a1b47fe5d8a875a2a45167ca9->enter($__internal_26f26a5006c59b31d1ad1b8f9fac3fbc7399364a1b47fe5d8a875a2a45167ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo " <title>GSB - Page connexion Visiteur</title> ";
        
        $__internal_26f26a5006c59b31d1ad1b8f9fac3fbc7399364a1b47fe5d8a875a2a45167ca9->leave($__internal_26f26a5006c59b31d1ad1b8f9fac3fbc7399364a1b47fe5d8a875a2a45167ca9_prof);

    }

    // line 8
    public function block_entete($context, array $blocks = array())
    {
        $__internal_8a9eacc0413cf3db222cce1725c2c9100139c4635878529f80114d7d999bfba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a9eacc0413cf3db222cce1725c2c9100139c4635878529f80114d7d999bfba1->enter($__internal_8a9eacc0413cf3db222cce1725c2c9100139c4635878529f80114d7d999bfba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 9
        echo "        ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
    ";
        
        $__internal_8a9eacc0413cf3db222cce1725c2c9100139c4635878529f80114d7d999bfba1->leave($__internal_8a9eacc0413cf3db222cce1725c2c9100139c4635878529f80114d7d999bfba1_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_0843827432d5af74dfe0c01624cd0c6e59e7fb0857e924b389ca4acd98254189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0843827432d5af74dfe0c01624cd0c6e59e7fb0857e924b389ca4acd98254189->enter($__internal_0843827432d5af74dfe0c01624cd0c6e59e7fb0857e924b389ca4acd98254189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "        <section id=\"team\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12\">
                        <div class=\"section-title\">
                            <strong>Connexion</strong>
                                <hr>
                        </div>
                    </div>
                    <div class=\"col-md-24 col-sm-12 wow fadeIn\" data-wow-delay=\"0.9s\">
                        <div class=\"team-wrapper\">
                           
                          
                            
                            

                            
                            ";
        // line 30
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                                <table class=\"table-centrer\">
                                    <tr>
                                        <td>
                                            ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'label', array("label" => "Login :"));
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "login", array()), 'widget');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mdp", array()), 'label', array("label" => "Mot de passe :"));
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mdp", array()), 'widget');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profil", array()), 'label', array("label" => "Profil :"));
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "profil", array()), 'widget');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valider", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            <input type=\"button\" value=\"Retour\" onclick=\"history.go(-1)\">
                                        </td>
                                    </tr>
                                </table>
                            ";
        // line 65
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                            
                            

                            

                        </div>
                    </div>
                </div>
            </div>
        </section>
    ";
        
        $__internal_0843827432d5af74dfe0c01624cd0c6e59e7fb0857e924b389ca4acd98254189->leave($__internal_0843827432d5af74dfe0c01624cd0c6e59e7fb0857e924b389ca4acd98254189_prof);

    }

    // line 78
    public function block_footer($context, array $blocks = array())
    {
        $__internal_16cce1c16b45cb88f5875dee24ecac4b3ae37831f72da846c8534eb1803640a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16cce1c16b45cb88f5875dee24ecac4b3ae37831f72da846c8534eb1803640a7->enter($__internal_16cce1c16b45cb88f5875dee24ecac4b3ae37831f72da846c8534eb1803640a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 79
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
        
        $__internal_16cce1c16b45cb88f5875dee24ecac4b3ae37831f72da846c8534eb1803640a7->leave($__internal_16cce1c16b45cb88f5875dee24ecac4b3ae37831f72da846c8534eb1803640a7_prof);

    }

    public function getTemplateName()
    {
        return "mttlgsbBundle:Default:connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 79,  186 => 78,  167 => 65,  157 => 58,  149 => 53,  143 => 50,  135 => 45,  129 => 42,  121 => 37,  115 => 34,  108 => 30,  89 => 13,  83 => 12,  73 => 9,  67 => 8,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"mttlgsbBundle:Default:base.html.twig\" %}

{% block head %}
    {{ parent() }}
    {% block titre %} <title>GSB - Page connexion Visiteur</title> {% endblock %}
{% endblock %}

    {% block entete %}
        {{ parent() }}
    {% endblock %}
    
    {% block body %}
        <section id=\"team\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12\">
                        <div class=\"section-title\">
                            <strong>Connexion</strong>
                                <hr>
                        </div>
                    </div>
                    <div class=\"col-md-24 col-sm-12 wow fadeIn\" data-wow-delay=\"0.9s\">
                        <div class=\"team-wrapper\">
                           
                          
                            
                            

                            
                            {{form_start(form)}}
                                <table class=\"table-centrer\">
                                    <tr>
                                        <td>
                                            {{form_label(form.login,\"Login :\")}}
                                        </td>
                                        <td>
                                            {{form_widget(form.login)}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{form_label(form.mdp,\"Mot de passe :\")}}
                                        </td>
                                        <td>
                                            {{form_widget(form.mdp)}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{form_label(form.profil,\"Profil :\")}}
                                        </td>
                                        <td>
                                            {{form_widget(form.profil)}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{form_widget(form.valider)}}
                                        </td>
                                        <td>
                                            <input type=\"button\" value=\"Retour\" onclick=\"history.go(-1)\">
                                        </td>
                                    </tr>
                                </table>
                            {{form_end(form)}}
                            
                            

                            

                        </div>
                    </div>
                </div>
            </div>
        </section>
    {% endblock %}
    
    {% block footer %}
        {{ parent() }}
    {% endblock %}   
";
    }
}
