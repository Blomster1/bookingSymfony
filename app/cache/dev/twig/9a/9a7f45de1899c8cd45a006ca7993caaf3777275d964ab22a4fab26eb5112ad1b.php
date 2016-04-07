<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_08d136ce2e86729757388386822675a1d6ea5a782278955b0f676885a97017a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_d2775bf691c137f16f4591918a365840bae709c842e2a7662320da8252a196f2 = $this->env->getExtension("native_profiler");
        $__internal_d2775bf691c137f16f4591918a365840bae709c842e2a7662320da8252a196f2->enter($__internal_d2775bf691c137f16f4591918a365840bae709c842e2a7662320da8252a196f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d2775bf691c137f16f4591918a365840bae709c842e2a7662320da8252a196f2->leave($__internal_d2775bf691c137f16f4591918a365840bae709c842e2a7662320da8252a196f2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0cb09ed7cb29dbd356b0db699ecfb6ffb3a778194f5f3b6d8afa02250551584 = $this->env->getExtension("native_profiler");
        $__internal_a0cb09ed7cb29dbd356b0db699ecfb6ffb3a778194f5f3b6d8afa02250551584->enter($__internal_a0cb09ed7cb29dbd356b0db699ecfb6ffb3a778194f5f3b6d8afa02250551584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a0cb09ed7cb29dbd356b0db699ecfb6ffb3a778194f5f3b6d8afa02250551584->leave($__internal_a0cb09ed7cb29dbd356b0db699ecfb6ffb3a778194f5f3b6d8afa02250551584_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
/* <p>{{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
