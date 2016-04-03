<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_5cc39d1628a9b3b1b2255509cffc6896722855b960f461783aed595379e44d7b extends Twig_Template
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
        $__internal_0338033e5294db1bfa25b650c78144d33f27bab10350b831e9edb1a1b7428523 = $this->env->getExtension("native_profiler");
        $__internal_0338033e5294db1bfa25b650c78144d33f27bab10350b831e9edb1a1b7428523->enter($__internal_0338033e5294db1bfa25b650c78144d33f27bab10350b831e9edb1a1b7428523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_0338033e5294db1bfa25b650c78144d33f27bab10350b831e9edb1a1b7428523->leave($__internal_0338033e5294db1bfa25b650c78144d33f27bab10350b831e9edb1a1b7428523_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_040b37e6139973697f92afbe00c05265f49b81d547e287a5c3ddefa472f34ef8 = $this->env->getExtension("native_profiler");
        $__internal_040b37e6139973697f92afbe00c05265f49b81d547e287a5c3ddefa472f34ef8->enter($__internal_040b37e6139973697f92afbe00c05265f49b81d547e287a5c3ddefa472f34ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_040b37e6139973697f92afbe00c05265f49b81d547e287a5c3ddefa472f34ef8->leave($__internal_040b37e6139973697f92afbe00c05265f49b81d547e287a5c3ddefa472f34ef8_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_ab0720de25b0302c050b761beb2260377b269680332c618430220272a6889df1 = $this->env->getExtension("native_profiler");
        $__internal_ab0720de25b0302c050b761beb2260377b269680332c618430220272a6889df1->enter($__internal_ab0720de25b0302c050b761beb2260377b269680332c618430220272a6889df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ab0720de25b0302c050b761beb2260377b269680332c618430220272a6889df1->leave($__internal_ab0720de25b0302c050b761beb2260377b269680332c618430220272a6889df1_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5796407d04fdcd9a6ab6cbba502a4385ff1ada96aa5f7f0634b881d008f290e0 = $this->env->getExtension("native_profiler");
        $__internal_5796407d04fdcd9a6ab6cbba502a4385ff1ada96aa5f7f0634b881d008f290e0->enter($__internal_5796407d04fdcd9a6ab6cbba502a4385ff1ada96aa5f7f0634b881d008f290e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5796407d04fdcd9a6ab6cbba502a4385ff1ada96aa5f7f0634b881d008f290e0->leave($__internal_5796407d04fdcd9a6ab6cbba502a4385ff1ada96aa5f7f0634b881d008f290e0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
