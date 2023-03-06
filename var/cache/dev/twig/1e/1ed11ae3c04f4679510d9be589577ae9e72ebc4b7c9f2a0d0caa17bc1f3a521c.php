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

/* homepage/index.html.twig */
class __TwigTemplate_d362f952f7f54595f0e19a7a0756c9c440ef7b7e25f04d077346c9a93d6976bf extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "homepage/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>My Symfony Website</title>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
\t</head>
\t<body>
\t\t<h1>Welcome to My Symfony Website</h1>
\t\t<p>This is a cool and simple homepage</p>
\t\t<div class=\"image-container\">
\t\t\t<div class=\"image-text\">
\t\t\t\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default.jpg"), "html", null, true);
        echo "\" alt=\"Image 1\">
\t\t\t\t<h3>Image 1</h3>
\t\t\t\t<p>Subtitle for Image 1</p>
\t\t\t</div>
\t\t\t<div class=\"image-text\">
\t\t\t\t<img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default.jpg"), "html", null, true);
        echo "\" alt=\"Image 2\">
\t\t\t\t<h3>Image 2</h3>
\t\t\t\t<p>Subtitle for Image 2</p>
\t\t\t</div>
\t\t\t<div class=\"image-text\">
\t\t\t\t<img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default.jpg"), "html", null, true);
        echo "\" alt=\"Image 3\">
\t\t\t\t<h3>Image 3</h3>
\t\t\t\t<p>Subtitle for Image 3</p>
\t\t\t</div>
\t\t</div>
\t\t<button>Get Started</button>
\t</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "homepage/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  65 => 18,  57 => 13,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>My Symfony Website</title>
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
\t</head>
\t<body>
\t\t<h1>Welcome to My Symfony Website</h1>
\t\t<p>This is a cool and simple homepage</p>
\t\t<div class=\"image-container\">
\t\t\t<div class=\"image-text\">
\t\t\t\t<img src=\"{{ asset('images/default.jpg') }}\" alt=\"Image 1\">
\t\t\t\t<h3>Image 1</h3>
\t\t\t\t<p>Subtitle for Image 1</p>
\t\t\t</div>
\t\t\t<div class=\"image-text\">
\t\t\t\t<img src=\"{{ asset('images/default.jpg') }}\" alt=\"Image 2\">
\t\t\t\t<h3>Image 2</h3>
\t\t\t\t<p>Subtitle for Image 2</p>
\t\t\t</div>
\t\t\t<div class=\"image-text\">
\t\t\t\t<img src=\"{{ asset('images/default.jpg') }}\" alt=\"Image 3\">
\t\t\t\t<h3>Image 3</h3>
\t\t\t\t<p>Subtitle for Image 3</p>
\t\t\t</div>
\t\t</div>
\t\t<button>Get Started</button>
\t</body>
</html>
", "homepage/index.html.twig", "/Users/rafa/Sites/TFG/dashboard/templates/homepage/index.html.twig");
    }
}
