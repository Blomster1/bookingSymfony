<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_34a7f4584528d7376a3d287fd367676fa7aef3d74e1f9fffc57991621dd3f940 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50b459202d3487003081922256894e095cab6f053e60a517b75bb79db293def0 = $this->env->getExtension("native_profiler");
        $__internal_50b459202d3487003081922256894e095cab6f053e60a517b75bb79db293def0->enter($__internal_50b459202d3487003081922256894e095cab6f053e60a517b75bb79db293def0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50b459202d3487003081922256894e095cab6f053e60a517b75bb79db293def0->leave($__internal_50b459202d3487003081922256894e095cab6f053e60a517b75bb79db293def0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_dfada1df702d02b189dc32f6718f574395c7cc4d5bc73cf085bafcbb936446a7 = $this->env->getExtension("native_profiler");
        $__internal_dfada1df702d02b189dc32f6718f574395c7cc4d5bc73cf085bafcbb936446a7->enter($__internal_dfada1df702d02b189dc32f6718f574395c7cc4d5bc73cf085bafcbb936446a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dfada1df702d02b189dc32f6718f574395c7cc4d5bc73cf085bafcbb936446a7->leave($__internal_dfada1df702d02b189dc32f6718f574395c7cc4d5bc73cf085bafcbb936446a7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f64b235cbedd74c9690ee07e458a9b92f47cba9288b1f6b8d5cc28547dd4d31 = $this->env->getExtension("native_profiler");
        $__internal_2f64b235cbedd74c9690ee07e458a9b92f47cba9288b1f6b8d5cc28547dd4d31->enter($__internal_2f64b235cbedd74c9690ee07e458a9b92f47cba9288b1f6b8d5cc28547dd4d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2f64b235cbedd74c9690ee07e458a9b92f47cba9288b1f6b8d5cc28547dd4d31->leave($__internal_2f64b235cbedd74c9690ee07e458a9b92f47cba9288b1f6b8d5cc28547dd4d31_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6f4f6d2831f375639e12e0138ca5ddecff33430bec69afdbb0ccd5f16f197ee7 = $this->env->getExtension("native_profiler");
        $__internal_6f4f6d2831f375639e12e0138ca5ddecff33430bec69afdbb0ccd5f16f197ee7->enter($__internal_6f4f6d2831f375639e12e0138ca5ddecff33430bec69afdbb0ccd5f16f197ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6f4f6d2831f375639e12e0138ca5ddecff33430bec69afdbb0ccd5f16f197ee7->leave($__internal_6f4f6d2831f375639e12e0138ca5ddecff33430bec69afdbb0ccd5f16f197ee7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
