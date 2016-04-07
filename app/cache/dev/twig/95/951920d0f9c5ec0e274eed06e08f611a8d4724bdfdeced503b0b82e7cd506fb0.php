<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_bb3b3ef43daa4ae389beda2db33bcf0229b63341266c814585d5d61a90c0a27a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de5055021afbd360016c01b353944d691b4d0dc1ee192093772b9b309992fff5 = $this->env->getExtension("native_profiler");
        $__internal_de5055021afbd360016c01b353944d691b4d0dc1ee192093772b9b309992fff5->enter($__internal_de5055021afbd360016c01b353944d691b4d0dc1ee192093772b9b309992fff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_de5055021afbd360016c01b353944d691b4d0dc1ee192093772b9b309992fff5->leave($__internal_de5055021afbd360016c01b353944d691b4d0dc1ee192093772b9b309992fff5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
