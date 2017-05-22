<?php

/* mttlgsbBundle:Default:vRenseignerFrais1.html.twig */
class __TwigTemplate_b6d7328e4515c820e836a11f135c001fbd74a06ebae2facd93e84f40f7384cdf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mttlgsbBundle:Default:base_Visiteur.html.twig", "mttlgsbBundle:Default:vRenseignerFrais1.html.twig", 1);
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
        $__internal_3cb9169d629a3a292936e272e7326a13bb3577e531c789e0999c7482449a512c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3cb9169d629a3a292936e272e7326a13bb3577e531c789e0999c7482449a512c->enter($__internal_3cb9169d629a3a292936e272e7326a13bb3577e531c789e0999c7482449a512c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mttlgsbBundle:Default:vRenseignerFrais1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3cb9169d629a3a292936e272e7326a13bb3577e531c789e0999c7482449a512c->leave($__internal_3cb9169d629a3a292936e272e7326a13bb3577e531c789e0999c7482449a512c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3b57ea919b4a958b3bf7d13b00b76c0eeda1ae8ace53a9b56636c9755dc02299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b57ea919b4a958b3bf7d13b00b76c0eeda1ae8ace53a9b56636c9755dc02299->enter($__internal_3b57ea919b4a958b3bf7d13b00b76c0eeda1ae8ace53a9b56636c9755dc02299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    ";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        
        $__internal_3b57ea919b4a958b3bf7d13b00b76c0eeda1ae8ace53a9b56636c9755dc02299->leave($__internal_3b57ea919b4a958b3bf7d13b00b76c0eeda1ae8ace53a9b56636c9755dc02299_prof);

    }

    public function block_titre($context, array $blocks = array())
    {
        $__internal_cbe0b97a70e44eeafe4aadd0a7255109b4ad0ad4dbf29b31785a5b2929c21adc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbe0b97a70e44eeafe4aadd0a7255109b4ad0ad4dbf29b31785a5b2929c21adc->enter($__internal_cbe0b97a70e44eeafe4aadd0a7255109b4ad0ad4dbf29b31785a5b2929c21adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo " <title>GSB - Page Renseigner fiche de frais</title> ";
        
        $__internal_cbe0b97a70e44eeafe4aadd0a7255109b4ad0ad4dbf29b31785a5b2929c21adc->leave($__internal_cbe0b97a70e44eeafe4aadd0a7255109b4ad0ad4dbf29b31785a5b2929c21adc_prof);

    }

    // line 8
    public function block_entete($context, array $blocks = array())
    {
        $__internal_8a023de5fbd17ee9837feab64ea82dd2b64fd432612a9b952cec980fa04770e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a023de5fbd17ee9837feab64ea82dd2b64fd432612a9b952cec980fa04770e6->enter($__internal_8a023de5fbd17ee9837feab64ea82dd2b64fd432612a9b952cec980fa04770e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 9
        echo "        ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
    ";
        
        $__internal_8a023de5fbd17ee9837feab64ea82dd2b64fd432612a9b952cec980fa04770e6->leave($__internal_8a023de5fbd17ee9837feab64ea82dd2b64fd432612a9b952cec980fa04770e6_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d2306b36752e013a72898d2878c31d702aa16d6e4b2a80c70f1df4e400dbd2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2306b36752e013a72898d2878c31d702aa16d6e4b2a80c70f1df4e400dbd2f->enter($__internal_3d2306b36752e013a72898d2878c31d702aa16d6e4b2a80c70f1df4e400dbd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 26
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                            <table class=\"table-centrer\">
                                <tr>
                                    <td>
                                        <div class=\"erreur\">
                                           ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["danger"]) ? $context["danger"] : $this->getContext($context, "danger")), "html", null, true);
        echo " 
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'label', array("label" => "Quantite: "));
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite", array()), 'widget');
        echo "
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idfraisforfait", array()), 'label', array("label" => "Type de frais: "));
        echo "
                                    </td>
                                    <td>
                                        ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "idfraisforfait", array()), 'widget');
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
        // line 60
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
                        Frais forfait
                    </td>
                    <td>
                        Quantité
                    </td>
                </tr>
            </thead>
            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lignesfrais"]) ? $context["lignesfrais"] : $this->getContext($context, "lignesfrais")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 82
            echo "            <tbody>
                <tr>
                    <td>
                        ";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligne"], "idfraisforfait", array()), "libelle", array()), "html", null, true);
            echo "
                    </td>
                    <td>
                        ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "quantite", array()), "html", null, true);
            echo "
                    </td>
                    
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "            </tbody>
        </table>
    ";
        
        $__internal_3d2306b36752e013a72898d2878c31d702aa16d6e4b2a80c70f1df4e400dbd2f->leave($__internal_3d2306b36752e013a72898d2878c31d702aa16d6e4b2a80c70f1df4e400dbd2f_prof);

    }

    // line 97
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6641eb2d8a300f260d22d10c80af0deb38c47e8ff6c3a5d58cf2a593f87ae595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6641eb2d8a300f260d22d10c80af0deb38c47e8ff6c3a5d58cf2a593f87ae595->enter($__internal_6641eb2d8a300f260d22d10c80af0deb38c47e8ff6c3a5d58cf2a593f87ae595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 98
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
        
        $__internal_6641eb2d8a300f260d22d10c80af0deb38c47e8ff6c3a5d58cf2a593f87ae595->leave($__internal_6641eb2d8a300f260d22d10c80af0deb38c47e8ff6c3a5d58cf2a593f87ae595_prof);

    }

    public function getTemplateName()
    {
        return "mttlgsbBundle:Default:vRenseignerFrais1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 98,  215 => 97,  206 => 93,  195 => 88,  189 => 85,  184 => 82,  180 => 81,  156 => 60,  141 => 48,  135 => 45,  127 => 40,  121 => 37,  112 => 31,  104 => 26,  89 => 13,  83 => 12,  73 => 9,  67 => 8,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"mttlgsbBundle:Default:base_Visiteur.html.twig\" %}

{% block head %}
    {{ parent() }}
    {% block titre %} <title>GSB - Page Renseigner fiche de frais</title> {% endblock %}
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
                                        {{form_label(form.quantite,\"Quantite: \")}}
                                    </td>
                                    <td>
                                        {{form_widget(form.quantite)}}
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        {{form_label(form.idfraisforfait,\"Type de frais: \")}}
                                    </td>
                                    <td>
                                        {{form_widget(form.idfraisforfait)}}
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
                        Frais forfait
                    </td>
                    <td>
                        Quantité
                    </td>
                </tr>
            </thead>
            {% for ligne in lignesfrais %}
            <tbody>
                <tr>
                    <td>
                        {{ ligne.idfraisforfait.libelle }}
                    </td>
                    <td>
                        {{ ligne.quantite }}
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
