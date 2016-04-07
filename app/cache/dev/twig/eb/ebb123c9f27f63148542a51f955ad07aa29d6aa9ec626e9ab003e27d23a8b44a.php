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
        $__internal_bd243c9ed21f2ff543d0a3d3b7a8dd6c6c287310c75cf1258e38d659298163c6 = $this->env->getExtension("native_profiler");
        $__internal_bd243c9ed21f2ff543d0a3d3b7a8dd6c6c287310c75cf1258e38d659298163c6->enter($__internal_bd243c9ed21f2ff543d0a3d3b7a8dd6c6c287310c75cf1258e38d659298163c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_bd243c9ed21f2ff543d0a3d3b7a8dd6c6c287310c75cf1258e38d659298163c6->leave($__internal_bd243c9ed21f2ff543d0a3d3b7a8dd6c6c287310c75cf1258e38d659298163c6_prof);

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
