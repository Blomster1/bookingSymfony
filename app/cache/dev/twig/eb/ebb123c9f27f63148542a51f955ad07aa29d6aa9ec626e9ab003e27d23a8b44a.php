<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e76f8401d06081f8f350c3176c6294489c9a19c0334ebfed78bd7ce3d761af89 extends Twig_Template
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
        $__internal_153500fdfe38f231234f9e9334bb74f729c759e64746254806e73ff4c6c8ed1e = $this->env->getExtension("native_profiler");
        $__internal_153500fdfe38f231234f9e9334bb74f729c759e64746254806e73ff4c6c8ed1e->enter($__internal_153500fdfe38f231234f9e9334bb74f729c759e64746254806e73ff4c6c8ed1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_153500fdfe38f231234f9e9334bb74f729c759e64746254806e73ff4c6c8ed1e->leave($__internal_153500fdfe38f231234f9e9334bb74f729c759e64746254806e73ff4c6c8ed1e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
