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
        $__internal_7f69f44316aa0baa393434671be2aeee5370c3b11a47a6efc1ba8528869ce859 = $this->env->getExtension("native_profiler");
        $__internal_7f69f44316aa0baa393434671be2aeee5370c3b11a47a6efc1ba8528869ce859->enter($__internal_7f69f44316aa0baa393434671be2aeee5370c3b11a47a6efc1ba8528869ce859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f69f44316aa0baa393434671be2aeee5370c3b11a47a6efc1ba8528869ce859->leave($__internal_7f69f44316aa0baa393434671be2aeee5370c3b11a47a6efc1ba8528869ce859_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e54498869c045f71adb3f4adb4dec71792c93680a5336025a3787f85d21b6931 = $this->env->getExtension("native_profiler");
        $__internal_e54498869c045f71adb3f4adb4dec71792c93680a5336025a3787f85d21b6931->enter($__internal_e54498869c045f71adb3f4adb4dec71792c93680a5336025a3787f85d21b6931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_e54498869c045f71adb3f4adb4dec71792c93680a5336025a3787f85d21b6931->leave($__internal_e54498869c045f71adb3f4adb4dec71792c93680a5336025a3787f85d21b6931_prof);

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
