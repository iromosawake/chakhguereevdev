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
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
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
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
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
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

\t<div class=\"container px-4\">

\t\t<section id=\"about\" class=\"container-fluid\">
\t\t\t<div class=\"col-xs-8 col-md-4 profile-picture\">
\t\t\t\t<img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/photo_perso2.png"), "html", null, true);
        echo "\" class=\"rounded-circle\" alt=\"photo_profile\"/>
\t\t\t</div>

\t\t\t<div class=\"heading\">
\t\t\t\t<h1>Hello, moi c'est Lioma</h1>
\t\t\t\t<h3>Développeur web</h3>
\t\t\t\t<a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("documents/CV.pdf"), "html", null, true);
        echo "\" class=\"boutton1\" target=\"_blank\">Télécharger CV</a>
\t\t\t</div>


\t\t\t<div class=\"row\" id=\"about_desc\">
\t\t\t\t<hr>
\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t<h6>Contact</h6>
\t\t\t\t\t<a href=\"mailto:lioma.chakhguereev.sio@gmail.com\">Contactez-moi par mail
\t\t\t\t\t</a>
\t\t\t\t\t<p>
\t\t\t\t\t\t<br>Clermont-Ferrand, France
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<h3>À propos de moi</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<p>Passionné de développement personnel, en quête d'évolution constante.\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                Je lis des livres sur le sujet chaque matin durant ma routine matinale.<br>
\t\t\t\t\t\t\tÉtant de nature curieuse et autodidacte, je sais m'adapter et apprendre rapidement, et ce, en touchant à des domaines de l'informatique très divers.<br>
\t\t\t\t\t\t\tJe souhaite rester le plus polyvalent possible, bien que je m'intéresse principalement aux technologies web.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t\t<h4>Mes qualités</h4>
\t\t\t\t\t<h5>Un côté technique
\t\t\t\t\t</h5>
\t\t\t\t\tDu fait de mon Bac Pro Systèmes Electroniques et Numériques, j'ai travaillé en tant que dépanneur d'appareils électroniques chez
\t\t\t\t\t<a target=\"_blank\" href=\"https://electronikservice.com/\">Electronik Service</a>
\t\t\t\t\tà Clermont Ferrand. Ce qui m'a appris des techniques de recherche de panne comme diviser le problème en deux.<br>C'est à dire par exemple déjà à analyser 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsi c'est un problème plutôt électronique ou mécanique, d'alimentation primaire ou secondaire.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tJ'applique lorsque c'est possible le même processus lors de ma recherche de bug,le problème provient du code back end? De l'affichage? Uu de la base de données?\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              J'applique lorsque c'est possible le même procéssus lors de ma recheche de bug, est au niveau du code back end, de l'affichage ou de la base de données.

\t\t\t\t\t<h5>Curieux</h5>
\t\t\t\t\tJe me suis intéressé à la relation sociale, comprendre le besoin client demande à être très attentif et de poser les bonnes questions.
\t\t\t\t\tJe développe ma curiosité aussi dans mes relations de tous les jours, une des bonnes pratiques tiré du livre de Dale Carnegie
\t\t\t\t\t<a target=\"_blank\" href=\"https://www.google.fr/books/edition/Comment_se_faire_des_amis/TsPLPoS1Q-EC?hl=fr&gbpv=1&printsec=frontcover\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\">Comment se faire des amis</a>.
\t\t\t\t\t<h5>Autodidacte</h5>
\t\t\t\t\tDans mon parcours, j'ai fait deux formations encadrées par pôle emploi qui m'ont beaucoup apportées.
\t\t\t\t\tMais je trouve qu'il n'y a rien de plus efficace et plus satisfaisant que de chercher les solutions et apprendre sois même.\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            Le portfolio que vous consultez est le fruit de cet apprentissage.

\t\t\t\t\t<h5>Trilingue</h5>
\t\t\t\t\tJe parle le français, l'<a target=\"_blank\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("documents/toic.pdf"), "html", null, true);
        echo "\">anglais</a>
\t\t\t\t\tet le russe. C'est aussi de là que vient ma capacité à apprendre les langages informatiques.\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        Cela me permet aussi de m'informer à l'aide des ressources pouvant venir d'autres pays.
\t\t\t\t</p>
\t\t\t</div>
\t\t</section>


\t\t<section id=\"skills\">
\t\t\t<div class=\"red-divider\"></div>
\t\t\t<div class=\"heading\">
\t\t\t\t<h2>Compétences</h2>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:85%\">
\t\t\t\t\t\t\t\t\t<h5>BOOTSTRAP CSS
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:85%\">
\t\t\t\t\t\t\t\t\t<h5>PHP SYMFONY
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:90%\">
\t\t\t\t\t\t\t\t\t<h5>JAVASCRIPT
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:85%\">
\t\t\t\t\t\t\t\t\t<h5>C# .NET
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:85%\">
\t\t\t\t\t\t\t\t\t<h5>SQL
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:90%\">
\t\t\t\t\t\t\t\t\t<h5>ANGULAR
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section id=\"experience\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"white-divider\"></div>
\t\t\t\t<div class=\"heading\">
\t\t\t\t\t<h2>Expérience progessionelle</h2>
\t\t\t\t</div>
\t\t\t\t<ul class=\"timeline\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"timeline-badge\">
\t\t\t\t\t\t\t<i class=\"bi bi-briefcase-fill\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"timeline-panel-container\">
\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t<h5>Albatec</h5>
\t\t\t\t\t\t\t\t\t<h6>Développeur PHP Symfony 3.6</h6>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-calendar-alt\">
\t\t\t\t\t\t\t\t\t\t\tMars - Juillet 2018</i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"timeline-badge\">
\t\t\t\t\t\t\t<i class=\"bi bi-briefcase-fill\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"timeline-panel-container-inverted\">
\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t<h5>Dans Nos Coeurs</h5>
\t\t\t\t\t\t\t\t\t<h6>Développeur PHP Symfony</h6>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-calendar-alt\">
\t\t\t\t\t\t\t\t\t\t\tMai - Août 2017</i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"timeline-badge\">
\t\t\t\t\t\t\t<i class=\"bi bi-briefcase-fill\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"timeline-panel-container\">
\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t<h5>Next Media</h5>
\t\t\t\t\t\t\t\t\t<h6>Développeur PHP</h6>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-calendar-alt\">
\t\t\t\t\t\t\t\t\t\t\tMai - Août 2017</i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</section>

\t\t<section id=\"education\">
\t\t\t<div class=\"red-divider\"></div>
\t\t\t<div class=\"heading\">
\t\t\t\t<h2>Formation</h2>
\t\t\t</div>
\t\t\t<table class=\"table text-left\">
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">2021 - 2022</th>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("documents/dotNet Comp.pdf"), "html", null, true);
        echo "\">Formation Dev Ops Dot Net</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>399 Heures, Institut de la PME, Clermont Ferrand</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">2017 - 2018</th>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a target=\"_blank\" href=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("documents/tedi_comp.pdf"), "html", null, true);
        echo "\">Formation Technicien d'Etude et de Développement Informatique</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>6 mois, Human Booster, Clermont Ferrand</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">2013 - 2014</th>
\t\t\t\t\t\t<td>Licence Pro Méthodes et Outils de Développement Informatique</td>
\t\t\t\t\t\t<td>Campus des Cézeaux, Clermont Ferrand</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">2011 - 2013</th>
\t\t\t\t\t\t<td>BTS Système Informatique aux Organisations</td>
\t\t\t\t\t\t<td>Godefroy de Bouillon JB de la Salle, Clermont Ferrand</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">2008 - 2011</th>
\t\t\t\t\t\t<td>Bac Pro Electronique numérique</td>
\t\t\t\t\t\t<td>Lycée Professionnel Camille Claudel, Clermont Ferrand</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</section>

\t\t<section id=\"portfolio\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"white-divider\"></div>
\t\t\t\t<div class=\"heading\">
\t\t\t\t\t<h2>Portfolio</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<a href=\"https://github.com/iromosawake/projetPOEC\" target=\"_blank\">
\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/hometraining.png"), "html", null, true);
        echo "\" alt=\"alt\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<a href=\"https://github.com/iromosawake/atelier_electronik\" target=\"_blank\">
\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/atelier_electronik.png"), "html", null, true);
        echo "\" alt=\"alt\"/>
\t\t\t\t\t\t</a>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\">
\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/hola_muscu.png"), "html", null, true);
        echo "\" alt=\"alt\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t</div>
\t<footer class=\"text-center\">
\t\t<a href=\"#about\">
\t\t\t<i class=\"fas fa-chevron-up\"></i>
\t\t</a>
\t\t<h5>
\t\t\t<svg stroke=\"currentColor\" fill=\"currentColor\" stroke-width=\"0\" viewbox=\"0 0 512 512\" height=\"1.5em\" width=\"1.5em\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t<path d=\"M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 448c-110.532 0-200-89.451-200-200 0-110.531 89.451-200 200-200 110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200zm107.351-101.064c-9.614 9.712-45.53 41.396-104.065 41.396-82.43 0-140.484-61.425-140.484-141.567 0-79.152 60.275-139.401 139.762-139.401 55.531 0 88.738 26.62 97.593 34.779a11.965 11.965 0 0 1 1.936 15.322l-18.155 28.113c-3.841 5.95-11.966 7.282-17.499 2.921-8.595-6.776-31.814-22.538-61.708-22.538-48.303 0-77.916 35.33-77.916 80.082 0 41.589 26.888 83.692 78.277 83.692 32.657 0 56.843-19.039 65.726-27.225 5.27-4.857 13.596-4.039 17.82 1.738l19.865 27.17a11.947 11.947 0 0 1-1.152 15.518z\"></path>
\t\t\t</svg>
\t\t\tCHAKHGUEREEV LIOMA . 2023</h5>

\t\t<h5>Tous droits réservés. Powered by Symfony 6</h5>
\t</footer>
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
        return array (  411 => 258,  402 => 252,  394 => 247,  359 => 215,  349 => 208,  211 => 73,  164 => 29,  155 => 23,  145 => 17,  135 => 16,  123 => 13,  118 => 12,  108 => 11,  96 => 8,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}CHAKHGUEREEV
{% endblock %}

{% block javascripts %}
\t{{ parent() }}
\t<script src=\"{{ asset('js/cv_responsive_animations.js') }}\" type=\"text/javascript\"></script>
{% endblock %}

{% block stylesheets %}
\t{{ parent() }}
\t<link href=\"{{ asset('styles/cv_style.css') }}\" rel=\"stylesheet\" type=\"text/css\"/>
{% endblock %}

{% block body %}
\t{{ parent() }}

\t<div class=\"container px-4\">

\t\t<section id=\"about\" class=\"container-fluid\">
\t\t\t<div class=\"col-xs-8 col-md-4 profile-picture\">
\t\t\t\t<img src=\"{{ asset('images/photo_perso2.png') }}\" class=\"rounded-circle\" alt=\"photo_profile\"/>
\t\t\t</div>

\t\t\t<div class=\"heading\">
\t\t\t\t<h1>Hello, moi c'est Lioma</h1>
\t\t\t\t<h3>Développeur web</h3>
\t\t\t\t<a href=\"{{ asset('documents/CV.pdf') }}\" class=\"boutton1\" target=\"_blank\">Télécharger CV</a>
\t\t\t</div>


\t\t\t<div class=\"row\" id=\"about_desc\">
\t\t\t\t<hr>
\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t<h6>Contact</h6>
\t\t\t\t\t<a href=\"mailto:lioma.chakhguereev.sio@gmail.com\">Contactez-moi par mail
\t\t\t\t\t</a>
\t\t\t\t\t<p>
\t\t\t\t\t\t<br>Clermont-Ferrand, France
\t\t\t\t\t</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t<div>
\t\t\t\t\t\t<h3>À propos de moi</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<div>
\t\t\t\t\t\t<p>Passionné de développement personnel, en quête d'évolution constante.\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                Je lis des livres sur le sujet chaque matin durant ma routine matinale.<br>
\t\t\t\t\t\t\tÉtant de nature curieuse et autodidacte, je sais m'adapter et apprendre rapidement, et ce, en touchant à des domaines de l'informatique très divers.<br>
\t\t\t\t\t\t\tJe souhaite rester le plus polyvalent possible, bien que je m'intéresse principalement aux technologies web.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t\t<h4>Mes qualités</h4>
\t\t\t\t\t<h5>Un côté technique
\t\t\t\t\t</h5>
\t\t\t\t\tDu fait de mon Bac Pro Systèmes Electroniques et Numériques, j'ai travaillé en tant que dépanneur d'appareils électroniques chez
\t\t\t\t\t<a target=\"_blank\" href=\"https://electronikservice.com/\">Electronik Service</a>
\t\t\t\t\tà Clermont Ferrand. Ce qui m'a appris des techniques de recherche de panne comme diviser le problème en deux.<br>C'est à dire par exemple déjà à analyser 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tsi c'est un problème plutôt électronique ou mécanique, d'alimentation primaire ou secondaire.
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tJ'applique lorsque c'est possible le même processus lors de ma recherche de bug,le problème provient du code back end? De l'affichage? Uu de la base de données?\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t              J'applique lorsque c'est possible le même procéssus lors de ma recheche de bug, est au niveau du code back end, de l'affichage ou de la base de données.

\t\t\t\t\t<h5>Curieux</h5>
\t\t\t\t\tJe me suis intéressé à la relation sociale, comprendre le besoin client demande à être très attentif et de poser les bonnes questions.
\t\t\t\t\tJe développe ma curiosité aussi dans mes relations de tous les jours, une des bonnes pratiques tiré du livre de Dale Carnegie
\t\t\t\t\t<a target=\"_blank\" href=\"https://www.google.fr/books/edition/Comment_se_faire_des_amis/TsPLPoS1Q-EC?hl=fr&gbpv=1&printsec=frontcover\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\">Comment se faire des amis</a>.
\t\t\t\t\t<h5>Autodidacte</h5>
\t\t\t\t\tDans mon parcours, j'ai fait deux formations encadrées par pôle emploi qui m'ont beaucoup apportées.
\t\t\t\t\tMais je trouve qu'il n'y a rien de plus efficace et plus satisfaisant que de chercher les solutions et apprendre sois même.\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t            Le portfolio que vous consultez est le fruit de cet apprentissage.

\t\t\t\t\t<h5>Trilingue</h5>
\t\t\t\t\tJe parle le français, l'<a target=\"_blank\" href=\"{{ asset('documents/toic.pdf') }}\">anglais</a>
\t\t\t\t\tet le russe. C'est aussi de là que vient ma capacité à apprendre les langages informatiques.\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t        Cela me permet aussi de m'informer à l'aide des ressources pouvant venir d'autres pays.
\t\t\t\t</p>
\t\t\t</div>
\t\t</section>


\t\t<section id=\"skills\">
\t\t\t<div class=\"red-divider\"></div>
\t\t\t<div class=\"heading\">
\t\t\t\t<h2>Compétences</h2>
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:85%\">
\t\t\t\t\t\t\t\t\t<h5>BOOTSTRAP CSS
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:85%\">
\t\t\t\t\t\t\t\t\t<h5>PHP SYMFONY
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:90%\">
\t\t\t\t\t\t\t\t\t<h5>JAVASCRIPT
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:85%\">
\t\t\t\t\t\t\t\t\t<h5>C# .NET
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"85\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:85%\">
\t\t\t\t\t\t\t\t\t<h5>SQL
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"90\" aria-value-min=\"0\" aria-valuemax=\"100\" style=\"width:90%\">
\t\t\t\t\t\t\t\t\t<h5>ANGULAR
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section id=\"experience\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"white-divider\"></div>
\t\t\t\t<div class=\"heading\">
\t\t\t\t\t<h2>Expérience progessionelle</h2>
\t\t\t\t</div>
\t\t\t\t<ul class=\"timeline\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"timeline-badge\">
\t\t\t\t\t\t\t<i class=\"bi bi-briefcase-fill\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"timeline-panel-container\">
\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t<h5>Albatec</h5>
\t\t\t\t\t\t\t\t\t<h6>Développeur PHP Symfony 3.6</h6>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-calendar-alt\">
\t\t\t\t\t\t\t\t\t\t\tMars - Juillet 2018</i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"timeline-badge\">
\t\t\t\t\t\t\t<i class=\"bi bi-briefcase-fill\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"timeline-panel-container-inverted\">
\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t<h5>Dans Nos Coeurs</h5>
\t\t\t\t\t\t\t\t\t<h6>Développeur PHP Symfony</h6>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-calendar-alt\">
\t\t\t\t\t\t\t\t\t\t\tMai - Août 2017</i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>

\t\t\t\t\t<li>
\t\t\t\t\t\t<div class=\"timeline-badge\">
\t\t\t\t\t\t\t<i class=\"bi bi-briefcase-fill\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"timeline-panel-container\">
\t\t\t\t\t\t\t<div class=\"timeline-panel\">
\t\t\t\t\t\t\t\t<div class=\"timeline-heading\">
\t\t\t\t\t\t\t\t\t<h5>Next Media</h5>
\t\t\t\t\t\t\t\t\t<h6>Développeur PHP</h6>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted\">
\t\t\t\t\t\t\t\t\t\t<i class=\"far fa-calendar-alt\">
\t\t\t\t\t\t\t\t\t\t\tMai - Août 2017</i>
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</section>

\t\t<section id=\"education\">
\t\t\t<div class=\"red-divider\"></div>
\t\t\t<div class=\"heading\">
\t\t\t\t<h2>Formation</h2>
\t\t\t</div>
\t\t\t<table class=\"table text-left\">
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">2021 - 2022</th>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a target=\"_blank\" href=\"{{ asset('documents/dotNet Comp.pdf') }}\">Formation Dev Ops Dot Net</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>399 Heures, Institut de la PME, Clermont Ferrand</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">2017 - 2018</th>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a target=\"_blank\" href=\"{{ asset('documents/tedi_comp.pdf') }}\">Formation Technicien d'Etude et de Développement Informatique</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>6 mois, Human Booster, Clermont Ferrand</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">2013 - 2014</th>
\t\t\t\t\t\t<td>Licence Pro Méthodes et Outils de Développement Informatique</td>
\t\t\t\t\t\t<td>Campus des Cézeaux, Clermont Ferrand</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">2011 - 2013</th>
\t\t\t\t\t\t<td>BTS Système Informatique aux Organisations</td>
\t\t\t\t\t\t<td>Godefroy de Bouillon JB de la Salle, Clermont Ferrand</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"row\">2008 - 2011</th>
\t\t\t\t\t\t<td>Bac Pro Electronique numérique</td>
\t\t\t\t\t\t<td>Lycée Professionnel Camille Claudel, Clermont Ferrand</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</section>

\t\t<section id=\"portfolio\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"white-divider\"></div>
\t\t\t\t<div class=\"heading\">
\t\t\t\t\t<h2>Portfolio</h2>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<a href=\"https://github.com/iromosawake/projetPOEC\" target=\"_blank\">
\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"{{ asset('images/hometraining.png') }}\" alt=\"alt\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<a href=\"https://github.com/iromosawake/atelier_electronik\" target=\"_blank\">
\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"{{ asset('images/atelier_electronik.png') }}\" alt=\"alt\"/>
\t\t\t\t\t\t</a>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t<a href=\"#\" target=\"_blank\">
\t\t\t\t\t\t\t<img class=\"img-thumbnail\" src=\"{{ asset('images/hola_muscu.png') }}\" alt=\"alt\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t</div>
\t<footer class=\"text-center\">
\t\t<a href=\"#about\">
\t\t\t<i class=\"fas fa-chevron-up\"></i>
\t\t</a>
\t\t<h5>
\t\t\t<svg stroke=\"currentColor\" fill=\"currentColor\" stroke-width=\"0\" viewbox=\"0 0 512 512\" height=\"1.5em\" width=\"1.5em\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t<path d=\"M256 8C119.033 8 8 119.033 8 256s111.033 248 248 248 248-111.033 248-248S392.967 8 256 8zm0 448c-110.532 0-200-89.451-200-200 0-110.531 89.451-200 200-200 110.532 0 200 89.451 200 200 0 110.532-89.451 200-200 200zm107.351-101.064c-9.614 9.712-45.53 41.396-104.065 41.396-82.43 0-140.484-61.425-140.484-141.567 0-79.152 60.275-139.401 139.762-139.401 55.531 0 88.738 26.62 97.593 34.779a11.965 11.965 0 0 1 1.936 15.322l-18.155 28.113c-3.841 5.95-11.966 7.282-17.499 2.921-8.595-6.776-31.814-22.538-61.708-22.538-48.303 0-77.916 35.33-77.916 80.082 0 41.589 26.888 83.692 78.277 83.692 32.657 0 56.843-19.039 65.726-27.225 5.27-4.857 13.596-4.039 17.82 1.738l19.865 27.17a11.947 11.947 0 0 1-1.152 15.518z\"></path>
\t\t\t</svg>
\t\t\tCHAKHGUEREEV LIOMA . 2023</h5>

\t\t<h5>Tous droits réservés. Powered by Symfony 6</h5>
\t</footer>
{% endblock %}
", "home/index.html.twig", "X:\\Programmes\\xampp\\htdocs\\chakhguereevdev\\templates\\home\\index.html.twig");
    }
}
