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
        $__internal_fa4c1ed11c4f31e97871fc33d89ba0e102f7702520df059f78333022504719d1 = $this->env->getExtension("native_profiler");
        $__internal_fa4c1ed11c4f31e97871fc33d89ba0e102f7702520df059f78333022504719d1->enter($__internal_fa4c1ed11c4f31e97871fc33d89ba0e102f7702520df059f78333022504719d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa4c1ed11c4f31e97871fc33d89ba0e102f7702520df059f78333022504719d1->leave($__internal_fa4c1ed11c4f31e97871fc33d89ba0e102f7702520df059f78333022504719d1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_efee84e47cb98e7f678a88dee227aff408c645b780a3993fc859a885d7bc2cda = $this->env->getExtension("native_profiler");
        $__internal_efee84e47cb98e7f678a88dee227aff408c645b780a3993fc859a885d7bc2cda->enter($__internal_efee84e47cb98e7f678a88dee227aff408c645b780a3993fc859a885d7bc2cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_efee84e47cb98e7f678a88dee227aff408c645b780a3993fc859a885d7bc2cda->leave($__internal_efee84e47cb98e7f678a88dee227aff408c645b780a3993fc859a885d7bc2cda_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_be2af14b848a840901f46e22fbda0601021099e1ac9423abba3eb52430adb268 = $this->env->getExtension("native_profiler");
        $__internal_be2af14b848a840901f46e22fbda0601021099e1ac9423abba3eb52430adb268->enter($__internal_be2af14b848a840901f46e22fbda0601021099e1ac9423abba3eb52430adb268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_be2af14b848a840901f46e22fbda0601021099e1ac9423abba3eb52430adb268->leave($__internal_be2af14b848a840901f46e22fbda0601021099e1ac9423abba3eb52430adb268_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00085d45c8808fb1d60d331098e836a34067d0bf894e8623b9f8c1ee7b2640af = $this->env->getExtension("native_profiler");
        $__internal_00085d45c8808fb1d60d331098e836a34067d0bf894e8623b9f8c1ee7b2640af->enter($__internal_00085d45c8808fb1d60d331098e836a34067d0bf894e8623b9f8c1ee7b2640af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_00085d45c8808fb1d60d331098e836a34067d0bf894e8623b9f8c1ee7b2640af->leave($__internal_00085d45c8808fb1d60d331098e836a34067d0bf894e8623b9f8c1ee7b2640af_prof);

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
