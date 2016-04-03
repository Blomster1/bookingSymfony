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
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ccacd5a74b3f639398893626eea889bedd6281998deacaa579a5b48297b7e42 = $this->env->getExtension("native_profiler");
        $__internal_0ccacd5a74b3f639398893626eea889bedd6281998deacaa579a5b48297b7e42->enter($__internal_0ccacd5a74b3f639398893626eea889bedd6281998deacaa579a5b48297b7e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            <div class=\"row\">
                ";
        // line 18
        $this->loadTemplate("CoreBundle:Partials:searchBar.html.twig", "base.html.twig", 18)->display($context);
        // line 19
        echo "            </div>
        </div>
        <div class=\"container\">
            ";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "        </div>

        ";
        // line 26
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    </body>
</html>
";
        
        $__internal_0ccacd5a74b3f639398893626eea889bedd6281998deacaa579a5b48297b7e42->leave($__internal_0ccacd5a74b3f639398893626eea889bedd6281998deacaa579a5b48297b7e42_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d44619814b73d982d23c5a246addad997d9e8c6222ac5b5cb848eac4a12241b = $this->env->getExtension("native_profiler");
        $__internal_3d44619814b73d982d23c5a246addad997d9e8c6222ac5b5cb848eac4a12241b->enter($__internal_3d44619814b73d982d23c5a246addad997d9e8c6222ac5b5cb848eac4a12241b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3d44619814b73d982d23c5a246addad997d9e8c6222ac5b5cb848eac4a12241b->leave($__internal_3d44619814b73d982d23c5a246addad997d9e8c6222ac5b5cb848eac4a12241b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f1577540418b15a29236a6295fbebdc149d75709d130409fadedd51ab1cf9f2e = $this->env->getExtension("native_profiler");
        $__internal_f1577540418b15a29236a6295fbebdc149d75709d130409fadedd51ab1cf9f2e->enter($__internal_f1577540418b15a29236a6295fbebdc149d75709d130409fadedd51ab1cf9f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <!-- Compiled and minified CSS -->
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css\">
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_f1577540418b15a29236a6295fbebdc149d75709d130409fadedd51ab1cf9f2e->leave($__internal_f1577540418b15a29236a6295fbebdc149d75709d130409fadedd51ab1cf9f2e_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_9c3ee38aed1a5f1553162337c1d9b8f638c5ab40b01d6473f9ff7f2aa517763d = $this->env->getExtension("native_profiler");
        $__internal_9c3ee38aed1a5f1553162337c1d9b8f638c5ab40b01d6473f9ff7f2aa517763d->enter($__internal_9c3ee38aed1a5f1553162337c1d9b8f638c5ab40b01d6473f9ff7f2aa517763d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "            ";
        
        $__internal_9c3ee38aed1a5f1553162337c1d9b8f638c5ab40b01d6473f9ff7f2aa517763d->leave($__internal_9c3ee38aed1a5f1553162337c1d9b8f638c5ab40b01d6473f9ff7f2aa517763d_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_769a2ea25f9f3d1f19088df102a81be084598c3c74ebc8486bc7b87793ffd5b1 = $this->env->getExtension("native_profiler");
        $__internal_769a2ea25f9f3d1f19088df102a81be084598c3c74ebc8486bc7b87793ffd5b1->enter($__internal_769a2ea25f9f3d1f19088df102a81be084598c3c74ebc8486bc7b87793ffd5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js\"></script>
            <!-- Compiled and minified JavaScript -->
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js\"></script>
            <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\" ></script>
        ";
        
        $__internal_769a2ea25f9f3d1f19088df102a81be084598c3c74ebc8486bc7b87793ffd5b1->leave($__internal_769a2ea25f9f3d1f19088df102a81be084598c3c74ebc8486bc7b87793ffd5b1_prof);

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
        return array (  131 => 30,  126 => 27,  120 => 26,  113 => 23,  107 => 22,  98 => 10,  93 => 7,  87 => 6,  75 => 5,  66 => 32,  64 => 26,  60 => 24,  58 => 22,  53 => 19,  51 => 18,  47 => 16,  45 => 15,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
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
/*             <div class="row">*/
/*                 {% include "CoreBundle:Partials:searchBar.html.twig" %}*/
/*             </div>*/
/*         </div>*/
/*         <div class="container">*/
/*             {% block content %}*/
/*             {% endblock %}*/
/*         </div>*/
/* */
/*         {% block javascripts %}*/
/*             <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>*/
/*             <!-- Compiled and minified JavaScript -->*/
/*             <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>*/
/*             <script src="{{ asset('js/app.js') }}" ></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
