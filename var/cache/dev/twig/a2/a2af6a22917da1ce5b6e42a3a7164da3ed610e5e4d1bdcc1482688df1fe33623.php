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

/* modifierAnnonce.html.twig */
class __TwigTemplate_ab1f869e82bd9832825be970e58c17bb0e9d33cf78026fae6b0956c568f88711 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modifierAnnonce.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modifierAnnonce.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "modifierAnnonce.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Modifier annonce";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <img src=\"images/logo.png\" class=\"logo\" >
    <h1>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h1>

    <div class=\"alignbutton\">
        <button class = \"button\"><a href=\" ";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profilpage");
        echo "\">Mon Profil</a></button>
        <button class = \"button\"><a href=\" ";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Deconnexion</a></button>

    </div>


    <div class=\"menu\">


        <form action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("newAnnonce", ["annonceId" => twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\" method=\"post\">

            <form action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annoncecreeepage");
        echo "\" method=\"post\">

                <div class=\"form-group\">
                    <select name=\"subCategory\" id=\"categorie-select\" size=\"1\">
                        <optgroup label=\"MAISON\">
                            <option>Ameublement</option>
                            <option>Décoration</option>
                        </optgroup>
                        <optgroup label=\"MULTIMEDIA\">
                            <option>Informatique</option>
                            <option>Consoles et jeux vidéos</option>
                        </optgroup>
                        <optgroup label=\"VEHICULES\">
                            <option>Voitures</option>
                            <option>Motos</option>
                        </optgroup>
                        <optgroup label=\"IMMOBILIER\">
                            <option>Ventes</option>
                            <option>Locations</option>
                        </optgroup>
                        <optgroup label=\"MODE\">
                            <option>Vetements</option>
                            <option>Chaussures</option>
                        </optgroup>
                        <optgroup label=\"LOISIRS\">
                            <option>Musique</option>
                            <option>Livre</option>
                        </optgroup>
                        <optgroup label=\"SERVICES\">
                            <option>Billeterie</option>
                            <option>Covoiturage</option>
                        </optgroup>
                        <optgroup label=\"AUTRES\">
                            <option>Divers</option>
                            <option>Toilettes</option>
                        </optgroup>

                    </select>
                </div>


            <div class=\"form-group\">
                <label for=\"inputTitle\">Titre de l'annonce</label>
                <input type=\"text\" class=\"form-control\" id=\"inputTitle\" placeholder=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 63, $this->source); })()), "title", [], "any", false, false, false, 63), "html", null, true);
        echo "\" name=\"title\">
            </div>

            <div class=\"form-group\">
                <label for=\"inputDescription\">Description de l'annonce</label>
                <input type=\"text\" class=\"form-control\" id=\"inputDescription\" placeholder=\"";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 68, $this->source); })()), "description", [], "any", false, false, false, 68), "html", null, true);
        echo "\" name=\"description\">
            </div>

            <div class=\"price\">
                <label for=\"inputPrice\">Prix (en €)</label>
                <input type=\"text\" class=\"form-control\" id=\"inputPrice\" placeholder=";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 73, $this->source); })()), "price", [], "any", false, false, false, 73), "html", null, true);
        echo " name=\"price\">
            </div>
            <button type=\"submit\" class = \"blueButton\"><a></a>Poster l'annonce</button>

        </form>
        </form>
    </div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "modifierAnnonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 73,  171 => 68,  163 => 63,  117 => 20,  112 => 18,  101 => 10,  97 => 9,  91 => 6,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Modifier annonce{% endblock %}

{% block body %}
    <img src=\"images/logo.png\" class=\"logo\" >
    <h1>{{ title }}</h1>

    <div class=\"alignbutton\">
        <button class = \"button\"><a href=\" {{ path('profilpage') }}\">Mon Profil</a></button>
        <button class = \"button\"><a href=\" {{ path('homepage') }}\">Deconnexion</a></button>

    </div>


    <div class=\"menu\">


        <form action=\"{{ path('newAnnonce', {annonceId: annonce.id}) }}\" method=\"post\">

            <form action=\"{{ path('annoncecreeepage') }}\" method=\"post\">

                <div class=\"form-group\">
                    <select name=\"subCategory\" id=\"categorie-select\" size=\"1\">
                        <optgroup label=\"MAISON\">
                            <option>Ameublement</option>
                            <option>Décoration</option>
                        </optgroup>
                        <optgroup label=\"MULTIMEDIA\">
                            <option>Informatique</option>
                            <option>Consoles et jeux vidéos</option>
                        </optgroup>
                        <optgroup label=\"VEHICULES\">
                            <option>Voitures</option>
                            <option>Motos</option>
                        </optgroup>
                        <optgroup label=\"IMMOBILIER\">
                            <option>Ventes</option>
                            <option>Locations</option>
                        </optgroup>
                        <optgroup label=\"MODE\">
                            <option>Vetements</option>
                            <option>Chaussures</option>
                        </optgroup>
                        <optgroup label=\"LOISIRS\">
                            <option>Musique</option>
                            <option>Livre</option>
                        </optgroup>
                        <optgroup label=\"SERVICES\">
                            <option>Billeterie</option>
                            <option>Covoiturage</option>
                        </optgroup>
                        <optgroup label=\"AUTRES\">
                            <option>Divers</option>
                            <option>Toilettes</option>
                        </optgroup>

                    </select>
                </div>


            <div class=\"form-group\">
                <label for=\"inputTitle\">Titre de l'annonce</label>
                <input type=\"text\" class=\"form-control\" id=\"inputTitle\" placeholder=\"{{ annonce.title }}\" name=\"title\">
            </div>

            <div class=\"form-group\">
                <label for=\"inputDescription\">Description de l'annonce</label>
                <input type=\"text\" class=\"form-control\" id=\"inputDescription\" placeholder=\"{{ annonce.description }}\" name=\"description\">
            </div>

            <div class=\"price\">
                <label for=\"inputPrice\">Prix (en €)</label>
                <input type=\"text\" class=\"form-control\" id=\"inputPrice\" placeholder={{ annonce.price }} name=\"price\">
            </div>
            <button type=\"submit\" class = \"blueButton\"><a></a>Poster l'annonce</button>

        </form>
        </form>
    </div>




{% endblock %}", "modifierAnnonce.html.twig", "D:\\Cours\\Année 2\\Web\\hebergement\\lepetitkooing\\templates\\modifierAnnonce.html.twig");
    }
}
