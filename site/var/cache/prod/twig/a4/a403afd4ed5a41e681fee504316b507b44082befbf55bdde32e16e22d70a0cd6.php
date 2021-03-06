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

/* base/base.html.twig */
class __TwigTemplate_62bf56139706faa75caeb317854cb9e9c4c7969a9d9ac40e4ab25f2ad071a502 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'vue' => [$this, 'block_vue'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base/base-vide.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base/base-vide.html.twig", "base/base.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "GPUStore";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style_text.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
";
    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 53
        echo "        </header>
        <div class=\"vue\">

                ";
        // line 56
        $this->displayBlock('vue', $context, $blocks);
        // line 90
        echo "        </div>
        <footer style=\"position: absolute;bottom: 0;left: 0;right: 0;\">
            ";
        // line 92
        $this->displayBlock('footer', $context, $blocks);
        // line 95
        echo "
        </footer>

";
    }

    // line 13
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "        <header class=\"header\">
            ";
        // line 16
        echo "            ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 16)) {
            // line 17
            echo "                <img style=\"width:100%\"  src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/anonymous.jpg"), "html", null, true);
            echo "\" alt=\"anonymous\">

            ";
        } else {
            // line 20
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 20), "roles", [], "any", false, false, false, 20));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 21
                echo "                    ";
                if ((0 === twig_compare($context["role"], "ROLE_SUPER_ADMIN"))) {
                    // line 22
                    echo "                    <img style=\"width:100%\"  src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/superAdmin.jpg"), "html", null, true);
                    echo "\" alt=\"superadmin\">

                    ";
                } elseif ((0 === twig_compare(                // line 24
$context["role"], "ROLE_ADMIN"))) {
                    // line 25
                    echo "                        <img style=\"width:100%\" height=\"100\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/admin.jpg"), "html", null, true);
                    echo "\" alt=\"admin\">

                    ";
                } elseif ((0 === twig_compare(                // line 27
$context["role"], "ROLE_CLIENT"))) {
                    // line 28
                    echo "                        <img style=\"width:100%\"  height=\"100\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/userTest.jpg"), "html", null, true);
                    echo "\" alt=\"client\">

                    ";
                }
                // line 31
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            ";
        }
        // line 33
        echo "                <nav class=\"nav\">
                    ";
        // line 35
        echo "                    <a style=\"font-size: 35px;line-height: 80px;padding: 50px;font-weight: bold;\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site");
        echo "\" >GPUStore</a>
                    <ul>
                        ";
        // line 38
        echo "                        ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 38)) {
            // line 39
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SiteController::routeAnonyme"));
            echo "
                        ";
        } else {
            // line 41
            echo "                            ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\AdminController::routeSuperAdmin"));
            echo "
                            ";
            // line 42
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SiteController::routeAdmin"));
            echo "
                            ";
            // line 43
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SiteController::routeUtilisateur"));
            echo "

                            <li>
                                <a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_app_logout");
            echo "\">D??connexion</a>
                            </li>
                        ";
        }
        // line 49
        echo "
                    </ul>
                </nav>
    ";
    }

    // line 56
    public function block_vue($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "                    <h1>Bienvenue sur notre site de vente de cartes graphiques !</h1>
                    ";
        // line 58
        if ( !twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 58)) {
            // line 59
            echo "                        <br>
                        <span>SESSION ANONYME</span>
                        <br>
                        <br>
                        <p>Vous n'??tes pas connect?? sur notre site. N'h??sitez pas ?? vous inscrire ou vous connecter afin de pouvoir consulter nos produits !</p>
                    ";
        } else {
            // line 65
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 65), "roles", [], "any", false, false, false, 65));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 66
                echo "                        ";
                if ((0 === twig_compare($context["role"], "ROLE_SUPER_ADMIN"))) {
                    // line 67
                    echo "                            <br>
                            <span>SESSION SUPER ADMINISTRATEUR</span>
                            <br>
                            <br>
                            <p>Bonjour ";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 71), "prenom", [], "any", false, false, false, 71), "html", null, true);
                    echo ", prenez soins de nos admins !</p>

                        ";
                } elseif ((0 === twig_compare(                // line 73
$context["role"], "ROLE_ADMIN"))) {
                    // line 74
                    echo "                            <br>
                            <span>SESSION ADMIN</span>
                            <br>
                            <br>
                            <p>Bonjour ";
                    // line 78
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 78), "prenom", [], "any", false, false, false, 78), "html", null, true);
                    echo ", prenez soins de nos clients !</p>

                        ";
                } elseif ((0 === twig_compare(                // line 80
$context["role"], "ROLE_CLIENT"))) {
                    // line 81
                    echo "                            <br>
                            <span>SESSION CLIENT</span>
                            <br>
                            <br>
                            <p> Bonjour ";
                    // line 85
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 85), "prenom", [], "any", false, false, false, 85), "html", null, true);
                    echo ", N'h??site pas ?? regarder nos produits peut ??tre que tu auras un coup de coeur !</p>
                        ";
                }
                // line 87
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                    ";
        }
        // line 89
        echo "                ";
    }

    // line 92
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "                <img style=\"width:100%\"  height=\"200\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/footerTest.jpg"), "html", null, true);
        echo "\" alt=\"anonymous\">
            ";
    }

    public function getTemplateName()
    {
        return "base/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 93,  278 => 92,  274 => 89,  271 => 88,  265 => 87,  260 => 85,  254 => 81,  252 => 80,  247 => 78,  241 => 74,  239 => 73,  234 => 71,  228 => 67,  225 => 66,  220 => 65,  212 => 59,  210 => 58,  207 => 57,  203 => 56,  196 => 49,  190 => 46,  184 => 43,  180 => 42,  175 => 41,  169 => 39,  166 => 38,  160 => 35,  157 => 33,  154 => 32,  148 => 31,  141 => 28,  139 => 27,  133 => 25,  131 => 24,  125 => 22,  122 => 21,  117 => 20,  110 => 17,  107 => 16,  104 => 14,  100 => 13,  93 => 95,  91 => 92,  87 => 90,  85 => 56,  80 => 53,  77 => 13,  73 => 12,  67 => 8,  62 => 7,  58 => 6,  51 => 4,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/base.html.twig", "C:\\wamp64\\www\\ProjetWeb\\site\\templates\\base\\base.html.twig");
    }
}
