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

/* user/panier.html.twig */
class __TwigTemplate_b4f61544bf2536b4a18820e63fae45baf22a4fa1ae082122d075ab606d709b2a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'vue' => [$this, 'block_vue'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/panier.html.twig"));

        $this->parent = $this->loadTemplate("base/base.html.twig", "user/panier.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_vue($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vue"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "vue"));

        // line 4
        echo "
<h1>Votre Panier</h1>
    <table class=\"table\" style=\"border-spacing: 75px 1rem\">
        <thead>
            <th>Libelle</th>
            <th>prix unitaire</th>
            <th>Quantite</th>
            <th>prix total</th>
            <th>Action</th>
        </thead>
        <tbody>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paniers"]) || array_key_exists("paniers", $context) ? $context["paniers"] : (function () { throw new RuntimeError('Variable "paniers" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["i"] => $context["panier"]) {
            // line 16
            echo "                <tr>
                     <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "produit", [], "any", false, false, false, 17), "libelle", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
                     <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "produit", [], "any", false, false, false, 18), "prix", [], "any", false, false, false, 18), "html", null, true);
            echo " €</td>
                     <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["panier"], "quantite", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                     <td>";
            // line 20
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["panier"], "produit", [], "any", false, false, false, 20), "prix", [], "any", false, false, false, 20) * twig_get_attribute($this->env, $this->source, $context["panier"], "quantite", [], "any", false, false, false, 20)), "html", null, true);
            echo " €</td>
                     <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete_product", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21), "index" => $context["i"]]), "html", null, true);
            echo "\">Supprimer</a></td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['panier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                <tr>
                    <td>Total</td>
                    <td></td>
                    <td>
                        ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 28, $this->source); })()), 0, [], "array", false, false, false, 28), "html", null, true);
        echo "
                    </td>

                    <td>
                        ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 32, $this->source); })()), 1, [], "array", false, false, false, 32), "html", null, true);
        echo " €
                    </td>
                </tr>
        </tbody>
    </table>
    <br><br><br>
    <button type=\"submit\" style=\"padding: 5px 15px;\">Commander</button>
    <button type=\"submit\" style=\"padding: 5px 15px;\"><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_delete_panier", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39), "role" => 0]), "html", null, true);
        echo "\" style=\"color: #303030\">Vider</a></button>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "user/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 39,  126 => 32,  119 => 28,  113 => 24,  104 => 21,  100 => 20,  96 => 19,  92 => 18,  88 => 17,  85 => 16,  81 => 15,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base/base.html.twig' %}

{% block vue %}

<h1>Votre Panier</h1>
    <table class=\"table\" style=\"border-spacing: 75px 1rem\">
        <thead>
            <th>Libelle</th>
            <th>prix unitaire</th>
            <th>Quantite</th>
            <th>prix total</th>
            <th>Action</th>
        </thead>
        <tbody>
            {% for i, panier in paniers %}
                <tr>
                     <td>{{ panier.produit.libelle }}</td>
                     <td>{{ panier.produit.prix }} €</td>
                     <td>{{ panier.quantite }}</td>
                     <td>{{ panier.produit.prix * panier.quantite }} €</td>
                     <td><a href=\"{{ path('user_delete_product', {'id' : app.user.id, 'index' : i}) }}\">Supprimer</a></td>
                </tr>
            {% endfor %}
                <tr>
                    <td>Total</td>
                    <td></td>
                    <td>
                        {{ reponse[0] }}
                    </td>

                    <td>
                        {{ reponse[1] }} €
                    </td>
                </tr>
        </tbody>
    </table>
    <br><br><br>
    <button type=\"submit\" style=\"padding: 5px 15px;\">Commander</button>
    <button type=\"submit\" style=\"padding: 5px 15px;\"><a href=\"{{ path('user_delete_panier', {'id' : app.user.id , 'role' : 0}) }}\" style=\"color: #303030\">Vider</a></button>
{% endblock %}
", "user/panier.html.twig", "C:\\wamp64\\www\\ProjetWeb\\site\\templates\\user\\panier.html.twig");
    }
}
