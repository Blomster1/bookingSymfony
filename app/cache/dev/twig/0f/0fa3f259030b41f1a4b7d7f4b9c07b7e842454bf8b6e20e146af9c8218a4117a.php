<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2d19266a269758586a658b60af02b58c641321177dfbb62161bf5299c7e0e098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dcc2bc6f2cc2d4716fc9f6bdc96166b1a9d8bc2fa6e18a257ac8b012247e6eb = $this->env->getExtension("native_profiler");
        $__internal_8dcc2bc6f2cc2d4716fc9f6bdc96166b1a9d8bc2fa6e18a257ac8b012247e6eb->enter($__internal_8dcc2bc6f2cc2d4716fc9f6bdc96166b1a9d8bc2fa6e18a257ac8b012247e6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8dcc2bc6f2cc2d4716fc9f6bdc96166b1a9d8bc2fa6e18a257ac8b012247e6eb->leave($__internal_8dcc2bc6f2cc2d4716fc9f6bdc96166b1a9d8bc2fa6e18a257ac8b012247e6eb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
