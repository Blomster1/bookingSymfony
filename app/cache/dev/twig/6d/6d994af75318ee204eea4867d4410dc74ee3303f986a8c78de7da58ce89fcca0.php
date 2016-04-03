<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_ff96f4cec3c77df6db9a2d3e3b0a19db0fe5bae94117c5901d75611cd1855ea7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_a1062b850c12ef8a6911bc33958c3ffac131f42c43d9578b7c0aa24297dcd95b = $this->env->getExtension("native_profiler");
        $__internal_a1062b850c12ef8a6911bc33958c3ffac131f42c43d9578b7c0aa24297dcd95b->enter($__internal_a1062b850c12ef8a6911bc33958c3ffac131f42c43d9578b7c0aa24297dcd95b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1062b850c12ef8a6911bc33958c3ffac131f42c43d9578b7c0aa24297dcd95b->leave($__internal_a1062b850c12ef8a6911bc33958c3ffac131f42c43d9578b7c0aa24297dcd95b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b47be8ba461c9e6ad3b7863a51d1a8c50ece7931dc2259d63df95a12662b6f34 = $this->env->getExtension("native_profiler");
        $__internal_b47be8ba461c9e6ad3b7863a51d1a8c50ece7931dc2259d63df95a12662b6f34->enter($__internal_b47be8ba461c9e6ad3b7863a51d1a8c50ece7931dc2259d63df95a12662b6f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b47be8ba461c9e6ad3b7863a51d1a8c50ece7931dc2259d63df95a12662b6f34->leave($__internal_b47be8ba461c9e6ad3b7863a51d1a8c50ece7931dc2259d63df95a12662b6f34_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
