<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_2ccdb61afbc3bbbdcbf084f0a8cd5f13f3a7bb07760e0e62d5ce7519d2bc69e3 extends Twig_Template
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
        $__internal_05224390cb0aa19dbf82705f7b56e411a4fe56dca54e571f012094a153ef72dd = $this->env->getExtension("native_profiler");
        $__internal_05224390cb0aa19dbf82705f7b56e411a4fe56dca54e571f012094a153ef72dd->enter($__internal_05224390cb0aa19dbf82705f7b56e411a4fe56dca54e571f012094a153ef72dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_05224390cb0aa19dbf82705f7b56e411a4fe56dca54e571f012094a153ef72dd->leave($__internal_05224390cb0aa19dbf82705f7b56e411a4fe56dca54e571f012094a153ef72dd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
