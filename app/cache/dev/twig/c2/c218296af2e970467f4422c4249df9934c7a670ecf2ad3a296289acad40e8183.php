<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_dc4c9561b61c36bbf38e29a2068b84c64b16c899489c2497837cd8b5bc954fa7 extends Twig_Template
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
        $__internal_9cdfd7a60cb61afb12877046f91bdc3416a7ca8c473a6d0e75710eb4f8d48234 = $this->env->getExtension("native_profiler");
        $__internal_9cdfd7a60cb61afb12877046f91bdc3416a7ca8c473a6d0e75710eb4f8d48234->enter($__internal_9cdfd7a60cb61afb12877046f91bdc3416a7ca8c473a6d0e75710eb4f8d48234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9cdfd7a60cb61afb12877046f91bdc3416a7ca8c473a6d0e75710eb4f8d48234->leave($__internal_9cdfd7a60cb61afb12877046f91bdc3416a7ca8c473a6d0e75710eb4f8d48234_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
