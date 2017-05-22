<?php

/* mttlgsbBundle:Default:vConsulterFrais1.html.twig */
class __TwigTemplate_e2fe3009e67003174ce3375d19fb5bcb5357181e07b4dbe62124e76c9cb6fc42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mttlgsbBundle:Default:base_Visiteur.html.twig", "mttlgsbBundle:Default:vConsulterFrais1.html.twig", 1);
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
        $__internal_304cb1b5c982c68a8e98cdf6860a68392274a13ba1ef5a6ff4d2eb5aa52ac0c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_304cb1b5c982c68a8e98cdf6860a68392274a13ba1ef5a6ff4d2eb5aa52ac0c4->enter($__internal_304cb1b5c982c68a8e98cdf6860a68392274a13ba1ef5a6ff4d2eb5aa52ac0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mttlgsbBundle:Default:vConsulterFrais1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_304cb1b5c982c68a8e98cdf6860a68392274a13ba1ef5a6ff4d2eb5aa52ac0c4->leave($__internal_304cb1b5c982c68a8e98cdf6860a68392274a13ba1ef5a6ff4d2eb5aa52ac0c4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5cde89ca84e52a6eb935ee987adb260f59493102b8bfae4cdf26c788c11b18d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cde89ca84e52a6eb935ee987adb260f59493102b8bfae4cdf26c788c11b18d1->enter($__internal_5cde89ca84e52a6eb935ee987adb260f59493102b8bfae4cdf26c788c11b18d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    ";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        
        $__internal_5cde89ca84e52a6eb935ee987adb260f59493102b8bfae4cdf26c788c11b18d1->leave($__internal_5cde89ca84e52a6eb935ee987adb260f59493102b8bfae4cdf26c788c11b18d1_prof);

    }

    public function block_titre($context, array $blocks = array())
    {
        $__internal_045ac30a229a87a81953457dc27e380bd455461ce18a983875a5ff9c0a37d86e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045ac30a229a87a81953457dc27e380bd455461ce18a983875a5ff9c0a37d86e->enter($__internal_045ac30a229a87a81953457dc27e380bd455461ce18a983875a5ff9c0a37d86e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo " <title>GSB - Page Renseigner fiche de frais</title> ";
        
        $__internal_045ac30a229a87a81953457dc27e380bd455461ce18a983875a5ff9c0a37d86e->leave($__internal_045ac30a229a87a81953457dc27e380bd455461ce18a983875a5ff9c0a37d86e_prof);

    }

    // line 8
    public function block_entete($context, array $blocks = array())
    {
        $__internal_23181991e924b7d56993d828c48b76e165fd89b685872f7ef1dca61d9839b864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23181991e924b7d56993d828c48b76e165fd89b685872f7ef1dca61d9839b864->enter($__internal_23181991e924b7d56993d828c48b76e165fd89b685872f7ef1dca61d9839b864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 9
        echo "        ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
    ";
        
        $__internal_23181991e924b7d56993d828c48b76e165fd89b685872f7ef1dca61d9839b864->leave($__internal_23181991e924b7d56993d828c48b76e165fd89b685872f7ef1dca61d9839b864_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a1e6b0f26aeb294413d973384dfa3874e3a7cbddffbca59fa59be1b511f7c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1e6b0f26aeb294413d973384dfa3874e3a7cbddffbca59fa59be1b511f7c2c->enter($__internal_8a1e6b0f26aeb294413d973384dfa3874e3a7cbddffbca59fa59be1b511f7c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "     <section id=\"team\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12\">
                        <div class=\"section-title\">
                            <strong>Consulter Frais</strong>
                                <hr>
                        </div>
                    </div>
                    
                    <div class=\"col-md-24 col-sm-12 wow fadeIn\" data-wow-delay=\"0.9s\">
                        <div class=\"team-wrapper\">
                            ";
        // line 25
        if (((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")) != "")) {
            // line 26
            echo "                                <div class=\"alert alert-info\">
                                    <strong>Erreur : </strong> Vous avez aucune fiche correspondante a cette date .
                                </div>
                             ";
        }
        // line 30
        echo "                            <div class=\"table-centrer\">
                            ";
        // line 31
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                                ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mois", array()), 'widget', array("date_pattern" => "<span style=\"display: none;\">{{ day }}</span> {{ month }} {{ year }}"));
        echo "
                                <input type=\"submit\" value=\"Valider\" />
                            ";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                            <input type=\"button\" value=\"Retour\" onclick=\"history.go(-1)\">
                            </div>

                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    ";
        
        $__internal_8a1e6b0f26aeb294413d973384dfa3874e3a7cbddffbca59fa59be1b511f7c2c->leave($__internal_8a1e6b0f26aeb294413d973384dfa3874e3a7cbddffbca59fa59be1b511f7c2c_prof);

    }

    // line 46
    public function block_footer($context, array $blocks = array())
    {
        $__internal_94d0cc1e2c60c7ffe5b7a7abdd1234c5c6df13866a2a9fab692db7285684f49c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94d0cc1e2c60c7ffe5b7a7abdd1234c5c6df13866a2a9fab692db7285684f49c->enter($__internal_94d0cc1e2c60c7ffe5b7a7abdd1234c5c6df13866a2a9fab692db7285684f49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 47
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
        
        $__internal_94d0cc1e2c60c7ffe5b7a7abdd1234c5c6df13866a2a9fab692db7285684f49c->leave($__internal_94d0cc1e2c60c7ffe5b7a7abdd1234c5c6df13866a2a9fab692db7285684f49c_prof);

    }

    public function getTemplateName()
    {
        return "mttlgsbBundle:Default:vConsulterFrais1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 47,  141 => 46,  123 => 34,  118 => 32,  114 => 31,  111 => 30,  105 => 26,  103 => 25,  89 => 13,  83 => 12,  73 => 9,  67 => 8,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
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
                            <strong>Consulter Frais</strong>
                                <hr>
                        </div>
                    </div>
                    
                    <div class=\"col-md-24 col-sm-12 wow fadeIn\" data-wow-delay=\"0.9s\">
                        <div class=\"team-wrapper\">
                            {% if message !=\"\" %}
                                <div class=\"alert alert-info\">
                                    <strong>Erreur : </strong> Vous avez aucune fiche correspondante a cette date .
                                </div>
                             {% endif%}
                            <div class=\"table-centrer\">
                            {{form_start(form)}}
                                {{ form_widget(form.mois,{'date_pattern': '<span style=\"display: none;\">{{ day }}</span> {{ month }} {{ year }}'})}}
                                <input type=\"submit\" value=\"Valider\" />
                            {{form_end(form)}}
                            <input type=\"button\" value=\"Retour\" onclick=\"history.go(-1)\">
                            </div>

                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    {% endblock %}
    
    {% block footer %}
        {{ parent() }}
    {% endblock %}";
    }
}
