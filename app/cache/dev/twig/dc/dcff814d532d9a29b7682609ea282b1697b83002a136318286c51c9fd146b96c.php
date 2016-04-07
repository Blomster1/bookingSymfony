<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_012f84a5a6f951df78389b6500ff1fc32610b0528f2c53f723f880cd36ad90bc extends Twig_Template
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
        $__internal_1943fd54bb7d5202f1d0241fc840e0d2639034a8627bfab6573d39874da5d88b = $this->env->getExtension("native_profiler");
        $__internal_1943fd54bb7d5202f1d0241fc840e0d2639034a8627bfab6573d39874da5d88b->enter($__internal_1943fd54bb7d5202f1d0241fc840e0d2639034a8627bfab6573d39874da5d88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1943fd54bb7d5202f1d0241fc840e0d2639034a8627bfab6573d39874da5d88b->leave($__internal_1943fd54bb7d5202f1d0241fc840e0d2639034a8627bfab6573d39874da5d88b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
