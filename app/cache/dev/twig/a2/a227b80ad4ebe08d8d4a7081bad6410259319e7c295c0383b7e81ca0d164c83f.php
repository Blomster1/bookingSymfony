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
        $__internal_11d70c84286619b8a5cd002d633a760e48a55f74d803c6b934d7e5693c1bf68e = $this->env->getExtension("native_profiler");
        $__internal_11d70c84286619b8a5cd002d633a760e48a55f74d803c6b934d7e5693c1bf68e->enter($__internal_11d70c84286619b8a5cd002d633a760e48a55f74d803c6b934d7e5693c1bf68e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_11d70c84286619b8a5cd002d633a760e48a55f74d803c6b934d7e5693c1bf68e->leave($__internal_11d70c84286619b8a5cd002d633a760e48a55f74d803c6b934d7e5693c1bf68e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5391fc7eec52e366b33dccab0f2d18270339e0840eacdf1f3c23f81f9c206211 = $this->env->getExtension("native_profiler");
        $__internal_5391fc7eec52e366b33dccab0f2d18270339e0840eacdf1f3c23f81f9c206211->enter($__internal_5391fc7eec52e366b33dccab0f2d18270339e0840eacdf1f3c23f81f9c206211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5391fc7eec52e366b33dccab0f2d18270339e0840eacdf1f3c23f81f9c206211->leave($__internal_5391fc7eec52e366b33dccab0f2d18270339e0840eacdf1f3c23f81f9c206211_prof);

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
