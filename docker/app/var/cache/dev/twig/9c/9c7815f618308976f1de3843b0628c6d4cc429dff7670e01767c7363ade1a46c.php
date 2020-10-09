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

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
<header>
    <nav class=\"navbar navbar-expand-lg\" id=\"navbar\">
        <a class=\"navbar-brand\" href=\"#\">Contactony</a>

        <div class=\"form-inline\" style=\"margin:auto; padding-left:10%;\">
            ";
        // line 9
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 9, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 10
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 11, $this->source); })()), "firstname", [], "any", false, false, false, 11), 'widget', ["label" => " ", "attr" => ["placeholder" => "rechercher"]]);
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
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Déconnexion</a>
        </form>
    </nav>
</header>
<div class=\"page\" style=\"margin-top:15%\">




    <div class=\"container\">



        ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 39
            echo "
        <div class=\"row justify-content-center\">
            <form class=\"col col-lg-6\" id=\"container\" action=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\"
                method=\"post\" style=\"width:100%\">
                <div class=\"shadow-lg card mb-4\" id=\"contactCard\">
                    <div class=\"shadow card-header\" id=\"contactName\">
                        <h5 class=\"card-title\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "firstname", [], "any", false, false, false, 45), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "lastname", [], "any", false, false, false, 45), "html", null, true);
            echo "</h5>
                    </div>
                    <div class=\"card-body\" id=\"contactInfo\">
                        <svg style=\"padding-bottom:3px\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"far\"
                            data-icon=\"phone\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"
                            class=\"svg-inline--fa fa-phone fa-w-16 fa-2x\">
                            <path fill=\"currentColor\"
                                d=\"M476.5 22.9L382.3 1.2c-21.6-5-43.6 6.2-52.3 26.6l-43.5 101.5c-8 18.6-2.6 40.6 13.1 53.4l40 32.7C311 267.8 267.8 311 215.4 339.5l-32.7-40c-12.8-15.7-34.8-21.1-53.4-13.1L27.7 329.9c-20.4 8.7-31.5 30.7-26.6 52.3l21.7 94.2c4.8 20.9 23.2 35.5 44.6 35.5C312.3 512 512 313.7 512 67.5c0-21.4-14.6-39.8-35.5-44.6zM69.3 464l-20.9-90.7 98.2-42.1 55.7 68.1c98.8-46.4 150.6-98 197-197l-68.1-55.7 42.1-98.2L464 69.3C463 286.9 286.9 463 69.3 464z\"
                                class=\"\"></path>
                        </svg>
                        <span> ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "phonenumber", [], "any", false, false, false, 55), "html", null, true);
            echo " </span>
                    </div>
                </div>

                <div class=\"contactButtons\">




                </div>
                <div>
                    <input id=\"buttonSupress\" type=\"hidden\" name=\"_method\" value=\"DELETE\">

                    <input id=\"buttonSupress\" type=\"submit\" value \"delete\">
                </div>
            </form>
        </div>


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "

    </div>
    <div class=\"addContact\">
        <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#ModalForm\"> <svg aria-hidden=\"true\"
                focusable=\"false\" data-prefix=\"far\" data-icon=\"plus\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                viewBox=\"0 0 384 512\" class=\"svg-inline--fa fa-plus fa-w-12 fa-2x\">
                <path fill=\"currentColor\"
                    d=\"M368 224H224V80c0-8.84-7.16-16-16-16h-32c-8.84 0-16 7.16-16 16v144H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h144v144c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V288h144c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16z\"
                    class=\"\"></path>
            </svg>
        </button>
        <span id=\"addText\" data-toggle=\"modal\" data-target=\"#ModalForm\"> Ajouter un contact </button>
        </span>
    </div>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"ModalForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalLabelFrom\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"ModalLabelFrom\">Nouveau Contact</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <form action=\"index.php\" method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"formGroupInputNom\">Nom</label>
                            <input type=\"text\" class=\"form-control\" id=\"formGroupInputNom\" placeholder=\"Nom\"
                                name=\"lastname\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"formGroupInputPrenom\">Prénom</label>
                            <input type=\"text\" class=\"form-control\" id=\"formGroupInputPrenom\" placeholder=\"Prénom\"
                                name=\"firstname\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"formGroupInputMail\">Email</label>
                            <input type=\"text\" class=\"form-control\" id=\"formGroupInputMail\" placeholder=\"Email\"
                                name=\"mail\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"formGroupInputTel\">Téléphone</label>
                            <input type=\"text\" class=\"form-control\" id=\"formGroupInputTel\" placeholder=\"Téléphone\"
                                name=\"phone\">
                        </div>
                    </form>

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
                </div>
            </div>
        </div>
    </div>


</div>

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
        return array (  163 => 75,  137 => 55,  122 => 45,  115 => 41,  111 => 39,  107 => 38,  91 => 25,  74 => 11,  69 => 10,  67 => 9,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
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
<div class=\"page\" style=\"margin-top:15%\">




    <div class=\"container\">



        {% for contact in contacts %}

        <div class=\"row justify-content-center\">
            <form class=\"col col-lg-6\" id=\"container\" action=\"{{ path('app_contact_delete', {id:contact.id}) }}\"
                method=\"post\" style=\"width:100%\">
                <div class=\"shadow-lg card mb-4\" id=\"contactCard\">
                    <div class=\"shadow card-header\" id=\"contactName\">
                        <h5 class=\"card-title\">{{contact.firstname}} {{contact.lastname}}</h5>
                    </div>
                    <div class=\"card-body\" id=\"contactInfo\">
                        <svg style=\"padding-bottom:3px\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"far\"
                            data-icon=\"phone\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"
                            class=\"svg-inline--fa fa-phone fa-w-16 fa-2x\">
                            <path fill=\"currentColor\"
                                d=\"M476.5 22.9L382.3 1.2c-21.6-5-43.6 6.2-52.3 26.6l-43.5 101.5c-8 18.6-2.6 40.6 13.1 53.4l40 32.7C311 267.8 267.8 311 215.4 339.5l-32.7-40c-12.8-15.7-34.8-21.1-53.4-13.1L27.7 329.9c-20.4 8.7-31.5 30.7-26.6 52.3l21.7 94.2c4.8 20.9 23.2 35.5 44.6 35.5C312.3 512 512 313.7 512 67.5c0-21.4-14.6-39.8-35.5-44.6zM69.3 464l-20.9-90.7 98.2-42.1 55.7 68.1c98.8-46.4 150.6-98 197-197l-68.1-55.7 42.1-98.2L464 69.3C463 286.9 286.9 463 69.3 464z\"
                                class=\"\"></path>
                        </svg>
                        <span> {{contact.phonenumber}} </span>
                    </div>
                </div>

                <div class=\"contactButtons\">




                </div>
                <div>
                    <input id=\"buttonSupress\" type=\"hidden\" name=\"_method\" value=\"DELETE\">

                    <input id=\"buttonSupress\" type=\"submit\" value \"delete\">
                </div>
            </form>
        </div>


        {% endfor %}


    </div>
    <div class=\"addContact\">
        <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#ModalForm\"> <svg aria-hidden=\"true\"
                focusable=\"false\" data-prefix=\"far\" data-icon=\"plus\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\"
                viewBox=\"0 0 384 512\" class=\"svg-inline--fa fa-plus fa-w-12 fa-2x\">
                <path fill=\"currentColor\"
                    d=\"M368 224H224V80c0-8.84-7.16-16-16-16h-32c-8.84 0-16 7.16-16 16v144H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h144v144c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V288h144c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16z\"
                    class=\"\"></path>
            </svg>
        </button>
        <span id=\"addText\" data-toggle=\"modal\" data-target=\"#ModalForm\"> Ajouter un contact </button>
        </span>
    </div>

    <!-- Modal -->
    <div class=\"modal fade\" id=\"ModalForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalLabelFrom\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"ModalLabelFrom\">Nouveau Contact</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <form action=\"index.php\" method=\"post\">
                        <div class=\"form-group\">
                            <label for=\"formGroupInputNom\">Nom</label>
                            <input type=\"text\" class=\"form-control\" id=\"formGroupInputNom\" placeholder=\"Nom\"
                                name=\"lastname\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"formGroupInputPrenom\">Prénom</label>
                            <input type=\"text\" class=\"form-control\" id=\"formGroupInputPrenom\" placeholder=\"Prénom\"
                                name=\"firstname\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"formGroupInputMail\">Email</label>
                            <input type=\"text\" class=\"form-control\" id=\"formGroupInputMail\" placeholder=\"Email\"
                                name=\"mail\">
                        </div>
                        <div class=\"form-group\">
                            <label for=\"formGroupInputTel\">Téléphone</label>
                            <input type=\"text\" class=\"form-control\" id=\"formGroupInputTel\" placeholder=\"Téléphone\"
                                name=\"phone\">
                        </div>
                    </form>

                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                    <button type=\"submit\" class=\"btn btn-primary\">Save changes</button>
                </div>
            </div>
        </div>
    </div>


</div>

{% endblock %}", "contact/index.html.twig", "/var/www/project/templates/contact/index.html.twig");
    }
}
