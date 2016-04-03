<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_19fee874da7df3297c63d2083b8600713491e5b12286eac250f20da95a0fdbe8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98e680f4549cd6d3cf1f19ff541f2e080910f1b9a4589af7d406a034073a014e = $this->env->getExtension("native_profiler");
        $__internal_98e680f4549cd6d3cf1f19ff541f2e080910f1b9a4589af7d406a034073a014e->enter($__internal_98e680f4549cd6d3cf1f19ff541f2e080910f1b9a4589af7d406a034073a014e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98e680f4549cd6d3cf1f19ff541f2e080910f1b9a4589af7d406a034073a014e->leave($__internal_98e680f4549cd6d3cf1f19ff541f2e080910f1b9a4589af7d406a034073a014e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dbcf2187d4b7f32861c252d4470cea7378e3411047df542d749b26f71689ec57 = $this->env->getExtension("native_profiler");
        $__internal_dbcf2187d4b7f32861c252d4470cea7378e3411047df542d749b26f71689ec57->enter($__internal_dbcf2187d4b7f32861c252d4470cea7378e3411047df542d749b26f71689ec57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_dbcf2187d4b7f32861c252d4470cea7378e3411047df542d749b26f71689ec57->leave($__internal_dbcf2187d4b7f32861c252d4470cea7378e3411047df542d749b26f71689ec57_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_79b61e6fdb5dc9647f69ba4c155ff6aa63e2653e028941462557a72074a50f4f = $this->env->getExtension("native_profiler");
        $__internal_79b61e6fdb5dc9647f69ba4c155ff6aa63e2653e028941462557a72074a50f4f->enter($__internal_79b61e6fdb5dc9647f69ba4c155ff6aa63e2653e028941462557a72074a50f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_79b61e6fdb5dc9647f69ba4c155ff6aa63e2653e028941462557a72074a50f4f->leave($__internal_79b61e6fdb5dc9647f69ba4c155ff6aa63e2653e028941462557a72074a50f4f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_74d84939f68a7ae166cacc338af27694f4c51f76c9832f2fdf274700c0c8b846 = $this->env->getExtension("native_profiler");
        $__internal_74d84939f68a7ae166cacc338af27694f4c51f76c9832f2fdf274700c0c8b846->enter($__internal_74d84939f68a7ae166cacc338af27694f4c51f76c9832f2fdf274700c0c8b846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_74d84939f68a7ae166cacc338af27694f4c51f76c9832f2fdf274700c0c8b846->leave($__internal_74d84939f68a7ae166cacc338af27694f4c51f76c9832f2fdf274700c0c8b846_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
