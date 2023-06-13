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

/* admin/_layout/breadcrumb.html */
class __TwigTemplate_eca41fdc6035758235eab0ed28d2ebb0 extends Template
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
        echo "<nav aria-label=\"breadcrumb\">
    <ol class=\"breadcrumb my-0 ms-2\">
        <li class=\"breadcrumb-item\"><span>Home</span></li>
        <li class=\"breadcrumb-item active\"><span>Blank</span></li>
    </ol>
</nav>";
    }

    public function getTemplateName()
    {
        return "admin/_layout/breadcrumb.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/_layout/breadcrumb.html", "/var/www/html/app/Views/admin/_layout/breadcrumb.html");
    }
}
