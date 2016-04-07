<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_fc4f6cc6d7c3aefc29e505e2f5c2a18c75db783184526b0af8bfc2c8e1f434e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_8be2bc73f656fa765bf488371450c8e9d137461dfbb7752533526fc613b6f8a7 = $this->env->getExtension("native_profiler");
        $__internal_8be2bc73f656fa765bf488371450c8e9d137461dfbb7752533526fc613b6f8a7->enter($__internal_8be2bc73f656fa765bf488371450c8e9d137461dfbb7752533526fc613b6f8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8be2bc73f656fa765bf488371450c8e9d137461dfbb7752533526fc613b6f8a7->leave($__internal_8be2bc73f656fa765bf488371450c8e9d137461dfbb7752533526fc613b6f8a7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_806ac90e0042e14d67310b134831ef0500da40fb9dce0565b95275145503ca01 = $this->env->getExtension("native_profiler");
        $__internal_806ac90e0042e14d67310b134831ef0500da40fb9dce0565b95275145503ca01->enter($__internal_806ac90e0042e14d67310b134831ef0500da40fb9dce0565b95275145503ca01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_806ac90e0042e14d67310b134831ef0500da40fb9dce0565b95275145503ca01->leave($__internal_806ac90e0042e14d67310b134831ef0500da40fb9dce0565b95275145503ca01_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
