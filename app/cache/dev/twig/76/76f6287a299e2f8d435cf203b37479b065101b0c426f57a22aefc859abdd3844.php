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
        $__internal_6d1251b59cde29458c5152dfbbc94ec2215e51b9b0ad483c2800d93073b89fa8 = $this->env->getExtension("native_profiler");
        $__internal_6d1251b59cde29458c5152dfbbc94ec2215e51b9b0ad483c2800d93073b89fa8->enter($__internal_6d1251b59cde29458c5152dfbbc94ec2215e51b9b0ad483c2800d93073b89fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_6d1251b59cde29458c5152dfbbc94ec2215e51b9b0ad483c2800d93073b89fa8->leave($__internal_6d1251b59cde29458c5152dfbbc94ec2215e51b9b0ad483c2800d93073b89fa8_prof);

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
