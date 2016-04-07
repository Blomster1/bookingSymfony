<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_bf87f5f13f9e37a5ce4cf269b80340870c5c0c4a20a44058b20ab028f1df8e56 extends Twig_Template
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
        $__internal_d697ec085f8c8e6e8bb4f187bc4a90171d0190ef3151112fcf300d4bbbe83d58 = $this->env->getExtension("native_profiler");
        $__internal_d697ec085f8c8e6e8bb4f187bc4a90171d0190ef3151112fcf300d4bbbe83d58->enter($__internal_d697ec085f8c8e6e8bb4f187bc4a90171d0190ef3151112fcf300d4bbbe83d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d697ec085f8c8e6e8bb4f187bc4a90171d0190ef3151112fcf300d4bbbe83d58->leave($__internal_d697ec085f8c8e6e8bb4f187bc4a90171d0190ef3151112fcf300d4bbbe83d58_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
