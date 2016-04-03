<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_326780fd572b5b3cec652f0e509185d1afe73fed261ac1acfdf2a36fcabb2121 extends Twig_Template
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
        $__internal_39ea347f7c7fdd58807bc2d1b010f4f90f430e9c695150caddef23ba0faef048 = $this->env->getExtension("native_profiler");
        $__internal_39ea347f7c7fdd58807bc2d1b010f4f90f430e9c695150caddef23ba0faef048->enter($__internal_39ea347f7c7fdd58807bc2d1b010f4f90f430e9c695150caddef23ba0faef048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_39ea347f7c7fdd58807bc2d1b010f4f90f430e9c695150caddef23ba0faef048->leave($__internal_39ea347f7c7fdd58807bc2d1b010f4f90f430e9c695150caddef23ba0faef048_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
