<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_93384b91963b040065f9639769230a93da2a70cbe30d3f22e213255496ca0e63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_b9d4964405d6ef1ecb9bf17771619c9e54e30bd9250695d0a3e5e3e57bb3e828 = $this->env->getExtension("native_profiler");
        $__internal_b9d4964405d6ef1ecb9bf17771619c9e54e30bd9250695d0a3e5e3e57bb3e828->enter($__internal_b9d4964405d6ef1ecb9bf17771619c9e54e30bd9250695d0a3e5e3e57bb3e828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9d4964405d6ef1ecb9bf17771619c9e54e30bd9250695d0a3e5e3e57bb3e828->leave($__internal_b9d4964405d6ef1ecb9bf17771619c9e54e30bd9250695d0a3e5e3e57bb3e828_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5314a4231f58bb9c7e0589f5b760c6ffd4ce2e17186a7445efd47f5dbb900472 = $this->env->getExtension("native_profiler");
        $__internal_5314a4231f58bb9c7e0589f5b760c6ffd4ce2e17186a7445efd47f5dbb900472->enter($__internal_5314a4231f58bb9c7e0589f5b760c6ffd4ce2e17186a7445efd47f5dbb900472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_5314a4231f58bb9c7e0589f5b760c6ffd4ce2e17186a7445efd47f5dbb900472->leave($__internal_5314a4231f58bb9c7e0589f5b760c6ffd4ce2e17186a7445efd47f5dbb900472_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
