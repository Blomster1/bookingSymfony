<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_3c0529e15e22b91f43ae672e403351576bd851f2e5ed7a322b322ca61a87dee8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_753843f0d3e4271f1e089c1ee12d456e65d7ba893d611ab5ccf1ac955375b4b1 = $this->env->getExtension("native_profiler");
        $__internal_753843f0d3e4271f1e089c1ee12d456e65d7ba893d611ab5ccf1ac955375b4b1->enter($__internal_753843f0d3e4271f1e089c1ee12d456e65d7ba893d611ab5ccf1ac955375b4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_753843f0d3e4271f1e089c1ee12d456e65d7ba893d611ab5ccf1ac955375b4b1->leave($__internal_753843f0d3e4271f1e089c1ee12d456e65d7ba893d611ab5ccf1ac955375b4b1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d477d198466c9ff7918acf67e29897188495bde81aeab1c3090dbc54e6af171 = $this->env->getExtension("native_profiler");
        $__internal_4d477d198466c9ff7918acf67e29897188495bde81aeab1c3090dbc54e6af171->enter($__internal_4d477d198466c9ff7918acf67e29897188495bde81aeab1c3090dbc54e6af171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_4d477d198466c9ff7918acf67e29897188495bde81aeab1c3090dbc54e6af171->leave($__internal_4d477d198466c9ff7918acf67e29897188495bde81aeab1c3090dbc54e6af171_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */
