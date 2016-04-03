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
        $__internal_58f9e3314078123c6e3a912797de13f1206df2302bafd1b96122a3f8f82a0c04 = $this->env->getExtension("native_profiler");
        $__internal_58f9e3314078123c6e3a912797de13f1206df2302bafd1b96122a3f8f82a0c04->enter($__internal_58f9e3314078123c6e3a912797de13f1206df2302bafd1b96122a3f8f82a0c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58f9e3314078123c6e3a912797de13f1206df2302bafd1b96122a3f8f82a0c04->leave($__internal_58f9e3314078123c6e3a912797de13f1206df2302bafd1b96122a3f8f82a0c04_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4da341f70dc8f6bdc107362b246f79accd5ace0231ff0266352384a961872e91 = $this->env->getExtension("native_profiler");
        $__internal_4da341f70dc8f6bdc107362b246f79accd5ace0231ff0266352384a961872e91->enter($__internal_4da341f70dc8f6bdc107362b246f79accd5ace0231ff0266352384a961872e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_4da341f70dc8f6bdc107362b246f79accd5ace0231ff0266352384a961872e91->leave($__internal_4da341f70dc8f6bdc107362b246f79accd5ace0231ff0266352384a961872e91_prof);

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
