<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_b6bf605459df27d28dbab1fcfd15370822463e71cd1a8d143ef0bab284ff3815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_73dfebfdda189478da7f9c5ce48792ea9406339aee50a083d541fd4aeacb60ef = $this->env->getExtension("native_profiler");
        $__internal_73dfebfdda189478da7f9c5ce48792ea9406339aee50a083d541fd4aeacb60ef->enter($__internal_73dfebfdda189478da7f9c5ce48792ea9406339aee50a083d541fd4aeacb60ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73dfebfdda189478da7f9c5ce48792ea9406339aee50a083d541fd4aeacb60ef->leave($__internal_73dfebfdda189478da7f9c5ce48792ea9406339aee50a083d541fd4aeacb60ef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a9f18c9d0aa2129571452899cc608cf27d19aade53d35681104be3eb99ea1ecf = $this->env->getExtension("native_profiler");
        $__internal_a9f18c9d0aa2129571452899cc608cf27d19aade53d35681104be3eb99ea1ecf->enter($__internal_a9f18c9d0aa2129571452899cc608cf27d19aade53d35681104be3eb99ea1ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_a9f18c9d0aa2129571452899cc608cf27d19aade53d35681104be3eb99ea1ecf->leave($__internal_a9f18c9d0aa2129571452899cc608cf27d19aade53d35681104be3eb99ea1ecf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
