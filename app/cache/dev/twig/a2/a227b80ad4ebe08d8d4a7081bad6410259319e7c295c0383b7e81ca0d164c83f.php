<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0681464d869443f196f3c0565afabe0d9f00c55d31a99a650c1360d7830b8fd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46c9d119560f90858b6ab1f6c78d96a47c9df94bb6d3bfe1a315fb8fec4558e0 = $this->env->getExtension("native_profiler");
        $__internal_46c9d119560f90858b6ab1f6c78d96a47c9df94bb6d3bfe1a315fb8fec4558e0->enter($__internal_46c9d119560f90858b6ab1f6c78d96a47c9df94bb6d3bfe1a315fb8fec4558e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_46c9d119560f90858b6ab1f6c78d96a47c9df94bb6d3bfe1a315fb8fec4558e0->leave($__internal_46c9d119560f90858b6ab1f6c78d96a47c9df94bb6d3bfe1a315fb8fec4558e0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_00f260a8ecfe05cfc3ec144a16ee402f2733291b3296c80c69cce5531abab1e2 = $this->env->getExtension("native_profiler");
        $__internal_00f260a8ecfe05cfc3ec144a16ee402f2733291b3296c80c69cce5531abab1e2->enter($__internal_00f260a8ecfe05cfc3ec144a16ee402f2733291b3296c80c69cce5531abab1e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_00f260a8ecfe05cfc3ec144a16ee402f2733291b3296c80c69cce5531abab1e2->leave($__internal_00f260a8ecfe05cfc3ec144a16ee402f2733291b3296c80c69cce5531abab1e2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
