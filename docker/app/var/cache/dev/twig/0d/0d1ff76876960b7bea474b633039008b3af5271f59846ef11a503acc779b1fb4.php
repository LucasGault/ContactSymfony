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
class __TwigTemplate_59193161e3f6c653e7d4a8ed184e9508e3304794547ee2a7b044c75768658bc5 extends Template
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
    <nav class=\"navbar navbar-expand-lg\" style=\"position:fixed; top: 10px; width:100%\">
            <a class=\"navbar-brand\" style=\"padding-bottom:15px; color:#fbd46d; font-size:1.5em\" href=\"#\">Contactony</a>

                <div class=\"form-inline\" style=\"margin:auto; padding-left:10%;\">
                    ";
        // line 9
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 9, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 10
        echo "                    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["searchForm"]) || array_key_exists("searchForm", $context) ? $context["searchForm"] : (function () { throw new RuntimeError('Variable "searchForm" does not exist.', 11, $this->source); })()), "firstname", [], "any", false, false, false, 11), 'widget', ["label" => " ", "attr" => ["placeholder" => "rechercher"]]);
        echo "
                    <button class=\"btn\" style=\"width:15%\">
                        <svg aria-hidden=\"true\" style=\"width:50%\" focusable=\"false\" data-prefix=\"far\" data-icon=\"search\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\" class=\"svg-inline--fa fa-search fa-w-16 fa-3x\">
                            <path fill=\"#fbd46d\" d=\"M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z\" class=\"\">
                            </path>
                        </svg>
                    </button>
                </div>

                <form class=\"form-inline\" >
                    <button class=\"btn btn-danger\" style=\"position:fixed; right:20px\" type=\"submit\">Déconnexion</button>
                </form>
        </nav>
    </header>
<div class=\"page\" style=\"margin-top:15%\">

    


    <div class=\"container\">
           

    
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["contacts"]) || array_key_exists("contacts", $context) ? $context["contacts"] : (function () { throw new RuntimeError('Variable "contacts" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            echo " 
        <div class=\"row justify-content-center\" id=\"container\">
            <div class=\"col col-lg-6\">
                <div class=\"shadow-lg card mb-4\" id=\"contactCard\" >
                    <div class=\"shadow card-header\" id=\"contactName\">
                        <h5 class=\"card-title\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "firstname", [], "any", false, false, false, 39), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "lastname", [], "any", false, false, false, 39), "html", null, true);
            echo "</h5>
                    </div> 
                    <div class=\"card-body\" id=\"contactInfo\">
                    <svg style=\"padding-bottom:3px\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"far\" data-icon=\"phone\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\" class=\"svg-inline--fa fa-phone fa-w-16 fa-2x\"><path fill=\"currentColor\" d=\"M476.5 22.9L382.3 1.2c-21.6-5-43.6 6.2-52.3 26.6l-43.5 101.5c-8 18.6-2.6 40.6 13.1 53.4l40 32.7C311 267.8 267.8 311 215.4 339.5l-32.7-40c-12.8-15.7-34.8-21.1-53.4-13.1L27.7 329.9c-20.4 8.7-31.5 30.7-26.6 52.3l21.7 94.2c4.8 20.9 23.2 35.5 44.6 35.5C312.3 512 512 313.7 512 67.5c0-21.4-14.6-39.8-35.5-44.6zM69.3 464l-20.9-90.7 98.2-42.1 55.7 68.1c98.8-46.4 150.6-98 197-197l-68.1-55.7 42.1-98.2L464 69.3C463 286.9 286.9 463 69.3 464z\" class=\"\"></path></svg>
                        <span> 0";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "phonenumber", [], "any", false, false, false, 43), "html", null, true);
            echo " </span>
                    </div>
                </div>
            </div>
            <div class=\"contactButtons\" >
                <svg class=\"button\" id=\"buttonEdit\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"times\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 352 512\" class=\"svg-inline--fa fa-times fa-w-11 fa-7x\">
                    <path fill=\"#fbd46d\" d=\"M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z\" class=\"\">
                    </path>
                </svg>
                    <svg  class=\"button\" id=\"buttonSupress\" aria-hidden=\"true\" data-prefix=\"far\" data-icon=\"edit\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\" class=\"svg-inline--fa fa-edit fa-w-18 fa-3x\">
                        <path fill=\"#fbd46d\" d=\"M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z\" class=\"\">
                        </path>
                    </svg> 
                
            </div>         
        </div>
        <form action=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
            <input type=\"submit\" value \"delete\">
        </form>  
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "

    </div>
    <div class=\"addContact\" >
        <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#ModalForm\">                      <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"far\" data-icon=\"plus\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 384 512\" class=\"svg-inline--fa fa-plus fa-w-12 fa-2x\"><path fill=\"currentColor\" d=\"M368 224H224V80c0-8.84-7.16-16-16-16h-32c-8.84 0-16 7.16-16 16v144H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h144v144c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V288h144c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16z\" class=\"\"></path></svg>
        </button>
        <span id=\"addText\" data-toggle=\"modal\" data-target=\"#ModalForm\">  Ajouter un contact </button>
        </span>
    </div>

                        <!-- Modal -->
                        <div class=\"modal fade\" id=\"ModalForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalLabelFrom\" aria-hidden=\"true\">
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
                                    <input type=\"text\" class=\"form-control\" id=\"formGroupInputNom\" placeholder=\"Nom\" name=\"lastname\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"formGroupInputPrenom\">Prénom</label>
                                    <input type=\"text\" class=\"form-control\" id=\"formGroupInputPrenom\" placeholder=\"Prénom\" name=\"firstname\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"formGroupInputMail\">Email</label>
                                    <input type=\"text\" class=\"form-control\" id=\"formGroupInputMail\" placeholder=\"Email\"name=\"mail\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"formGroupInputTel\">Téléphone</label>
                                    <input type=\"text\" class=\"form-control\" id=\"formGroupInputTel\" placeholder=\"Téléphone\" name=\"phone\">
                                </div>
                                </form>

                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                <button type=\"submit\"  class=\"btn btn-primary\">Save changes</button>
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
        return array (  149 => 64,  138 => 59,  119 => 43,  110 => 39,  100 => 34,  74 => 11,  69 => 10,  67 => 9,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

    <header>
    <nav class=\"navbar navbar-expand-lg\" style=\"position:fixed; top: 10px; width:100%\">
            <a class=\"navbar-brand\" style=\"padding-bottom:15px; color:#fbd46d; font-size:1.5em\" href=\"#\">Contactony</a>

                <div class=\"form-inline\" style=\"margin:auto; padding-left:10%;\">
                    {% form_theme searchForm 'bootstrap_4_layout.html.twig' %}
                    {{ form_start(searchForm) }}
                    {{ form_widget(searchForm.firstname, {'label': \" \", 'attr': {'placeholder': 'rechercher'}}) }}
                    <button class=\"btn\" style=\"width:15%\">
                        <svg aria-hidden=\"true\" style=\"width:50%\" focusable=\"false\" data-prefix=\"far\" data-icon=\"search\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\" class=\"svg-inline--fa fa-search fa-w-16 fa-3x\">
                            <path fill=\"#fbd46d\" d=\"M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z\" class=\"\">
                            </path>
                        </svg>
                    </button>
                </div>

                <form class=\"form-inline\" >
                    <button class=\"btn btn-danger\" style=\"position:fixed; right:20px\" type=\"submit\">Déconnexion</button>
                </form>
        </nav>
    </header>
<div class=\"page\" style=\"margin-top:15%\">

    


    <div class=\"container\">
           

    
        {% for contact in contacts %} 
        <div class=\"row justify-content-center\" id=\"container\">
            <div class=\"col col-lg-6\">
                <div class=\"shadow-lg card mb-4\" id=\"contactCard\" >
                    <div class=\"shadow card-header\" id=\"contactName\">
                        <h5 class=\"card-title\">{{contact.firstname}} {{contact.lastname}}</h5>
                    </div> 
                    <div class=\"card-body\" id=\"contactInfo\">
                    <svg style=\"padding-bottom:3px\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"far\" data-icon=\"phone\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\" class=\"svg-inline--fa fa-phone fa-w-16 fa-2x\"><path fill=\"currentColor\" d=\"M476.5 22.9L382.3 1.2c-21.6-5-43.6 6.2-52.3 26.6l-43.5 101.5c-8 18.6-2.6 40.6 13.1 53.4l40 32.7C311 267.8 267.8 311 215.4 339.5l-32.7-40c-12.8-15.7-34.8-21.1-53.4-13.1L27.7 329.9c-20.4 8.7-31.5 30.7-26.6 52.3l21.7 94.2c4.8 20.9 23.2 35.5 44.6 35.5C312.3 512 512 313.7 512 67.5c0-21.4-14.6-39.8-35.5-44.6zM69.3 464l-20.9-90.7 98.2-42.1 55.7 68.1c98.8-46.4 150.6-98 197-197l-68.1-55.7 42.1-98.2L464 69.3C463 286.9 286.9 463 69.3 464z\" class=\"\"></path></svg>
                        <span> 0{{contact.phonenumber}} </span>
                    </div>
                </div>
            </div>
            <div class=\"contactButtons\" >
                <svg class=\"button\" id=\"buttonEdit\" aria-hidden=\"true\" focusable=\"false\" data-prefix=\"fas\" data-icon=\"times\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 352 512\" class=\"svg-inline--fa fa-times fa-w-11 fa-7x\">
                    <path fill=\"#fbd46d\" d=\"M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z\" class=\"\">
                    </path>
                </svg>
                    <svg  class=\"button\" id=\"buttonSupress\" aria-hidden=\"true\" data-prefix=\"far\" data-icon=\"edit\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 576 512\" class=\"svg-inline--fa fa-edit fa-w-18 fa-3x\">
                        <path fill=\"#fbd46d\" d=\"M402.3 344.9l32-32c5-5 13.7-1.5 13.7 5.7V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h273.5c7.1 0 10.7 8.6 5.7 13.7l-32 32c-1.5 1.5-3.5 2.3-5.7 2.3H48v352h352V350.5c0-2.1.8-4.1 2.3-5.6zm156.6-201.8L296.3 405.7l-90.4 10c-26.2 2.9-48.5-19.2-45.6-45.6l10-90.4L432.9 17.1c22.9-22.9 59.9-22.9 82.7 0l43.2 43.2c22.9 22.9 22.9 60 .1 82.8zM460.1 174L402 115.9 216.2 301.8l-7.3 65.3 65.3-7.3L460.1 174zm64.8-79.7l-43.2-43.2c-4.1-4.1-10.8-4.1-14.8 0L436 82l58.1 58.1 30.9-30.9c4-4.2 4-10.8-.1-14.9z\" class=\"\">
                        </path>
                    </svg> 
                
            </div>         
        </div>
        <form action=\"{{ path('app_contact_delete', {id:contact.id}) }}\" method=\"post\">
            <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
            <input type=\"submit\" value \"delete\">
        </form>  
        {% endfor %}


    </div>
    <div class=\"addContact\" >
        <button type=\"button\" class=\"btn\" data-toggle=\"modal\" data-target=\"#ModalForm\">                      <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"far\" data-icon=\"plus\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 384 512\" class=\"svg-inline--fa fa-plus fa-w-12 fa-2x\"><path fill=\"currentColor\" d=\"M368 224H224V80c0-8.84-7.16-16-16-16h-32c-8.84 0-16 7.16-16 16v144H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h144v144c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V288h144c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16z\" class=\"\"></path></svg>
        </button>
        <span id=\"addText\" data-toggle=\"modal\" data-target=\"#ModalForm\">  Ajouter un contact </button>
        </span>
    </div>

                        <!-- Modal -->
                        <div class=\"modal fade\" id=\"ModalForm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"ModalLabelFrom\" aria-hidden=\"true\">
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
                                    <input type=\"text\" class=\"form-control\" id=\"formGroupInputNom\" placeholder=\"Nom\" name=\"lastname\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"formGroupInputPrenom\">Prénom</label>
                                    <input type=\"text\" class=\"form-control\" id=\"formGroupInputPrenom\" placeholder=\"Prénom\" name=\"firstname\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"formGroupInputMail\">Email</label>
                                    <input type=\"text\" class=\"form-control\" id=\"formGroupInputMail\" placeholder=\"Email\"name=\"mail\">
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"formGroupInputTel\">Téléphone</label>
                                    <input type=\"text\" class=\"form-control\" id=\"formGroupInputTel\" placeholder=\"Téléphone\" name=\"phone\">
                                </div>
                                </form>

                            </div>
                            <div class=\"modal-footer\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                                <button type=\"submit\"  class=\"btn btn-primary\">Save changes</button>
                            </div>
                            </div>
                        </div>
                        </div>


</div>
        
{% endblock %}", "contact/index.html.twig", "/var/www/project/templates/contact/index.html.twig");
    }
}
