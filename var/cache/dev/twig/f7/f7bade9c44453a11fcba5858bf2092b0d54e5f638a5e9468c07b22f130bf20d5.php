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

/* profil.html.twig */
class __TwigTemplate_b62edd6bb82c4a3c40942fdca0f60170625a3041e35d47c7c642c4e68e174002 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profil.html.twig", 1);
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

        echo "Mon Profil";
        
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
        echo "<img src=\"images/logo.png\" class=\"logo\" >
<h1>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h1>

    ";
        // line 9
        echo "    <div class=\"alignbutton\">
        <button class = \"button\"><a href=\" ";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("annoncespage");
        echo "\">Annonces</a></button>
        <button class = \"button\"><a href=\" ";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Deconnexion</a></button>

    </div>

    <div class=\"creerAnnonce\">
        <form action=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createannoncepage");
        echo "\" method=\"post\">
            <button type=\"submit\" class = \"blueButton\" >Créer une annonce</button>
        </form>
        <br>
        <form action=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mesannoncespage");
        echo "\" method=\"post\">
            <button type=\"submit\" class = \"blueButton\" >Gérer mes annonces</button>
        </form>
    </div>

    <br>
    <br>
    <p class = \"titre\">Mes informations</p>
    <div class=\"menu\">
        <div class=\"form-group\">
            <form action=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("changepassword");
        echo "\" method=\"post\">
                <label for=\"inputUsername\">Changer de mot de passe : </label>
                <label for=\"inputUsername\" class=\"sr-only\">Username</label>
                <input type=\"password\"  name=\"OldPassword\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Ancien mot de passe\" required>
                <br>
                <label for=\"inputPassword\" class=\"sr-only\">Password</label>
                <input type=\"password\" name=\"NewPassword\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Nouveau mot de passe\" required>
                <br>
                <button class=\"blueButton\" type=\"submit\"><a></a>Valider</button>
                <br>
                <p class =\"change\">";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["change"]) || array_key_exists("change", $context) ? $context["change"] : (function () { throw new RuntimeError('Variable "change" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "</p>
            </form>
        </div>
    </div>


    <div class=\"menu\">
        <div class=\"form-group\">
            <form action=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("changeusername");
        echo "\" method=\"post\">
                <label for=\"inputUsername\">Changer de nom d'uilisateur : </label>
                <br>
                <br>
                <p>Nom d'utilisateur actuel : ";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["username"]) || array_key_exists("username", $context) ? $context["username"] : (function () { throw new RuntimeError('Variable "username" does not exist.', 52, $this->source); })()), "html", null, true);
        echo "</p>
                <label for=\"inputUsername\" class=\"sr-only\">Password</label>
                <input type=\"text\" name=\"NewUsername\" id=\"inputUsername\" class=\"form-control\" placeholder=\"Nouveau nom d'utilisateur\" required>
                <br>
                <button class=\"blueButton\" type=\"submit\"><a></a>Valider</button>
                <br>
                <p class =\"changeUsername\">";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["change"]) || array_key_exists("change", $context) ? $context["change"] : (function () { throw new RuntimeError('Variable "change" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "</p>
            </form>
        </div>
    </div>






    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "profil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 58,  162 => 52,  155 => 48,  144 => 40,  131 => 30,  118 => 20,  111 => 16,  103 => 11,  99 => 10,  96 => 9,  91 => 6,  88 => 5,  78 => 4,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Mon Profil{% endblock %}

{% block body %}
<img src=\"images/logo.png\" class=\"logo\" >
<h1>{{ title }}</h1>

    {#style=\"width:20%\"#}
    <div class=\"alignbutton\">
        <button class = \"button\"><a href=\" {{ path('annoncespage') }}\">Annonces</a></button>
        <button class = \"button\"><a href=\" {{ path('app_logout') }}\">Deconnexion</a></button>

    </div>

    <div class=\"creerAnnonce\">
        <form action=\"{{ path('createannoncepage') }}\" method=\"post\">
            <button type=\"submit\" class = \"blueButton\" >Créer une annonce</button>
        </form>
        <br>
        <form action=\"{{ path('mesannoncespage') }}\" method=\"post\">
            <button type=\"submit\" class = \"blueButton\" >Gérer mes annonces</button>
        </form>
    </div>

    <br>
    <br>
    <p class = \"titre\">Mes informations</p>
    <div class=\"menu\">
        <div class=\"form-group\">
            <form action=\"{{ path('changepassword') }}\" method=\"post\">
                <label for=\"inputUsername\">Changer de mot de passe : </label>
                <label for=\"inputUsername\" class=\"sr-only\">Username</label>
                <input type=\"password\"  name=\"OldPassword\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Ancien mot de passe\" required>
                <br>
                <label for=\"inputPassword\" class=\"sr-only\">Password</label>
                <input type=\"password\" name=\"NewPassword\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Nouveau mot de passe\" required>
                <br>
                <button class=\"blueButton\" type=\"submit\"><a></a>Valider</button>
                <br>
                <p class =\"change\">{{ change }}</p>
            </form>
        </div>
    </div>


    <div class=\"menu\">
        <div class=\"form-group\">
            <form action=\"{{ path('changeusername') }}\" method=\"post\">
                <label for=\"inputUsername\">Changer de nom d'uilisateur : </label>
                <br>
                <br>
                <p>Nom d'utilisateur actuel : {{ username }}</p>
                <label for=\"inputUsername\" class=\"sr-only\">Password</label>
                <input type=\"text\" name=\"NewUsername\" id=\"inputUsername\" class=\"form-control\" placeholder=\"Nouveau nom d'utilisateur\" required>
                <br>
                <button class=\"blueButton\" type=\"submit\"><a></a>Valider</button>
                <br>
                <p class =\"changeUsername\">{{ change }}</p>
            </form>
        </div>
    </div>






    {% endblock %}", "profil.html.twig", "D:\\Cours\\Année 2\\Web\\hebergement\\lepetitkooing\\templates\\profil.html.twig");
    }
}
