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
        $__internal_5fba31cc7cfd5d017ec25902399c7559937cffdc531429d9903b5a18ea50c0b6 = $this->env->getExtension("native_profiler");
        $__internal_5fba31cc7cfd5d017ec25902399c7559937cffdc531429d9903b5a18ea50c0b6->enter($__internal_5fba31cc7cfd5d017ec25902399c7559937cffdc531429d9903b5a18ea50c0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fba31cc7cfd5d017ec25902399c7559937cffdc531429d9903b5a18ea50c0b6->leave($__internal_5fba31cc7cfd5d017ec25902399c7559937cffdc531429d9903b5a18ea50c0b6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e5528ef02adfe30f83136f96d7b66859a2f4557cb5797033585de8154d76772 = $this->env->getExtension("native_profiler");
        $__internal_1e5528ef02adfe30f83136f96d7b66859a2f4557cb5797033585de8154d76772->enter($__internal_1e5528ef02adfe30f83136f96d7b66859a2f4557cb5797033585de8154d76772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_1e5528ef02adfe30f83136f96d7b66859a2f4557cb5797033585de8154d76772->leave($__internal_1e5528ef02adfe30f83136f96d7b66859a2f4557cb5797033585de8154d76772_prof);

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
