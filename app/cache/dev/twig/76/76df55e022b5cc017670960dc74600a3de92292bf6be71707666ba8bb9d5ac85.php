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
        $__internal_2cc12b6538739fcd84043e77549706df8198f1f33364213a380e9aac09e01ac9 = $this->env->getExtension("native_profiler");
        $__internal_2cc12b6538739fcd84043e77549706df8198f1f33364213a380e9aac09e01ac9->enter($__internal_2cc12b6538739fcd84043e77549706df8198f1f33364213a380e9aac09e01ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2cc12b6538739fcd84043e77549706df8198f1f33364213a380e9aac09e01ac9->leave($__internal_2cc12b6538739fcd84043e77549706df8198f1f33364213a380e9aac09e01ac9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_de547f32fb3b0615e8df76c2ddf289f9a8b3084a472435f1f5712a17db174d16 = $this->env->getExtension("native_profiler");
        $__internal_de547f32fb3b0615e8df76c2ddf289f9a8b3084a472435f1f5712a17db174d16->enter($__internal_de547f32fb3b0615e8df76c2ddf289f9a8b3084a472435f1f5712a17db174d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_de547f32fb3b0615e8df76c2ddf289f9a8b3084a472435f1f5712a17db174d16->leave($__internal_de547f32fb3b0615e8df76c2ddf289f9a8b3084a472435f1f5712a17db174d16_prof);

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
