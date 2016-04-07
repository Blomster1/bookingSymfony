<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_b929bbb4caa4742271e2b103bf342f72cdfe96b95d651573c8c5d77a8ed3bd38 extends Twig_Template
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
        $__internal_04a80b3cfa4cec9fc9a28a39638194c2cacae5913e1c0ebe377330d3360bcd92 = $this->env->getExtension("native_profiler");
        $__internal_04a80b3cfa4cec9fc9a28a39638194c2cacae5913e1c0ebe377330d3360bcd92->enter($__internal_04a80b3cfa4cec9fc9a28a39638194c2cacae5913e1c0ebe377330d3360bcd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_04a80b3cfa4cec9fc9a28a39638194c2cacae5913e1c0ebe377330d3360bcd92->leave($__internal_04a80b3cfa4cec9fc9a28a39638194c2cacae5913e1c0ebe377330d3360bcd92_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
