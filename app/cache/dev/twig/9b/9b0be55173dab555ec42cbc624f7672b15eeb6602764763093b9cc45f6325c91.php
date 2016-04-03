<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_9efa87a246e79e8d75e1e25e3d1d03b8e75b8bffaadf98b2d6949edafd7320bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fcbcd6be6700d3225d8f26ff2aeb0249eef19accc463924d67b9207e14983bc = $this->env->getExtension("native_profiler");
        $__internal_0fcbcd6be6700d3225d8f26ff2aeb0249eef19accc463924d67b9207e14983bc->enter($__internal_0fcbcd6be6700d3225d8f26ff2aeb0249eef19accc463924d67b9207e14983bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fcbcd6be6700d3225d8f26ff2aeb0249eef19accc463924d67b9207e14983bc->leave($__internal_0fcbcd6be6700d3225d8f26ff2aeb0249eef19accc463924d67b9207e14983bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9c316221bdad6b4ff4772e882b943d38f480f25fbfb987c87ce21e5d79f8ddea = $this->env->getExtension("native_profiler");
        $__internal_9c316221bdad6b4ff4772e882b943d38f480f25fbfb987c87ce21e5d79f8ddea->enter($__internal_9c316221bdad6b4ff4772e882b943d38f480f25fbfb987c87ce21e5d79f8ddea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_9c316221bdad6b4ff4772e882b943d38f480f25fbfb987c87ce21e5d79f8ddea->leave($__internal_9c316221bdad6b4ff4772e882b943d38f480f25fbfb987c87ce21e5d79f8ddea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
