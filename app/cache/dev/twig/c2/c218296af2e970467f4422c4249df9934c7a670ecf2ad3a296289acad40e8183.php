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
        $__internal_b7f52cfc6dd90379dd8788e5364cb7e4fc2693f25acf2590df328e9b0d6f721f = $this->env->getExtension("native_profiler");
        $__internal_b7f52cfc6dd90379dd8788e5364cb7e4fc2693f25acf2590df328e9b0d6f721f->enter($__internal_b7f52cfc6dd90379dd8788e5364cb7e4fc2693f25acf2590df328e9b0d6f721f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b7f52cfc6dd90379dd8788e5364cb7e4fc2693f25acf2590df328e9b0d6f721f->leave($__internal_b7f52cfc6dd90379dd8788e5364cb7e4fc2693f25acf2590df328e9b0d6f721f_prof);

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
