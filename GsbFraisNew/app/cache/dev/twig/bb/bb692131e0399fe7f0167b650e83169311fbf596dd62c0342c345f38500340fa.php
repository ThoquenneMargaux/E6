<?php

/* mttlgsbBundle:Default:validerVisuFIche.html.twig */
class __TwigTemplate_aba770d6f73ccae089157f49d93dcd688465c9dfa76073213556237a7f249ffb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("mttlgsbBundle:Default:base_Comptable.html.twig", "mttlgsbBundle:Default:validerVisuFIche.html.twig", 2);
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
        return "mttlgsbBundle:Default:base_Comptable.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efc58369464c456cd08b86f158de4165e9e73747d77ce5e860c2596ba8ce36db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc58369464c456cd08b86f158de4165e9e73747d77ce5e860c2596ba8ce36db->enter($__internal_efc58369464c456cd08b86f158de4165e9e73747d77ce5e860c2596ba8ce36db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mttlgsbBundle:Default:validerVisuFIche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efc58369464c456cd08b86f158de4165e9e73747d77ce5e860c2596ba8ce36db->leave($__internal_efc58369464c456cd08b86f158de4165e9e73747d77ce5e860c2596ba8ce36db_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_11e744b31f52ff0a25b02f1e3aea6c2c451faec7a5125d0829cef675dca975c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e744b31f52ff0a25b02f1e3aea6c2c451faec7a5125d0829cef675dca975c4->enter($__internal_11e744b31f52ff0a25b02f1e3aea6c2c451faec7a5125d0829cef675dca975c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    ";
        // line 6
        $this->displayBlock('titre', $context, $blocks);
        
        $__internal_11e744b31f52ff0a25b02f1e3aea6c2c451faec7a5125d0829cef675dca975c4->leave($__internal_11e744b31f52ff0a25b02f1e3aea6c2c451faec7a5125d0829cef675dca975c4_prof);

    }

    public function block_titre($context, array $blocks = array())
    {
        $__internal_9fae5e15a23869493ca03bd6af8297301dd4151f27e4db39d1ea5538e2d96569 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fae5e15a23869493ca03bd6af8297301dd4151f27e4db39d1ea5538e2d96569->enter($__internal_9fae5e15a23869493ca03bd6af8297301dd4151f27e4db39d1ea5538e2d96569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo " <title>GSB - Page Renseigner fiche de frais</title> ";
        
        $__internal_9fae5e15a23869493ca03bd6af8297301dd4151f27e4db39d1ea5538e2d96569->leave($__internal_9fae5e15a23869493ca03bd6af8297301dd4151f27e4db39d1ea5538e2d96569_prof);

    }

    // line 9
    public function block_entete($context, array $blocks = array())
    {
        $__internal_cb8c0a5be0c32f750684937e33bd277259a88217be2a2b1eb0c1372f888cc984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb8c0a5be0c32f750684937e33bd277259a88217be2a2b1eb0c1372f888cc984->enter($__internal_cb8c0a5be0c32f750684937e33bd277259a88217be2a2b1eb0c1372f888cc984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 10
        echo "        ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
    ";
        
        $__internal_cb8c0a5be0c32f750684937e33bd277259a88217be2a2b1eb0c1372f888cc984->leave($__internal_cb8c0a5be0c32f750684937e33bd277259a88217be2a2b1eb0c1372f888cc984_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_7741d8d7c50ba69aa75453f0f3009008d53e33a8ffaab5c049ae9ca0f17bbadd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7741d8d7c50ba69aa75453f0f3009008d53e33a8ffaab5c049ae9ca0f17bbadd->enter($__internal_7741d8d7c50ba69aa75453f0f3009008d53e33a8ffaab5c049ae9ca0f17bbadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "     <section id=\"team2\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12\">
                        <div class=\"section-title\">
                                <hr>
                        </div>
                    </div>
                    <div class=\"col-md-24 col-sm-12 wow fadeIn\" data-wow-delay=\"0.9s\">
                        <div class=\"team-wrapper\">
                            
                            <h2>Fiche de ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "idvisiteur", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "idvisiteur", array()), "prenom", array()), "html", null, true);
        echo " du ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "mois", array()), "m-y"), "html", null, true);
        echo "</h2>

                            
                            <h3>les Frais Forfait</h3>
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
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forfaits"]) ? $context["forfaits"] : $this->getContext($context, "forfaits")));
        foreach ($context['_seq'] as $context["_key"] => $context["forfait"]) {
            // line 41
            echo "                                <tbody>
                                    <tr>
                                        <td>
                                            ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["forfait"], "idfraisforfait", array()), "libelle", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["forfait"], "quantite", array()), "html", null, true);
            echo "
                                        </td>

                                    </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                                </tbody>
                            </table>
                            
                            <h3>les Frais Hors Forfait</h3>
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
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["horsForfait"]) ? $context["horsForfait"] : $this->getContext($context, "horsForfait")));
        foreach ($context['_seq'] as $context["_key"] => $context["unHorsForfait"]) {
            // line 75
            echo "                                <tbody>
                                    <tr>
                                        <td>
                                            ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["unHorsForfait"], "libelle", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["unHorsForfait"], "montant", array()), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            ";
            // line 84
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["unHorsForfait"], "datedepense", array()), "d-m-y"), "html", null, true);
            echo "
                                        </td>
                                        <td>
                                            <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mttlgsb_refus", array("idlignefraishorsforfait" => $this->getAttribute($context["unHorsForfait"], "idlignefraishorsforfait", array()), "mois" => twig_date_format_filter($this->env, $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "mois", array()), "Y-m-d"), "idVisiteur" => $this->getAttribute($this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "idvisiteur", array()), "idVisiteur", array()))), "html", null, true);
            echo "\">Refuser</a> 
                                        </td>
                                    </tr>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unHorsForfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "

                                </tbody>
                            </table>
                            <a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mttlgsb_validation", array("idFiche" => $this->getAttribute((isset($context["ficheFrais"]) ? $context["ficheFrais"] : $this->getContext($context, "ficheFrais")), "idfichefrais", array()))), "html", null, true);
        echo "\">Valider</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    ";
        
        $__internal_7741d8d7c50ba69aa75453f0f3009008d53e33a8ffaab5c049ae9ca0f17bbadd->leave($__internal_7741d8d7c50ba69aa75453f0f3009008d53e33a8ffaab5c049ae9ca0f17bbadd_prof);

    }

    // line 105
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2fc36f74c882db8431db5fa437a6dd46d05017599d6bfd2e220ee5af1b3344a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fc36f74c882db8431db5fa437a6dd46d05017599d6bfd2e220ee5af1b3344a8->enter($__internal_2fc36f74c882db8431db5fa437a6dd46d05017599d6bfd2e220ee5af1b3344a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 106
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
        
        $__internal_2fc36f74c882db8431db5fa437a6dd46d05017599d6bfd2e220ee5af1b3344a8->leave($__internal_2fc36f74c882db8431db5fa437a6dd46d05017599d6bfd2e220ee5af1b3344a8_prof);

    }

    public function getTemplateName()
    {
        return "mttlgsbBundle:Default:validerVisuFIche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 106,  233 => 105,  218 => 96,  212 => 92,  201 => 87,  195 => 84,  189 => 81,  183 => 78,  178 => 75,  174 => 74,  150 => 52,  139 => 47,  133 => 44,  128 => 41,  124 => 40,  102 => 25,  89 => 14,  83 => 13,  73 => 10,  67 => 9,  49 => 6,  44 => 5,  38 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends \"mttlgsbBundle:Default:base_Comptable.html.twig\" %}

{% block head %}
    {{ parent() }}
    {% block titre %} <title>GSB - Page Renseigner fiche de frais</title> {% endblock %}
{% endblock %}

    {% block entete %}
        {{ parent() }}
    {% endblock %}
    
    {% block body %}
     <section id=\"team2\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12\">
                        <div class=\"section-title\">
                                <hr>
                        </div>
                    </div>
                    <div class=\"col-md-24 col-sm-12 wow fadeIn\" data-wow-delay=\"0.9s\">
                        <div class=\"team-wrapper\">
                            
                            <h2>Fiche de {{ ficheFrais.idvisiteur.nom }} {{ ficheFrais.idvisiteur.prenom }} du {{ ficheFrais.mois | date('m-y')}}</h2>

                            
                            <h3>les Frais Forfait</h3>
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
                                {% for forfait in forfaits %}
                                <tbody>
                                    <tr>
                                        <td>
                                            {{ forfait.idfraisforfait.libelle }}
                                        </td>
                                        <td>
                                            {{ forfait.quantite }}
                                        </td>

                                    </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                            
                            <h3>les Frais Hors Forfait</h3>
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
            
                                {% for unHorsForfait in horsForfait %}
                                <tbody>
                                    <tr>
                                        <td>
                                            {{ unHorsForfait.libelle }}
                                        </td>
                                        <td>
                                            {{ unHorsForfait.montant }}
                                        </td>
                                        <td>
                                            {{ unHorsForfait.datedepense | date('d-m-y')}}
                                        </td>
                                        <td>
                                            <a href=\"{{ path('mttlgsb_refus',{\"idlignefraishorsforfait\":unHorsForfait.idlignefraishorsforfait,'mois':ficheFrais.mois | date('Y-m-d'),\"idVisiteur\":ficheFrais.idvisiteur.idVisiteur})}}\">Refuser</a> 
                                        </td>
                                    </tr>

                                    {% endfor %}


                                </tbody>
                            </table>
                            <a href=\"{{ path('mttlgsb_validation',{\"idFiche\": ficheFrais.idfichefrais })}}\">Valider</a>
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
