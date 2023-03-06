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
class __TwigTemplate_260e89cf5a66d7e4b55a49c5217f954dd71145c7878553a643154e3656d4b6fa extends Template
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
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>Dashboard</title>
\t\t<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
\t\t<script src=\"js/script.js\"></script>
\t</head>
\t<body>
\t\t<div class=\"app-container\">
\t\t\t<div class=\"sidebar\">
\t\t\t\t<div class=\"sidebar-header\">
\t\t\t\t\t<div class=\"app-icon\">
\t\t\t\t\t\t<svg viewbox=\"0 0 512 512\" xmlns=\"http://www.w3.org/2000/svg\"><path fill=\"currentColor\" d=\"M507.606 371.054a187.217 187.217 0 00-23.051-19.606c-17.316 19.999-37.648 36.808-60.572 50.041-35.508 20.505-75.893 31.452-116.875 31.711 21.762 8.776 45.224 13.38 69.396 13.38 49.524 0 96.084-19.286 131.103-54.305a15 15 0 004.394-10.606 15.028 15.028 0 00-4.395-10.615zM27.445 351.448a187.392 187.392 0 00-23.051 19.606C1.581 373.868 0 377.691 0 381.669s1.581 7.793 4.394 10.606c35.019 35.019 81.579 54.305 131.103 54.305 24.172 0 47.634-4.604 69.396-13.38-40.985-.259-81.367-11.206-116.879-31.713-22.922-13.231-43.254-30.04-60.569-50.039zM103.015 375.508c24.937 14.4 53.928 24.056 84.837 26.854-53.409-29.561-82.274-70.602-95.861-94.135-14.942-25.878-25.041-53.917-30.063-83.421-14.921.64-29.775 2.868-44.227 6.709-6.6 1.576-11.507 7.517-11.507 14.599 0 1.312.172 2.618.512 3.885 15.32 57.142 52.726 100.35 96.309 125.509zM324.148 402.362c30.908-2.799 59.9-12.454 84.837-26.854 43.583-25.159 80.989-68.367 96.31-125.508.34-1.267.512-2.573.512-3.885 0-7.082-4.907-13.023-11.507-14.599-14.452-3.841-29.306-6.07-44.227-6.709-5.022 29.504-15.121 57.543-30.063 83.421-13.588 23.533-42.419 64.554-95.862 94.134zM187.301 366.948c-15.157-24.483-38.696-71.48-38.696-135.903 0-32.646 6.043-64.401 17.945-94.529-16.394-9.351-33.972-16.623-52.273-21.525-8.004-2.142-16.225 2.604-18.37 10.605-16.372 61.078-4.825 121.063 22.064 167.631 16.325 28.275 39.769 54.111 69.33 73.721zM324.684 366.957c29.568-19.611 53.017-45.451 69.344-73.73 26.889-46.569 38.436-106.553 22.064-167.631-2.145-8.001-10.366-12.748-18.37-10.605-18.304 4.902-35.883 12.176-52.279 21.529 11.9 30.126 17.943 61.88 17.943 94.525.001 64.478-23.58 111.488-38.702 135.912zM266.606 69.813c-2.813-2.813-6.637-4.394-10.615-4.394a15 15 0 00-10.606 4.394c-39.289 39.289-66.78 96.005-66.78 161.231 0 65.256 27.522 121.974 66.78 161.231 2.813 2.813 6.637 4.394 10.615 4.394s7.793-1.581 10.606-4.394c39.248-39.247 66.78-95.96 66.78-161.231.001-65.256-27.511-121.964-66.78-161.231z\"/></svg>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<ul class=\"sidebar-list\">
\t\t\t\t\t<li class=\"sidebar-list-item\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"/><polyline points=\"9 22 9 12 15 12 15 22\"/></svg>
\t\t\t\t\t\t\t<span>Home</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"sidebar-list-item active\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-shopping-bag\"><path d=\"M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z\"/><line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"/><path d=\"M16 10a4 4 0 0 1-8 0\"/></svg>
\t\t\t\t\t\t\t<span>Products</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"sidebar-list-item\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-pie-chart\"><path d=\"M21.21 15.89A10 10 0 1 1 8 2.83\"/><path d=\"M22 12A10 10 0 0 0 12 2v10z\"/></svg>
\t\t\t\t\t\t\t<span>Statistics</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"sidebar-list-item\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-inbox\"><polyline points=\"22 12 16 12 14 15 10 15 8 12 2 12\"/><path d=\"M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z\"/></svg>
\t\t\t\t\t\t\t<span>Inbox</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"sidebar-list-item\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-bell\"><path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\"/><path d=\"M13.73 21a2 2 0 0 1-3.46 0\"/></svg>
\t\t\t\t\t\t\t<span>Notifications</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"account-info\">
\t\t\t\t\t<div class=\"account-info-picture\">
\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1527736947477-2790e28f3443?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTE2fHx3b21hbnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60\" alt=\"Account\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"account-info-name\">Monica G.</div>
\t\t\t\t\t<button class=\"account-info-more\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-horizontal\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"19\" cy=\"12\" r=\"1\"/><circle cx=\"5\" cy=\"12\" r=\"1\"/></svg>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"app-content\">
\t\t\t\t<div class=\"app-content-header\">
\t\t\t\t\t<h1 class=\"app-content-headerText\">Products</h1>
\t\t\t\t\t<button class=\"mode-switch\" title=\"Switch Theme\">
\t\t\t\t\t\t<svg class=\"moon\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t<defs></defs>
\t\t\t\t\t\t\t<path d=\"M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z\"></path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"app-content-headerButton\">Add Product</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"app-content-actions\">
\t\t\t\t\t<input class=\"search-bar\" placeholder=\"Search...\" type=\"text\">
\t\t\t\t\t<div class=\"app-content-actions-wrapper\">
\t\t\t\t\t\t<div class=\"filter-button-wrapper\">
\t\t\t\t\t\t\t<button class=\"action-button filter jsFilter\">
\t\t\t\t\t\t\t\t<span>Filter</span>
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-filter\"><polygon points=\"22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3\"/></svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"filter-menu\">
\t\t\t\t\t\t\t\t<label>Category</label>
\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t<option>All Categories</option>
\t\t\t\t\t\t\t\t\t<option>Furniture</option>
\t\t\t\t\t\t\t\t\t<option>Decoration</option>
\t\t\t\t\t\t\t\t\t<option>Kitchen</option>
\t\t\t\t\t\t\t\t\t<option>Bathroom</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<label>Status</label>
\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t<option>All Status</option>
\t\t\t\t\t\t\t\t\t<option>Active</option>
\t\t\t\t\t\t\t\t\t<option>Disabled</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<div class=\"filter-menu-buttons\">
\t\t\t\t\t\t\t\t\t<button class=\"filter-button reset\">
\t\t\t\t\t\t\t\t\t\tReset
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"filter-button apply\">
\t\t\t\t\t\t\t\t\t\tApply
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"action-button list active\" title=\"List View\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-list\"><line x1=\"8\" y1=\"6\" x2=\"21\" y2=\"6\"/><line x1=\"8\" y1=\"12\" x2=\"21\" y2=\"12\"/><line x1=\"8\" y1=\"18\" x2=\"21\" y2=\"18\"/><line x1=\"3\" y1=\"6\" x2=\"3.01\" y2=\"6\"/><line x1=\"3\" y1=\"12\" x2=\"3.01\" y2=\"12\"/><line x1=\"3\" y1=\"18\" x2=\"3.01\" y2=\"18\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button class=\"action-button grid\" title=\"Grid View\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-grid\"><rect x=\"3\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"14\" width=\"7\" height=\"7\"/><rect x=\"3\" y=\"14\" width=\"7\" height=\"7\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"products-area-wrapper tableView\">
\t\t\t\t\t<div class=\"products-header\">
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\tItems
\t\t\t\t\t\t\t<button class=\"sort-button\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewbox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z\"/></svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">Category<button class=\"sort-button\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewbox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z\"/></svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">Status<button class=\"sort-button\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewbox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z\"/></svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">Sales<button class=\"sort-button\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewbox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z\"/></svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">Stock<button class=\"sort-button\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewbox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z\"/></svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell price\">Price<button class=\"sort-button\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewbox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z\"/></svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80\" alt=\"product\">
\t\t\t\t\t\t\t<span>Ocean</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Furniture</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status active\">Active</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>11</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>36</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$560</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1484154218962-a197022b5858?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8a2l0Y2hlbnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Lou</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Kitchen</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status disabled\">Disabled</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>6</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>46</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$710</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDR8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Yellow</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Decoration</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status active\">Active</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>61</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>56</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$360</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8YmVkcm9vbXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Dreamy</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Bedroom</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status disabled\">Disabled</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>41</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>66</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$260</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1554995207-c18c203602cb?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8aW50ZXJpb3J8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Boheme</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Furniture</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status active\">Active</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>32</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>40</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$350</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1507652313519-d4e9174996dd?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fGludGVyaW9yfGVufDB8MHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Sky</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Bathroom</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status disabled\">Disabled</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>22</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>44</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$160</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1516455590571-18256e5bb9ff?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGludGVyaW9yfGVufDB8MHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Midnight</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Furniture</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status active\">Active</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>23</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>45</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$340</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1554995207-c18c203602cb?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8aW50ZXJpb3J8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Boheme</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Furniture</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status active\">Active</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>32</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>40</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$350</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1511389026070-a14ae610a1be?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzR8fGludGVyaW9yfGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Palm</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Decoration</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status active\">Active</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>24</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>46</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$60</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1600494603989-9650cf6ddd3d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTV8fGludGVyaW9yfGVufDB8MHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Forest</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Living Room</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status active\">Active</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>41</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>16</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$270</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1560448204-603b3fc33ddc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Njd8fGludGVyaW9yfGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Sand</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Living Room</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status disabled\">Disabled</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>52</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>16</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$230</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1533779283484-8ad4940aa3a8?ixid=MnwxMjA3fDB8MHxzZWFyY2h8ODd8fGludGVyaW9yfGVufDB8MHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Autumn</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Decoration</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status active\">Active</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>21</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>46</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$252</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1554995207-c18c203602cb?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8aW50ZXJpb3J8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Boheme</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Furniture</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status active\">Active</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>32</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>40</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$350</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
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
        return array (  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>Dashboard</title>
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
\t\t<script src=\"js/script.js\"></script>
\t</head>
\t<body>
\t\t<div class=\"app-container\">
\t\t\t<div class=\"sidebar\">
\t\t\t\t<div class=\"sidebar-header\">
\t\t\t\t\t<div class=\"app-icon\">
\t\t\t\t\t\t<svg viewbox=\"0 0 512 512\" xmlns=\"http://www.w3.org/2000/svg\"><path fill=\"currentColor\" d=\"M507.606 371.054a187.217 187.217 0 00-23.051-19.606c-17.316 19.999-37.648 36.808-60.572 50.041-35.508 20.505-75.893 31.452-116.875 31.711 21.762 8.776 45.224 13.38 69.396 13.38 49.524 0 96.084-19.286 131.103-54.305a15 15 0 004.394-10.606 15.028 15.028 0 00-4.395-10.615zM27.445 351.448a187.392 187.392 0 00-23.051 19.606C1.581 373.868 0 377.691 0 381.669s1.581 7.793 4.394 10.606c35.019 35.019 81.579 54.305 131.103 54.305 24.172 0 47.634-4.604 69.396-13.38-40.985-.259-81.367-11.206-116.879-31.713-22.922-13.231-43.254-30.04-60.569-50.039zM103.015 375.508c24.937 14.4 53.928 24.056 84.837 26.854-53.409-29.561-82.274-70.602-95.861-94.135-14.942-25.878-25.041-53.917-30.063-83.421-14.921.64-29.775 2.868-44.227 6.709-6.6 1.576-11.507 7.517-11.507 14.599 0 1.312.172 2.618.512 3.885 15.32 57.142 52.726 100.35 96.309 125.509zM324.148 402.362c30.908-2.799 59.9-12.454 84.837-26.854 43.583-25.159 80.989-68.367 96.31-125.508.34-1.267.512-2.573.512-3.885 0-7.082-4.907-13.023-11.507-14.599-14.452-3.841-29.306-6.07-44.227-6.709-5.022 29.504-15.121 57.543-30.063 83.421-13.588 23.533-42.419 64.554-95.862 94.134zM187.301 366.948c-15.157-24.483-38.696-71.48-38.696-135.903 0-32.646 6.043-64.401 17.945-94.529-16.394-9.351-33.972-16.623-52.273-21.525-8.004-2.142-16.225 2.604-18.37 10.605-16.372 61.078-4.825 121.063 22.064 167.631 16.325 28.275 39.769 54.111 69.33 73.721zM324.684 366.957c29.568-19.611 53.017-45.451 69.344-73.73 26.889-46.569 38.436-106.553 22.064-167.631-2.145-8.001-10.366-12.748-18.37-10.605-18.304 4.902-35.883 12.176-52.279 21.529 11.9 30.126 17.943 61.88 17.943 94.525.001 64.478-23.58 111.488-38.702 135.912zM266.606 69.813c-2.813-2.813-6.637-4.394-10.615-4.394a15 15 0 00-10.606 4.394c-39.289 39.289-66.78 96.005-66.78 161.231 0 65.256 27.522 121.974 66.78 161.231 2.813 2.813 6.637 4.394 10.615 4.394s7.793-1.581 10.606-4.394c39.248-39.247 66.78-95.96 66.78-161.231.001-65.256-27.511-121.964-66.78-161.231z\"/></svg>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<ul class=\"sidebar-list\">
\t\t\t\t\t<li class=\"sidebar-list-item\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"/><polyline points=\"9 22 9 12 15 12 15 22\"/></svg>
\t\t\t\t\t\t\t<span>Home</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"sidebar-list-item active\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-shopping-bag\"><path d=\"M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z\"/><line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"/><path d=\"M16 10a4 4 0 0 1-8 0\"/></svg>
\t\t\t\t\t\t\t<span>Products</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"sidebar-list-item\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-pie-chart\"><path d=\"M21.21 15.89A10 10 0 1 1 8 2.83\"/><path d=\"M22 12A10 10 0 0 0 12 2v10z\"/></svg>
\t\t\t\t\t\t\t<span>Statistics</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"sidebar-list-item\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-inbox\"><polyline points=\"22 12 16 12 14 15 10 15 8 12 2 12\"/><path d=\"M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z\"/></svg>
\t\t\t\t\t\t\t<span>Inbox</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"sidebar-list-item\">
\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-bell\"><path d=\"M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9\"/><path d=\"M13.73 21a2 2 0 0 1-3.46 0\"/></svg>
\t\t\t\t\t\t\t<span>Notifications</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"account-info\">
\t\t\t\t\t<div class=\"account-info-picture\">
\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1527736947477-2790e28f3443?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTE2fHx3b21hbnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60\" alt=\"Account\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"account-info-name\">Monica G.</div>
\t\t\t\t\t<button class=\"account-info-more\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-horizontal\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"19\" cy=\"12\" r=\"1\"/><circle cx=\"5\" cy=\"12\" r=\"1\"/></svg>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"app-content\">
\t\t\t\t<div class=\"app-content-header\">
\t\t\t\t\t<h1 class=\"app-content-headerText\">Products</h1>
\t\t\t\t\t<button class=\"mode-switch\" title=\"Switch Theme\">
\t\t\t\t\t\t<svg class=\"moon\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" width=\"24\" height=\"24\" viewbox=\"0 0 24 24\">
\t\t\t\t\t\t\t<defs></defs>
\t\t\t\t\t\t\t<path d=\"M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z\"></path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"app-content-headerButton\">Add Product</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"app-content-actions\">
\t\t\t\t\t<input class=\"search-bar\" placeholder=\"Search...\" type=\"text\">
\t\t\t\t\t<div class=\"app-content-actions-wrapper\">
\t\t\t\t\t\t<div class=\"filter-button-wrapper\">
\t\t\t\t\t\t\t<button class=\"action-button filter jsFilter\">
\t\t\t\t\t\t\t\t<span>Filter</span>
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-filter\"><polygon points=\"22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3\"/></svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<div class=\"filter-menu\">
\t\t\t\t\t\t\t\t<label>Category</label>
\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t<option>All Categories</option>
\t\t\t\t\t\t\t\t\t<option>Furniture</option>
\t\t\t\t\t\t\t\t\t<option>Decoration</option>
\t\t\t\t\t\t\t\t\t<option>Kitchen</option>
\t\t\t\t\t\t\t\t\t<option>Bathroom</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<label>Status</label>
\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t<option>All Status</option>
\t\t\t\t\t\t\t\t\t<option>Active</option>
\t\t\t\t\t\t\t\t\t<option>Disabled</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<div class=\"filter-menu-buttons\">
\t\t\t\t\t\t\t\t\t<button class=\"filter-button reset\">
\t\t\t\t\t\t\t\t\t\tReset
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button class=\"filter-button apply\">
\t\t\t\t\t\t\t\t\t\tApply
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<button class=\"action-button list active\" title=\"List View\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-list\"><line x1=\"8\" y1=\"6\" x2=\"21\" y2=\"6\"/><line x1=\"8\" y1=\"12\" x2=\"21\" y2=\"12\"/><line x1=\"8\" y1=\"18\" x2=\"21\" y2=\"18\"/><line x1=\"3\" y1=\"6\" x2=\"3.01\" y2=\"6\"/><line x1=\"3\" y1=\"12\" x2=\"3.01\" y2=\"12\"/><line x1=\"3\" y1=\"18\" x2=\"3.01\" y2=\"18\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<button class=\"action-button grid\" title=\"Grid View\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-grid\"><rect x=\"3\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"3\" width=\"7\" height=\"7\"/><rect x=\"14\" y=\"14\" width=\"7\" height=\"7\"/><rect x=\"3\" y=\"14\" width=\"7\" height=\"7\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"products-area-wrapper tableView\">
\t\t\t\t\t<div class=\"products-header\">
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\tItems
\t\t\t\t\t\t\t<button class=\"sort-button\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewbox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z\"/></svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">Category<button class=\"sort-button\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewbox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z\"/></svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">Status<button class=\"sort-button\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewbox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z\"/></svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">Sales<button class=\"sort-button\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewbox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z\"/></svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">Stock<button class=\"sort-button\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewbox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z\"/></svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell price\">Price<button class=\"sort-button\">
\t\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewbox=\"0 0 512 512\"><path fill=\"currentColor\" d=\"M496.1 138.3L375.7 17.9c-7.9-7.9-20.6-7.9-28.5 0L226.9 138.3c-7.9 7.9-7.9 20.6 0 28.5 7.9 7.9 20.6 7.9 28.5 0l85.7-85.7v352.8c0 11.3 9.1 20.4 20.4 20.4 11.3 0 20.4-9.1 20.4-20.4V81.1l85.7 85.7c7.9 7.9 20.6 7.9 28.5 0 7.9-7.8 7.9-20.6 0-28.5zM287.1 347.2c-7.9-7.9-20.6-7.9-28.5 0l-85.7 85.7V80.1c0-11.3-9.1-20.4-20.4-20.4-11.3 0-20.4 9.1-20.4 20.4v352.8l-85.7-85.7c-7.9-7.9-20.6-7.9-28.5 0-7.9 7.9-7.9 20.6 0 28.5l120.4 120.4c7.9 7.9 20.6 7.9 28.5 0l120.4-120.4c7.8-7.9 7.8-20.7-.1-28.5z\"/></svg>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1555041469-a586c61ea9bc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80\" alt=\"product\">
\t\t\t\t\t\t\t<span>Ocean</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Furniture</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status active\">Active</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>11</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>36</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$560</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1484154218962-a197022b5858?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8a2l0Y2hlbnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Lou</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Kitchen</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status disabled\">Disabled</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>6</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>46</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$710</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDR8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Yellow</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Decoration</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status active\">Active</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>61</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>56</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$360</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1595526114035-0d45ed16cfbf?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8YmVkcm9vbXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Dreamy</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Bedroom</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status disabled\">Disabled</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>41</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>66</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$260</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1554995207-c18c203602cb?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8aW50ZXJpb3J8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Boheme</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Furniture</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status active\">Active</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>32</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>40</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$350</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1507652313519-d4e9174996dd?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fGludGVyaW9yfGVufDB8MHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Sky</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Bathroom</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status disabled\">Disabled</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>22</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>44</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$160</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1516455590571-18256e5bb9ff?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fGludGVyaW9yfGVufDB8MHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Midnight</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Furniture</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status active\">Active</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>23</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>45</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$340</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1554995207-c18c203602cb?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8aW50ZXJpb3J8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Boheme</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Furniture</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status active\">Active</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>32</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>40</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$350</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1511389026070-a14ae610a1be?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzR8fGludGVyaW9yfGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Palm</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Decoration</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status active\">Active</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>24</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>46</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$60</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1600494603989-9650cf6ddd3d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTV8fGludGVyaW9yfGVufDB8MHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Forest</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Living Room</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status active\">Active</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>41</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>16</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$270</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1560448204-603b3fc33ddc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Njd8fGludGVyaW9yfGVufDB8MHwwfHw%3D&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Sand</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Living Room</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status disabled\">Disabled</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>52</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>16</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$230</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1533779283484-8ad4940aa3a8?ixid=MnwxMjA3fDB8MHxzZWFyY2h8ODd8fGludGVyaW9yfGVufDB8MHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Autumn</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Decoration</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status active\">Active</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>21</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>46</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$252</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"products-row\">
\t\t\t\t\t\t<button class=\"cell-more-button\">
\t\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18\" height=\"18\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-more-vertical\"><circle cx=\"12\" cy=\"12\" r=\"1\"/><circle cx=\"12\" cy=\"5\" r=\"1\"/><circle cx=\"12\" cy=\"19\" r=\"1\"/></svg>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"product-cell image\">
\t\t\t\t\t\t\t<img src=\"https://images.unsplash.com/photo-1554995207-c18c203602cb?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8aW50ZXJpb3J8ZW58MHwwfDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60\" alt=\"product\">
\t\t\t\t\t\t\t<span>Boheme</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell category\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Category:</span>Furniture</div>
\t\t\t\t\t\t<div class=\"product-cell status-cell\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Status:</span>
\t\t\t\t\t\t\t<span class=\"status active\">Active</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"product-cell sales\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Sales:</span>32</div>
\t\t\t\t\t\t<div class=\"product-cell stock\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Stock:</span>40</div>
\t\t\t\t\t\t<div class=\"product-cell price\">
\t\t\t\t\t\t\t<span class=\"cell-label\">Price:</span>\$350</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</body>
</html>
", "homepage/index.html.twig", "/Users/rafa/Sites/TFG/dashboard/templates/homepage/index.html.twig");
    }
}
