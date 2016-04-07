<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_28e6358899b910dbafff1fadc4c63f4334c71516ba038bd66615ab0516b8b127 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac59611d298725494e8f144c4dbaf3a952b3c9280f1905826ab2787fc8581364 = $this->env->getExtension("native_profiler");
        $__internal_ac59611d298725494e8f144c4dbaf3a952b3c9280f1905826ab2787fc8581364->enter($__internal_ac59611d298725494e8f144c4dbaf3a952b3c9280f1905826ab2787fc8581364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac59611d298725494e8f144c4dbaf3a952b3c9280f1905826ab2787fc8581364->leave($__internal_ac59611d298725494e8f144c4dbaf3a952b3c9280f1905826ab2787fc8581364_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b0b604d045bc6e2f3504599427f6007a928f012b4069eccaa0a508af263c4d6 = $this->env->getExtension("native_profiler");
        $__internal_4b0b604d045bc6e2f3504599427f6007a928f012b4069eccaa0a508af263c4d6->enter($__internal_4b0b604d045bc6e2f3504599427f6007a928f012b4069eccaa0a508af263c4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_4b0b604d045bc6e2f3504599427f6007a928f012b4069eccaa0a508af263c4d6->leave($__internal_4b0b604d045bc6e2f3504599427f6007a928f012b4069eccaa0a508af263c4d6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
