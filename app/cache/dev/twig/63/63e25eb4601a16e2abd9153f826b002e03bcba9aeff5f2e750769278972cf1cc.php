<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_9b61cbe2ce9a6f42353732fa65463ddd20be343fd0d965231060f6493c7ba5df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_a0ac345be0cf9e513e1dd835bc5cd086943698eea5fee1e0986f984d296fd3d7 = $this->env->getExtension("native_profiler");
        $__internal_a0ac345be0cf9e513e1dd835bc5cd086943698eea5fee1e0986f984d296fd3d7->enter($__internal_a0ac345be0cf9e513e1dd835bc5cd086943698eea5fee1e0986f984d296fd3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0ac345be0cf9e513e1dd835bc5cd086943698eea5fee1e0986f984d296fd3d7->leave($__internal_a0ac345be0cf9e513e1dd835bc5cd086943698eea5fee1e0986f984d296fd3d7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5c4404a7696f2377eb3b9794244778a8d755daab577ef05a44334d8efbf8dad5 = $this->env->getExtension("native_profiler");
        $__internal_5c4404a7696f2377eb3b9794244778a8d755daab577ef05a44334d8efbf8dad5->enter($__internal_5c4404a7696f2377eb3b9794244778a8d755daab577ef05a44334d8efbf8dad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_5c4404a7696f2377eb3b9794244778a8d755daab577ef05a44334d8efbf8dad5->leave($__internal_5c4404a7696f2377eb3b9794244778a8d755daab577ef05a44334d8efbf8dad5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
