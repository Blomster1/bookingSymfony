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
        $__internal_c2a5647aed9110e69a217d149aa1fcb855ecbf2339c03ae708256d79751f7f12 = $this->env->getExtension("native_profiler");
        $__internal_c2a5647aed9110e69a217d149aa1fcb855ecbf2339c03ae708256d79751f7f12->enter($__internal_c2a5647aed9110e69a217d149aa1fcb855ecbf2339c03ae708256d79751f7f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c2a5647aed9110e69a217d149aa1fcb855ecbf2339c03ae708256d79751f7f12->leave($__internal_c2a5647aed9110e69a217d149aa1fcb855ecbf2339c03ae708256d79751f7f12_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_83ad47463371ad194ebbb7953ce89c274851a7e6327d719aa4c2571c0537513f = $this->env->getExtension("native_profiler");
        $__internal_83ad47463371ad194ebbb7953ce89c274851a7e6327d719aa4c2571c0537513f->enter($__internal_83ad47463371ad194ebbb7953ce89c274851a7e6327d719aa4c2571c0537513f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_83ad47463371ad194ebbb7953ce89c274851a7e6327d719aa4c2571c0537513f->leave($__internal_83ad47463371ad194ebbb7953ce89c274851a7e6327d719aa4c2571c0537513f_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_56d082563b6275098bd9ac43d5ddc264a8b0a1b109be1fa0263c682476fc5bd7 = $this->env->getExtension("native_profiler");
        $__internal_56d082563b6275098bd9ac43d5ddc264a8b0a1b109be1fa0263c682476fc5bd7->enter($__internal_56d082563b6275098bd9ac43d5ddc264a8b0a1b109be1fa0263c682476fc5bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_56d082563b6275098bd9ac43d5ddc264a8b0a1b109be1fa0263c682476fc5bd7->leave($__internal_56d082563b6275098bd9ac43d5ddc264a8b0a1b109be1fa0263c682476fc5bd7_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_ab8b0f0c9328bbc76ef9a3b24a24a67caa885137a7c2255b3f2371c2facb6f22 = $this->env->getExtension("native_profiler");
        $__internal_ab8b0f0c9328bbc76ef9a3b24a24a67caa885137a7c2255b3f2371c2facb6f22->enter($__internal_ab8b0f0c9328bbc76ef9a3b24a24a67caa885137a7c2255b3f2371c2facb6f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ab8b0f0c9328bbc76ef9a3b24a24a67caa885137a7c2255b3f2371c2facb6f22->leave($__internal_ab8b0f0c9328bbc76ef9a3b24a24a67caa885137a7c2255b3f2371c2facb6f22_prof);

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
