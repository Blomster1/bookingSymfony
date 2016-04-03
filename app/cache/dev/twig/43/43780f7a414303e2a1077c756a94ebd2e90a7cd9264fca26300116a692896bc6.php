<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_44a0c4e1632e3072bfa74261fd34b2222d408334dab8f13142270fbf703d9323 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5eda6e21fcafc2bf495facc7dce288c69b4cb394af8dddf6d1ef5c48a03bff3e = $this->env->getExtension("native_profiler");
        $__internal_5eda6e21fcafc2bf495facc7dce288c69b4cb394af8dddf6d1ef5c48a03bff3e->enter($__internal_5eda6e21fcafc2bf495facc7dce288c69b4cb394af8dddf6d1ef5c48a03bff3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_5eda6e21fcafc2bf495facc7dce288c69b4cb394af8dddf6d1ef5c48a03bff3e->leave($__internal_5eda6e21fcafc2bf495facc7dce288c69b4cb394af8dddf6d1ef5c48a03bff3e_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a93a667c369ee0708e8c0d1d3355026ccc2cfdb885219250e455adac9e8313e3 = $this->env->getExtension("native_profiler");
        $__internal_a93a667c369ee0708e8c0d1d3355026ccc2cfdb885219250e455adac9e8313e3->enter($__internal_a93a667c369ee0708e8c0d1d3355026ccc2cfdb885219250e455adac9e8313e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a93a667c369ee0708e8c0d1d3355026ccc2cfdb885219250e455adac9e8313e3->leave($__internal_a93a667c369ee0708e8c0d1d3355026ccc2cfdb885219250e455adac9e8313e3_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ac62496391a742d471c936fadfb312486a24f85e757a8181bb2711843886e96c = $this->env->getExtension("native_profiler");
        $__internal_ac62496391a742d471c936fadfb312486a24f85e757a8181bb2711843886e96c->enter($__internal_ac62496391a742d471c936fadfb312486a24f85e757a8181bb2711843886e96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ac62496391a742d471c936fadfb312486a24f85e757a8181bb2711843886e96c->leave($__internal_ac62496391a742d471c936fadfb312486a24f85e757a8181bb2711843886e96c_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ad5da84b9296350f1f957f01562a81f711f4df2d45f7382689bee98e8095a3a6 = $this->env->getExtension("native_profiler");
        $__internal_ad5da84b9296350f1f957f01562a81f711f4df2d45f7382689bee98e8095a3a6->enter($__internal_ad5da84b9296350f1f957f01562a81f711f4df2d45f7382689bee98e8095a3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ad5da84b9296350f1f957f01562a81f711f4df2d45f7382689bee98e8095a3a6->leave($__internal_ad5da84b9296350f1f957f01562a81f711f4df2d45f7382689bee98e8095a3a6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
