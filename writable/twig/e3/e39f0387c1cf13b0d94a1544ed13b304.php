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

/* admin/_layout/sidebar.html */
class __TwigTemplate_d3299a8d0d30fe9c96f8381f5f30c1d4 extends Template
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
        echo "<div class=\"sidebar sidebar-dark sidebar-fixed\" id=\"sidebar\">
    <div class=\"sidebar-brand d-none d-md-flex\">
        <svg class=\"sidebar-brand-full\" width=\"118\" height=\"46\" alt=\"CoreUI Logo\">
            <use xlink:href=\"/coreui/assets/brand/coreui.svg#full\"></use>
        </svg>
        <svg class=\"sidebar-brand-narrow\" width=\"46\" height=\"46\" alt=\"CoreUI Logo\">
            <use xlink:href=\"/coreui/assets/brand/coreui.svg#signet\"></use>
        </svg>
    </div>

    <ul class=\"sidebar-nav\" data-coreui=\"navigation\" data-simplebar=\"\">
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 13
        echo site_url("admin");
        echo "\">
                <svg class=\"nav-icon\">
                    <use xlink:href=\"/coreui/vendors/@coreui/icons/svg/free.svg#cil-speedometer\"></use>
                </svg>
                Dashboard
                <span class=\"badge badge-sm bg-info ms-auto\">NEW</span>
            </a>
        </li>
        <li class=\"nav-title\">Navigation Title</li>
        <li class=\"nav-group\">
            <a class=\"nav-link nav-group-toggle\" href=\"#\">
                <svg class=\"nav-icon\">
                    <use xlink:href=\"/coreui/vendors/@coreui/icons/svg/free.svg#cil-puzzle\"></use>
                </svg>
                Multilevel Menu
            </a>

            <ul class=\"nav-group-items\">
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"><span class=\"nav-icon\"></span> Submenu #1</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"><span class=\"nav-icon\"></span> Submenu #2</a></li>
                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\"><span class=\"nav-icon\"></span> Submenu #3</a></li>
            </ul>
        </li>
        <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#\">
                <svg class=\"nav-icon\">
                    <use xlink:href=\"/coreui/vendors/@coreui/icons/svg/free.svg#cil-puzzle\"></use>
                </svg>
                Another Menu
            </a>
        </li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "admin/_layout/sidebar.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/_layout/sidebar.html", "/var/www/html/app/Views/admin/_layout/sidebar.html");
    }
}
