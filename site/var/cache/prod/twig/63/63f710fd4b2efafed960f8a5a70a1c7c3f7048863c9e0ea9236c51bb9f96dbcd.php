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

/* security/login.html.twig */
class __TwigTemplate_a1d5f4c197b19baa0f8fc3c0ffe573e4736460396dc4903835bf867ad62e8f4f extends Template
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
            'header' => [$this, 'block_header'],
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
        $this->parent = $this->loadTemplate("base/base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Log in!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 26
        echo "    <form method=\"post\">
        ";
        // line 27
        if (($context["error"] ?? null)) {
            // line 28
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 28), "security"), "html", null, true);
            echo "</div>
        ";
        }
        // line 30
        echo "
        ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 31)) {
            // line 32
            echo "            <div class=\"mb-3\">
                You are logged in as ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 33), "username", [], "any", false, false, false, 33), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
            </div>
        ";
        }
        // line 36
        echo "
        <h1 class=\"h3 mb-3 font-weight-normal\">Please sign in</h1>
        <label for=\"inputUsername\">Username</label>
        <input type=\"text\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" name=\"_username\" id=\"inputUsername\" class=\"form-control\" autocomplete=\"_username\" required autofocus>
        <label for=\"inputPassword\">Password</label>
        <input type=\"password\" name=\"_password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

        <input type=\"hidden\" name=\"_csrf_token\"
               value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\"
        >
            <br>
            <br>

            <div class=\"checkbox mb-3\">
                <label>
                    <input type=\"checkbox\" name=\"_remember_me\"> Remember me
                </label>
            </div>

            <br>
            <br>

        <button class=\"btn btn-lg btn-primary\" type=\"submit\">
            Sign in
        </button>
    </form>
";
    }

    // line 6
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "        <nav class=\"nav\">
            ";
        // line 9
        echo "            <a style=\"font-size: 35px;line-height: 80px;padding: 50px;font-weight: bold;\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("site");
        echo "\" >GPUStore</a>
            <ul>
                ";
        // line 12
        echo "                ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 12)) {
            // line 13
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SiteController::routeAnonyme"));
            echo "
                ";
        } else {
            // line 15
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\AdminController::routeSuperAdmin"));
            echo "
                    ";
            // line 16
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SiteController::routeAdmin"));
            echo "
                    ";
            // line 17
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SiteController::routeUtilisateur"));
            echo "

                    <li>
                        <a href=\"";
            // line 20
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_app_logout");
            echo "\">Déconnexion</a>
                    </li>
                ";
        }
        // line 23
        echo "            </ul>
        </nav>
    ";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 23,  162 => 20,  156 => 17,  152 => 16,  147 => 15,  141 => 13,  138 => 12,  132 => 9,  129 => 7,  125 => 6,  102 => 44,  94 => 39,  89 => 36,  81 => 33,  78 => 32,  76 => 31,  73 => 30,  67 => 28,  65 => 27,  62 => 26,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "C:\\wamp64\\www\\ProjetWeb\\site\\templates\\security\\login.html.twig");
    }
}
