<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_19fee874da7df3297c63d2083b8600713491e5b12286eac250f20da95a0fdbe8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efa5cfa7b17b734d91aa3c9cd2f5f428cfc5f8d9dcfd9486e9564de5d1d223ff = $this->env->getExtension("native_profiler");
        $__internal_efa5cfa7b17b734d91aa3c9cd2f5f428cfc5f8d9dcfd9486e9564de5d1d223ff->enter($__internal_efa5cfa7b17b734d91aa3c9cd2f5f428cfc5f8d9dcfd9486e9564de5d1d223ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efa5cfa7b17b734d91aa3c9cd2f5f428cfc5f8d9dcfd9486e9564de5d1d223ff->leave($__internal_efa5cfa7b17b734d91aa3c9cd2f5f428cfc5f8d9dcfd9486e9564de5d1d223ff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fc907b0e17f44a47c8a24acf7fbd42d3a211c86adba98fafdcac05fc22af2551 = $this->env->getExtension("native_profiler");
        $__internal_fc907b0e17f44a47c8a24acf7fbd42d3a211c86adba98fafdcac05fc22af2551->enter($__internal_fc907b0e17f44a47c8a24acf7fbd42d3a211c86adba98fafdcac05fc22af2551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fc907b0e17f44a47c8a24acf7fbd42d3a211c86adba98fafdcac05fc22af2551->leave($__internal_fc907b0e17f44a47c8a24acf7fbd42d3a211c86adba98fafdcac05fc22af2551_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_585760aca4fb51fe50e3fdf8ed2ea17f235aeaf988a2c75fb1f701115846a55d = $this->env->getExtension("native_profiler");
        $__internal_585760aca4fb51fe50e3fdf8ed2ea17f235aeaf988a2c75fb1f701115846a55d->enter($__internal_585760aca4fb51fe50e3fdf8ed2ea17f235aeaf988a2c75fb1f701115846a55d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_585760aca4fb51fe50e3fdf8ed2ea17f235aeaf988a2c75fb1f701115846a55d->leave($__internal_585760aca4fb51fe50e3fdf8ed2ea17f235aeaf988a2c75fb1f701115846a55d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_790c3d5b2e8e95b0ab5521f888605614ee11a34636b42133ff520f7ad55a1eb3 = $this->env->getExtension("native_profiler");
        $__internal_790c3d5b2e8e95b0ab5521f888605614ee11a34636b42133ff520f7ad55a1eb3->enter($__internal_790c3d5b2e8e95b0ab5521f888605614ee11a34636b42133ff520f7ad55a1eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_790c3d5b2e8e95b0ab5521f888605614ee11a34636b42133ff520f7ad55a1eb3->leave($__internal_790c3d5b2e8e95b0ab5521f888605614ee11a34636b42133ff520f7ad55a1eb3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
