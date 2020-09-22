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

/* base.html.twig */
class __TwigTemplate_937cdd5b8024371b42d9534d6aeb0ea20a19415fd76fe551e5c64a90a8e41430 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
        
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    </head>
    <body color=\"info\">
    <header>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\" style=\"hieght:100px\">
            <a class=\"navbar-brand\" href=\"#\">Contactony</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <!-- Button trigger modal -->
                        <button type=\"button\" class=\"btn btn-rounded\" data-toggle=\"modal\" data-target=\"#ModalForm\">
                        <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"far\" data-icon=\"plus\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 384 512\" class=\"svg-inline--fa fa-plus fa-w-12 fa-2x\"><path fill=\"currentColor\" d=\"M368 224H224V80c0-8.84-7.16-16-16-16h-32c-8.84 0-16 7.16-16 16v144H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h144v144c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V288h144c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16z\" class=\"\"></path></svg>
                        </button>

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
                    </li>
                    
</ul>
                <form class=\"form-inline my-2 my-lg-0\">
                    <button class=\"btn btn-danger my-2 my-sm-0\" type=\"submit\">Déconnexion</button>
                    
                </form>
            </div>
        </nav>
    </header>

        ";
        // line 79
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 82
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "\t
<link rel=\"stylesheet\" href=\"css/app.css\">
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\" integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\"></script> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 79
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 80
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 81
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  172 => 81,  165 => 80,  153 => 79,  136 => 8,  127 => 82,  124 => 80,  122 => 79,  54 => 13,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\" integrity=\"sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z\" crossorigin=\"anonymous\">
        
        {% block stylesheets %}\t
<link rel=\"stylesheet\" href=\"css/app.css\">
<script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\" integrity=\"sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\" integrity=\"sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\" integrity=\"sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV\" crossorigin=\"anonymous\"></script> {% endblock %}
    </head>
    <body color=\"info\">
    <header>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\" style=\"hieght:100px\">
            <a class=\"navbar-brand\" href=\"#\">Contactony</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav mr-auto\">
                    <li class=\"nav-item active\">
                        <!-- Button trigger modal -->
                        <button type=\"button\" class=\"btn btn-rounded\" data-toggle=\"modal\" data-target=\"#ModalForm\">
                        <svg aria-hidden=\"true\" focusable=\"false\" data-prefix=\"far\" data-icon=\"plus\" role=\"img\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 384 512\" class=\"svg-inline--fa fa-plus fa-w-12 fa-2x\"><path fill=\"currentColor\" d=\"M368 224H224V80c0-8.84-7.16-16-16-16h-32c-8.84 0-16 7.16-16 16v144H16c-8.84 0-16 7.16-16 16v32c0 8.84 7.16 16 16 16h144v144c0 8.84 7.16 16 16 16h32c8.84 0 16-7.16 16-16V288h144c8.84 0 16-7.16 16-16v-32c0-8.84-7.16-16-16-16z\" class=\"\"></path></svg>
                        </button>

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
                    </li>
                    
</ul>
                <form class=\"form-inline my-2 my-lg-0\">
                    <button class=\"btn btn-danger my-2 my-sm-0\" type=\"submit\">Déconnexion</button>
                    
                </form>
            </div>
        </nav>
    </header>

        {% block body %}{% endblock %}
        {% block javascripts %}
        {% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/project/templates/base.html.twig");
    }
}
