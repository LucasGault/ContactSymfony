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

/* login.html.twig */
class __TwigTemplate_c53fc47b7cb4caf5f0fd552bff9ebac636cf8e2c2ae7cd20bbde1eebd411caa5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<section>
        <div class=\"container\">
            <div class=\"user singinBx\">
                <div class=\"imgBx\"><img src=\"img1.jpg\" alt=\"\"></div>
                <div class=\"formBx\">
                    <form>
                        <h2>Sign In</h2>
                        <input type=\"text\" name=\"\" placeholder=\"Username\">
                        <input type=\"password\" name=\"\" placeholder=\"Password\">
                        <input type=\"submit\" name=\"\" value=\"Login\">
                        <p class=\"signup\">Dont't have an account <a href=\"#\" onclick=\"toggleForm();\">Sign Up</a></p>
                    </form>
                </div>
            </div>
            <div class=\"user singupBx\">
                <div class=\"formBx\">
                    <form>
                        <h2>Create an Account</h2>
                        <input type=\"text\" name=\"\" placeholder=\"Username\">
                        <input type=\"email\" name=\"\" placeholder=\"Email\">
                        <input type=\"password\" name=\"\" placeholder=\"Create Password\">
                        <input type=\"password\" name=\"\" placeholder=\"Confirm Password\">

                        <input type=\"submit\" name=\"\" value=\"Sign Up\">
                        <p class=\"signup\">Already have an account <a href=\"#\" onclick=\"toggleForm();\">Sign In</a></p>
                    </form>
                </div>
                <div class=\"imgBx\"><img src=\"img2.jpg\" alt=\"\"></div>

            </div>
        </div>
    </section>
    <script src=\"js.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}
<section>
        <div class=\"container\">
            <div class=\"user singinBx\">
                <div class=\"imgBx\"><img src=\"img1.jpg\" alt=\"\"></div>
                <div class=\"formBx\">
                    <form>
                        <h2>Sign In</h2>
                        <input type=\"text\" name=\"\" placeholder=\"Username\">
                        <input type=\"password\" name=\"\" placeholder=\"Password\">
                        <input type=\"submit\" name=\"\" value=\"Login\">
                        <p class=\"signup\">Dont't have an account <a href=\"#\" onclick=\"toggleForm();\">Sign Up</a></p>
                    </form>
                </div>
            </div>
            <div class=\"user singupBx\">
                <div class=\"formBx\">
                    <form>
                        <h2>Create an Account</h2>
                        <input type=\"text\" name=\"\" placeholder=\"Username\">
                        <input type=\"email\" name=\"\" placeholder=\"Email\">
                        <input type=\"password\" name=\"\" placeholder=\"Create Password\">
                        <input type=\"password\" name=\"\" placeholder=\"Confirm Password\">

                        <input type=\"submit\" name=\"\" value=\"Sign Up\">
                        <p class=\"signup\">Already have an account <a href=\"#\" onclick=\"toggleForm();\">Sign In</a></p>
                    </form>
                </div>
                <div class=\"imgBx\"><img src=\"img2.jpg\" alt=\"\"></div>

            </div>
        </div>
    </section>
    <script src=\"js.js\"></script>
{% endblock %}", "login.html.twig", "/var/www/project/templates/login.html.twig");
    }
}
