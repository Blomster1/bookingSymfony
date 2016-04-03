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
        $__internal_dd07e4be2d209f550b18541986e01a1cddac54f89f196f46f2366c9b7debde2e = $this->env->getExtension("native_profiler");
        $__internal_dd07e4be2d209f550b18541986e01a1cddac54f89f196f46f2366c9b7debde2e->enter($__internal_dd07e4be2d209f550b18541986e01a1cddac54f89f196f46f2366c9b7debde2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd07e4be2d209f550b18541986e01a1cddac54f89f196f46f2366c9b7debde2e->leave($__internal_dd07e4be2d209f550b18541986e01a1cddac54f89f196f46f2366c9b7debde2e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_887e853a0e5246487a3c6223b587da3a8f1dadabfb6f353c667b24bb95f91c42 = $this->env->getExtension("native_profiler");
        $__internal_887e853a0e5246487a3c6223b587da3a8f1dadabfb6f353c667b24bb95f91c42->enter($__internal_887e853a0e5246487a3c6223b587da3a8f1dadabfb6f353c667b24bb95f91c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_887e853a0e5246487a3c6223b587da3a8f1dadabfb6f353c667b24bb95f91c42->leave($__internal_887e853a0e5246487a3c6223b587da3a8f1dadabfb6f353c667b24bb95f91c42_prof);

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
