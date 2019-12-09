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

/* createannoncepage.html.twig */
class __TwigTemplate_d9ee0763468fde570235b20c34513f4053adcb3e612c0fd7a3c485acdacbe7b4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "createannoncepage.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "createannoncepage.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "createannoncepage.html.twig", 1);
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

        echo "Créer une annonce";
        
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

    ";
        // line 9
        echo "    <div class=\"alignbutton\">
        <button class = \"button\"><a href=\" ";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profilpage");
        echo "\">Mon Profil</a></button>
        <button class = \"button\"><a href=\" ";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">Deconnexion</a></button>

    </div>


    <div class=\"menu\">


            <form action=\"";
        // line 19
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
                <input type=\"text\" class=\"form-control\" id=\"inputTitle\" placeholder=\"Ex : Canapé\" name=\"title\">
            </div>

            <div class=\"form-group\">
                <label for=\"inputDescription\">Description de l'annonce</label>
                <input type=\"text\" class=\"form-control\" id=\"inputDescription\" placeholder=\"Ex : Canapé rouge très confortable, bon état\" name=\"description\">
            </div>

            <div class=\"price\">
                <label for=\"inputPrice\">Prix (en €)</label>
                <input type=\"text\" class=\"form-control\" id=\"inputPrice\" placeholder=\"Ex : 100€\" name=\"price\">
            </div>
            <button type=\"submit\" class = \"blueButton\"><a></a>Poster l'annonce</button>

        </form>
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "createannoncepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 19,  103 => 11,  99 => 10,  96 => 9,  91 => 6,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Créer une annonce{% endblock %}

{% block body %}
    <img src=\"images/logo.png\" class=\"logo\" >
    <h1>{{ title }}</h1>

    {#style=\"width:20%\"#}
    <div class=\"alignbutton\">
        <button class = \"button\"><a href=\" {{ path('profilpage') }}\">Mon Profil</a></button>
        <button class = \"button\"><a href=\" {{ path('homepage') }}\">Deconnexion</a></button>

    </div>


    <div class=\"menu\">


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
                <input type=\"text\" class=\"form-control\" id=\"inputTitle\" placeholder=\"Ex : Canapé\" name=\"title\">
            </div>

            <div class=\"form-group\">
                <label for=\"inputDescription\">Description de l'annonce</label>
                <input type=\"text\" class=\"form-control\" id=\"inputDescription\" placeholder=\"Ex : Canapé rouge très confortable, bon état\" name=\"description\">
            </div>

            <div class=\"price\">
                <label for=\"inputPrice\">Prix (en €)</label>
                <input type=\"text\" class=\"form-control\" id=\"inputPrice\" placeholder=\"Ex : 100€\" name=\"price\">
            </div>
            <button type=\"submit\" class = \"blueButton\"><a></a>Poster l'annonce</button>

        </form>
    </div>



{% endblock %}", "createannoncepage.html.twig", "D:\\Cours\\Année 2\\Web\\hebergement\\lepetitkooing\\templates\\createannoncepage.html.twig");
    }
}
