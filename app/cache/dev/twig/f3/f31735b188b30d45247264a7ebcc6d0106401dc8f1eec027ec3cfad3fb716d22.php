<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_91fc2a405aa2c56ccef74293b5971c8d3c81bccb1be87c629b42a6521e91464b extends Twig_Template
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
        $__internal_dadbe733f1f4eab1ddd5666b317455e0baf44e846a628ca8d727976066853e9d = $this->env->getExtension("native_profiler");
        $__internal_dadbe733f1f4eab1ddd5666b317455e0baf44e846a628ca8d727976066853e9d->enter($__internal_dadbe733f1f4eab1ddd5666b317455e0baf44e846a628ca8d727976066853e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_dadbe733f1f4eab1ddd5666b317455e0baf44e846a628ca8d727976066853e9d->leave($__internal_dadbe733f1f4eab1ddd5666b317455e0baf44e846a628ca8d727976066853e9d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
