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

/* produit/productList.html.twig */
class __TwigTemplate_8683e15860b572a891d96bae9d6503f53d0c78a33c323df55ab98e81620a94e1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/productList.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/productList.html.twig"));

        $this->parent = $this->loadTemplate("base/base.html.twig", "produit/productList.html.twig", 1);
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
        echo "    <form method=\"post\">
        <table class=\"table\" style=\"border-spacing: 75px 1rem\">
            <thead>
            <th>Libellé</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Choix</th>
            </thead>
            <tbody>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 14
            echo "            <tr>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "libelle", [], "any", false, false, false, 15), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "prix", [], "any", false, false, false, 16), "html", null, true);
            echo " €</td>
                <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantite", [], "any", false, false, false, 17), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 19
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["product"], "quantite", [], "any", false, false, false, 19), 0))) {
                // line 20
                echo "                    ";
            } else {
                // line 21
                echo "                        <label>
                            <select name=\"choix[]\">
                                ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(0, twig_get_attribute($this->env, $this->source, $context["product"], "quantite", [], "any", false, false, false, 23)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 24
                    echo "                                    <option value=\"";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "\" >";
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                            </select>
                        </label>
                    ";
            }
            // line 29
            echo "                </td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </tr>
            </tbody>
        </table>
        <br><br><br><button type=\"submit\" style=\"padding: 5px 15px;\">Ajouter au Panier</button>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "produit/productList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 31,  128 => 29,  123 => 26,  112 => 24,  108 => 23,  104 => 21,  101 => 20,  99 => 19,  94 => 17,  90 => 16,  86 => 15,  83 => 14,  79 => 13,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base/base.html.twig'%}

{% block vue %}
    <form method=\"post\">
        <table class=\"table\" style=\"border-spacing: 75px 1rem\">
            <thead>
            <th>Libellé</th>
            <th>Prix</th>
            <th>Stock</th>
            <th>Choix</th>
            </thead>
            <tbody>
            {% for product in products %}
            <tr>
                <td>{{product.libelle}}</td>
                <td>{{product.prix}} €</td>
                <td>{{product.quantite}}</td>
                <td>
                    {% if product.quantite == 0 %}
                    {% else %}
                        <label>
                            <select name=\"choix[]\">
                                {% for i in 0..product.quantite %}
                                    <option value=\"{{ i }}\" >{{ i }}</option>
                                {% endfor %}
                            </select>
                        </label>
                    {% endif %}
                </td>
                {% endfor %}
            </tr>
            </tbody>
        </table>
        <br><br><br><button type=\"submit\" style=\"padding: 5px 15px;\">Ajouter au Panier</button>
    </form>
{% endblock %}
", "produit/productList.html.twig", "C:\\wamp64\\www\\ProjetWeb\\site\\templates\\produit\\productList.html.twig");
    }
}
