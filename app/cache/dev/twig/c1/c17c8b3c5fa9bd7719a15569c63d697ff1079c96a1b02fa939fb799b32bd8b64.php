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
        $__internal_7fe463d3af40a01892458e23d431f3d2a21ef12333cbabccdd97abb26106a83f = $this->env->getExtension("native_profiler");
        $__internal_7fe463d3af40a01892458e23d431f3d2a21ef12333cbabccdd97abb26106a83f->enter($__internal_7fe463d3af40a01892458e23d431f3d2a21ef12333cbabccdd97abb26106a83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7fe463d3af40a01892458e23d431f3d2a21ef12333cbabccdd97abb26106a83f->leave($__internal_7fe463d3af40a01892458e23d431f3d2a21ef12333cbabccdd97abb26106a83f_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_56beecbbad313849040182d644f4473381c9ac4d48289e89011f0c352d4ecfeb = $this->env->getExtension("native_profiler");
        $__internal_56beecbbad313849040182d644f4473381c9ac4d48289e89011f0c352d4ecfeb->enter($__internal_56beecbbad313849040182d644f4473381c9ac4d48289e89011f0c352d4ecfeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_56beecbbad313849040182d644f4473381c9ac4d48289e89011f0c352d4ecfeb->leave($__internal_56beecbbad313849040182d644f4473381c9ac4d48289e89011f0c352d4ecfeb_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_786d6bd6b09c65b79d0669f13b13944a7bfede90df3315e25fe72d40c5bf28bb = $this->env->getExtension("native_profiler");
        $__internal_786d6bd6b09c65b79d0669f13b13944a7bfede90df3315e25fe72d40c5bf28bb->enter($__internal_786d6bd6b09c65b79d0669f13b13944a7bfede90df3315e25fe72d40c5bf28bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_786d6bd6b09c65b79d0669f13b13944a7bfede90df3315e25fe72d40c5bf28bb->leave($__internal_786d6bd6b09c65b79d0669f13b13944a7bfede90df3315e25fe72d40c5bf28bb_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5234f1b8caf147b549145411ca04b059110eee4fc6cf0ca44909d99724ff51a2 = $this->env->getExtension("native_profiler");
        $__internal_5234f1b8caf147b549145411ca04b059110eee4fc6cf0ca44909d99724ff51a2->enter($__internal_5234f1b8caf147b549145411ca04b059110eee4fc6cf0ca44909d99724ff51a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5234f1b8caf147b549145411ca04b059110eee4fc6cf0ca44909d99724ff51a2->leave($__internal_5234f1b8caf147b549145411ca04b059110eee4fc6cf0ca44909d99724ff51a2_prof);

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
