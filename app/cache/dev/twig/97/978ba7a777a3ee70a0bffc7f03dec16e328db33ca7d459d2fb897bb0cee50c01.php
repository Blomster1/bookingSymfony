<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_d1b4d034014effa91a3585682fccf80b5cc7b59941c8bc79e581fc0475f59a0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_f2c177f6731c3ca1f03cd10586c4b50831c64397386d25d8dbd033ab987a986a = $this->env->getExtension("native_profiler");
        $__internal_f2c177f6731c3ca1f03cd10586c4b50831c64397386d25d8dbd033ab987a986a->enter($__internal_f2c177f6731c3ca1f03cd10586c4b50831c64397386d25d8dbd033ab987a986a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2c177f6731c3ca1f03cd10586c4b50831c64397386d25d8dbd033ab987a986a->leave($__internal_f2c177f6731c3ca1f03cd10586c4b50831c64397386d25d8dbd033ab987a986a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e89945827033367379582c5fdde06250f56411e7399ab9e90776ce553f76ecaf = $this->env->getExtension("native_profiler");
        $__internal_e89945827033367379582c5fdde06250f56411e7399ab9e90776ce553f76ecaf->enter($__internal_e89945827033367379582c5fdde06250f56411e7399ab9e90776ce553f76ecaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_e89945827033367379582c5fdde06250f56411e7399ab9e90776ce553f76ecaf->leave($__internal_e89945827033367379582c5fdde06250f56411e7399ab9e90776ce553f76ecaf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
