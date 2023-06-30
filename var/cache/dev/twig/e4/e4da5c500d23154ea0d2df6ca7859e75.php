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

/* contact/index.html.twig */
class __TwigTemplate_801b64bf0846b94bdb6cd8ceef6f47c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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

        echo "Contactez moi";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 6
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(function () {
            \$('#contact_form').on('submit', function (e) {
                e.preventDefault();
                \$('.thank-you').remove();
                \$('.comments').empty();
                var postdata = \$('#contact_form').serialize();
                console.log(postdata);
                \$.ajax({
                    type: 'POST',
                    url: '";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "attributes", [], "any", false, false, false, 17), "get", [0 => "_route"], "method", false, false, false, 17));
        echo "',
                    data: postdata,
                    dataType: 'json',
                    success: function (json) {                        
                         if(json.isSuccess){
                         \$('#contact_form').append(\"<p class='thank-you'>Votre message a bien été envoyé. Merci de m'avoir contacté :)</p>\");
                         \$('#contact_form')[0].reset();
                         }
                         else{
                         \$('#prenom + .comments').html(json.iprenom_erreur);
                         \$('#nom + .comments').html(json.inom_erreur);
                         \$('#mail + .comments').html(json.imail_erreur);
                         \$('#tel + .comments').html(json.itel_erreur);
                         \$('#message + .comments').html(json.imess_erreur);
                         } 
                    }
                });
            });

        });

    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/contact.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 48
        echo "
    <div class=\"container\">

        <div class=\"divider\"></div>

        <div class=\"heading\">
            <h2>Contactez-moi</h2>
        </div>

        <div class=\"row justify-content-lg-center\">
            <div class=\"col-lg-10\">

                <form id=\"contact_form\" method=\"post\" action=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "attributes", [], "any", false, false, false, 60), "get", [0 => "_route"], "method", false, false, false, 60));
        echo "\" role=\"form\">
                    <div class=\"row\">

                        <div class=\"form-group col-md-6\">
                            <label for=\"prenom\">Prénom<span class=\"blue\"> *</span></label>
                            <input type=\"text\" class=\"form-control\" name=\"prenom\" id=\"prenom\" placeholder=\"Severus\" value=\"\">
                            <p class=\"comments\"></p> 
                        </div>

                        <div class=\"form-group col-md-6\">
                            <label for=\"nom\">Nom<span class=\"blue\"> *</span></label>
                            <input type=\"text\" class=\"form-control\" name=\"nom\" id=\"nom\" placeholder=\"Snape\" value=\"\">
                            <p class=\"comments\"></p> 
                        </div>

                        <div class=\"form-group col-md-6\">
                            <label for=\"mail\">Email<span class=\"blue\"> *</span></label>
                            <input type=\"text\" class=\"form-control\" name=\"mail\" id=\"mail\" placeholder=\"serverus.snape@gmail.com\" value=\"\">
                            <p class=\"comments\"></p> 
                        </div>

                        <div class=\"form-group col-md-6\">
                            <label for=\"tel\">Téléphone<span class=\"blue\"> *</span></label>
                            <input type=\"tel\" pattern=\"[0-9]{10}\" maxlength=\"10\" class=\"form-control\" name=\"tel\" id=\"tel\" placeholder=\"0602030405\" value=\"\">
                            <p class=\"comments\"></p> 
                        </div>

                        <div class=\"form-group col-md-12\">
                            <label for=\"message\">Message<span class=\"blue\"> *</span></label>
                            <textarea type=\"textarea\" id=\"message\" name=\"message\" rows=\"5\" cols=\"10\" class=\"form-control\" placeholder=\"Votre message\" ></textarea>
                            <p class=\"comments\"></p> 
                        </div>

                        <div class=\"form-group col-md-12\">
                            <p class=\"blue\"><strong>* Ces informations sont requises</strong></p>                             
                        </div>

                    </div>

                    <button type=\"submit\" class=\"boutton1\">Envoyer</button>



                </form>

            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 60,  176 => 48,  166 => 47,  153 => 43,  148 => 42,  138 => 41,  105 => 17,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contactez moi{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$(function () {
            \$('#contact_form').on('submit', function (e) {
                e.preventDefault();
                \$('.thank-you').remove();
                \$('.comments').empty();
                var postdata = \$('#contact_form').serialize();
                console.log(postdata);
                \$.ajax({
                    type: 'POST',
                    url: '{{ path(app.request.attributes.get('_route')) }}',
                    data: postdata,
                    dataType: 'json',
                    success: function (json) {                        
                         if(json.isSuccess){
                         \$('#contact_form').append(\"<p class='thank-you'>Votre message a bien été envoyé. Merci de m'avoir contacté :)</p>\");
                         \$('#contact_form')[0].reset();
                         }
                         else{
                         \$('#prenom + .comments').html(json.iprenom_erreur);
                         \$('#nom + .comments').html(json.inom_erreur);
                         \$('#mail + .comments').html(json.imail_erreur);
                         \$('#tel + .comments').html(json.itel_erreur);
                         \$('#message + .comments').html(json.imess_erreur);
                         } 
                    }
                });
            });

        });

    </script>
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"{{asset('styles/contact.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>

{% endblock %}

{% block body %}

    <div class=\"container\">

        <div class=\"divider\"></div>

        <div class=\"heading\">
            <h2>Contactez-moi</h2>
        </div>

        <div class=\"row justify-content-lg-center\">
            <div class=\"col-lg-10\">

                <form id=\"contact_form\" method=\"post\" action=\"{{ path(app.request.attributes.get('_route')) }}\" role=\"form\">
                    <div class=\"row\">

                        <div class=\"form-group col-md-6\">
                            <label for=\"prenom\">Prénom<span class=\"blue\"> *</span></label>
                            <input type=\"text\" class=\"form-control\" name=\"prenom\" id=\"prenom\" placeholder=\"Severus\" value=\"\">
                            <p class=\"comments\"></p> 
                        </div>

                        <div class=\"form-group col-md-6\">
                            <label for=\"nom\">Nom<span class=\"blue\"> *</span></label>
                            <input type=\"text\" class=\"form-control\" name=\"nom\" id=\"nom\" placeholder=\"Snape\" value=\"\">
                            <p class=\"comments\"></p> 
                        </div>

                        <div class=\"form-group col-md-6\">
                            <label for=\"mail\">Email<span class=\"blue\"> *</span></label>
                            <input type=\"text\" class=\"form-control\" name=\"mail\" id=\"mail\" placeholder=\"serverus.snape@gmail.com\" value=\"\">
                            <p class=\"comments\"></p> 
                        </div>

                        <div class=\"form-group col-md-6\">
                            <label for=\"tel\">Téléphone<span class=\"blue\"> *</span></label>
                            <input type=\"tel\" pattern=\"[0-9]{10}\" maxlength=\"10\" class=\"form-control\" name=\"tel\" id=\"tel\" placeholder=\"0602030405\" value=\"\">
                            <p class=\"comments\"></p> 
                        </div>

                        <div class=\"form-group col-md-12\">
                            <label for=\"message\">Message<span class=\"blue\"> *</span></label>
                            <textarea type=\"textarea\" id=\"message\" name=\"message\" rows=\"5\" cols=\"10\" class=\"form-control\" placeholder=\"Votre message\" ></textarea>
                            <p class=\"comments\"></p> 
                        </div>

                        <div class=\"form-group col-md-12\">
                            <p class=\"blue\"><strong>* Ces informations sont requises</strong></p>                             
                        </div>

                    </div>

                    <button type=\"submit\" class=\"boutton1\">Envoyer</button>



                </form>

            </div>
        </div>
    </div>

{% endblock %}
", "contact/index.html.twig", "X:\\Programmes\\xampp\\htdocs\\chakhguereevdev\\templates\\contact\\index.html.twig");
    }
}
