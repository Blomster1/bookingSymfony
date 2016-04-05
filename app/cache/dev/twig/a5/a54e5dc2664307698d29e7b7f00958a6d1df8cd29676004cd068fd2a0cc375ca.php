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
        $__internal_8a293d30de6c46a9f3e4a78229cce8c12216b69c304e34f5696137b1854c7a51 = $this->env->getExtension("native_profiler");
        $__internal_8a293d30de6c46a9f3e4a78229cce8c12216b69c304e34f5696137b1854c7a51->enter($__internal_8a293d30de6c46a9f3e4a78229cce8c12216b69c304e34f5696137b1854c7a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8a293d30de6c46a9f3e4a78229cce8c12216b69c304e34f5696137b1854c7a51->leave($__internal_8a293d30de6c46a9f3e4a78229cce8c12216b69c304e34f5696137b1854c7a51_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_06b863cb45a7889ba5234cf52a2922a3fe596fbe39edce309669f7d14a2c9033 = $this->env->getExtension("native_profiler");
        $__internal_06b863cb45a7889ba5234cf52a2922a3fe596fbe39edce309669f7d14a2c9033->enter($__internal_06b863cb45a7889ba5234cf52a2922a3fe596fbe39edce309669f7d14a2c9033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_06b863cb45a7889ba5234cf52a2922a3fe596fbe39edce309669f7d14a2c9033->leave($__internal_06b863cb45a7889ba5234cf52a2922a3fe596fbe39edce309669f7d14a2c9033_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5242171beb493e8f07ad87e9f0d62e23a7c4f55044a951659703e5456926bad8 = $this->env->getExtension("native_profiler");
        $__internal_5242171beb493e8f07ad87e9f0d62e23a7c4f55044a951659703e5456926bad8->enter($__internal_5242171beb493e8f07ad87e9f0d62e23a7c4f55044a951659703e5456926bad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <!-- Compiled and minified CSS -->
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css\">
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_5242171beb493e8f07ad87e9f0d62e23a7c4f55044a951659703e5456926bad8->leave($__internal_5242171beb493e8f07ad87e9f0d62e23a7c4f55044a951659703e5456926bad8_prof);

    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
        $__internal_b3098c0b4cc093bdd98b86dcbf7029ca260da378d12bde774c5693ada333aa36 = $this->env->getExtension("native_profiler");
        $__internal_b3098c0b4cc093bdd98b86dcbf7029ca260da378d12bde774c5693ada333aa36->enter($__internal_b3098c0b4cc093bdd98b86dcbf7029ca260da378d12bde774c5693ada333aa36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 25
        echo "                    ";
        
        $__internal_b3098c0b4cc093bdd98b86dcbf7029ca260da378d12bde774c5693ada333aa36->leave($__internal_b3098c0b4cc093bdd98b86dcbf7029ca260da378d12bde774c5693ada333aa36_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4fdcf52f50c08e84bcad8d152473f358ba5466b6626da8d8f2e84b3c30c79dd4 = $this->env->getExtension("native_profiler");
        $__internal_4fdcf52f50c08e84bcad8d152473f358ba5466b6626da8d8f2e84b3c30c79dd4->enter($__internal_4fdcf52f50c08e84bcad8d152473f358ba5466b6626da8d8f2e84b3c30c79dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4fdcf52f50c08e84bcad8d152473f358ba5466b6626da8d8f2e84b3c30c79dd4->leave($__internal_4fdcf52f50c08e84bcad8d152473f358ba5466b6626da8d8f2e84b3c30c79dd4_prof);

    }

    // line 39
    public function block_specificJavascript($context, array $blocks = array())
    {
        $__internal_5af381f39fbc1ee7c8fa6da540dd72d854951f678f2b40937bcaa56ed928ebf6 = $this->env->getExtension("native_profiler");
        $__internal_5af381f39fbc1ee7c8fa6da540dd72d854951f678f2b40937bcaa56ed928ebf6->enter($__internal_5af381f39fbc1ee7c8fa6da540dd72d854951f678f2b40937bcaa56ed928ebf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "specificJavascript"));

        // line 40
        echo "        ";
        
        $__internal_5af381f39fbc1ee7c8fa6da540dd72d854951f678f2b40937bcaa56ed928ebf6->leave($__internal_5af381f39fbc1ee7c8fa6da540dd72d854951f678f2b40937bcaa56ed928ebf6_prof);

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
