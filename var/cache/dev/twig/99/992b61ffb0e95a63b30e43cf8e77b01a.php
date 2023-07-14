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

/* home/index.html.twig */
class __TwigTemplate_bfb04ccc8b74fb41c37eabc3f05f1cd7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "CHAKHGUEREEV
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 7
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/cv_responsive_animations.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/cv_style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"container px-4\">

        <section id=\"about\" class=\"container-fluid\">
            <div class=\"col-xs-8 col-md-4 profile-picture\">
                <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/photo_perso2-grey.png"), "html", null, true);
        echo "\" class=\"rounded-circle\" alt=\"photo_profile\"/>
            </div>

            <div class=\"heading\">
                <h1>Hello, moi c'est Lioma</h1>
                <h3>Développeur web</h3>
                <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("documents/CV.pdf"), "html", null, true);
        echo "\" class=\"boutton1\" target=\"_blank\">Télécharger CV</a>
            </div>


            <div class=\"row\" id=\"about_desc\">
                <hr>
                <div class=\"col-3\">
                    <h6>Contact</h6>
                    <a href=\"mailto:lioma.chakhguereev.sio@gmail.com\">Contactez-moi par mail
                    </a>
                    <p>
                        <br>Clermont-Ferrand, France
                    </p>
                </div>

                <div class=\"col-9\">
                    <div>
                        <h3>À propos de moi</h3>
                    </div>
                    <div>
                        <p>Passionné de développement personnel, en quête d'évolution constante. Je lis des livres sur
                            le sujet chaque matin durant ma routine matinale.<br>
                            Étant de nature curieuse et autodidacte, je sais m'adapter et apprendre rapidement, et ce,
                            en touchant à des domaines de l'informatique très divers.<br>
                            Je souhaite rester le plus polyvalent possible, bien que je m'intéresse principalement aux
                            technologies web.
                        </p>
                    </div>

                    <h4>Mes qualités</h4>
                    <h5>Un côté technique
                    </h5>
                    Du fait de mon Bac Pro Systèmes Electroniques et Numériques, j'ai travaillé en tant que dépanneur
                    d'appareils électroniques chez
                    <a target=\"_blank\" href=\"https://electronikservice.com/\">Electronik Service</a>
                    à Clermont Ferrand. Ce qui m'a appris des techniques de recherche de panne comme diviser le problème
                    en deux.<br>C'est à dire par exemple déjà à analyser
                    si c'est un problème plutôt électronique ou mécanique, d'alimentation primaire ou secondaire.
                    J'applique lorsque c'est possible le même processus lors de ma recherche de bug,le problème provient
                    du code back end? De l'affichage? Uu de la base de données? J'applique lorsque c'est possible le
                    même procéssus lors de ma recheche de bug, est au niveau du code back end, de l'affichage ou de la
                    base de données.

                    <h5>Curieux</h5>
                    Je me suis intéressé à la relation sociale, comprendre le besoin client demande à être très attentif
                    et de poser les bonnes questions.
                    Je développe ma curiosité aussi dans mes relations de tous les jours, une des bonnes pratiques tiré
                    du livre de Dale Carnegie
                    <a target=\"_blank\"
                       href=\"https://www.google.fr/books/edition/Comment_se_faire_des_amis/TsPLPoS1Q-EC?hl=fr&gbpv=1&printsec=frontcover\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\">Comment
                        se faire des amis</a>.
                    <h5>Autodidacte</h5>
                    Dans mon parcours, j'ai fait deux formations encadrées par pôle emploi qui m'ont beaucoup apportées.
                    Mais je trouve qu'il n'y a rien de plus efficace et plus satisfaisant que de chercher les solutions
                    et apprendre sois même. Le portfolio que vous consultez est le fruit de cet apprentissage.

                    <h5>Trilingue</h5>
                    Je parle le français, l'<a target=\"_blank\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("documents/toic.pdf"), "html", null, true);
        echo "\">anglais</a>
                    et le russe. C'est aussi de là que vient ma capacité à apprendre les langages informatiques. Cela me
                    permet aussi de m'informer à l'aide des ressources pouvant venir d'autres pays.
                    </p>
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
                                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\"
                                     aria-valuemax=\"100\" style=\"width:85%\">
                                    <h5>BOOTSTRAP CSS
                                    </h5>
                                </div>
                            </div>
                            <div class=\"progress\">
                                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\"
                                     aria-valuemax=\"100\" style=\"width:85%\">
                                    <h5>PHP SYMFONY
                                    </h5>
                                </div>
                            </div>
                            <div class=\"progress\">
                                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\" aria-value-min=\"0\"
                                     aria-valuemax=\"100\" style=\"width:90%\">
                                    <h5>JAVASCRIPT
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"progress\">
                                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\"
                                     aria-valuemax=\"100\" style=\"width:85%\">
                                    <h5>C# .NET
                                    </h5>
                                </div>
                            </div>
                            <div class=\"progress\">
                                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\"
                                     aria-valuemax=\"100\" style=\"width:85%\">
                                    <h5>SQL
                                    </h5>
                                </div>
                            </div>
                            <div class=\"progress\">
                                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\" aria-value-min=\"0\"
                                     aria-valuemax=\"100\" style=\"width:90%\">
                                    <h5>ANGULAR
                                    </h5>
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
                        <div class=\"timeline-badge\">
                            <i class=\"bi bi-briefcase-fill\"></i>
                        </div>
                        <div class=\"timeline-panel-container\">
                            <div class=\"timeline-panel\">
                                <div class=\"timeline-heading\">
                                    <h5>Albatec</h5>
                                    <h6>Développeur PHP Symfony 3.6</h6>
                                    <p class=\"text-muted\">
                                        <i class=\"far fa-calendar-alt\">
                                            Mars - Juillet 2018</i>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li>
                        <div class=\"timeline-badge\">
                            <i class=\"bi bi-briefcase-fill\"></i>
                        </div>
                        <div class=\"timeline-panel-container-inverted\">
                            <div class=\"timeline-panel\">
                                <div class=\"timeline-heading\">
                                    <h5>Dans Nos Coeurs</h5>
                                    <h6>Développeur PHP Symfony</h6>
                                    <p class=\"text-muted\">
                                        <i class=\"far fa-calendar-alt\">
                                            Mai - Août 2017</i>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li>
                        <div class=\"timeline-badge\">
                            <i class=\"bi bi-briefcase-fill\"></i>
                        </div>
                        <div class=\"timeline-panel-container\">
                            <div class=\"timeline-panel\">
                                <div class=\"timeline-heading\">
                                    <h5>Next Media</h5>
                                    <h6>Développeur PHP</h6>
                                    <p class=\"text-muted\">
                                        <i class=\"far fa-calendar-alt\">
                                            Mai - Août 2017</i>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section id=\"education\">
            <div class=\"red-divider\"></div>
            <div class=\"heading\">
                <h2>Formation</h2>
            </div>
            <table class=\"table text-left\">
                <tbody>
                <tr>
                    <th scope=\"row\">2021 - 2022</th>
                    <td>
                        <a target=\"_blank\" href=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("documents/dotNet Comp.pdf"), "html", null, true);
        echo "\">Formation Dev Ops Dot Net</a>
                    </td>
                    <td>399 Heures, Institut de la PME, Clermont Ferrand</td>
                </tr>
                <tr>
                    <th scope=\"row\">2017 - 2018</th>
                    <td>
                        <a target=\"_blank\" href=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("documents/tedi_comp.pdf"), "html", null, true);
        echo "\">Formation Technicien d'Etude et
                            de Développement Informatique</a>
                    </td>
                    <td>6 mois, Human Booster, Clermont Ferrand</td>
                </tr>
                <tr>
                    <th scope=\"row\">2013 - 2014</th>
                    <td>Licence Pro Méthodes et Outils de Développement Informatique</td>
                    <td>Campus des Cézeaux, Clermont Ferrand</td>
                </tr>
                <tr>
                    <th scope=\"row\">2011 - 2013</th>
                    <td>BTS Système Informatique aux Organisations</td>
                    <td>Godefroy de Bouillon JB de la Salle, Clermont Ferrand</td>
                </tr>
                <tr>
                    <th scope=\"row\">2008 - 2011</th>
                    <td>Bac Pro Electronique numérique</td>
                    <td>Lycée Professionnel Camille Claudel, Clermont Ferrand</td>
                </tr>
                </tbody>
            </table>
        </section>

        <section id=\"portfolio\">
            <div class=\"container\">
                <div class=\"white-divider\"></div>
                <div class=\"heading\">
                    <h2>Portfolio</h2>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <a href=\"https://github.com/iromosawake/projetPOEC\" target=\"_blank\">
                            <img class=\"img-thumbnail\" src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/hometraining.png"), "html", null, true);
        echo "\" alt=\"alt\"/>
                        </a>
                    </div>
                    <div class=\"col-sm-4\">
                        <a href=\"https://github.com/iromosawake/atelier_electronik\" target=\"_blank\">
                            <img class=\"img-thumbnail\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/atelier_electronik.png"), "html", null, true);
        echo "\" alt=\"alt\"/>
                        </a>

                    </div>
                    <div class=\"col-sm-4\">
                        <a href=\"";
        // line 278
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("programme.show");
        echo "\" target=\"_blank\">
                            <img class=\"img-thumbnail\" src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/hola_muscu.png"), "html", null, true);
        echo "\" alt=\"alt\"/>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <footer class=\"text-center\">
        <a href=\"#about\">
            <i class=\"fas fa-chevron-up\"></i>
        </a>
        <h5>
            <svg stroke=\"currentColor\" fill=\"currentColor\" stroke-width=\"0\" viewbox=\"0 0 512 512\" height=\"1.5em\"
                 width=\"1.5em\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 448c-110.532 0-200-89.451-200-200 0-110.531 89.451-200 200-200 110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200zm107.351-101.064c-9.614 9.712-45.53 41.396-104.065 41.396-82.43 0-140.484-61.425-140.484-141.567 0-79.152 60.275-139.401 139.762-139.401 55.531 0 88.738 26.62 97.593 34.779a11.965 11.965 0 0 1 1.936 15.322l-18.155 28.113c-3.841 5.95-11.966 7.282-17.499 2.921-8.595-6.776-31.814-22.538-61.708-22.538-48.303 0-77.916 35.33-77.916 80.082 0 41.589 26.888 83.692 78.277 83.692 32.657 0 56.843-19.039 65.726-27.225 5.27-4.857 13.596-4.039 17.82 1.738l19.865 27.17a11.947 11.947 0 0 1-1.152 15.518z\"></path>
            </svg>
            CHAKHGUEREEV LIOMA . 2023
        </h5>

        <h5>Tous droits réservés. Powered by Symfony 6</h5>
    </footer>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  435 => 279,  431 => 278,  423 => 273,  415 => 268,  379 => 235,  369 => 228,  224 => 86,  164 => 29,  155 => 23,  145 => 17,  135 => 16,  123 => 13,  118 => 12,  108 => 11,  96 => 8,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}CHAKHGUEREEV
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('js/cv_responsive_animations.js') }}\" type=\"text/javascript\"></script>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{ asset('styles/cv_style.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
{% endblock %}

{% block body %}
    {{ parent() }}

    <div class=\"container px-4\">

        <section id=\"about\" class=\"container-fluid\">
            <div class=\"col-xs-8 col-md-4 profile-picture\">
                <img src=\"{{ asset('images/photo_perso2-grey.png') }}\" class=\"rounded-circle\" alt=\"photo_profile\"/>
            </div>

            <div class=\"heading\">
                <h1>Hello, moi c'est Lioma</h1>
                <h3>Développeur web</h3>
                <a href=\"{{ asset('documents/CV.pdf') }}\" class=\"boutton1\" target=\"_blank\">Télécharger CV</a>
            </div>


            <div class=\"row\" id=\"about_desc\">
                <hr>
                <div class=\"col-3\">
                    <h6>Contact</h6>
                    <a href=\"mailto:lioma.chakhguereev.sio@gmail.com\">Contactez-moi par mail
                    </a>
                    <p>
                        <br>Clermont-Ferrand, France
                    </p>
                </div>

                <div class=\"col-9\">
                    <div>
                        <h3>À propos de moi</h3>
                    </div>
                    <div>
                        <p>Passionné de développement personnel, en quête d'évolution constante. Je lis des livres sur
                            le sujet chaque matin durant ma routine matinale.<br>
                            Étant de nature curieuse et autodidacte, je sais m'adapter et apprendre rapidement, et ce,
                            en touchant à des domaines de l'informatique très divers.<br>
                            Je souhaite rester le plus polyvalent possible, bien que je m'intéresse principalement aux
                            technologies web.
                        </p>
                    </div>

                    <h4>Mes qualités</h4>
                    <h5>Un côté technique
                    </h5>
                    Du fait de mon Bac Pro Systèmes Electroniques et Numériques, j'ai travaillé en tant que dépanneur
                    d'appareils électroniques chez
                    <a target=\"_blank\" href=\"https://electronikservice.com/\">Electronik Service</a>
                    à Clermont Ferrand. Ce qui m'a appris des techniques de recherche de panne comme diviser le problème
                    en deux.<br>C'est à dire par exemple déjà à analyser
                    si c'est un problème plutôt électronique ou mécanique, d'alimentation primaire ou secondaire.
                    J'applique lorsque c'est possible le même processus lors de ma recherche de bug,le problème provient
                    du code back end? De l'affichage? Uu de la base de données? J'applique lorsque c'est possible le
                    même procéssus lors de ma recheche de bug, est au niveau du code back end, de l'affichage ou de la
                    base de données.

                    <h5>Curieux</h5>
                    Je me suis intéressé à la relation sociale, comprendre le besoin client demande à être très attentif
                    et de poser les bonnes questions.
                    Je développe ma curiosité aussi dans mes relations de tous les jours, une des bonnes pratiques tiré
                    du livre de Dale Carnegie
                    <a target=\"_blank\"
                       href=\"https://www.google.fr/books/edition/Comment_se_faire_des_amis/TsPLPoS1Q-EC?hl=fr&gbpv=1&printsec=frontcover\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\">Comment
                        se faire des amis</a>.
                    <h5>Autodidacte</h5>
                    Dans mon parcours, j'ai fait deux formations encadrées par pôle emploi qui m'ont beaucoup apportées.
                    Mais je trouve qu'il n'y a rien de plus efficace et plus satisfaisant que de chercher les solutions
                    et apprendre sois même. Le portfolio que vous consultez est le fruit de cet apprentissage.

                    <h5>Trilingue</h5>
                    Je parle le français, l'<a target=\"_blank\" href=\"{{ asset('documents/toic.pdf') }}\">anglais</a>
                    et le russe. C'est aussi de là que vient ma capacité à apprendre les langages informatiques. Cela me
                    permet aussi de m'informer à l'aide des ressources pouvant venir d'autres pays.
                    </p>
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
                                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\"
                                     aria-valuemax=\"100\" style=\"width:85%\">
                                    <h5>BOOTSTRAP CSS
                                    </h5>
                                </div>
                            </div>
                            <div class=\"progress\">
                                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\"
                                     aria-valuemax=\"100\" style=\"width:85%\">
                                    <h5>PHP SYMFONY
                                    </h5>
                                </div>
                            </div>
                            <div class=\"progress\">
                                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\" aria-value-min=\"0\"
                                     aria-valuemax=\"100\" style=\"width:90%\">
                                    <h5>JAVASCRIPT
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"progress\">
                                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\"
                                     aria-valuemax=\"100\" style=\"width:85%\">
                                    <h5>C# .NET
                                    </h5>
                                </div>
                            </div>
                            <div class=\"progress\">
                                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\"
                                     aria-valuemax=\"100\" style=\"width:85%\">
                                    <h5>SQL
                                    </h5>
                                </div>
                            </div>
                            <div class=\"progress\">
                                <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\" aria-value-min=\"0\"
                                     aria-valuemax=\"100\" style=\"width:90%\">
                                    <h5>ANGULAR
                                    </h5>
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
                        <div class=\"timeline-badge\">
                            <i class=\"bi bi-briefcase-fill\"></i>
                        </div>
                        <div class=\"timeline-panel-container\">
                            <div class=\"timeline-panel\">
                                <div class=\"timeline-heading\">
                                    <h5>Albatec</h5>
                                    <h6>Développeur PHP Symfony 3.6</h6>
                                    <p class=\"text-muted\">
                                        <i class=\"far fa-calendar-alt\">
                                            Mars - Juillet 2018</i>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li>
                        <div class=\"timeline-badge\">
                            <i class=\"bi bi-briefcase-fill\"></i>
                        </div>
                        <div class=\"timeline-panel-container-inverted\">
                            <div class=\"timeline-panel\">
                                <div class=\"timeline-heading\">
                                    <h5>Dans Nos Coeurs</h5>
                                    <h6>Développeur PHP Symfony</h6>
                                    <p class=\"text-muted\">
                                        <i class=\"far fa-calendar-alt\">
                                            Mai - Août 2017</i>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </li>

                    <li>
                        <div class=\"timeline-badge\">
                            <i class=\"bi bi-briefcase-fill\"></i>
                        </div>
                        <div class=\"timeline-panel-container\">
                            <div class=\"timeline-panel\">
                                <div class=\"timeline-heading\">
                                    <h5>Next Media</h5>
                                    <h6>Développeur PHP</h6>
                                    <p class=\"text-muted\">
                                        <i class=\"far fa-calendar-alt\">
                                            Mai - Août 2017</i>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section id=\"education\">
            <div class=\"red-divider\"></div>
            <div class=\"heading\">
                <h2>Formation</h2>
            </div>
            <table class=\"table text-left\">
                <tbody>
                <tr>
                    <th scope=\"row\">2021 - 2022</th>
                    <td>
                        <a target=\"_blank\" href=\"{{ asset('documents/dotNet Comp.pdf') }}\">Formation Dev Ops Dot Net</a>
                    </td>
                    <td>399 Heures, Institut de la PME, Clermont Ferrand</td>
                </tr>
                <tr>
                    <th scope=\"row\">2017 - 2018</th>
                    <td>
                        <a target=\"_blank\" href=\"{{ asset('documents/tedi_comp.pdf') }}\">Formation Technicien d'Etude et
                            de Développement Informatique</a>
                    </td>
                    <td>6 mois, Human Booster, Clermont Ferrand</td>
                </tr>
                <tr>
                    <th scope=\"row\">2013 - 2014</th>
                    <td>Licence Pro Méthodes et Outils de Développement Informatique</td>
                    <td>Campus des Cézeaux, Clermont Ferrand</td>
                </tr>
                <tr>
                    <th scope=\"row\">2011 - 2013</th>
                    <td>BTS Système Informatique aux Organisations</td>
                    <td>Godefroy de Bouillon JB de la Salle, Clermont Ferrand</td>
                </tr>
                <tr>
                    <th scope=\"row\">2008 - 2011</th>
                    <td>Bac Pro Electronique numérique</td>
                    <td>Lycée Professionnel Camille Claudel, Clermont Ferrand</td>
                </tr>
                </tbody>
            </table>
        </section>

        <section id=\"portfolio\">
            <div class=\"container\">
                <div class=\"white-divider\"></div>
                <div class=\"heading\">
                    <h2>Portfolio</h2>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        <a href=\"https://github.com/iromosawake/projetPOEC\" target=\"_blank\">
                            <img class=\"img-thumbnail\" src=\"{{ asset('images/hometraining.png') }}\" alt=\"alt\"/>
                        </a>
                    </div>
                    <div class=\"col-sm-4\">
                        <a href=\"https://github.com/iromosawake/atelier_electronik\" target=\"_blank\">
                            <img class=\"img-thumbnail\" src=\"{{ asset('images/atelier_electronik.png') }}\" alt=\"alt\"/>
                        </a>

                    </div>
                    <div class=\"col-sm-4\">
                        <a href=\"{{ path('programme.show') }}\" target=\"_blank\">
                            <img class=\"img-thumbnail\" src=\"{{ asset('images/hola_muscu.png') }}\" alt=\"alt\"/>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <footer class=\"text-center\">
        <a href=\"#about\">
            <i class=\"fas fa-chevron-up\"></i>
        </a>
        <h5>
            <svg stroke=\"currentColor\" fill=\"currentColor\" stroke-width=\"0\" viewbox=\"0 0 512 512\" height=\"1.5em\"
                 width=\"1.5em\" xmlns=\"http://www.w3.org/2000/svg\">
                <path d=\"M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 448c-110.532 0-200-89.451-200-200 0-110.531 89.451-200 200-200 110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200zm107.351-101.064c-9.614 9.712-45.53 41.396-104.065 41.396-82.43 0-140.484-61.425-140.484-141.567 0-79.152 60.275-139.401 139.762-139.401 55.531 0 88.738 26.62 97.593 34.779a11.965 11.965 0 0 1 1.936 15.322l-18.155 28.113c-3.841 5.95-11.966 7.282-17.499 2.921-8.595-6.776-31.814-22.538-61.708-22.538-48.303 0-77.916 35.33-77.916 80.082 0 41.589 26.888 83.692 78.277 83.692 32.657 0 56.843-19.039 65.726-27.225 5.27-4.857 13.596-4.039 17.82 1.738l19.865 27.17a11.947 11.947 0 0 1-1.152 15.518z\"></path>
            </svg>
            CHAKHGUEREEV LIOMA . 2023
        </h5>

        <h5>Tous droits réservés. Powered by Symfony 6</h5>
    </footer>
{% endblock %}
", "home/index.html.twig", "X:\\Programmes\\xampp\\htdocs\\chakhguereevdev\\templates\\home\\index.html.twig");
    }
}
