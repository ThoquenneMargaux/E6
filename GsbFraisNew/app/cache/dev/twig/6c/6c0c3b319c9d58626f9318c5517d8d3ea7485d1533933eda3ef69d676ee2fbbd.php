<?php

/* mttlgsbBundle:Default:vRenseignerFraisHF.html.twig */
class __TwigTemplate_5d627a634a1b22fbae0fff2acc5d90ce364feb7fe74fce9ec93d66a71f7293c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mttlgsbBundle:Default:base_Visiteur.html.twig", "mttlgsbBundle:Default:vRenseignerFraisHF.html.twig", 1);
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
        return "mttlgsbBundle:Default:base_Visiteur.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a936335d5ab09132cf356c8ad4e171fa34794882b43e4c1c6b8da9e5c3893ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a936335d5ab09132cf356c8ad4e171fa34794882b43e4c1c6b8da9e5c3893ef5->enter($__internal_a936335d5ab09132cf356c8ad4e171fa34794882b43e4c1c6b8da9e5c3893ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mttlgsbBundle:Default:vRenseignerFraisHF.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a936335d5ab09132cf356c8ad4e171fa34794882b43e4c1c6b8da9e5c3893ef5->leave($__internal_a936335d5ab09132cf356c8ad4e171fa34794882b43e4c1c6b8da9e5c3893ef5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb7355c4034eaa1286096e3d71b0d8cec21d721d6e43d18e13643d153446ac86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb7355c4034eaa1286096e3d71b0d8cec21d721d6e43d18e13643d153446ac86->enter($__internal_fb7355c4034eaa1286096e3d71b0d8cec21d721d6e43d18e13643d153446ac86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    ";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        
        $__internal_fb7355c4034eaa1286096e3d71b0d8cec21d721d6e43d18e13643d153446ac86->leave($__internal_fb7355c4034eaa1286096e3d71b0d8cec21d721d6e43d18e13643d153446ac86_prof);

    }

    public function block_titre($context, array $blocks = array())
    {
        $__internal_9ab6983ce870646b3eb369fc1fcc822f5bd750e8a08d8fae99aae85c984573b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ab6983ce870646b3eb369fc1fcc822f5bd750e8a08d8fae99aae85c984573b6->enter($__internal_9ab6983ce870646b3eb369fc1fcc822f5bd750e8a08d8fae99aae85c984573b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo " <title>GSB - Page Renseigner frais hors forfait</title> ";
        
        $__internal_9ab6983ce870646b3eb369fc1fcc822f5bd750e8a08d8fae99aae85c984573b6->leave($__internal_9ab6983ce870646b3eb369fc1fcc822f5bd750e8a08d8fae99aae85c984573b6_prof);

    }

    // line 8
    public function block_entete($context, array $blocks = array())
    {
        $__internal_90209a0d83bf75a3e45fefcff5545b1b6512589aa0ffc4d44cb15c9ca9ab8673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90209a0d83bf75a3e45fefcff5545b1b6512589aa0ffc4d44cb15c9ca9ab8673->enter($__internal_90209a0d83bf75a3e45fefcff5545b1b6512589aa0ffc4d44cb15c9ca9ab8673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 9
        echo "        ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
    ";
        
        $__internal_90209a0d83bf75a3e45fefcff5545b1b6512589aa0ffc4d44cb15c9ca9ab8673->leave($__internal_90209a0d83bf75a3e45fefcff5545b1b6512589aa0ffc4d44cb15c9ca9ab8673_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd6fb673fc0973c22f81a8940c36f05ac7d26ba440407696fe7737fade6edb44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd6fb673fc0973c22f81a8940c36f05ac7d26ba440407696fe7737fade6edb44->enter($__internal_fd6fb673fc0973c22f81a8940c36f05ac7d26ba440407696fe7737fade6edb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "     <section id=\"team\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12\">
                        <div class=\"section-title\">
                            <strong>Renseigner Fiche</strong>
                                <hr>
                        </div>
                    </div>
                    <div class=\"col-md-24 col-sm-12 wow fadeIn\" data-wow-delay=\"0.9s\">
                        <div class=\"team-wrapper\">

                            ";
        // line 25
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            <table class=\"table-centrer\">
                                <tr>
                                    <td>
                                        <div class=\"erreur\">
                                           ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["danger"]) ? $context["danger"] : $this->getContext($context, "danger")), "html", null, true);
        echo " 
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'label', array("label" => "Nom du frais: "));
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "libelle", array()), 'widget');
        echo "
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datedepense", array()), 'label', array("label" => "Date du frais: "));
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "datedepense", array()), 'widget');
        echo "
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montant", array()), 'label', array("label" => "Montant: "));
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "montant", array()), 'widget');
        echo "
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <input type=\"submit\" value=\"Valider\" />
                                    </td>
                                    <td>
                                        <input type=\"button\" value=\"Retour\" onclick=\"history.go(-1)\">
                                    </td>
                                </tr>
                            </table>      
                            ";
        // line 67
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "



                        </div>
                    </div>
                </div>
            </div>
        </section>
       
        <table class='table'>
            <thead>
                <tr>
                    <td>
                        Frais hors forfait
                    </td>
                    <td>
                        Montant
                    </td>
                    <td>
                        Date
                    </td>
                    <td>
                        
                    </td>
                </tr>
            </thead>
            
            ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lignesHF"]) ? $context["lignesHF"] : $this->getContext($context, "lignesHF")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 96
            echo "            <tbody>
                <tr>
                    <td>
                        ";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "libelle", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "montant", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 105
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ligne"], "datedepense", array()), "d-m-y"), "html", null, true);
            echo "
                    </td>
                    <td>
                        
                         <a href=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mttlgsb_supHF", array("idlignefraishorsforfait" => $this->getAttribute($context["ligne"], "idlignefraishorsforfait", array()))), "html", null, true);
            echo "\">Supprimer</a>       
                    </td>
                </tr>
            
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                
                
            </tbody>
        </table>
    ";
        
        $__internal_fd6fb673fc0973c22f81a8940c36f05ac7d26ba440407696fe7737fade6edb44->leave($__internal_fd6fb673fc0973c22f81a8940c36f05ac7d26ba440407696fe7737fade6edb44_prof);

    }

    // line 120
    public function block_footer($context, array $blocks = array())
    {
        $__internal_17e351a13d05330256cc5d420866820e7089c0ddd94b0a56d524c4fffa0e1514 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e351a13d05330256cc5d420866820e7089c0ddd94b0a56d524c4fffa0e1514->enter($__internal_17e351a13d05330256cc5d420866820e7089c0ddd94b0a56d524c4fffa0e1514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 121
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
        
        $__internal_17e351a13d05330256cc5d420866820e7089c0ddd94b0a56d524c4fffa0e1514->leave($__internal_17e351a13d05330256cc5d420866820e7089c0ddd94b0a56d524c4fffa0e1514_prof);

    }

    public function getTemplateName()
    {
        return "mttlgsbBundle:Default:vRenseignerFraisHF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 121,  250 => 120,  239 => 114,  228 => 109,  221 => 105,  215 => 102,  209 => 99,  204 => 96,  200 => 95,  169 => 67,  154 => 55,  148 => 52,  140 => 47,  134 => 44,  126 => 39,  120 => 36,  111 => 30,  103 => 25,  89 => 13,  83 => 12,  73 => 9,  67 => 8,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"mttlgsbBundle:Default:base_Visiteur.html.twig\" %}

{% block head %}
    {{ parent() }}
    {% block titre %} <title>GSB - Page Renseigner frais hors forfait</title> {% endblock %}
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
                            <strong>Renseigner Fiche</strong>
                                <hr>
                        </div>
                    </div>
                    <div class=\"col-md-24 col-sm-12 wow fadeIn\" data-wow-delay=\"0.9s\">
                        <div class=\"team-wrapper\">

                            {{form_start(form)}}
                            <table class=\"table-centrer\">
                                <tr>
                                    <td>
                                        <div class=\"erreur\">
                                           {{danger}} 
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        {{form_label(form.libelle,\"Nom du frais: \")}}
                                    </td>
                                    <td>
                                        {{form_widget(form.libelle)}}
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        {{form_label(form.datedepense,\"Date du frais: \")}}
                                    </td>
                                    <td>
                                        {{form_widget(form.datedepense)}}
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        {{form_label(form.montant,\"Montant: \")}}
                                    </td>
                                    <td>
                                        {{form_widget(form.montant)}}
                                    </td>
                                </tr>
                                 <tr>
                                    <td>
                                        <input type=\"submit\" value=\"Valider\" />
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
       
        <table class='table'>
            <thead>
                <tr>
                    <td>
                        Frais hors forfait
                    </td>
                    <td>
                        Montant
                    </td>
                    <td>
                        Date
                    </td>
                    <td>
                        
                    </td>
                </tr>
            </thead>
            
            {% for ligne in lignesHF %}
            <tbody>
                <tr>
                    <td>
                        {{ ligne.libelle }}
                    </td>
                    <td>
                        {{ ligne.montant }}
                    </td>
                    <td>
                        {{ ligne.datedepense | date('d-m-y')}}
                    </td>
                    <td>
                        
                         <a href=\"{{ path('mttlgsb_supHF',{\"idlignefraishorsforfait\":ligne.idlignefraishorsforfait})}}\">Supprimer</a>       
                    </td>
                </tr>
            
                {% endfor %}
                
                
            </tbody>
        </table>
    {% endblock %}
    
    {% block footer %}
        {{ parent() }}
    {% endblock %}";
    }
}
