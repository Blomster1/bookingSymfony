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
        $__internal_7eedb202149b3291dec26976a92d3d37cd575e5d968ef731b2284fa63a06bd95 = $this->env->getExtension("native_profiler");
        $__internal_7eedb202149b3291dec26976a92d3d37cd575e5d968ef731b2284fa63a06bd95->enter($__internal_7eedb202149b3291dec26976a92d3d37cd575e5d968ef731b2284fa63a06bd95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7eedb202149b3291dec26976a92d3d37cd575e5d968ef731b2284fa63a06bd95->leave($__internal_7eedb202149b3291dec26976a92d3d37cd575e5d968ef731b2284fa63a06bd95_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d37b062c27d4c16629767c4b883bd7b21903bc4a4efbcf7f9cc2074d951a4867 = $this->env->getExtension("native_profiler");
        $__internal_d37b062c27d4c16629767c4b883bd7b21903bc4a4efbcf7f9cc2074d951a4867->enter($__internal_d37b062c27d4c16629767c4b883bd7b21903bc4a4efbcf7f9cc2074d951a4867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_d37b062c27d4c16629767c4b883bd7b21903bc4a4efbcf7f9cc2074d951a4867->leave($__internal_d37b062c27d4c16629767c4b883bd7b21903bc4a4efbcf7f9cc2074d951a4867_prof);

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
