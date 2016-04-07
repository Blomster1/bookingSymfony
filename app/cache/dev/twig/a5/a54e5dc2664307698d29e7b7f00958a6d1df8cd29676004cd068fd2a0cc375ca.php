<?php

/* base.html.twig */
class __TwigTemplate_89f14b842190e9c61145a5befd3ae49e63e8068982452de71eb5f7a7864df95a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'specificJavascript' => array($this, 'block_specificJavascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27cfa8e1590e7f1bbf7735a8205d5c86ee939adb7dd7b7252868de7486ec0a73 = $this->env->getExtension("native_profiler");
        $__internal_27cfa8e1590e7f1bbf7735a8205d5c86ee939adb7dd7b7252868de7486ec0a73->enter($__internal_27cfa8e1590e7f1bbf7735a8205d5c86ee939adb7dd7b7252868de7486ec0a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 15
        $this->loadTemplate("CoreBundle:Partials:sideNav.html.twig", "base.html.twig", 15)->display($context);
        // line 16
        echo "        <div class=\"container-fluid\">
            <div class=\"row no-margin\">
                ";
        // line 18
        $this->loadTemplate("CoreBundle:Partials:searchBar.html.twig", "base.html.twig", 18)->display($context);
        // line 19
        echo "            </div>
        </div>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col m10 offset-m2 no-margin no-padding\">
                    ";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "                </div>
            </div>

        </div>

        ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "        ";
        $this->displayBlock('specificJavascript', $context, $blocks);
        // line 41
        echo "    </body>
</html>
";
        
        $__internal_27cfa8e1590e7f1bbf7735a8205d5c86ee939adb7dd7b7252868de7486ec0a73->leave($__internal_27cfa8e1590e7f1bbf7735a8205d5c86ee939adb7dd7b7252868de7486ec0a73_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6d9373a9ac62a0fe283b86e224563bfe9ce83170026b255b17e63000e023a99b = $this->env->getExtension("native_profiler");
        $__internal_6d9373a9ac62a0fe283b86e224563bfe9ce83170026b255b17e63000e023a99b->enter($__internal_6d9373a9ac62a0fe283b86e224563bfe9ce83170026b255b17e63000e023a99b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6d9373a9ac62a0fe283b86e224563bfe9ce83170026b255b17e63000e023a99b->leave($__internal_6d9373a9ac62a0fe283b86e224563bfe9ce83170026b255b17e63000e023a99b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a3357d794d3265fc66d61230a278a42ef7ca886bd8085af60dc4f63c2530002d = $this->env->getExtension("native_profiler");
        $__internal_a3357d794d3265fc66d61230a278a42ef7ca886bd8085af60dc4f63c2530002d->enter($__internal_a3357d794d3265fc66d61230a278a42ef7ca886bd8085af60dc4f63c2530002d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <!-- Compiled and minified CSS -->
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css\">
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_a3357d794d3265fc66d61230a278a42ef7ca886bd8085af60dc4f63c2530002d->leave($__internal_a3357d794d3265fc66d61230a278a42ef7ca886bd8085af60dc4f63c2530002d_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_69f4464f1b837b2eb6d5b85abac2ec017c52f1a4cb097296bb5e9cea74264801 = $this->env->getExtension("native_profiler");
        $__internal_69f4464f1b837b2eb6d5b85abac2ec017c52f1a4cb097296bb5e9cea74264801->enter($__internal_69f4464f1b837b2eb6d5b85abac2ec017c52f1a4cb097296bb5e9cea74264801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "                    ";
        
        $__internal_69f4464f1b837b2eb6d5b85abac2ec017c52f1a4cb097296bb5e9cea74264801->leave($__internal_69f4464f1b837b2eb6d5b85abac2ec017c52f1a4cb097296bb5e9cea74264801_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d1866eb98947b0d7db85cd982405195c8aa8f0378c5a2db584271a9bff09d54 = $this->env->getExtension("native_profiler");
        $__internal_6d1866eb98947b0d7db85cd982405195c8aa8f0378c5a2db584271a9bff09d54->enter($__internal_6d1866eb98947b0d7db85cd982405195c8aa8f0378c5a2db584271a9bff09d54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js\"></script>
            <!-- Compiled and minified JavaScript -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js\"></script>
            <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\" ></script>
            <script async defer src=\"https://maps.googleapis.com/maps/api/js?key= AIzaSyBCMCi-BsZloG-raKi9YbuMbAicd84VfDE&callback=initMap\">
            </script>
        ";
        
        $__internal_6d1866eb98947b0d7db85cd982405195c8aa8f0378c5a2db584271a9bff09d54->leave($__internal_6d1866eb98947b0d7db85cd982405195c8aa8f0378c5a2db584271a9bff09d54_prof);

    }

    // line 39
    public function block_specificJavascript($context, array $blocks = array())
    {
        $__internal_928ed96b95f156ae1a58c07218397b90205bec653ab8b790ecf73467ae12a747 = $this->env->getExtension("native_profiler");
        $__internal_928ed96b95f156ae1a58c07218397b90205bec653ab8b790ecf73467ae12a747->enter($__internal_928ed96b95f156ae1a58c07218397b90205bec653ab8b790ecf73467ae12a747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "specificJavascript"));

        // line 40
        echo "        ";
        
        $__internal_928ed96b95f156ae1a58c07218397b90205bec653ab8b790ecf73467ae12a747->leave($__internal_928ed96b95f156ae1a58c07218397b90205bec653ab8b790ecf73467ae12a747_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 40,  151 => 39,  140 => 35,  135 => 32,  129 => 31,  122 => 25,  116 => 24,  107 => 10,  102 => 7,  96 => 6,  84 => 5,  75 => 41,  72 => 39,  70 => 31,  63 => 26,  61 => 24,  54 => 19,  52 => 18,  48 => 16,  46 => 15,  39 => 12,  37 => 6,  33 => 5,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <!-- Compiled and minified CSS -->*/
/*             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">*/
/*             <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/*             <link rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% include "CoreBundle:Partials:sideNav.html.twig" %}*/
/*         <div class="container-fluid">*/
/*             <div class="row no-margin">*/
/*                 {% include "CoreBundle:Partials:searchBar.html.twig" %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="container-fluid">*/
/*             <div class="row">*/
/*                 <div class="col m10 offset-m2 no-margin no-padding">*/
/*                     {% block content %}*/
/*                     {% endblock %}*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*         {% block javascripts %}*/
/*             <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>*/
/*             <!-- Compiled and minified JavaScript -->*/
/*             <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>*/
/*             <script src="{{ asset('js/app.js') }}" ></script>*/
/*             <script async defer src="https://maps.googleapis.com/maps/api/js?key= AIzaSyBCMCi-BsZloG-raKi9YbuMbAicd84VfDE&callback=initMap">*/
/*             </script>*/
/*         {% endblock %}*/
/*         {% block specificJavascript %}*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
