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

/* base.html.twig */
class __TwigTemplate_37d9585e3c3718ec6cbc3c241038c32a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<?php declare(strict_types= 1);?>
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>
        ";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        // line 11
        echo "    </title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "

</head>
<body data-spy=\"scroll\" data-target=\".navbar\" data-offset=\"60\">
";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 9
        echo "            CHAKHGUEREEV
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./node_modules/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./node_modules/select2/dist/css/select2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=Jomhuria&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Pacifico&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap\" rel=\"stylesheet\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "    <nav class=\"navbar navbar-expand-lg bg-dark fixed-top\">
        <div class=\"container\">
            <button class=\"navbar-toggler ml-auto custom-toggler\" type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\"
                    aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"nav nav-pills mx-auto\">
                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"#about\" id=\"about_butt\">À propos de moi</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#skills\" id=\"skills_butt\">Compétences</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#experience\" id=\"experience_butt\">Expérience</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#education\" id=\"education_butt\">Formation</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#portfolio\" id=\"portfolio_butt\">Projets</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\" onclick=\"darkulaMode();\"><i id=\"darkula_mode\"
                                                                                 class=\"bi bi-brightness-low-fill\"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./node_modules/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./node_modules/select2/dist/js/select2.full.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"https://kit.fontawesome.com/7be078bdeb.js\" crossorigin=\"anonymous\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  213 => 65,  209 => 64,  204 => 63,  194 => 62,  151 => 28,  141 => 27,  123 => 15,  119 => 14,  116 => 13,  106 => 12,  95 => 9,  85 => 8,  73 => 68,  71 => 62,  69 => 27,  63 => 23,  61 => 12,  58 => 11,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php declare(strict_types= 1);?>
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>
        {% block title %}
            CHAKHGUEREEV
        {% endblock %}
    </title>
    {% block stylesheets %}

        <link rel=\"stylesheet\" href=\"{{ asset('./node_modules/bootstrap/dist/css/bootstrap.min.css') }}\" type=\"text/css\">
        <link href=\"{{ asset('./node_modules/select2/dist/css/select2.min.css') }}\" rel=\"stylesheet\"/>

        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=Jomhuria&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Pacifico&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap\" rel=\"stylesheet\">
    {% endblock %}


</head>
<body data-spy=\"scroll\" data-target=\".navbar\" data-offset=\"60\">
{% block body %}
    <nav class=\"navbar navbar-expand-lg bg-dark fixed-top\">
        <div class=\"container\">
            <button class=\"navbar-toggler ml-auto custom-toggler\" type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\"
                    aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"nav nav-pills mx-auto\">
                    <li class=\"nav-item \">
                        <a class=\"nav-link\" href=\"#about\" id=\"about_butt\">À propos de moi</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#skills\" id=\"skills_butt\">Compétences</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#experience\" id=\"experience_butt\">Expérience</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#education\" id=\"education_butt\">Formation</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#portfolio\" id=\"portfolio_butt\">Projets</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#\" onclick=\"darkulaMode();\"><i id=\"darkula_mode\"
                                                                                 class=\"bi bi-brightness-low-fill\"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

{% endblock %}
{% block javascripts %}
    <script src=\"{{ asset('./node_modules/jquery/dist/jquery.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"{{ asset('./node_modules/select2/dist/js/select2.full.min.js') }}\" type=\"text/javascript\"></script>
    <script src=\"https://kit.fontawesome.com/7be078bdeb.js\" crossorigin=\"anonymous\"></script>
{% endblock %}
</body>
</html>
", "base.html.twig", "X:\\Programmes\\xampp\\htdocs\\chakhguereevdev\\templates\\base.html.twig");
    }
}
