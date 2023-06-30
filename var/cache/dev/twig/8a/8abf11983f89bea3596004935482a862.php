<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* chakhguereev_cv/index.html.twig */
class __TwigTemplate_8f34727acd2764418a953164a57da3ad extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'javascripts' => [$this, 'block_javascripts'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chakhguereev_cv/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chakhguereev_cv/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chakhguereev_cv/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Chakhguereev Lioma";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"/js/cv_responsive_animations.js\" type=\"text/javascript\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/cv_style.css"), "html", null, true);
        echo "\"  rel=\"stylesheet\" type=\"text/css\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <nav class=\"navbar navbar-expand-lg navbar-light bg-light fixed-top\">
        <div class=\"container\">            
            <button class=\"navbar-toggler ml-auto custom-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"nav nav-pills mx-auto\">
                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"#about\">Moi</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#skills\">Compétences</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#experience\">Expérience</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#education\">Formation</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#portfolio\">Portfolio</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#recommendation\">Recommendation</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 
    
    
    <section id=\"about\" class=\"container-fluid\">
        <div class=\"col-xs-8 col-md-4 profile-picture\" >
            <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/photo_perso.png"), "html", null, true);
        echo "\" class=\"rounded-circle\" alt=\"photo_profile\"/>
        </div>

        <div class=\"heading\">
            <h1>Hello, moi c'est Lioma</h1>
            <h3>Développeur web</h3>
            <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("documents/20.6 CV_JOHN.pdf"), "html", null, true);
        echo "\" class=\"boutton1\">Télécharger CV</a>
        </div>
    </section>



    <section id=\"skills\">
        <div class=\"red-divider\"></div>
        <div class=\"heading\">
            <h2>Compétences</h2>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:85%\">
                                <h5>HTML 85%</h5>
                            </div>
                        </div>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:85%\">
                                <h5>CSS 85%</h5>
                            </div>
                        </div>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:90%\">
                                <h5>JAVASCRIPT 90%</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:85%\">
                                <h5>JQUERY 85%</h5>
                            </div>
                        </div>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:85%\">
                                <h5>BOOTSTRAP 85%</h5>
                            </div>
                        </div>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:90%\">
                                <h5>ANGULAR 90%</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id=\"experience\">        
        <div class=\"container\">
            <div class=\"white-divider\"></div>
            <div class=\"heading\">
                <h2>Expérience progessionelle</h2>
            </div>
            <ul class=\"timeline\">
                <li>
                    <div class=\"timeline-badge\"><i class=\"bi bi-briefcase-fill\"></i></div>
                    <div class=\"timeline-panel-container\">
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h3>Albatec</h3>
                                <h4>Développeur PHP Symfony 3.6</h4>
                                <p class=\"text-muted\"><i class=\"far fa-calendar-alt\"> Mars - Juillet 2018</i></p>
                            </div>
                            <div class=\"timeline-body\">
                                <p>Refonte du logiciel ERP G-Budget développé sous Oxygen au format web</p>
                                <p>Symfony, GitLab, PHP, Bootstrap 3, AJAX, JQuery</p>
                            </div>
                        </div>                            
                    </div>
                </li>

                <li>
                    <div class=\"timeline-badge\"><i class=\"bi bi-briefcase-fill\"></i></div>
                    <div class=\"timeline-panel-container-inverted\">
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h3>Dans Nos Coeurs</h3>
                                <h4>Développeur PHP Symfony 2.8</h4>
                                <p class=\"text-muted\"><i class=\"far fa-calendar-alt\"> Mai - Août 2017</i></p>
                            </div>
                            <div class=\"timeline-body\">
                                <p>Refonte du site web</p>
                                <p>Méthodes Agiles</p>
                                <p>Développement front-end et back-end</p>
                                <p>Symfony, GitLab, Bootstrap, CSS LESS</p>
                            </div>
                        </div>                            
                    </div>                    
                </li>

                <li>
                    <div class=\"timeline-badge\"><i class=\"bi bi-briefcase-fill\"></i></div>
                    <div class=\"timeline-panel-container\">
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h3>Next Media</h3>
                                <h4>Développeur PHP</h4>
                                <p class=\"text-muted\"><i class=\"far fa-calendar-alt\"> Mai - Août 2017</i></p>
                            </div>
                            <div class=\"timeline-body\">
                                <p>Correction de bugs et developpement de fonctionnalités pour des applications
                                    de gestion</p>
                                <p>Livraison de correctifs directement chez le client</p>
                                <p>WinsSCP, SSH, Oracle DB, MySql</p>
                            </div>
                        </div>                            
                    </div>                    
                </li>
            </ul>
        </div>        
    </section>

    <section id=\"education\">
        <div class=\"container\">
            <div class=\"red-divider\"></div>
            <div class=\"heading\">
                <h2>Formation</h2>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"education-block\">
                        <h5>2021</h5>
                        <i class=\"fas fa-university\"></i>
                        <h3>Apprendre-a-coder.com</h3>
                        <h4>Formation online</h4>
                        <h4>Développeur Web</h4>
                        <div class=\"red-divider\"></div>
                        <p>HTML/CSS JacaScript JQuery</p>
                        <p>Responsive design</p>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"education-block\">
                        <h5>2021</h5>
                        <i class=\"fas fa-university\"></i>
                        <h3>Apprendre-a-coder.com</h3>
                        <h4>Formation online</h4>
                        <h4>Développeur Web</h4>
                        <div class=\"red-divider\"></div>
                        <p>HTML/CSS JacaScript JQuery</p>
                        <p>Responsive design</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id=\"portfolio\">
        <div class=\"container\">
            <div class=\"white-divider\"></div>
            <div class=\"heading\">
                <h2>Portfolio</h2>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <a href=\"#\" target=\"_blank\">
                        <img class=\"img-thumbnail\" src=\"/images/20.9 facebook_video.png.png\" alt=\"alt\"/>
                    </a>
                </div>
                <div class=\"col-sm-4\">
                    <a href=\"#\" target=\"_blank\">
                        <img class=\"img-thumbnail\" src=\"/images/20.5 google_translate.png.png\" alt=\"alt\"/>
                    </a>

                </div>
                <div class=\"col-sm-4\">
                    <a href=\"#\" target=\"_blank\">
                        <img class=\"img-thumbnail\" src=\"/images/20.8 twitter_retweet.png.png\" alt=\"alt\"/>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id=\"recommendation\">        
        <div class=\"container\">
            <div class=\"red-divider\"></div>
            <div class=\"heading\">
                <h2>Recommendations</h2>
            </div>

            <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                </ol>
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <h3>Jean Marc Boudet</h3>
                        <h4>Un super élément</h4>
                    </div>
                    <div class=\"carousel-item\">
                        <h3>Jean Marc Nermond</h3>
                        <h4>Esprit le plus créatif que jr'ai vu de toute ma vie</h4>
                    </div>
                    <div class=\"carousel-item\">
                        <h3>Thrall</h3>
                        <h4>Foudre, feu, tempete, écoutez mon appel !</h4>
                    </div>
                </div>
                <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                    <i class=\"fas fa-chevron-left\"></i>
                </a>
                <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                    <i class=\"fas fa-chevron-right\"></i>
                </a>
            </div>
        </div>
    </section>
    
    <footer class=\"text-center\">
        <a href=\"#about\">
            <i class=\"fas fa-chevron-up\"></i>
        </a>
        <h5>© APPRENDRE-A-CODER.COM</h5>
    </footer>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "chakhguereev_cv/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 54,  176 => 48,  141 => 15,  131 => 14,  119 => 11,  114 => 10,  104 => 9,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Chakhguereev Lioma{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"/js/cv_responsive_animations.js\" type=\"text/javascript\"></script>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('styles/cv_style.css') }}\"  rel=\"stylesheet\" type=\"text/css\"/>
{% endblock %}

{% block body %}
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light fixed-top\">
        <div class=\"container\">            
            <button class=\"navbar-toggler ml-auto custom-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"nav nav-pills mx-auto\">
                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"#about\">Moi</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#skills\">Compétences</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#experience\">Expérience</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#education\">Formation</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#portfolio\">Portfolio</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#recommendation\">Recommendation</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 
    
    
    <section id=\"about\" class=\"container-fluid\">
        <div class=\"col-xs-8 col-md-4 profile-picture\" >
            <img src=\"{{ asset('images/photo_perso.png') }}\" class=\"rounded-circle\" alt=\"photo_profile\"/>
        </div>

        <div class=\"heading\">
            <h1>Hello, moi c'est Lioma</h1>
            <h3>Développeur web</h3>
            <a href=\"{{ asset('documents/20.6 CV_JOHN.pdf') }}\" class=\"boutton1\">Télécharger CV</a>
        </div>
    </section>



    <section id=\"skills\">
        <div class=\"red-divider\"></div>
        <div class=\"heading\">
            <h2>Compétences</h2>
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-6\">
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:85%\">
                                <h5>HTML 85%</h5>
                            </div>
                        </div>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:85%\">
                                <h5>CSS 85%</h5>
                            </div>
                        </div>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:90%\">
                                <h5>JAVASCRIPT 90%</h5>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:85%\">
                                <h5>JQUERY 85%</h5>
                            </div>
                        </div>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:85%\">
                                <h5>BOOTSTRAP 85%</h5>
                            </div>
                        </div>
                        <div class=\"progress\">
                            <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:90%\">
                                <h5>ANGULAR 90%</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id=\"experience\">        
        <div class=\"container\">
            <div class=\"white-divider\"></div>
            <div class=\"heading\">
                <h2>Expérience progessionelle</h2>
            </div>
            <ul class=\"timeline\">
                <li>
                    <div class=\"timeline-badge\"><i class=\"bi bi-briefcase-fill\"></i></div>
                    <div class=\"timeline-panel-container\">
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h3>Albatec</h3>
                                <h4>Développeur PHP Symfony 3.6</h4>
                                <p class=\"text-muted\"><i class=\"far fa-calendar-alt\"> Mars - Juillet 2018</i></p>
                            </div>
                            <div class=\"timeline-body\">
                                <p>Refonte du logiciel ERP G-Budget développé sous Oxygen au format web</p>
                                <p>Symfony, GitLab, PHP, Bootstrap 3, AJAX, JQuery</p>
                            </div>
                        </div>                            
                    </div>
                </li>

                <li>
                    <div class=\"timeline-badge\"><i class=\"bi bi-briefcase-fill\"></i></div>
                    <div class=\"timeline-panel-container-inverted\">
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h3>Dans Nos Coeurs</h3>
                                <h4>Développeur PHP Symfony 2.8</h4>
                                <p class=\"text-muted\"><i class=\"far fa-calendar-alt\"> Mai - Août 2017</i></p>
                            </div>
                            <div class=\"timeline-body\">
                                <p>Refonte du site web</p>
                                <p>Méthodes Agiles</p>
                                <p>Développement front-end et back-end</p>
                                <p>Symfony, GitLab, Bootstrap, CSS LESS</p>
                            </div>
                        </div>                            
                    </div>                    
                </li>

                <li>
                    <div class=\"timeline-badge\"><i class=\"bi bi-briefcase-fill\"></i></div>
                    <div class=\"timeline-panel-container\">
                        <div class=\"timeline-panel\">
                            <div class=\"timeline-heading\">
                                <h3>Next Media</h3>
                                <h4>Développeur PHP</h4>
                                <p class=\"text-muted\"><i class=\"far fa-calendar-alt\"> Mai - Août 2017</i></p>
                            </div>
                            <div class=\"timeline-body\">
                                <p>Correction de bugs et developpement de fonctionnalités pour des applications
                                    de gestion</p>
                                <p>Livraison de correctifs directement chez le client</p>
                                <p>WinsSCP, SSH, Oracle DB, MySql</p>
                            </div>
                        </div>                            
                    </div>                    
                </li>
            </ul>
        </div>        
    </section>

    <section id=\"education\">
        <div class=\"container\">
            <div class=\"red-divider\"></div>
            <div class=\"heading\">
                <h2>Formation</h2>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"education-block\">
                        <h5>2021</h5>
                        <i class=\"fas fa-university\"></i>
                        <h3>Apprendre-a-coder.com</h3>
                        <h4>Formation online</h4>
                        <h4>Développeur Web</h4>
                        <div class=\"red-divider\"></div>
                        <p>HTML/CSS JacaScript JQuery</p>
                        <p>Responsive design</p>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"education-block\">
                        <h5>2021</h5>
                        <i class=\"fas fa-university\"></i>
                        <h3>Apprendre-a-coder.com</h3>
                        <h4>Formation online</h4>
                        <h4>Développeur Web</h4>
                        <div class=\"red-divider\"></div>
                        <p>HTML/CSS JacaScript JQuery</p>
                        <p>Responsive design</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id=\"portfolio\">
        <div class=\"container\">
            <div class=\"white-divider\"></div>
            <div class=\"heading\">
                <h2>Portfolio</h2>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <a href=\"#\" target=\"_blank\">
                        <img class=\"img-thumbnail\" src=\"/images/20.9 facebook_video.png.png\" alt=\"alt\"/>
                    </a>
                </div>
                <div class=\"col-sm-4\">
                    <a href=\"#\" target=\"_blank\">
                        <img class=\"img-thumbnail\" src=\"/images/20.5 google_translate.png.png\" alt=\"alt\"/>
                    </a>

                </div>
                <div class=\"col-sm-4\">
                    <a href=\"#\" target=\"_blank\">
                        <img class=\"img-thumbnail\" src=\"/images/20.8 twitter_retweet.png.png\" alt=\"alt\"/>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id=\"recommendation\">        
        <div class=\"container\">
            <div class=\"red-divider\"></div>
            <div class=\"heading\">
                <h2>Recommendations</h2>
            </div>

            <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <ol class=\"carousel-indicators\">
                    <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
                    <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                </ol>
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                        <h3>Jean Marc Boudet</h3>
                        <h4>Un super élément</h4>
                    </div>
                    <div class=\"carousel-item\">
                        <h3>Jean Marc Nermond</h3>
                        <h4>Esprit le plus créatif que jr'ai vu de toute ma vie</h4>
                    </div>
                    <div class=\"carousel-item\">
                        <h3>Thrall</h3>
                        <h4>Foudre, feu, tempete, écoutez mon appel !</h4>
                    </div>
                </div>
                <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                    <i class=\"fas fa-chevron-left\"></i>
                </a>
                <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                    <i class=\"fas fa-chevron-right\"></i>
                </a>
            </div>
        </div>
    </section>
    
    <footer class=\"text-center\">
        <a href=\"#about\">
            <i class=\"fas fa-chevron-up\"></i>
        </a>
        <h5>© APPRENDRE-A-CODER.COM</h5>
    </footer>

{% endblock %}
", "chakhguereev_cv/index.html.twig", "X:\\Programmes\\xampp\\htdocs\\chakhguereevdev\\templates\\chakhguereev_cv\\index.html.twig");
    }
}
