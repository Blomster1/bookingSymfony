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
        $__internal_9c7d6d967f482fc63b47661686492ffcc0cf558c7bae3838e7b6a23c9b9cb9f2 = $this->env->getExtension("native_profiler");
        $__internal_9c7d6d967f482fc63b47661686492ffcc0cf558c7bae3838e7b6a23c9b9cb9f2->enter($__internal_9c7d6d967f482fc63b47661686492ffcc0cf558c7bae3838e7b6a23c9b9cb9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c7d6d967f482fc63b47661686492ffcc0cf558c7bae3838e7b6a23c9b9cb9f2->leave($__internal_9c7d6d967f482fc63b47661686492ffcc0cf558c7bae3838e7b6a23c9b9cb9f2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_519a0936f3e7cf40f434442bff6b9924d320c0cf678948fabbfc177c3daf31a6 = $this->env->getExtension("native_profiler");
        $__internal_519a0936f3e7cf40f434442bff6b9924d320c0cf678948fabbfc177c3daf31a6->enter($__internal_519a0936f3e7cf40f434442bff6b9924d320c0cf678948fabbfc177c3daf31a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_519a0936f3e7cf40f434442bff6b9924d320c0cf678948fabbfc177c3daf31a6->leave($__internal_519a0936f3e7cf40f434442bff6b9924d320c0cf678948fabbfc177c3daf31a6_prof);

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
