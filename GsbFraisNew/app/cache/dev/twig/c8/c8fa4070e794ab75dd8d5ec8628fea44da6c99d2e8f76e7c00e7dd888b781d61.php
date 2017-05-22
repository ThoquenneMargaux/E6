<?php

/* mttlgsbBundle:Default:base_Comptable.html.twig */
class __TwigTemplate_0cf95dd4e321cbecb7973f75e1c08398bc4977737e31f77870e31e8d8bfc7ee6 extends Twig_Template
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
        $__internal_7cfae9c888e74815cdc940494248ba1ce6927b8e43bbc0562204de9aceb84a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cfae9c888e74815cdc940494248ba1ce6927b8e43bbc0562204de9aceb84a09->enter($__internal_7cfae9c888e74815cdc940494248ba1ce6927b8e43bbc0562204de9aceb84a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mttlgsbBundle:Default:base_Comptable.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 37
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
        // line 56
        $this->displayBlock('entete', $context, $blocks);
        // line 79
        echo "
        ";
        // line 80
        $this->displayBlock('body', $context, $blocks);
        // line 82
        echo "        
        ";
        // line 83
        $this->displayBlock('footer', $context, $blocks);
        // line 113
        echo "    </div>
</body>
</html>";
        
        $__internal_7cfae9c888e74815cdc940494248ba1ce6927b8e43bbc0562204de9aceb84a09->leave($__internal_7cfae9c888e74815cdc940494248ba1ce6927b8e43bbc0562204de9aceb84a09_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_efa9a6b40c304ebab71aabfcce050da7b19756b20e3fb42b615465e55a4d5d7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa9a6b40c304ebab71aabfcce050da7b19756b20e3fb42b615465e55a4d5d7b->enter($__internal_efa9a6b40c304ebab71aabfcce050da7b19756b20e3fb42b615465e55a4d5d7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
\t";
        
        $__internal_efa9a6b40c304ebab71aabfcce050da7b19756b20e3fb42b615465e55a4d5d7b->leave($__internal_efa9a6b40c304ebab71aabfcce050da7b19756b20e3fb42b615465e55a4d5d7b_prof);

    }

    // line 7
    public function block_titre($context, array $blocks = array())
    {
        $__internal_8ec2b7921e52ed819777642d786845012a875b9d72d59e4d232018aa835dd877 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ec2b7921e52ed819777642d786845012a875b9d72d59e4d232018aa835dd877->enter($__internal_8ec2b7921e52ed819777642d786845012a875b9d72d59e4d232018aa835dd877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo " <title>GSB - Page d'Accueil</title> ";
        
        $__internal_8ec2b7921e52ed819777642d786845012a875b9d72d59e4d232018aa835dd877->leave($__internal_8ec2b7921e52ed819777642d786845012a875b9d72d59e4d232018aa835dd877_prof);

    }

    // line 56
    public function block_entete($context, array $blocks = array())
    {
        $__internal_7f09e3725583b5b1c272cb60359a0ed14009f478dbe89d4a7f9c2e250c21953c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f09e3725583b5b1c272cb60359a0ed14009f478dbe89d4a7f9c2e250c21953c->enter($__internal_7f09e3725583b5b1c272cb60359a0ed14009f478dbe89d4a7f9c2e250c21953c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entete"));

        // line 57
        echo "            <section class=\"navbar navbar-default navbar-fixed-top sticky-navigation\" role=\"navigation\">
                <div class=\"container\">
                        <div class=\"navbar-header\">
                                <button class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                                        <span class=\"icon icon-bar\"></span>
                                        <span class=\"icon icon-bar\"></span>
                                        <span class=\"icon icon-bar\"></span>
                                </button>
                                <a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mttlgsb_homepage");
        echo "\" class=\"navbar-brand\">GSB</a>
                        </div>
                        <div class=\"collapse navbar-collapse\">
                                <ul class=\"nav navbar-nav navbar-right main-navigation\">
                                    <li><a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mttlgsb_validerFicheFrais");
        echo "\" class=\"smoothScroll\">Valider fiche de frais</a></li>
                                    <li><a href=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mttlgsb_suivisPFicheFrais");
        echo "\"  class=\"smoothScroll\">Suivis paiement</a></li>
                                    <li><a href=\"";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mttlgsb_deconnexion");
        echo "\" class=\"smoothScroll\">deconnexion</a></li>   
                                    
                                </ul>
                        </div>
                </div>
            </section>
                                    
        ";
        
        $__internal_7f09e3725583b5b1c272cb60359a0ed14009f478dbe89d4a7f9c2e250c21953c->leave($__internal_7f09e3725583b5b1c272cb60359a0ed14009f478dbe89d4a7f9c2e250c21953c_prof);

    }

    // line 80
    public function block_body($context, array $blocks = array())
    {
        $__internal_c3dac304c485c9d33028bef27b3654db2435cb513ea9f04d8fe0d390cb95310e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3dac304c485c9d33028bef27b3654db2435cb513ea9f04d8fe0d390cb95310e->enter($__internal_c3dac304c485c9d33028bef27b3654db2435cb513ea9f04d8fe0d390cb95310e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 81
        echo "        ";
        
        $__internal_c3dac304c485c9d33028bef27b3654db2435cb513ea9f04d8fe0d390cb95310e->leave($__internal_c3dac304c485c9d33028bef27b3654db2435cb513ea9f04d8fe0d390cb95310e_prof);

    }

    // line 83
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b7ad76ffe2786aa03911b51f8e167d08810ec6a02e23fbef36a61b0f3cf16663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ad76ffe2786aa03911b51f8e167d08810ec6a02e23fbef36a61b0f3cf16663->enter($__internal_b7ad76ffe2786aa03911b51f8e167d08810ec6a02e23fbef36a61b0f3cf16663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 84
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
        
        $__internal_b7ad76ffe2786aa03911b51f8e167d08810ec6a02e23fbef36a61b0f3cf16663->leave($__internal_b7ad76ffe2786aa03911b51f8e167d08810ec6a02e23fbef36a61b0f3cf16663_prof);

    }

    public function getTemplateName()
    {
        return "mttlgsbBundle:Default:base_Comptable.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  247 => 84,  241 => 83,  234 => 81,  228 => 80,  213 => 71,  209 => 70,  205 => 69,  198 => 65,  188 => 57,  182 => 56,  170 => 7,  161 => 35,  157 => 34,  153 => 33,  149 => 32,  145 => 31,  141 => 30,  137 => 29,  133 => 28,  129 => 27,  121 => 22,  117 => 21,  113 => 20,  109 => 19,  104 => 17,  100 => 16,  96 => 15,  87 => 8,  85 => 7,  76 => 5,  67 => 113,  65 => 83,  62 => 82,  60 => 80,  57 => 79,  55 => 56,  34 => 37,  32 => 5,  27 => 2,);
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
                                <a href=\"{{ path('mttlgsb_homepage') }}\" class=\"navbar-brand\">GSB</a>
                        </div>
                        <div class=\"collapse navbar-collapse\">
                                <ul class=\"nav navbar-nav navbar-right main-navigation\">
                                    <li><a href=\"{{ path('mttlgsb_validerFicheFrais') }}\" class=\"smoothScroll\">Valider fiche de frais</a></li>
                                    <li><a href=\"{{ path('mttlgsb_suivisPFicheFrais') }}\"  class=\"smoothScroll\">Suivis paiement</a></li>
                                    <li><a href=\"{{ path('mttlgsb_deconnexion') }}\" class=\"smoothScroll\">deconnexion</a></li>   
                                    
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
