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

/* admin/_layout/header.html */
class __TwigTemplate_abc96fb49d9938bcc1629fbe05bfcbbe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header class=\"header header-sticky mb-4\">
    <div class=\"container-fluid\">
        <button class=\"header-toggler px-md-0 me-md-3\" type=\"button\" onclick=\"coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()\">
            <svg class=\"icon icon-lg\">
              <use xlink:href=\"/coreui/vendors/@coreui/icons/svg/free.svg#cil-menu\"></use>
            </svg>
        </button>

        <a class=\"header-brand d-md-none\" href=\"#\">
            <svg width=\"118\" height=\"46\" alt=\"CoreUI Logo\">
                <use xlink:href=\"/coreui/assets/brand/coreui.svg#full\"></use>
            </svg>
        </a>

        <ul class=\"header-nav d-none d-md-flex\">
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Dashboard</a></li>
            <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">Settings</a></li>
            <li class=\"nav-items\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-coreui-toggle=\"dropdown\" aria-expanded=\"false\">
                    Users
                </a>

                <ul class=\"dropdown-menu dropdown-menu-end\">
                    <li><a class=\"dropdown-item\" href=\"#\">Profile</a></li>
                    <li><hr class=\"dropdown-divider\"></li>
                    <li><a class=\"dropdown-item\" href=\"#\">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class=\"header-divider\"></div>

    <div class=\"container-fluid\">
        ";
        // line 35
        $this->loadTemplate("admin/_layout/breadcrumb.html", "admin/_layout/header.html", 35)->display($context);
        // line 36
        echo "    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "admin/_layout/header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 36,  73 => 35,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/_layout/header.html", "/var/www/html/app/Views/admin/_layout/header.html");
    }
}
