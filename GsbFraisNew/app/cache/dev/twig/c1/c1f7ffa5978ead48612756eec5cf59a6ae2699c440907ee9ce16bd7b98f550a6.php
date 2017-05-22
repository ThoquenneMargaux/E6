<?php

/* mttlgsbBundle:Default:base_Visiteur.html.twig */
class __TwigTemplate_b50df3d626ea2768db768ca943ddb3cd1239f6b471e11ab0019bde56fbe6212f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'titre' => array($this, 'block_titre'),
            'entete' => array($this, 'block_entete'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0df4b01b9a5e9a88b95fd2313e43dbb80f5f4128a9222d51010d48edd00d4d7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df4b01b9a5e9a88b95fd2313e43dbb80f5f4128a9222d51010d48edd00d4d7f->enter($__internal_0df4b01b9a5e9a88b95fd2313e43dbb80f5f4128a9222d51010d48edd00d4d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mttlgsbBundle:Default:base_Visiteur.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 38
        echo "</head>
<body data-spy=\"scroll\" data-target=\".navbar-collapse\" data-offset=\"50\">
    <div id=\"entete\">
        <div class=\"preloader\">
            <div class=\"sk-spinner sk-spinner-circle\">
           <div class=\"sk-circle1 sk-circle\"></div>
           <div class=\"sk-circle2 sk-circle\"></div>
           <div class=\"sk-circle3 sk-circle\"></div>
           <div class=\"sk-circle4 sk-circle\"></div>
           <div class=\"sk-circle5 sk-circle\"></div>
           <div class=\"sk-circle6 sk-circle\"></div>
           <div class=\"sk-circle7 sk-circle\"></div>
           <div class=\"sk-circle8 sk-circle\"></div>
           <div class=\"sk-circle9 sk-circle\"></div>
           <div class=\"sk-circle10 sk-circle\"></div>
           <div class=\"sk-circle11 sk-circle\"></div>
           <div class=\"sk-circle12 sk-circle\"></div>
        </div>
    </div>
        ";
        // line 57
        $this->displayBlock('entete', $context, $blocks);
        // line 81
        echo "
        ";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "        
        ";
        // line 85
        $this->displayBlock('footer', $context, $blocks);
        // line 115
        echo "    </div>
</body>
</html>";
        
        $__internal_0df4b01b9a5e9a88b95fd2313e43dbb80f5f4128a9222d51010d48edd00d4d7f->leave($__internal_0df4b01b9a5e9a88b95fd2313e43dbb80f5f4128a9222d51010d48edd00d4d7f_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_76d215a2e5c27523a91a297603d6335c9b049ab5982ee627edf86bc0d2cafdd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d215a2e5c27523a91a297603d6335c9b049ab5982ee627edf86bc0d2cafdd0->enter($__internal_76d215a2e5c27523a91a297603d6335c9b049ab5982ee627edf86bc0d2cafdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        echo "    
\t<meta charset=\"utf-8\">
\t";
        // line 7
        $this->displayBlock('titre', $context, $blocks);
        // line 8
        echo "
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"keywords\" content=\"\">
\t<meta name=\"description\" content=\"\">

        
           <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mttlgsb/css/bootstrap.min.css"), "html", null, true);
        echo "\" type='text/css'>
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mttlgsb/css/font-awesome.min.css"), "html", null, true);
        echo "\" type='text/css'>
            <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mttlgsb/css/animate.min.css"), "html", null, true);
        echo "\" type='text/css'>
            
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mttlgsb/css/et-line-font.css"), "html", null, true);
        echo "\" type='text/css'>
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mttlgsb/css/nivo-lightbox.css"), "html", null, true);
        echo "\" type='text/css'>
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mttlgsb/css/nivo_themes/default/default.css"), "html", null, true);
        echo "\" type='text/css'>
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mttlgsb/css/style.css"), "html", null, true);
        echo "\" type='text/css'>
            <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,700'  type='text/css'>
        

        
            <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mttlgsb/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mttlgsb/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mttlgsb/js/smoothscroll.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mttlgsb/js/isotope.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mttlgsb/js/imagesloaded.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mttlgsb/js/nivo-lightbox.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mttlgsb/js/jquery.backstretch.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mttlgsb/js/wow.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mttlgsb/js/custom.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/mttlgsb/js/customMargauxTristan.js"), "html", null, true);
        echo "\"></script>
\t";
        
        $__internal_76d215a2e5c27523a91a297603d6335c9b049ab5982ee627edf86bc0d2cafdd0->leave($__internal_76d215a2e5c27523a91a297603d6335c9b049ab5982ee627edf86bc0d2cafdd0_prof);

    }

    // line 7
    public function block_titre($context, array $blocks = array())
    {
        $__internal_252102db5d95d2244fec81d50c5c88767b94aa8831fa20e242e789555e235e41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_252102db5d95d2244fec81d50c5c88767b94aa8831fa20e242e789555e235e41->enter($__internal_252102db5d95d2244fec81d50c5c88767b94aa8831fa20e242e789555e235e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo " <title>GSB - Page d'Accueil</title> ";
        
        $__internal_252102db5d95d2244fec81d50c5c88767b94aa8831fa20e242e789555e235e41->leave($__internal_252102db5d95d2244fec81d50c5c88767b94aa8831fa20e242e789555e235e41_prof);

    }

    // line 57
    public function block_entete($context, array $blocks = array())
    {
        $__internal_69b0c8e339c4a783e31f35cc43b0beec021e422518c7d006a4c63f96574d967d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b0c8e339c4a783e31f35cc43b0beec021e422518c7d006a4c63f96574d967d->enter($__internal_69b0c8e339c4a783e31f35cc43b0beec021e422518c7d006a4c63f96574d967d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 58
        echo "            <section class=\"navbar navbar-default navbar-fixed-top sticky-navigation\" role=\"navigation\">
                <div class=\"container\">
                        <div class=\"navbar-header\">
                                <button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                                        <span class=\"icon icon-bar\"></span>
                                        <span class=\"icon icon-bar\"></span>
                                        <span class=\"icon icon-bar\"></span>
                                </button>
                                <a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mttlgsb_AVisiteur");
        echo "\" class=\"navbar-brand\">GSB</a>
                        </div>
                        <div class=\"collapse navbar-collapse\">
                                <ul class=\"nav navbar-nav navbar-right main-navigation\">
                                        <li><a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mttlgsb_AVisiteur");
        echo "\"  class=\"smoothScroll\">Accueil</a></li>
                                        <li><a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mttlgsb_Vrenseigner");
        echo "\" class=\"smoothScroll\">renseigner frais forfait</a></li>
                                        <li><a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mttlgsb_VrenseignerHF");
        echo "\" class=\"smoothScroll\">renseigner frais Hors forfait</a></li>
                                        <li><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mttlgsb_Vconsulter");
        echo "\" class=\"smoothScroll\">Consulter mes fiches de frais</a></li>
                                        <li><a href=\"";
        // line 74
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mttlgsb_deconnexion");
        echo "\"  class=\"smoothScroll\">Déconnexion</a></li>
                                </ul>
                        </div>
                </div>
            </section>
                                    
        ";
        
        $__internal_69b0c8e339c4a783e31f35cc43b0beec021e422518c7d006a4c63f96574d967d->leave($__internal_69b0c8e339c4a783e31f35cc43b0beec021e422518c7d006a4c63f96574d967d_prof);

    }

    // line 82
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ab20d0d0549839e84581b3eac4d215aa54314bf8569e7a7e2841e87f1a2e9e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab20d0d0549839e84581b3eac4d215aa54314bf8569e7a7e2841e87f1a2e9e3->enter($__internal_2ab20d0d0549839e84581b3eac4d215aa54314bf8569e7a7e2841e87f1a2e9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 83
        echo "        ";
        
        $__internal_2ab20d0d0549839e84581b3eac4d215aa54314bf8569e7a7e2841e87f1a2e9e3->leave($__internal_2ab20d0d0549839e84581b3eac4d215aa54314bf8569e7a7e2841e87f1a2e9e3_prof);

    }

    // line 85
    public function block_footer($context, array $blocks = array())
    {
        $__internal_0d3dcea3c20fe38ef59248a33a0b7ecfa9a3b2ede796225035f0345329a10db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d3dcea3c20fe38ef59248a33a0b7ecfa9a3b2ede796225035f0345329a10db3->enter($__internal_0d3dcea3c20fe38ef59248a33a0b7ecfa9a3b2ede796225035f0345329a10db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 86
        echo "            <footer>
                <div class=\"container\">
                        <div class=\"row\">

                                <div class=\"col-md-8 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                                        <h2>GSB</h2>
                                        <p>Copyright &copy; 2016 Margaux Thoquenne - Tristan Lemire 

                        | Design: <a rel=\"nofollow\" href=\"http://www.tooplate.com\" target=\"_parent\">Tooplate</a></p>
                                </div>
                                <div class=\"col-md-2 col-sm-2 wow fadeInUp\" data-wow-delay=\"0.9s\">
                                        <h2>Reseaux:</h2>
                                        <ul class=\"social-icon\">
                                                <li><a href=\"#\" class=\"fa fa-facebook wow fadeIn\" data-wow-delay=\"0.3s\"></a></li>
                                                <li><a href=\"#\" class=\"fa fa-twitter wow fadeIn\" data-wow-delay=\"0.6s\"></a></li>
                                        </ul>
                                <div>

                        </div>
                </div>

                <div class=\"col-md-12 col-sm-12\">
                        <div class=\"copyright-text wow bounceIn\">

                        </div>
                </div>

            </footer>
        ";
        
        $__internal_0d3dcea3c20fe38ef59248a33a0b7ecfa9a3b2ede796225035f0345329a10db3->leave($__internal_0d3dcea3c20fe38ef59248a33a0b7ecfa9a3b2ede796225035f0345329a10db3_prof);

    }

    public function getTemplateName()
    {
        return "mttlgsbBundle:Default:base_Visiteur.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  258 => 86,  252 => 85,  245 => 83,  239 => 82,  225 => 74,  221 => 73,  217 => 72,  213 => 71,  209 => 70,  202 => 66,  192 => 58,  186 => 57,  174 => 7,  165 => 36,  161 => 35,  157 => 34,  153 => 33,  149 => 32,  145 => 31,  141 => 30,  137 => 29,  133 => 28,  129 => 27,  121 => 22,  117 => 21,  113 => 20,  109 => 19,  104 => 17,  100 => 16,  96 => 15,  87 => 8,  85 => 7,  76 => 5,  67 => 115,  65 => 85,  62 => 84,  60 => 82,  57 => 81,  55 => 57,  34 => 38,  32 => 5,  27 => 2,);
    }

    public function getSource()
    {
        return "{# empty Twig template #}
<!DOCTYPE html>
<html lang=\"en\">
<head>
    {% block head %}    
\t<meta charset=\"utf-8\">
\t{% block titre %} <title>GSB - Page d'Accueil</title> {% endblock %}

\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=Edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"keywords\" content=\"\">
\t<meta name=\"description\" content=\"\">

        
           <link rel=\"stylesheet\" href=\"{{ asset('bundles/mttlgsb/css/bootstrap.min.css')}}\" type='text/css'>
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/mttlgsb/css/font-awesome.min.css')}}\" type='text/css'>
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/mttlgsb/css/animate.min.css')}}\" type='text/css'>
            
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/mttlgsb/css/et-line-font.css')}}\" type='text/css'>
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/mttlgsb/css/nivo-lightbox.css')}}\" type='text/css'>
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/mttlgsb/css/nivo_themes/default/default.css')}}\" type='text/css'>
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/mttlgsb/css/style.css')}}\" type='text/css'>
            <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,700'  type='text/css'>
        

        
            <script src=\"{{ asset('bundles/mttlgsb/js/jquery.js')}}\"></script>
            <script src=\"{{ asset('bundles/mttlgsb/js/bootstrap.min.js')}}\"></script>
            <script src=\"{{ asset('bundles/mttlgsb/js/smoothscroll.js')}}\"></script>
            <script src=\"{{ asset('bundles/mttlgsb/js/isotope.js')}}\"></script>
            <script src=\"{{ asset('bundles/mttlgsb/js/imagesloaded.min.js')}}\"></script>
            <script src=\"{{ asset('bundles/mttlgsb/js/nivo-lightbox.min.js')}}\"></script>
            <script src=\"{{ asset('bundles/mttlgsb/js/jquery.backstretch.min.js')}}\"></script>
            <script src=\"{{ asset('bundles/mttlgsb/js/wow.min.js')}}\"></script>
            <script src=\"{{ asset('bundles/mttlgsb/js/custom.js')}}\"></script>
            <script src=\"{{ asset('bundles/mttlgsb/js/customMargauxTristan.js')}}\"></script>
\t{% endblock %}
</head>
<body data-spy=\"scroll\" data-target=\".navbar-collapse\" data-offset=\"50\">
    <div id=\"entete\">
        <div class=\"preloader\">
            <div class=\"sk-spinner sk-spinner-circle\">
           <div class=\"sk-circle1 sk-circle\"></div>
           <div class=\"sk-circle2 sk-circle\"></div>
           <div class=\"sk-circle3 sk-circle\"></div>
           <div class=\"sk-circle4 sk-circle\"></div>
           <div class=\"sk-circle5 sk-circle\"></div>
           <div class=\"sk-circle6 sk-circle\"></div>
           <div class=\"sk-circle7 sk-circle\"></div>
           <div class=\"sk-circle8 sk-circle\"></div>
           <div class=\"sk-circle9 sk-circle\"></div>
           <div class=\"sk-circle10 sk-circle\"></div>
           <div class=\"sk-circle11 sk-circle\"></div>
           <div class=\"sk-circle12 sk-circle\"></div>
        </div>
    </div>
        {% block entete %}
            <section class=\"navbar navbar-default navbar-fixed-top sticky-navigation\" role=\"navigation\">
                <div class=\"container\">
                        <div class=\"navbar-header\">
                                <button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                                        <span class=\"icon icon-bar\"></span>
                                        <span class=\"icon icon-bar\"></span>
                                        <span class=\"icon icon-bar\"></span>
                                </button>
                                <a href=\"{{ path('mttlgsb_AVisiteur') }}\" class=\"navbar-brand\">GSB</a>
                        </div>
                        <div class=\"collapse navbar-collapse\">
                                <ul class=\"nav navbar-nav navbar-right main-navigation\">
                                        <li><a href=\"{{ path('mttlgsb_AVisiteur') }}\"  class=\"smoothScroll\">Accueil</a></li>
                                        <li><a href=\"{{ path('mttlgsb_Vrenseigner') }}\" class=\"smoothScroll\">renseigner frais forfait</a></li>
                                        <li><a href=\"{{ path('mttlgsb_VrenseignerHF') }}\" class=\"smoothScroll\">renseigner frais Hors forfait</a></li>
                                        <li><a href=\"{{ path('mttlgsb_Vconsulter') }}\" class=\"smoothScroll\">Consulter mes fiches de frais</a></li>
                                        <li><a href=\"{{ path('mttlgsb_deconnexion') }}\"  class=\"smoothScroll\">Déconnexion</a></li>
                                </ul>
                        </div>
                </div>
            </section>
                                    
        {% endblock %}

        {% block body %}
        {%endblock%}
        
        {% block footer %}
            <footer>
                <div class=\"container\">
                        <div class=\"row\">

                                <div class=\"col-md-8 col-sm-6 wow fadeInUp\" data-wow-delay=\"0.3s\">
                                        <h2>GSB</h2>
                                        <p>Copyright &copy; 2016 Margaux Thoquenne - Tristan Lemire 

                        | Design: <a rel=\"nofollow\" href=\"http://www.tooplate.com\" target=\"_parent\">Tooplate</a></p>
                                </div>
                                <div class=\"col-md-2 col-sm-2 wow fadeInUp\" data-wow-delay=\"0.9s\">
                                        <h2>Reseaux:</h2>
                                        <ul class=\"social-icon\">
                                                <li><a href=\"#\" class=\"fa fa-facebook wow fadeIn\" data-wow-delay=\"0.3s\"></a></li>
                                                <li><a href=\"#\" class=\"fa fa-twitter wow fadeIn\" data-wow-delay=\"0.6s\"></a></li>
                                        </ul>
                                <div>

                        </div>
                </div>

                <div class=\"col-md-12 col-sm-12\">
                        <div class=\"copyright-text wow bounceIn\">

                        </div>
                </div>

            </footer>
        {%endblock%}
    </div>
</body>
</html>";
    }
}
