<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_d80903f99e78928633c861a0904499205cfce4921ecf61b0ca16b036d89df8f8 extends Twig_Template
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
        $__internal_8703c3a00ee2d7e5d2119219fb65036b74ec84467163e26a220c4e73a8369e4e = $this->env->getExtension("native_profiler");
        $__internal_8703c3a00ee2d7e5d2119219fb65036b74ec84467163e26a220c4e73a8369e4e->enter($__internal_8703c3a00ee2d7e5d2119219fb65036b74ec84467163e26a220c4e73a8369e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_8703c3a00ee2d7e5d2119219fb65036b74ec84467163e26a220c4e73a8369e4e->leave($__internal_8703c3a00ee2d7e5d2119219fb65036b74ec84467163e26a220c4e73a8369e4e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
