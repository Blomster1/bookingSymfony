<?php

/* CoreBundle:Default:index.html.twig */
class __TwigTemplate_b46677fc6cafe263334aaf62c54b222cee2b8b2365fcc528c15447df72a8d976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CoreBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff0d05c173f903ea26bb5f141d52af4bd6732beccf0e4f3bd242f6141277d575 = $this->env->getExtension("native_profiler");
        $__internal_ff0d05c173f903ea26bb5f141d52af4bd6732beccf0e4f3bd242f6141277d575->enter($__internal_ff0d05c173f903ea26bb5f141d52af4bd6732beccf0e4f3bd242f6141277d575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff0d05c173f903ea26bb5f141d52af4bd6732beccf0e4f3bd242f6141277d575->leave($__internal_ff0d05c173f903ea26bb5f141d52af4bd6732beccf0e4f3bd242f6141277d575_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
