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

/* admin/_layout/app.html */
class __TwigTemplate_a2789c1a7c3c63e0ad35efd35311d4aa extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'vite' => [$this, 'block_vite'],
            'content' => [$this, 'block_content'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>";
        // line 6
        if (array_key_exists("pageTitle", $context)) {
            echo " ";
            echo ($context["pageTitle"] ?? null);
            echo " | ";
        }
        echo " ";
        echo ($context["apTitle"] ?? null);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('vite', $context, $blocks);
        // line 8
        echo "</head>
<body>
    ";
        // line 10
        $this->loadTemplate("admin/_layout/sidebar.html", "admin/_layout/app.html", 10)->display($context);
        // line 11
        echo "
    <div class=\"wrapper d-flex flex-column min-vh-100 bg-light\">
        ";
        // line 13
        $this->loadTemplate("admin/_layout/header.html", "admin/_layout/app.html", 13)->display($context);
        // line 14
        echo "
        <main class=\"body flex-grow-1 px-3\">
            <div class=\"container-lg\">
                ";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "            </div>
        </main>
    </div>

    ";
        // line 22
        $this->displayBlock('script', $context, $blocks);
        // line 23
        echo "</body>
</html>";
    }

    // line 7
    public function block_vite($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 17
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 22
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "admin/_layout/app.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 22,  97 => 17,  91 => 7,  86 => 23,  84 => 22,  78 => 18,  76 => 17,  71 => 14,  69 => 13,  65 => 11,  63 => 10,  59 => 8,  57 => 7,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/_layout/app.html", "/var/www/html/app/Views/admin/_layout/app.html");
    }
}
