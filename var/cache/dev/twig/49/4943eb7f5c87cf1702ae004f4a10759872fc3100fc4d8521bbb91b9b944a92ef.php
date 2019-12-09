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

/* annoncesPage.html.twig */
class __TwigTemplate_2fc6b340a53210c9164d8343cf7fd3df4049e32baf79a4813ee740009415f88b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annoncesPage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "annoncesPage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "annoncesPage.html.twig", 1);
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

        echo "Toutes les annonces";
        
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
    <h1> Bonjour ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h1>


    ";
        // line 10
        echo "    <div class=\"alignbutton\">

        <button class = \"button\"><a href=\" ";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profilpage");
        echo "\">Mon profil</a></button>
        <button class = \"button\"><a href=\" ";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Deconnexion</a></button>
    </div>

    <div class = \"titre\">Annonces</div>


    <form action=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche");
        echo "\" method=\"post\">
    <div class=\"formulaireRecherche\">
        <p class=\"centrer\">Recherche : </p>
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
        <br>
        <div class=\"centrer\">
            <button type=\"submit\" class = \"blueButton\"><a></a>Valider</button>
        </div>

    </form>



    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["annonces"]) || array_key_exists("annonces", $context) ? $context["annonces"] : (function () { throw new RuntimeError('Variable "annonces" does not exist.', 67, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 68
            echo "        <div class = \"cadreAnnonce\">

            <div class = \"titreAnnonce\"><p>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "title", [], "any", false, false, false, 70), "html", null, true);
            echo "</p></div>
            <p>Catégorie : ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "category", [], "any", false, false, false, 71), "html", null, true);
            echo "</p>
            <p>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "price", [], "any", false, false, false, 72), "html", null, true);
            echo " €</p>
            <p>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "description", [], "any", false, false, false, 73), "html", null, true);
            echo "</p>
            <p>de ";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "seller", [], "any", false, false, false, 74), "username", [], "any", false, false, false, 74), "html", null, true);
            echo "</p>


        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "

    </div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "annoncesPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 79,  189 => 74,  185 => 73,  181 => 72,  177 => 71,  173 => 70,  169 => 68,  165 => 67,  114 => 19,  105 => 13,  101 => 12,  97 => 10,  91 => 6,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Toutes les annonces{% endblock %}

{% block body %}
    <img src=\"images/logo.png\" class=\"logo\" >
    <h1> Bonjour {{ title }}</h1>


    {#style=\"width:20%\"#}
    <div class=\"alignbutton\">

        <button class = \"button\"><a href=\" {{ path('profilpage') }}\">Mon profil</a></button>
        <button class = \"button\"><a href=\" {{ path('app_logout') }}\">Deconnexion</a></button>
    </div>

    <div class = \"titre\">Annonces</div>


    <form action=\"{{ path('recherche') }}\" method=\"post\">
    <div class=\"formulaireRecherche\">
        <p class=\"centrer\">Recherche : </p>
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
        <br>
        <div class=\"centrer\">
            <button type=\"submit\" class = \"blueButton\"><a></a>Valider</button>
        </div>

    </form>



    {% for a in annonces|reverse %}
        <div class = \"cadreAnnonce\">

            <div class = \"titreAnnonce\"><p>{{ a.title }}</p></div>
            <p>Catégorie : {{ a.category }}</p>
            <p>{{ a.price }} €</p>
            <p>{{ a.description }}</p>
            <p>de {{ a.seller.username }}</p>


        </div>
    {% endfor %}


    </div>




{% endblock %}", "annoncesPage.html.twig", "D:\\Cours\\Année 2\\Web\\hebergement\\lepetitkooing\\templates\\annoncesPage.html.twig");
    }
}
