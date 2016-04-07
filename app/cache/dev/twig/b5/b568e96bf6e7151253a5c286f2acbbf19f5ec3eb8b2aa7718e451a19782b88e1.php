<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_69f42646df88f3ac70408f424c22c9ad72db07ea7bef6efe280032d4dee83df1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_a4bcb4bb25aaa20e34917c0be908eebe2f42a8eb0189b07d5d6e75b25c89ff93 = $this->env->getExtension("native_profiler");
        $__internal_a4bcb4bb25aaa20e34917c0be908eebe2f42a8eb0189b07d5d6e75b25c89ff93->enter($__internal_a4bcb4bb25aaa20e34917c0be908eebe2f42a8eb0189b07d5d6e75b25c89ff93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4bcb4bb25aaa20e34917c0be908eebe2f42a8eb0189b07d5d6e75b25c89ff93->leave($__internal_a4bcb4bb25aaa20e34917c0be908eebe2f42a8eb0189b07d5d6e75b25c89ff93_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_da6d0b8d11b73a36e4847b221706d7e57c7fb4f5d34ff272eb06045697091fc9 = $this->env->getExtension("native_profiler");
        $__internal_da6d0b8d11b73a36e4847b221706d7e57c7fb4f5d34ff272eb06045697091fc9->enter($__internal_da6d0b8d11b73a36e4847b221706d7e57c7fb4f5d34ff272eb06045697091fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_da6d0b8d11b73a36e4847b221706d7e57c7fb4f5d34ff272eb06045697091fc9->leave($__internal_da6d0b8d11b73a36e4847b221706d7e57c7fb4f5d34ff272eb06045697091fc9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
