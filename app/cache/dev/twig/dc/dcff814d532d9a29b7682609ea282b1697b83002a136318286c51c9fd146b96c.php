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
        $__internal_858e7859c1ccbf80c7a239ad163ad32987fb99ba65127293fd950cec732b1462 = $this->env->getExtension("native_profiler");
        $__internal_858e7859c1ccbf80c7a239ad163ad32987fb99ba65127293fd950cec732b1462->enter($__internal_858e7859c1ccbf80c7a239ad163ad32987fb99ba65127293fd950cec732b1462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_858e7859c1ccbf80c7a239ad163ad32987fb99ba65127293fd950cec732b1462->leave($__internal_858e7859c1ccbf80c7a239ad163ad32987fb99ba65127293fd950cec732b1462_prof);

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
