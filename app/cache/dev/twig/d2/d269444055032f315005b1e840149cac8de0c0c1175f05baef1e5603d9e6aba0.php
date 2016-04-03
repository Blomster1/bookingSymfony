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
        $__internal_f45c548e8e963995befc6d197094b654f3df91e2aae768a228d9982c6c5370ff = $this->env->getExtension("native_profiler");
        $__internal_f45c548e8e963995befc6d197094b654f3df91e2aae768a228d9982c6c5370ff->enter($__internal_f45c548e8e963995befc6d197094b654f3df91e2aae768a228d9982c6c5370ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f45c548e8e963995befc6d197094b654f3df91e2aae768a228d9982c6c5370ff->leave($__internal_f45c548e8e963995befc6d197094b654f3df91e2aae768a228d9982c6c5370ff_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60f408705ccea1b8145187d034945ea89ecda5b8be5efb61d48cd89542dfea15 = $this->env->getExtension("native_profiler");
        $__internal_60f408705ccea1b8145187d034945ea89ecda5b8be5efb61d48cd89542dfea15->enter($__internal_60f408705ccea1b8145187d034945ea89ecda5b8be5efb61d48cd89542dfea15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_60f408705ccea1b8145187d034945ea89ecda5b8be5efb61d48cd89542dfea15->leave($__internal_60f408705ccea1b8145187d034945ea89ecda5b8be5efb61d48cd89542dfea15_prof);

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
