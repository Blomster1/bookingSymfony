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
        $__internal_9515b565ae5b62e4111adf03fb3c3d76c796ae6e9876538591e1c4564ff1550c = $this->env->getExtension("native_profiler");
        $__internal_9515b565ae5b62e4111adf03fb3c3d76c796ae6e9876538591e1c4564ff1550c->enter($__internal_9515b565ae5b62e4111adf03fb3c3d76c796ae6e9876538591e1c4564ff1550c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9515b565ae5b62e4111adf03fb3c3d76c796ae6e9876538591e1c4564ff1550c->leave($__internal_9515b565ae5b62e4111adf03fb3c3d76c796ae6e9876538591e1c4564ff1550c_prof);

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
