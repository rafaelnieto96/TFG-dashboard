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

/* js/script.js.twig */
class __TwigTemplate_83be7b48e165e502da1125cb86ea17c86ba36bfecc856b27104ca8a966757b88 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "js/script.js.twig"));

        // line 1
        echo "<script>
document.querySelector(\".jsFilter\").addEventListener(\"click\", function () {
    document.querySelector(\".filter-menu\").classList.toggle(\"active\");
  });
  
  document.querySelector(\".grid\").addEventListener(\"click\", function () {
    document.querySelector(\".list\").classList.remove(\"active\");
    document.querySelector(\".grid\").classList.add(\"active\");
    document.querySelector(\".products-area-wrapper\").classList.add(\"gridView\");
    document
      .querySelector(\".products-area-wrapper\")
      .classList.remove(\"tableView\");
  });
  
  document.querySelector(\".list\").addEventListener(\"click\", function () {
    document.querySelector(\".list\").classList.add(\"active\");
    document.querySelector(\".grid\").classList.remove(\"active\");
    document.querySelector(\".products-area-wrapper\").classList.remove(\"gridView\");
    document.querySelector(\".products-area-wrapper\").classList.add(\"tableView\");
  });
  
  var modeSwitch = document.querySelector('.mode-switch');
  modeSwitch.addEventListener('click', function () {                      document.documentElement.classList.toggle('light');
   modeSwitch.classList.toggle('active');
  });
<script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "js/script.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
document.querySelector(\".jsFilter\").addEventListener(\"click\", function () {
    document.querySelector(\".filter-menu\").classList.toggle(\"active\");
  });
  
  document.querySelector(\".grid\").addEventListener(\"click\", function () {
    document.querySelector(\".list\").classList.remove(\"active\");
    document.querySelector(\".grid\").classList.add(\"active\");
    document.querySelector(\".products-area-wrapper\").classList.add(\"gridView\");
    document
      .querySelector(\".products-area-wrapper\")
      .classList.remove(\"tableView\");
  });
  
  document.querySelector(\".list\").addEventListener(\"click\", function () {
    document.querySelector(\".list\").classList.add(\"active\");
    document.querySelector(\".grid\").classList.remove(\"active\");
    document.querySelector(\".products-area-wrapper\").classList.remove(\"gridView\");
    document.querySelector(\".products-area-wrapper\").classList.add(\"tableView\");
  });
  
  var modeSwitch = document.querySelector('.mode-switch');
  modeSwitch.addEventListener('click', function () {                      document.documentElement.classList.toggle('light');
   modeSwitch.classList.toggle('active');
  });
<script>
", "js/script.js.twig", "/Users/rafa/Sites/TFG/dashboard/templates/js/script.js.twig");
    }
}
