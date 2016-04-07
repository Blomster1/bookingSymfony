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
        $__internal_0a9a481a8598b0ed4f1e7dc41f95cd4cf80c84d079df14a729a2c4eaa56e2add = $this->env->getExtension("native_profiler");
        $__internal_0a9a481a8598b0ed4f1e7dc41f95cd4cf80c84d079df14a729a2c4eaa56e2add->enter($__internal_0a9a481a8598b0ed4f1e7dc41f95cd4cf80c84d079df14a729a2c4eaa56e2add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_0a9a481a8598b0ed4f1e7dc41f95cd4cf80c84d079df14a729a2c4eaa56e2add->leave($__internal_0a9a481a8598b0ed4f1e7dc41f95cd4cf80c84d079df14a729a2c4eaa56e2add_prof);

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
