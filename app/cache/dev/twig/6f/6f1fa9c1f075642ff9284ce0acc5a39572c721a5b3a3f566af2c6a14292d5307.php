<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_bd5b7cccab93bfe215ae1edc88513fb33b1831c13cdfc14bd21608f63c2c03fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_de126b58f81b38bb8efbd4fe3ad52794c988a6c8fd7f087929c87b14ce279398 = $this->env->getExtension("native_profiler");
        $__internal_de126b58f81b38bb8efbd4fe3ad52794c988a6c8fd7f087929c87b14ce279398->enter($__internal_de126b58f81b38bb8efbd4fe3ad52794c988a6c8fd7f087929c87b14ce279398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de126b58f81b38bb8efbd4fe3ad52794c988a6c8fd7f087929c87b14ce279398->leave($__internal_de126b58f81b38bb8efbd4fe3ad52794c988a6c8fd7f087929c87b14ce279398_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e249aacfef89f07d80e05bd8d08235b673adc8a2cad15d14831b7e57b07f003 = $this->env->getExtension("native_profiler");
        $__internal_3e249aacfef89f07d80e05bd8d08235b673adc8a2cad15d14831b7e57b07f003->enter($__internal_3e249aacfef89f07d80e05bd8d08235b673adc8a2cad15d14831b7e57b07f003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_3e249aacfef89f07d80e05bd8d08235b673adc8a2cad15d14831b7e57b07f003->leave($__internal_3e249aacfef89f07d80e05bd8d08235b673adc8a2cad15d14831b7e57b07f003_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
