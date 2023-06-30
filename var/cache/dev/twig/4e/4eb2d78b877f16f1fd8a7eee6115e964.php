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

/* chakhguereev/index.html.twig */
class __TwigTemplate_ae740ed54942ea5a7d6a1f692919eb32 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chakhguereev/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chakhguereev/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chakhguereev/index.html.twig", 1);
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
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/animation_cv.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <style>
        a{
           color: white;            
        }
        a:hover{
            text-decoration: none;
            color: white;
        }
        body{
            background-color: #d5d9db;
        }
        .container{
            background-color: white;
            /*background-image:url(\"/images/bg_g.jpg\");*/
            /*background-image: linear-gradient(to top, rgb(0, 0, 0) 0%, rgb(223, 242, 245) 81%, rgb(224, 243, 246) 100%);*/
        }
        h1{
            font-weight: bold;
        }
        #entete{            
            background-color: #396576; 
            color: white;

        }
        #entete p{
            font-weight: bold;
        }

        #titre_cv{
            display: block;
        }
        #description{
            font-style: italic;   
        }

        h2{
            font-size: 50px;
            font-family: 'Jomhuria', cursive;
        }
        .fontb{
            font-family: 'Pacifico', cursive;
        }
    </style>
    <div class=\"container\" style=\"position: relative\">

        <div class=\"row\" id=\"entete\">
            <h1 class=\"col-12 \">Developpeur Web</h1>
            <div class=\"col-md-3\">
                <p>
                    CHAKHGUEREEV LIOMA<br>
                        <a  href=\"mailto:lioma.chakhguereev.sio@gmail.com\">lioma.chakhguereev.sio@gmail.com</a><br>
                    06 95 77 60 58
                </p>
            </div>

            <div class=\"col-md-3 md-text-right\">
                <p>30 ans<br>
                    Permis B
                </p>
            </div>

            <div class=\"col-md-3 md-text-right\">
                <p>
                    Français courant<br>
                    Russe courant<br>
                    Anglais technique
                </p>
            </div>
            <img id=\"photo_persso\" class=\"d-none d-md-block \" src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/photo_perso.png"), "html", null, true);
        echo "\" style=\"height: 246px; position: absolute; top: 0;right: 0\" alt=\"ma photo\"/>
            <div id=\"description\" class=\"col-12 text-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"38\" height=\"38\" fill=\"currentColor\" class=\"bi bi-person\" viewBox=\"0 0 16 16\">
  <path d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"/>
</svg>
                <p>Agilité et le framework Symphony<br>
                    Combinées à une bonne ambiance<br>
                </p>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6 \">
                <h2>Competences</h2> 
                PHP Framework Symfony
                <div class=\"progress\">
                    <div id=\"symfony_progress\" class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\">80%</div>
                </div>
                Java JEE
                <div class=\"progress\">
                    <div id=\"jee_progress\" class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                </div>
                Bootstrap
                <div class=\"progress\">
                    <div id=\"bootstrap_progress\" class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                </div>
                JQuery
                <div class=\"progress\">
                    <div id=\"jquery_progress\" class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                </div>
                MySQL
                <div class=\"progress\">
                    <div id=\"mysql_progress\" class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                </div>
                Vb.NET
                <div class=\"progress\">
                    <div id=\"vbnet_progress\" class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                </div>
                Android Java
                <div class=\"progress\">
                    <div id=\"android_progress\" class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                </div>
                Prestashop<br> 
                <h2>A propos de moi</h2>
                <p>
                    J'aime l'humour et faire rire les autres,<br>
                    les mangas et les jeux vidéos<br>
                    la nature et les voyages, mon sport c'est la boxe anglaise<br>
                    
                </p>
            </div>
            <div class=\"col-md-6 text-left\">
                <h2>Savoir être</h2>
                <p>
                    Bon contact humain<br>
                    Responsable et engagé<br>
                    Attentif et autodidacte<br>
                    Autonome et collaboratif<br>
                    Ouvert d'esprit<br>
                </p>
                <h2>Outils</h2>
                <p>
                    PhpStorm / Apache NetBeans<br>
                    Git, Unix<br>
                    Composer, Symfony CLI<br>
                </p>
            </div>
        </div>



        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2>Formation</h2>
                <table class=\"table text-left\">                   
                    <tbody>
                        <tr>
                            <th scope=\"row\">2017 - 2018</th>
                            <td> Formation Technicien d'Etude et de Développement Informatique</td>
                            <td>6 mois, Human Booster ,Clermont Ferrand</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">2013 - 2014</th>
                            <td>Licence Pro Méthodes et Outils de Développement Informatique</td>
                            <td>Campus des Cézeaux Clermont Ferrand</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">2011 - 2013</th>
                            <td>BTS Système Informatique aux Organisations</td>
                            <td>Godefroy de Bouillon JB de la Salle</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">2008 - 2011</th>
                            <td>Bac Pro Electronique numérique</td>
                            <td>Lycée Professionnel Camille Claudel</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2>Expériences professionnelles</h2>            
            </div>
            
                <div class=\"col-2 d-none d-md-block \"><img src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/albatec.png"), "html", null, true);
        echo "\" alt=\"logo albatec\"/></div>
                <div class=\"col-md-2 col-sm-3\">Mars - Juillet 2018</div>
                <div class=\"col-8\">
                    <p>Développeur PHP Symfony 3.6<br>
                        Refonte du logiciel ERP G-Budget développé sous Oxygen au format web<br>
                        GitLab,PHP,Bootstrap,AJAX,JQuery</p>
                </div>  
                <div class=\"col-2 d-none d-md-block \"><img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/hb.png"), "html", null, true);
        echo "\" alt=\"logo human booster\"/></div>
                <div class=\"col-md-2 col-sm-3\">Octobre 2017 - Février 2018</div>
                <div class=\"col-8\">
                    <p>Formation Human Booster TEDI<br>
                        Gestion projet,POO,UML,HTMLCSS,SQL,JEE<br>
                        JavaScript,JQuery,PHPSymfony3.4</p>
                </div> 
                <div class=\"col-2 d-none d-md-block \"><img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/dnc.png"), "html", null, true);
        echo "\" alt=\"logo dansNodCoeurs\"/></div>
                <div class=\"col-md-2 col-sm-3\">Mai - Août 2017</div>
                <div class=\"col-8\">
                    <p>Développeur PHP Symfony 2.8<br>
                        Refonte du site web dansNosCoeurs.com(Startup),Méthodes agiles<br>
                        Développement front-end et back-end avec Bootstrap et CSS LESS</p>
                </div> 
                <div class=\"col-2 d-none d-md-block \"><img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/qb.png"), "html", null, true);
        echo "\" alt=\"logo quizzbox\"/></div>
                <div class=\"col-md-2 col-sm-3\">Octobre 2016 - Janvier 2017</div>
                <div class=\"col-8\">
                    <p>Développeur PHP<br>
                        Correction de bugs et developpement de fonctionnalités pour des applications<br>
                        de gestion,livraison de correctifs directement chez le client</p>
                </div> 
                <div class=\"col-2 d-none d-md-block \"><img src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/next.png"), "html", null, true);
        echo "\" alt=\"logo next media\"/></div>
                <div class=\"col-md-2 col-sm-3\">Novembre 2015 - Septembre 2016</div>
                <div class=\"col-8\">
                    <p>Développeur Android JAVA<br>
                        Développement d’une application android se connectant via TCP/IP<br>
                        au système de vote intéractif sous vb.net</p>
                </div>  
                <div class=\"col-2 d-none d-md-block \"><img src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/listo.png"), "html", null, true);
        echo "\" alt=\"logo listo\"/></div>
                <div class=\"col-md-2 col-sm-3\">Décembre 2013 - Février 2014</div>
                <div class=\"col-8\">
                    <p>Développeur système embarqué raspberrypi<br>
                        Scripting shell CentOS afin de récupérer périodiquement via le réseau 3G<br>
                        des mises à jour à partir du serveur php,déploiement CMS Drupal côté admin</p>
                </div>
        </div>   
    </div>



";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "chakhguereev/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 218,  335 => 211,  325 => 204,  315 => 197,  305 => 190,  295 => 183,  186 => 77,  116 => 9,  106 => 8,  94 => 6,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Chakhguereev Lioma{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"{{asset('js/animation_cv.js')}}\"></script>
{% endblock %}
{% block body %}
    <style>
        a{
           color: white;            
        }
        a:hover{
            text-decoration: none;
            color: white;
        }
        body{
            background-color: #d5d9db;
        }
        .container{
            background-color: white;
            /*background-image:url(\"/images/bg_g.jpg\");*/
            /*background-image: linear-gradient(to top, rgb(0, 0, 0) 0%, rgb(223, 242, 245) 81%, rgb(224, 243, 246) 100%);*/
        }
        h1{
            font-weight: bold;
        }
        #entete{            
            background-color: #396576; 
            color: white;

        }
        #entete p{
            font-weight: bold;
        }

        #titre_cv{
            display: block;
        }
        #description{
            font-style: italic;   
        }

        h2{
            font-size: 50px;
            font-family: 'Jomhuria', cursive;
        }
        .fontb{
            font-family: 'Pacifico', cursive;
        }
    </style>
    <div class=\"container\" style=\"position: relative\">

        <div class=\"row\" id=\"entete\">
            <h1 class=\"col-12 \">Developpeur Web</h1>
            <div class=\"col-md-3\">
                <p>
                    CHAKHGUEREEV LIOMA<br>
                        <a  href=\"mailto:lioma.chakhguereev.sio@gmail.com\">lioma.chakhguereev.sio@gmail.com</a><br>
                    06 95 77 60 58
                </p>
            </div>

            <div class=\"col-md-3 md-text-right\">
                <p>30 ans<br>
                    Permis B
                </p>
            </div>

            <div class=\"col-md-3 md-text-right\">
                <p>
                    Français courant<br>
                    Russe courant<br>
                    Anglais technique
                </p>
            </div>
            <img id=\"photo_persso\" class=\"d-none d-md-block \" src=\"{{asset('images/photo_perso.png')}}\" style=\"height: 246px; position: absolute; top: 0;right: 0\" alt=\"ma photo\"/>
            <div id=\"description\" class=\"col-12 text-center\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"38\" height=\"38\" fill=\"currentColor\" class=\"bi bi-person\" viewBox=\"0 0 16 16\">
  <path d=\"M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z\"/>
</svg>
                <p>Agilité et le framework Symphony<br>
                    Combinées à une bonne ambiance<br>
                </p>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-6 \">
                <h2>Competences</h2> 
                PHP Framework Symfony
                <div class=\"progress\">
                    <div id=\"symfony_progress\" class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\">80%</div>
                </div>
                Java JEE
                <div class=\"progress\">
                    <div id=\"jee_progress\" class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                </div>
                Bootstrap
                <div class=\"progress\">
                    <div id=\"bootstrap_progress\" class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                </div>
                JQuery
                <div class=\"progress\">
                    <div id=\"jquery_progress\" class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                </div>
                MySQL
                <div class=\"progress\">
                    <div id=\"mysql_progress\" class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                </div>
                Vb.NET
                <div class=\"progress\">
                    <div id=\"vbnet_progress\" class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                </div>
                Android Java
                <div class=\"progress\">
                    <div id=\"android_progress\" class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%\"></div>
                </div>
                Prestashop<br> 
                <h2>A propos de moi</h2>
                <p>
                    J'aime l'humour et faire rire les autres,<br>
                    les mangas et les jeux vidéos<br>
                    la nature et les voyages, mon sport c'est la boxe anglaise<br>
                    
                </p>
            </div>
            <div class=\"col-md-6 text-left\">
                <h2>Savoir être</h2>
                <p>
                    Bon contact humain<br>
                    Responsable et engagé<br>
                    Attentif et autodidacte<br>
                    Autonome et collaboratif<br>
                    Ouvert d'esprit<br>
                </p>
                <h2>Outils</h2>
                <p>
                    PhpStorm / Apache NetBeans<br>
                    Git, Unix<br>
                    Composer, Symfony CLI<br>
                </p>
            </div>
        </div>



        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2>Formation</h2>
                <table class=\"table text-left\">                   
                    <tbody>
                        <tr>
                            <th scope=\"row\">2017 - 2018</th>
                            <td> Formation Technicien d'Etude et de Développement Informatique</td>
                            <td>6 mois, Human Booster ,Clermont Ferrand</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">2013 - 2014</th>
                            <td>Licence Pro Méthodes et Outils de Développement Informatique</td>
                            <td>Campus des Cézeaux Clermont Ferrand</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">2011 - 2013</th>
                            <td>BTS Système Informatique aux Organisations</td>
                            <td>Godefroy de Bouillon JB de la Salle</td>
                        </tr>
                        <tr>
                            <th scope=\"row\">2008 - 2011</th>
                            <td>Bac Pro Electronique numérique</td>
                            <td>Lycée Professionnel Camille Claudel</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-12 text-center\">
                <h2>Expériences professionnelles</h2>            
            </div>
            
                <div class=\"col-2 d-none d-md-block \"><img src=\"{{asset('images/albatec.png')}}\" alt=\"logo albatec\"/></div>
                <div class=\"col-md-2 col-sm-3\">Mars - Juillet 2018</div>
                <div class=\"col-8\">
                    <p>Développeur PHP Symfony 3.6<br>
                        Refonte du logiciel ERP G-Budget développé sous Oxygen au format web<br>
                        GitLab,PHP,Bootstrap,AJAX,JQuery</p>
                </div>  
                <div class=\"col-2 d-none d-md-block \"><img src=\"{{asset('images/hb.png')}}\" alt=\"logo human booster\"/></div>
                <div class=\"col-md-2 col-sm-3\">Octobre 2017 - Février 2018</div>
                <div class=\"col-8\">
                    <p>Formation Human Booster TEDI<br>
                        Gestion projet,POO,UML,HTMLCSS,SQL,JEE<br>
                        JavaScript,JQuery,PHPSymfony3.4</p>
                </div> 
                <div class=\"col-2 d-none d-md-block \"><img src=\"{{asset('images/dnc.png')}}\" alt=\"logo dansNodCoeurs\"/></div>
                <div class=\"col-md-2 col-sm-3\">Mai - Août 2017</div>
                <div class=\"col-8\">
                    <p>Développeur PHP Symfony 2.8<br>
                        Refonte du site web dansNosCoeurs.com(Startup),Méthodes agiles<br>
                        Développement front-end et back-end avec Bootstrap et CSS LESS</p>
                </div> 
                <div class=\"col-2 d-none d-md-block \"><img src=\"{{asset('images/qb.png')}}\" alt=\"logo quizzbox\"/></div>
                <div class=\"col-md-2 col-sm-3\">Octobre 2016 - Janvier 2017</div>
                <div class=\"col-8\">
                    <p>Développeur PHP<br>
                        Correction de bugs et developpement de fonctionnalités pour des applications<br>
                        de gestion,livraison de correctifs directement chez le client</p>
                </div> 
                <div class=\"col-2 d-none d-md-block \"><img src=\"{{asset('images/next.png')}}\" alt=\"logo next media\"/></div>
                <div class=\"col-md-2 col-sm-3\">Novembre 2015 - Septembre 2016</div>
                <div class=\"col-8\">
                    <p>Développeur Android JAVA<br>
                        Développement d’une application android se connectant via TCP/IP<br>
                        au système de vote intéractif sous vb.net</p>
                </div>  
                <div class=\"col-2 d-none d-md-block \"><img src=\"{{asset('images/listo.png')}}\" alt=\"logo listo\"/></div>
                <div class=\"col-md-2 col-sm-3\">Décembre 2013 - Février 2014</div>
                <div class=\"col-8\">
                    <p>Développeur système embarqué raspberrypi<br>
                        Scripting shell CentOS afin de récupérer périodiquement via le réseau 3G<br>
                        des mises à jour à partir du serveur php,déploiement CMS Drupal côté admin</p>
                </div>
        </div>   
    </div>



{% endblock %}
", "chakhguereev/index.html.twig", "X:\\Programmes\\xampp\\htdocs\\chakhguereevdev\\templates\\chakhguereev\\index.html.twig");
    }
}
