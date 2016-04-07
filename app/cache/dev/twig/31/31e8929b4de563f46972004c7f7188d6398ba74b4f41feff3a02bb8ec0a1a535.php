<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_68ae14c35b9bcef6986c5e7ae6694b97a7c037ea1e2240c809b807875553cb57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_6ca39217664171f5c9feb46c24ba2762d6f85cea7ae5684fae174a0be0dca710 = $this->env->getExtension("native_profiler");
        $__internal_6ca39217664171f5c9feb46c24ba2762d6f85cea7ae5684fae174a0be0dca710->enter($__internal_6ca39217664171f5c9feb46c24ba2762d6f85cea7ae5684fae174a0be0dca710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ca39217664171f5c9feb46c24ba2762d6f85cea7ae5684fae174a0be0dca710->leave($__internal_6ca39217664171f5c9feb46c24ba2762d6f85cea7ae5684fae174a0be0dca710_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_77cee9630d6bad22a30d3529ff77ef35d566bd3319bad1f0fb7ea0a850c54f40 = $this->env->getExtension("native_profiler");
        $__internal_77cee9630d6bad22a30d3529ff77ef35d566bd3319bad1f0fb7ea0a850c54f40->enter($__internal_77cee9630d6bad22a30d3529ff77ef35d566bd3319bad1f0fb7ea0a850c54f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_77cee9630d6bad22a30d3529ff77ef35d566bd3319bad1f0fb7ea0a850c54f40->leave($__internal_77cee9630d6bad22a30d3529ff77ef35d566bd3319bad1f0fb7ea0a850c54f40_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
