<?php

/* mttlgsbBundle:Default:vAfficherFrais.html.twig */
class __TwigTemplate_fe04f93cc45d53547f7797465926e4ff49f6d12ae3fffc4afbcd73502459ed75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mttlgsbBundle:Default:base_Visiteur.html.twig", "mttlgsbBundle:Default:vAfficherFrais.html.twig", 1);
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
        $__internal_866f6c804cd2fed3b7b16d405db721cb411158ee963e88b9a341079b942857ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866f6c804cd2fed3b7b16d405db721cb411158ee963e88b9a341079b942857ff->enter($__internal_866f6c804cd2fed3b7b16d405db721cb411158ee963e88b9a341079b942857ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mttlgsbBundle:Default:vAfficherFrais.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_866f6c804cd2fed3b7b16d405db721cb411158ee963e88b9a341079b942857ff->leave($__internal_866f6c804cd2fed3b7b16d405db721cb411158ee963e88b9a341079b942857ff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_414af3828694c45e0f3bffa87da3e658d643655d98926e5fa26d1b23c4a3ee41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_414af3828694c45e0f3bffa87da3e658d643655d98926e5fa26d1b23c4a3ee41->enter($__internal_414af3828694c45e0f3bffa87da3e658d643655d98926e5fa26d1b23c4a3ee41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    ";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        
        $__internal_414af3828694c45e0f3bffa87da3e658d643655d98926e5fa26d1b23c4a3ee41->leave($__internal_414af3828694c45e0f3bffa87da3e658d643655d98926e5fa26d1b23c4a3ee41_prof);

    }

    public function block_titre($context, array $blocks = array())
    {
        $__internal_f7391f0090d9fd66d60a2c9c4eb94bacb4f24caadce9ca635ec9b43b780c7a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7391f0090d9fd66d60a2c9c4eb94bacb4f24caadce9ca635ec9b43b780c7a9d->enter($__internal_f7391f0090d9fd66d60a2c9c4eb94bacb4f24caadce9ca635ec9b43b780c7a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo " <title>GSB - Page Afficher fiche de frais</title> ";
        
        $__internal_f7391f0090d9fd66d60a2c9c4eb94bacb4f24caadce9ca635ec9b43b780c7a9d->leave($__internal_f7391f0090d9fd66d60a2c9c4eb94bacb4f24caadce9ca635ec9b43b780c7a9d_prof);

    }

    // line 8
    public function block_entete($context, array $blocks = array())
    {
        $__internal_f7524c343467ff331e6c0d2144c34f6a620376f04e0a3dfa65878b1d67ac71e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7524c343467ff331e6c0d2144c34f6a620376f04e0a3dfa65878b1d67ac71e0->enter($__internal_f7524c343467ff331e6c0d2144c34f6a620376f04e0a3dfa65878b1d67ac71e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 9
        echo "        ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
    ";
        
        $__internal_f7524c343467ff331e6c0d2144c34f6a620376f04e0a3dfa65878b1d67ac71e0->leave($__internal_f7524c343467ff331e6c0d2144c34f6a620376f04e0a3dfa65878b1d67ac71e0_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbe6f42d913441960e333538c65bd08015d42cf0b61d492ce014f199aab83111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbe6f42d913441960e333538c65bd08015d42cf0b61d492ce014f199aab83111->enter($__internal_fbe6f42d913441960e333538c65bd08015d42cf0b61d492ce014f199aab83111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "     <section id=\"team\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12\">
                        <div class=\"section-title\">
                            <strong>Votre fiche Frais</strong>
                                <hr>
                        </div>
                    </div>
                    <div class=\"col-md-24 col-sm-12 wow fadeIn\" data-wow-delay=\"0.9s\">
                        <div class=\"team-wrapper\">
                           
                           
           
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
     <table class='table table-bordered'>
            <thead >
               <tr>
                   
                    <td class=\"info\">
                       Etat
                    </td>
                    <td class=\"info\">
                        Date de Modification
                    </td>
                    <td class=\"info\">
                        Date de création
                    </td>
                   
               </tr>
            </thead>
            <tbody>
                <tr>
                     <td>
                    ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "idEtat", array()), "libelle", array()), "html", null, true);
        echo "
                      </td>
                    <td>
                        
                        ";
        // line 56
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "datemodif", array()), "d-m-Y"), "html", null, true);
        echo "
                    </td>
                   
                    <td>
                        ";
        // line 60
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "mois", array()), "d-m-Y"), "html", null, true);
        echo "
                    </td>
                </tr>
            </tbody>
            </table>
                    <br/>
                    <center>Vos frais forfaitisé :</center>
                    <br/>
            <table class='table  table-bordered'>
                <thead>
                    </tr>
                        <td class=\"info\">
                            quantité
                        </td>
                        <td class=\"info\">
                          libelle
                       </td>
                       <td class=\"info\">
                            quantité
                        </td>
                       <td class=\"info\">
                          Montant Repas Restaurant 
                       </td>
                       <td class=\"info\"> 
                            quantité
                        </td>
                       <td class=\"info\"> 
                          Montant Nuitée Hôtel 
                       </td>
                       <td class=\"info\">
                            quantité
                        </td>
                       <td class=\"info\">
                          Montant Etape
                       </td>
                     
                    </tr>
                </thead>
                <tbody>
                     <tr>
                    
                     ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lignes"]) ? $context["lignes"] : $this->getContext($context, "lignes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 102
            echo "                          ";
            if (($this->getAttribute($this->getAttribute($context["ligne"], "idfraisforfait", array()), "idfraisforfait", array()) == "KM")) {
                // line 103
                echo "                              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")));
                foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                    // line 104
                    echo "                                  ";
                    if (($this->getAttribute($context["type"], "idfraisforfait", array()) == "KM")) {
                        // line 105
                        echo "                                     <td>
                                         ";
                        // line 106
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "quantite", array()), "html", null, true);
                        echo "
                                     </td>
                                     <td>
                                         ";
                        // line 109
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["ligne"], "quantite", array()) * $this->getAttribute($context["type"], "montant", array())), "html", null, true);
                        echo "
                                     </td>
                                  ";
                    }
                    // line 112
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                          ";
            }
            // line 114
            echo "                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                     
                      ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lignes"]) ? $context["lignes"] : $this->getContext($context, "lignes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 117
            echo "                          ";
            if (($this->getAttribute($this->getAttribute($context["ligne"], "idfraisforfait", array()), "idfraisforfait", array()) == "REP")) {
                // line 118
                echo "                              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")));
                foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                    // line 119
                    echo "                                  ";
                    if (($this->getAttribute($context["type"], "idfraisforfait", array()) == "REP")) {
                        // line 120
                        echo "                                     <td>
                                         ";
                        // line 121
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "quantite", array()), "html", null, true);
                        echo "
                                     </td>
                                     <td>
                                         ";
                        // line 124
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["ligne"], "quantite", array()) * $this->getAttribute($context["type"], "montant", array())), "html", null, true);
                        echo "
                                     </td>
                                  ";
                    }
                    // line 127
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 128
                echo "                          ";
            }
            // line 129
            echo "                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                     ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lignes"]) ? $context["lignes"] : $this->getContext($context, "lignes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 131
            echo "                          ";
            if (($this->getAttribute($this->getAttribute($context["ligne"], "idfraisforfait", array()), "idfraisforfait", array()) == "NUI")) {
                // line 132
                echo "                              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")));
                foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                    // line 133
                    echo "                                  ";
                    if (($this->getAttribute($context["type"], "idfraisforfait", array()) == "NUI")) {
                        // line 134
                        echo "                                     <td>
                                         ";
                        // line 135
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "quantite", array()), "html", null, true);
                        echo "
                                     </td>
                                     <td>
                                         ";
                        // line 138
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["ligne"], "quantite", array()) * $this->getAttribute($context["type"], "montant", array())), "html", null, true);
                        echo "
                                     </td>
                                  ";
                    }
                    // line 141
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 142
                echo "                          ";
            }
            // line 143
            echo "                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lignes"]) ? $context["lignes"] : $this->getContext($context, "lignes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 145
            echo "                          ";
            if (($this->getAttribute($this->getAttribute($context["ligne"], "idfraisforfait", array()), "idfraisforfait", array()) == "ETP")) {
                // line 146
                echo "                              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")));
                foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                    // line 147
                    echo "                                  ";
                    if (($this->getAttribute($context["type"], "idfraisforfait", array()) == "ETP")) {
                        // line 148
                        echo "                                     <td>
                                         ";
                        // line 149
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "quantite", array()), "html", null, true);
                        echo "
                                     </td>
                                     <td>
                                         ";
                        // line 152
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["ligne"], "quantite", array()) * $this->getAttribute($context["type"], "montant", array())), "html", null, true);
                        echo "
                                     </td>
                                  ";
                    }
                    // line 155
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                echo "                          ";
            }
            // line 157
            echo "                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                  
                </tr>
                </tbody> 
        </table>
                     <br/>
        <center>Vos frais non forfaitisé :</center>
        <br/>
        <table class='table  table-bordered '>
                <thead>
                    </tr>
                        <td class=\"info\">
                            Libelle
                        </td>
                        <td class=\"info\">
                           Montant 
                       </td>
                       <td class=\"info\">
                           Date de la depense 
                        </td>
                    </tr>
                </thead>
                 <tbody>
                      ";
        // line 180
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hf"]) ? $context["hf"] : $this->getContext($context, "hf")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 181
            echo "                     <tr>
                            <td>
                                 ";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "libelle", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "montant", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                 ";
            // line 189
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ligne"], "dateDepense", array()), "d-m-Y"), "html", null, true);
            echo "
                            </td>
                     </tr>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "                 </tbody>
        </table>
   
    ";
        
        $__internal_fbe6f42d913441960e333538c65bd08015d42cf0b61d492ce014f199aab83111->leave($__internal_fbe6f42d913441960e333538c65bd08015d42cf0b61d492ce014f199aab83111_prof);

    }

    // line 198
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f674169ca99ce10fb57da7d203a659ae44d95371bd94195fed7b0cbd38ea5966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f674169ca99ce10fb57da7d203a659ae44d95371bd94195fed7b0cbd38ea5966->enter($__internal_f674169ca99ce10fb57da7d203a659ae44d95371bd94195fed7b0cbd38ea5966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 199
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
        
        $__internal_f674169ca99ce10fb57da7d203a659ae44d95371bd94195fed7b0cbd38ea5966->leave($__internal_f674169ca99ce10fb57da7d203a659ae44d95371bd94195fed7b0cbd38ea5966_prof);

    }

    public function getTemplateName()
    {
        return "mttlgsbBundle:Default:vAfficherFrais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  443 => 199,  437 => 198,  427 => 193,  417 => 189,  411 => 186,  405 => 183,  401 => 181,  397 => 180,  373 => 158,  367 => 157,  364 => 156,  358 => 155,  352 => 152,  346 => 149,  343 => 148,  340 => 147,  335 => 146,  332 => 145,  327 => 144,  321 => 143,  318 => 142,  312 => 141,  306 => 138,  300 => 135,  297 => 134,  294 => 133,  289 => 132,  286 => 131,  281 => 130,  275 => 129,  272 => 128,  266 => 127,  260 => 124,  254 => 121,  251 => 120,  248 => 119,  243 => 118,  240 => 117,  236 => 116,  233 => 115,  227 => 114,  224 => 113,  218 => 112,  212 => 109,  206 => 106,  203 => 105,  200 => 104,  195 => 103,  192 => 102,  188 => 101,  144 => 60,  137 => 56,  130 => 52,  89 => 13,  83 => 12,  73 => 9,  67 => 8,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"mttlgsbBundle:Default:base_Visiteur.html.twig\" %}

{% block head %}
    {{ parent() }}
    {% block titre %} <title>GSB - Page Afficher fiche de frais</title> {% endblock %}
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
                            <strong>Votre fiche Frais</strong>
                                <hr>
                        </div>
                    </div>
                    <div class=\"col-md-24 col-sm-12 wow fadeIn\" data-wow-delay=\"0.9s\">
                        <div class=\"team-wrapper\">
                           
                           
           
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
     <table class='table table-bordered'>
            <thead >
               <tr>
                   
                    <td class=\"info\">
                       Etat
                    </td>
                    <td class=\"info\">
                        Date de Modification
                    </td>
                    <td class=\"info\">
                        Date de création
                    </td>
                   
               </tr>
            </thead>
            <tbody>
                <tr>
                     <td>
                    {{ fiche.idEtat.libelle }}
                      </td>
                    <td>
                        
                        {{ fiche.datemodif|date('d-m-Y') }}
                    </td>
                   
                    <td>
                        {{fiche.mois|date('d-m-Y') }}
                    </td>
                </tr>
            </tbody>
            </table>
                    <br/>
                    <center>Vos frais forfaitisé :</center>
                    <br/>
            <table class='table  table-bordered'>
                <thead>
                    </tr>
                        <td class=\"info\">
                            quantité
                        </td>
                        <td class=\"info\">
                          libelle
                       </td>
                       <td class=\"info\">
                            quantité
                        </td>
                       <td class=\"info\">
                          Montant Repas Restaurant 
                       </td>
                       <td class=\"info\"> 
                            quantité
                        </td>
                       <td class=\"info\"> 
                          Montant Nuitée Hôtel 
                       </td>
                       <td class=\"info\">
                            quantité
                        </td>
                       <td class=\"info\">
                          Montant Etape
                       </td>
                     
                    </tr>
                </thead>
                <tbody>
                     <tr>
                    
                     {%for ligne in lignes %}
                          {%if ligne.idfraisforfait.idfraisforfait == 'KM' %}
                              {% for type in types%}
                                  {%if type.idfraisforfait =='KM'%}
                                     <td>
                                         {{ligne.quantite}}
                                     </td>
                                     <td>
                                         {{ligne.quantite * type.montant}}
                                     </td>
                                  {%endif%}
                            {%endfor%}
                          {%endif%}
                     {%endfor%}
                     
                      {%for ligne in lignes %}
                          {%if ligne.idfraisforfait.idfraisforfait == 'REP' %}
                              {% for type in types%}
                                  {%if type.idfraisforfait =='REP'%}
                                     <td>
                                         {{ligne.quantite}}
                                     </td>
                                     <td>
                                         {{ligne.quantite * type.montant}}
                                     </td>
                                  {%endif%}
                            {%endfor%}
                          {%endif%}
                     {%endfor%}
                     {%for ligne in lignes %}
                          {%if ligne.idfraisforfait.idfraisforfait == 'NUI' %}
                              {% for type in types%}
                                  {%if type.idfraisforfait =='NUI'%}
                                     <td>
                                         {{ligne.quantite}}
                                     </td>
                                     <td>
                                         {{ligne.quantite * type.montant}}
                                     </td>
                                  {%endif%}
                            {%endfor%}
                          {%endif%}
                     {%endfor%}
                      {%for ligne in lignes %}
                          {%if ligne.idfraisforfait.idfraisforfait == 'ETP' %}
                              {% for type in types%}
                                  {%if type.idfraisforfait =='ETP'%}
                                     <td>
                                         {{ligne.quantite}}
                                     </td>
                                     <td>
                                         {{ligne.quantite * type.montant}}
                                     </td>
                                  {%endif%}
                            {%endfor%}
                          {%endif%}
                     {%endfor%}
                  
                </tr>
                </tbody> 
        </table>
                     <br/>
        <center>Vos frais non forfaitisé :</center>
        <br/>
        <table class='table  table-bordered '>
                <thead>
                    </tr>
                        <td class=\"info\">
                            Libelle
                        </td>
                        <td class=\"info\">
                           Montant 
                       </td>
                       <td class=\"info\">
                           Date de la depense 
                        </td>
                    </tr>
                </thead>
                 <tbody>
                      {%for ligne in hf%}
                     <tr>
                            <td>
                                 {{ligne.libelle}}
                            </td>
                            <td>
                                {{ligne.montant}}
                            </td>
                            <td>
                                 {{ligne.dateDepense |date('d-m-Y') }}
                            </td>
                     </tr>
                     {%endfor%}
                 </tbody>
        </table>
   
    {% endblock %}
    
    {% block footer %}
        {{ parent() }}
    {% endblock %}{# empty Twig template #}";
    }
}
