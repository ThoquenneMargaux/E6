<?php

/* mttlgsbBundle:Default:validerFicheFrais1.html.twig */
class __TwigTemplate_a0cf624613a80efd0589644b65b05b2d500d6cd9ccc1c87ac479196a2e89758f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("mttlgsbBundle:Default:base_Comptable.html.twig", "mttlgsbBundle:Default:validerFicheFrais1.html.twig", 2);
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
        $__internal_582b677b4600384213e358c73904e50b9fa48fbed7dfcd95be6b63608f3a0c11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_582b677b4600384213e358c73904e50b9fa48fbed7dfcd95be6b63608f3a0c11->enter($__internal_582b677b4600384213e358c73904e50b9fa48fbed7dfcd95be6b63608f3a0c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mttlgsbBundle:Default:validerFicheFrais1.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_582b677b4600384213e358c73904e50b9fa48fbed7dfcd95be6b63608f3a0c11->leave($__internal_582b677b4600384213e358c73904e50b9fa48fbed7dfcd95be6b63608f3a0c11_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_bec55c5e44cb5211c07d249ccb119b44d9fafc9759ae63124a5cb6149e34786c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bec55c5e44cb5211c07d249ccb119b44d9fafc9759ae63124a5cb6149e34786c->enter($__internal_bec55c5e44cb5211c07d249ccb119b44d9fafc9759ae63124a5cb6149e34786c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    ";
        // line 6
        $this->displayBlock('titre', $context, $blocks);
        
        $__internal_bec55c5e44cb5211c07d249ccb119b44d9fafc9759ae63124a5cb6149e34786c->leave($__internal_bec55c5e44cb5211c07d249ccb119b44d9fafc9759ae63124a5cb6149e34786c_prof);

    }

    public function block_titre($context, array $blocks = array())
    {
        $__internal_64a2ecfed5a24ad10e92d6d2eacf6f1559b64cfb01cf319cab9b3d740ccd9c9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64a2ecfed5a24ad10e92d6d2eacf6f1559b64cfb01cf319cab9b3d740ccd9c9c->enter($__internal_64a2ecfed5a24ad10e92d6d2eacf6f1559b64cfb01cf319cab9b3d740ccd9c9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo " <title>GSB - Page Renseigner fiche de frais</title> ";
        
        $__internal_64a2ecfed5a24ad10e92d6d2eacf6f1559b64cfb01cf319cab9b3d740ccd9c9c->leave($__internal_64a2ecfed5a24ad10e92d6d2eacf6f1559b64cfb01cf319cab9b3d740ccd9c9c_prof);

    }

    // line 9
    public function block_entete($context, array $blocks = array())
    {
        $__internal_3a38a2198b6c0a8a63b207fc233d7ca770e951301a66e0bcad8b8ffc1ae971d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a38a2198b6c0a8a63b207fc233d7ca770e951301a66e0bcad8b8ffc1ae971d5->enter($__internal_3a38a2198b6c0a8a63b207fc233d7ca770e951301a66e0bcad8b8ffc1ae971d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 10
        echo "        ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
    ";
        
        $__internal_3a38a2198b6c0a8a63b207fc233d7ca770e951301a66e0bcad8b8ffc1ae971d5->leave($__internal_3a38a2198b6c0a8a63b207fc233d7ca770e951301a66e0bcad8b8ffc1ae971d5_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_875328d314dfe6fbea8ad2ca3568135279b22fef3466d889f1e6dd62efa1c953 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_875328d314dfe6fbea8ad2ca3568135279b22fef3466d889f1e6dd62efa1c953->enter($__internal_875328d314dfe6fbea8ad2ca3568135279b22fef3466d889f1e6dd62efa1c953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "     <section id=\"team\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12\">
                        <div class=\"section-title\">
                            <strong>Selection du visiteur et du mois</strong>
                                <hr>
                        </div>
                    </div>
                    
                    <div class=\"col-md-24 col-sm-12 wow fadeIn\" data-wow-delay=\"0.9s\">
                        <div class=\"team-wrapper\">
                            
                            ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                                <table class=\"table-centrer\">
                                    ";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["danger"]) ? $context["danger"] : $this->getContext($context, "danger")), "html", null, true);
        echo "
                                    <tr>
                                        <td>
                                            ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mois", array()), 'label', array("label" => "Mois :"));
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mois", array()), 'widget');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visiteurs", array()), 'label', array("label" => "Visiteur: "));
        echo "
                                        </td>
                                        <td>
                                            ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "visiteurs", array()), 'widget');
        echo "
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valider", array()), 'widget');
        echo "
                                        </td>
                                        <td>
                                            <input type=\"button\" value=\"Retour\" onclick=\"history.go(-1)\">
                                        </td>
                                    </tr>
                                </table>
                            ";
        // line 55
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    ";
        
        $__internal_875328d314dfe6fbea8ad2ca3568135279b22fef3466d889f1e6dd62efa1c953->leave($__internal_875328d314dfe6fbea8ad2ca3568135279b22fef3466d889f1e6dd62efa1c953_prof);

    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        $__internal_964daa1af3fecd980fe0d915e25220783677f5f9c925ad1e3e910434add3e317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964daa1af3fecd980fe0d915e25220783677f5f9c925ad1e3e910434add3e317->enter($__internal_964daa1af3fecd980fe0d915e25220783677f5f9c925ad1e3e910434add3e317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 65
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
        
        $__internal_964daa1af3fecd980fe0d915e25220783677f5f9c925ad1e3e910434add3e317->leave($__internal_964daa1af3fecd980fe0d915e25220783677f5f9c925ad1e3e910434add3e317_prof);

    }

    public function getTemplateName()
    {
        return "mttlgsbBundle:Default:validerFicheFrais1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 65,  168 => 64,  153 => 55,  143 => 48,  135 => 43,  129 => 40,  121 => 35,  115 => 32,  109 => 29,  104 => 27,  89 => 14,  83 => 13,  73 => 10,  67 => 9,  49 => 6,  44 => 5,  38 => 4,  11 => 2,);
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
     <section id=\"team\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12\">
                        <div class=\"section-title\">
                            <strong>Selection du visiteur et du mois</strong>
                                <hr>
                        </div>
                    </div>
                    
                    <div class=\"col-md-24 col-sm-12 wow fadeIn\" data-wow-delay=\"0.9s\">
                        <div class=\"team-wrapper\">
                            
                            {{form_start(form)}}
                                <table class=\"table-centrer\">
                                    {{danger}}
                                    <tr>
                                        <td>
                                            {{form_label(form.mois,\"Mois :\")}}
                                        </td>
                                        <td>
                                            {{form_widget(form.mois)}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            {{form_label(form.visiteurs,\"Visiteur: \")}}
                                        </td>
                                        <td>
                                            {{form_widget(form.visiteurs)}}
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
    {% endblock %}";
    }
}
