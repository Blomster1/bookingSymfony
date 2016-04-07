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
        $__internal_f896b679b3f2e6bf42612c1097070b50302aabf848e4c646e22a983eb25f1661 = $this->env->getExtension("native_profiler");
        $__internal_f896b679b3f2e6bf42612c1097070b50302aabf848e4c646e22a983eb25f1661->enter($__internal_f896b679b3f2e6bf42612c1097070b50302aabf848e4c646e22a983eb25f1661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f896b679b3f2e6bf42612c1097070b50302aabf848e4c646e22a983eb25f1661->leave($__internal_f896b679b3f2e6bf42612c1097070b50302aabf848e4c646e22a983eb25f1661_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_819345f6d292966d020019a6c5c9c61f7a07167e3ec0c86afab1c52ceed607f7 = $this->env->getExtension("native_profiler");
        $__internal_819345f6d292966d020019a6c5c9c61f7a07167e3ec0c86afab1c52ceed607f7->enter($__internal_819345f6d292966d020019a6c5c9c61f7a07167e3ec0c86afab1c52ceed607f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_819345f6d292966d020019a6c5c9c61f7a07167e3ec0c86afab1c52ceed607f7->leave($__internal_819345f6d292966d020019a6c5c9c61f7a07167e3ec0c86afab1c52ceed607f7_prof);

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
