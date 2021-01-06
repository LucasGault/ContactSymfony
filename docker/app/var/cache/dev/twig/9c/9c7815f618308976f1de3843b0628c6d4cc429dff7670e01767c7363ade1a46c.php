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
class __TwigTemplate_957090556658fe947fc5fbbc241b2db5dfa467719fb4a80195d10559444c8533 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Contact index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<header>
    <nav class=\"navbar navbar-expand-lg\" id=\"navbar\">
        <a class=\"navbar-brand\" href=\"#\">Contactony</a>

        <div class=\"form-inline\" style=\"margin:auto; padding-left:10%;\">
            ";
        // line 11
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 11, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 12
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 13, $this->source); })()), "firstname", [], "any", false, false, false, 13), 'widget', ["label" => " ", "attr" => ["placeholder" => "rechercher"]]);
        echo "
            <button class=\"btn\" style=\"width:15%\" type=\"submit\">
                <svg aria-hidden=\"true\" style=\"width:50%\" focusable=\"false\" data-prefix=\"far\" data-icon=\"search\"
                    role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"
                    class=\"svg-inline--fa fa-search fa-w-16 fa-3x\">
                    <path fill=\"#fbd46d\"
                        d=\"M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z\"
                        class=\"\">
                    </path>
                </svg>
            </button>
        </div>

        <form class=\"form-inline\">
            <a class=\"btn btn-danger\" style=\"position:fixed; right:20px\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Déconnexion</a>
        </form>
    </nav>
</header>
<div class=\"page\">

";
        // line 33
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)) {
            // line 34
            echo "  

    <table class=\"table\">
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Phonenumber</th>
                <th>Email</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "contacts", [], "any", false, false, false, 47));
            $context['_iterated'] = false;
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                // line 48
                echo "        
            <tr>
                <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "firstname", [], "any", false, false, false, 50), "html", null, true);
                echo "</td>
                <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "lastname", [], "any", false, false, false, 51), "html", null, true);
                echo "</td>
                <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "phonenumber", [], "any", false, false, false, 52), "html", null, true);
                echo "</td>
                <td>";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
                <td>
                    <a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\">edit</a>
                    ";
                // line 56
                echo twig_include($this->env, $context, "contact/_delete_form.html.twig");
                echo "
                </td>
            </tr>
        ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 60
                echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "        </tbody>
    </table>
";
        }
        // line 67
        echo "

    <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_new");
        echo "\">Create new</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  208 => 69,  204 => 67,  199 => 64,  190 => 60,  173 => 56,  169 => 55,  164 => 53,  160 => 52,  156 => 51,  152 => 50,  148 => 48,  130 => 47,  115 => 34,  113 => 33,  104 => 27,  87 => 13,  82 => 12,  80 => 11,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact index{% endblock %}

{% block body %}
<header>
    <nav class=\"navbar navbar-expand-lg\" id=\"navbar\">
        <a class=\"navbar-brand\" href=\"#\">Contactony</a>

        <div class=\"form-inline\" style=\"margin:auto; padding-left:10%;\">
            {% form_theme searchForm 'bootstrap_4_layout.html.twig' %}
            {{ form_start(searchForm) }}
            {{ form_widget(searchForm.firstname, {'label': \" \", 'attr': {'placeholder': 'rechercher'}}) }}
            <button class=\"btn\" style=\"width:15%\" type=\"submit\">
                <svg aria-hidden=\"true\" style=\"width:50%\" focusable=\"false\" data-prefix=\"far\" data-icon=\"search\"
                    role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"
                    class=\"svg-inline--fa fa-search fa-w-16 fa-3x\">
                    <path fill=\"#fbd46d\"
                        d=\"M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z\"
                        class=\"\">
                    </path>
                </svg>
            </button>
        </div>

        <form class=\"form-inline\">
            <a class=\"btn btn-danger\" style=\"position:fixed; right:20px\" href=\"{{path('app_logout')}}\">Déconnexion</a>
        </form>
    </nav>
</header>
<div class=\"page\">

{% if app.user %}
  

    <table class=\"table\">
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Phonenumber</th>
                <th>Email</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
            {% for contact in app.user.contacts %}
        
            <tr>
                <td>{{ contact.firstname }}</td>
                <td>{{ contact.lastname }}</td>
                <td>{{ contact.phonenumber }}</td>
                <td>{{ contact.email }}</td>
                <td>
                    <a href=\"{{ path('contact_edit', {'id': contact.id}) }}\">edit</a>
                    {{ include('contact/_delete_form.html.twig') }}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endif %}


    <a href=\"{{ path('contact_new') }}\">Create new</a>
{% endblock %}
", "contact/index.html.twig", "/var/www/project/templates/contact/index.html.twig");
    }
}
