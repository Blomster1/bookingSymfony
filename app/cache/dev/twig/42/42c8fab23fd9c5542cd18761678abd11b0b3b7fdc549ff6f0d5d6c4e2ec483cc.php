<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_98dad21880cded700c35c3d70263c3f89f0bcc057e053e7c26084a650abb36ad extends Twig_Template
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
        $__internal_07d37b431396d2d92c8c6cf25d282fad6aff2ae6af1b70961ccf40b45c66c766 = $this->env->getExtension("native_profiler");
        $__internal_07d37b431396d2d92c8c6cf25d282fad6aff2ae6af1b70961ccf40b45c66c766->enter($__internal_07d37b431396d2d92c8c6cf25d282fad6aff2ae6af1b70961ccf40b45c66c766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_07d37b431396d2d92c8c6cf25d282fad6aff2ae6af1b70961ccf40b45c66c766->leave($__internal_07d37b431396d2d92c8c6cf25d282fad6aff2ae6af1b70961ccf40b45c66c766_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
