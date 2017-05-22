<?php

/* mttlgsbBundle:Default:cDescriptifFiche.html.twig */
class __TwigTemplate_c51bf29f8c926a255c7338682d6403f012212b7fe052d12139712b94e16fca18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mttlgsbBundle:Default:base_Comptable.html.twig", "mttlgsbBundle:Default:cDescriptifFiche.html.twig", 1);
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
        $__internal_7022742cd78823029d160eec4e1e86c22dd38387bd0335bf90b01f570a183754 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7022742cd78823029d160eec4e1e86c22dd38387bd0335bf90b01f570a183754->enter($__internal_7022742cd78823029d160eec4e1e86c22dd38387bd0335bf90b01f570a183754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mttlgsbBundle:Default:cDescriptifFiche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7022742cd78823029d160eec4e1e86c22dd38387bd0335bf90b01f570a183754->leave($__internal_7022742cd78823029d160eec4e1e86c22dd38387bd0335bf90b01f570a183754_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9eb6bbb481ed80106f6c92df0f708391ec6376f841e6ac2cdf283644096fc649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb6bbb481ed80106f6c92df0f708391ec6376f841e6ac2cdf283644096fc649->enter($__internal_9eb6bbb481ed80106f6c92df0f708391ec6376f841e6ac2cdf283644096fc649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
    ";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        
        $__internal_9eb6bbb481ed80106f6c92df0f708391ec6376f841e6ac2cdf283644096fc649->leave($__internal_9eb6bbb481ed80106f6c92df0f708391ec6376f841e6ac2cdf283644096fc649_prof);

    }

    public function block_titre($context, array $blocks = array())
    {
        $__internal_75591668c584a4b4cb69e0badddc78cfbac781de6a0ea130056e8e7ce90f6563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75591668c584a4b4cb69e0badddc78cfbac781de6a0ea130056e8e7ce90f6563->enter($__internal_75591668c584a4b4cb69e0badddc78cfbac781de6a0ea130056e8e7ce90f6563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo " <title>GSB - Page Renseigner fiche de frais</title> ";
        
        $__internal_75591668c584a4b4cb69e0badddc78cfbac781de6a0ea130056e8e7ce90f6563->leave($__internal_75591668c584a4b4cb69e0badddc78cfbac781de6a0ea130056e8e7ce90f6563_prof);

    }

    // line 8
    public function block_entete($context, array $blocks = array())
    {
        $__internal_b4842c3e6950cd199dd1eb8fdee9e7456a7bca81902c0e48f2b9aa9ca6759be9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4842c3e6950cd199dd1eb8fdee9e7456a7bca81902c0e48f2b9aa9ca6759be9->enter($__internal_b4842c3e6950cd199dd1eb8fdee9e7456a7bca81902c0e48f2b9aa9ca6759be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 9
        echo "        ";
        $this->displayParentBlock("entete", $context, $blocks);
        echo "
    ";
        
        $__internal_b4842c3e6950cd199dd1eb8fdee9e7456a7bca81902c0e48f2b9aa9ca6759be9->leave($__internal_b4842c3e6950cd199dd1eb8fdee9e7456a7bca81902c0e48f2b9aa9ca6759be9_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_24a0fb5525eea6cc063e2855d9c3b7e2c648c573fe5519b512ebad484f00b4fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a0fb5525eea6cc063e2855d9c3b7e2c648c573fe5519b512ebad484f00b4fe->enter($__internal_24a0fb5525eea6cc063e2855d9c3b7e2c648c573fe5519b512ebad484f00b4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "     <section id=\"team\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12 col-sm-12\">
                        <div class=\"section-title\">
                            <strong>Suivis des fiche de frais </strong>
                                <hr>
                        </div>
                    </div>
                    
                    <div class=\"col-md-24 col-sm-12 wow fadeIn\" data-wow-delay=\"0.9s\">
                        <div class=\"team-wrapper\">
                          
                              
                              
                            <input type=\"button\" value=\"Retour\" onclick=\"history.go(-1)\">
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <table class='table table-bordered'>
            <thead >
               <tr>
                   
                    <td class=\"info\">
                       Visiteur
                    </td>
                    <td class=\"info\">
                        Date de Modification
                    </td>
                    <td class=\"info\">
                        Date de création
                    </td>
                    <td class=\"info\">
                         nombre de justificatifs
                    </td>
                   <td class=\"info\">
                         montant
                    </td>
                    <td class=\"info\">
                        
                    </td>
                   
               </tr>
            </thead>
            <tbody>
               
                <tr>
                    
                     <td>
                          ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "idvisiteur", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "idvisiteur", array()), "prenom", array()), "html", null, true);
        echo "      
                     </td>
                            
                     <td>
                         ";
        // line 70
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "mois", array()), "d-m-Y"), "html", null, true);
        echo "
                     </td>
                     <td>
                        ";
        // line 73
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "dateModif", array()), "d-m-Y"), "html", null, true);
        echo "
                     </td>
                     <td>
                        ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "nbjustificatifs", array()), "html", null, true);
        echo "
                     </td>
                     <td>
                         ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "montantvalide", array()), "html", null, true);
        echo "
                     </td>
                      <td>
                        <a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mttlgsb_cValiderFiche", array("idfichefrais" => $this->getAttribute((isset($context["fiche"]) ? $context["fiche"] : $this->getContext($context, "fiche")), "idfichefrais", array()))), "html", null, true);
        echo "\">Validation de la fiche</a> 
                     </td>
                
                </tr>
               
            </tbody>
           
            </table>
                     
                
                   <center>Frais forfaitisé :</center>
                    <br/>
            <table class='table  table-bordered'>
                <thead>
                    </tr>
                        <td class=\"info\">
                           Quantité
                        </td>
                        <td class=\"info\">
                           Montant
                        </td>
                        <td class=\"info\">
                          Libelle
                        </td>
                     
                    </tr>
                </thead>
                <tbody>
                    
                    
                     ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lignes"]) ? $context["lignes"] : $this->getContext($context, "lignes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 113
            echo "                          ";
            if (($this->getAttribute($this->getAttribute($context["ligne"], "idfraisforfait", array()), "idfraisforfait", array()) == "KM")) {
                // line 114
                echo "                              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")));
                foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                    // line 115
                    echo "                                  ";
                    if (($this->getAttribute($context["type"], "idfraisforfait", array()) == "KM")) {
                        // line 116
                        echo "                                  <tr>
                                     <td>
                                         ";
                        // line 118
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "quantite", array()), "html", null, true);
                        echo "
                                     </td>
                                     <td>
                                         ";
                        // line 121
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["ligne"], "quantite", array()) * $this->getAttribute($context["type"], "montant", array())), "html", null, true);
                        echo "
                                     </td>
                                     <td>
                                        ";
                        // line 124
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligne"], "idfraisforfait", array()), "libelle", array()), "html", null, true);
                        echo "
                                     </td>
                                  </tr>
                                  ";
                    }
                    // line 128
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                echo "                          ";
            }
            // line 130
            echo "                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "                     
                      ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lignes"]) ? $context["lignes"] : $this->getContext($context, "lignes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 133
            echo "                          ";
            if (($this->getAttribute($this->getAttribute($context["ligne"], "idfraisforfait", array()), "idfraisforfait", array()) == "REP")) {
                // line 134
                echo "                              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")));
                foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                    // line 135
                    echo "                                  ";
                    if (($this->getAttribute($context["type"], "idfraisforfait", array()) == "REP")) {
                        // line 136
                        echo "                                      <tr>
                                     <td>
                                         ";
                        // line 138
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "quantite", array()), "html", null, true);
                        echo "
                                     </td>
                                     <td>
                                         ";
                        // line 141
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["ligne"], "quantite", array()) * $this->getAttribute($context["type"], "montant", array())), "html", null, true);
                        echo "
                                     </td>
                                     <td>
                                         ";
                        // line 144
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligne"], "idfraisforfait", array()), "libelle", array()), "html", null, true);
                        echo "
                                     </td>
                                      </tr>
                                  ";
                    }
                    // line 148
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 149
                echo "                          ";
            }
            // line 150
            echo "                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "                     ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lignes"]) ? $context["lignes"] : $this->getContext($context, "lignes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 152
            echo "                          ";
            if (($this->getAttribute($this->getAttribute($context["ligne"], "idfraisforfait", array()), "idfraisforfait", array()) == "NUI")) {
                // line 153
                echo "                              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")));
                foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                    // line 154
                    echo "                                  ";
                    if (($this->getAttribute($context["type"], "idfraisforfait", array()) == "NUI")) {
                        // line 155
                        echo "                                      <tr>
                                     <td>
                                         ";
                        // line 157
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "quantite", array()), "html", null, true);
                        echo "
                                     </td>
                                     <td>
                                         ";
                        // line 160
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["ligne"], "quantite", array()) * $this->getAttribute($context["type"], "montant", array())), "html", null, true);
                        echo "
                                     </td>
                                     <td>
                                         ";
                        // line 163
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligne"], "idfraisforfait", array()), "libelle", array()), "html", null, true);
                        echo "
                                     </td>
                                      </tr>
                                  ";
                    }
                    // line 167
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 168
                echo "                          ";
            }
            // line 169
            echo "                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lignes"]) ? $context["lignes"] : $this->getContext($context, "lignes")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 171
            echo "                          ";
            if (($this->getAttribute($this->getAttribute($context["ligne"], "idfraisforfait", array()), "idfraisforfait", array()) == "ETP")) {
                // line 172
                echo "                              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : $this->getContext($context, "types")));
                foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                    // line 173
                    echo "                                  ";
                    if (($this->getAttribute($context["type"], "idfraisforfait", array()) == "ETP")) {
                        // line 174
                        echo "                                      <tr>
                                     <td>
                                         ";
                        // line 176
                        echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "quantite", array()), "html", null, true);
                        echo "
                                     </td>
                                     <td>
                                         ";
                        // line 179
                        echo twig_escape_filter($this->env, ($this->getAttribute($context["ligne"], "quantite", array()) * $this->getAttribute($context["type"], "montant", array())), "html", null, true);
                        echo "
                                     </td>
                                      <td>
                                         ";
                        // line 182
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ligne"], "idfraisforfait", array()), "libelle", array()), "html", null, true);
                        echo "
                                     </td>
                                      </tr>
                                  ";
                    }
                    // line 186
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 187
                echo "                          ";
            }
            // line 188
            echo "                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "                </tbody> 
        </table>
                     <br/>
        <center>Frais non forfaitisé :</center>
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
        // line 209
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["hf"]) ? $context["hf"] : $this->getContext($context, "hf")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 210
            echo "                     <tr>
                            <td>
                                 ";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "libelle", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                ";
            // line 215
            echo twig_escape_filter($this->env, $this->getAttribute($context["ligne"], "montant", array()), "html", null, true);
            echo "
                            </td>
                            <td>
                                 ";
            // line 218
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ligne"], "dateDepense", array()), "d-m-Y"), "html", null, true);
            echo "
                            </td>
                     </tr>
                     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "                 </tbody>
        </table>
        
            
        
    ";
        
        $__internal_24a0fb5525eea6cc063e2855d9c3b7e2c648c573fe5519b512ebad484f00b4fe->leave($__internal_24a0fb5525eea6cc063e2855d9c3b7e2c648c573fe5519b512ebad484f00b4fe_prof);

    }

    // line 229
    public function block_footer($context, array $blocks = array())
    {
        $__internal_05b6621e56a5c4a830d8d6d0f93c52ca4fe1f78000c57cc558cf4d0a105c7507 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b6621e56a5c4a830d8d6d0f93c52ca4fe1f78000c57cc558cf4d0a105c7507->enter($__internal_05b6621e56a5c4a830d8d6d0f93c52ca4fe1f78000c57cc558cf4d0a105c7507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 230
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
    ";
        
        $__internal_05b6621e56a5c4a830d8d6d0f93c52ca4fe1f78000c57cc558cf4d0a105c7507->leave($__internal_05b6621e56a5c4a830d8d6d0f93c52ca4fe1f78000c57cc558cf4d0a105c7507_prof);

    }

    public function getTemplateName()
    {
        return "mttlgsbBundle:Default:cDescriptifFiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 230,  491 => 229,  479 => 222,  469 => 218,  463 => 215,  457 => 212,  453 => 210,  449 => 209,  427 => 189,  421 => 188,  418 => 187,  412 => 186,  405 => 182,  399 => 179,  393 => 176,  389 => 174,  386 => 173,  381 => 172,  378 => 171,  373 => 170,  367 => 169,  364 => 168,  358 => 167,  351 => 163,  345 => 160,  339 => 157,  335 => 155,  332 => 154,  327 => 153,  324 => 152,  319 => 151,  313 => 150,  310 => 149,  304 => 148,  297 => 144,  291 => 141,  285 => 138,  281 => 136,  278 => 135,  273 => 134,  270 => 133,  266 => 132,  263 => 131,  257 => 130,  254 => 129,  248 => 128,  241 => 124,  235 => 121,  229 => 118,  225 => 116,  222 => 115,  217 => 114,  214 => 113,  210 => 112,  177 => 82,  171 => 79,  165 => 76,  159 => 73,  153 => 70,  144 => 66,  89 => 13,  83 => 12,  73 => 9,  67 => 8,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"mttlgsbBundle:Default:base_Comptable.html.twig\" %}

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
                            <strong>Suivis des fiche de frais </strong>
                                <hr>
                        </div>
                    </div>
                    
                    <div class=\"col-md-24 col-sm-12 wow fadeIn\" data-wow-delay=\"0.9s\">
                        <div class=\"team-wrapper\">
                          
                              
                              
                            <input type=\"button\" value=\"Retour\" onclick=\"history.go(-1)\">
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <table class='table table-bordered'>
            <thead >
               <tr>
                   
                    <td class=\"info\">
                       Visiteur
                    </td>
                    <td class=\"info\">
                        Date de Modification
                    </td>
                    <td class=\"info\">
                        Date de création
                    </td>
                    <td class=\"info\">
                         nombre de justificatifs
                    </td>
                   <td class=\"info\">
                         montant
                    </td>
                    <td class=\"info\">
                        
                    </td>
                   
               </tr>
            </thead>
            <tbody>
               
                <tr>
                    
                     <td>
                          {{fiche.idvisiteur.nom}} {{fiche.idvisiteur.prenom}}      
                     </td>
                            
                     <td>
                         {{fiche.mois|date('d-m-Y') }}
                     </td>
                     <td>
                        {{fiche.dateModif|date('d-m-Y') }}
                     </td>
                     <td>
                        {{fiche.nbjustificatifs}}
                     </td>
                     <td>
                         {{fiche.montantvalide}}
                     </td>
                      <td>
                        <a href=\"{{ path('mttlgsb_cValiderFiche',{\"idfichefrais\":fiche.idfichefrais})}}\">Validation de la fiche</a> 
                     </td>
                
                </tr>
               
            </tbody>
           
            </table>
                     
                
                   <center>Frais forfaitisé :</center>
                    <br/>
            <table class='table  table-bordered'>
                <thead>
                    </tr>
                        <td class=\"info\">
                           Quantité
                        </td>
                        <td class=\"info\">
                           Montant
                        </td>
                        <td class=\"info\">
                          Libelle
                        </td>
                     
                    </tr>
                </thead>
                <tbody>
                    
                    
                     {%for ligne in lignes %}
                          {%if ligne.idfraisforfait.idfraisforfait == 'KM' %}
                              {% for type in types%}
                                  {%if type.idfraisforfait =='KM'%}
                                  <tr>
                                     <td>
                                         {{ligne.quantite}}
                                     </td>
                                     <td>
                                         {{ligne.quantite * type.montant}}
                                     </td>
                                     <td>
                                        {{ligne.idfraisforfait.libelle}}
                                     </td>
                                  </tr>
                                  {%endif%}
                            {%endfor%}
                          {%endif%}
                     {%endfor%}
                     
                      {%for ligne in lignes %}
                          {%if ligne.idfraisforfait.idfraisforfait == 'REP' %}
                              {% for type in types%}
                                  {%if type.idfraisforfait =='REP'%}
                                      <tr>
                                     <td>
                                         {{ligne.quantite}}
                                     </td>
                                     <td>
                                         {{ligne.quantite * type.montant}}
                                     </td>
                                     <td>
                                         {{ligne.idfraisforfait.libelle}}
                                     </td>
                                      </tr>
                                  {%endif%}
                            {%endfor%}
                          {%endif%}
                     {%endfor%}
                     {%for ligne in lignes %}
                          {%if ligne.idfraisforfait.idfraisforfait == 'NUI' %}
                              {% for type in types%}
                                  {%if type.idfraisforfait =='NUI'%}
                                      <tr>
                                     <td>
                                         {{ligne.quantite}}
                                     </td>
                                     <td>
                                         {{ligne.quantite * type.montant}}
                                     </td>
                                     <td>
                                         {{ligne.idfraisforfait.libelle}}
                                     </td>
                                      </tr>
                                  {%endif%}
                            {%endfor%}
                          {%endif%}
                     {%endfor%}
                      {%for ligne in lignes %}
                          {%if ligne.idfraisforfait.idfraisforfait == 'ETP' %}
                              {% for type in types%}
                                  {%if type.idfraisforfait =='ETP'%}
                                      <tr>
                                     <td>
                                         {{ligne.quantite}}
                                     </td>
                                     <td>
                                         {{ligne.quantite * type.montant}}
                                     </td>
                                      <td>
                                         {{ligne.idfraisforfait.libelle}}
                                     </td>
                                      </tr>
                                  {%endif%}
                            {%endfor%}
                          {%endif%}
                     {%endfor%}
                </tbody> 
        </table>
                     <br/>
        <center>Frais non forfaitisé :</center>
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
    {% endblock %}";
    }
}
