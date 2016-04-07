<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7806ae144db7f6224c2ad55d30a19b7a71518c3390d196f3ff2bd21f29070dde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_287ad37dcb8318551281cfe47f7c665974e5442679150c7e8158ae6d0a81516e = $this->env->getExtension("native_profiler");
        $__internal_287ad37dcb8318551281cfe47f7c665974e5442679150c7e8158ae6d0a81516e->enter($__internal_287ad37dcb8318551281cfe47f7c665974e5442679150c7e8158ae6d0a81516e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_287ad37dcb8318551281cfe47f7c665974e5442679150c7e8158ae6d0a81516e->leave($__internal_287ad37dcb8318551281cfe47f7c665974e5442679150c7e8158ae6d0a81516e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e04f5125fe34841ab8a5330f14083a5ca7f72a8e35e1b8fbb8b598a371f560f = $this->env->getExtension("native_profiler");
        $__internal_1e04f5125fe34841ab8a5330f14083a5ca7f72a8e35e1b8fbb8b598a371f560f->enter($__internal_1e04f5125fe34841ab8a5330f14083a5ca7f72a8e35e1b8fbb8b598a371f560f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1e04f5125fe34841ab8a5330f14083a5ca7f72a8e35e1b8fbb8b598a371f560f->leave($__internal_1e04f5125fe34841ab8a5330f14083a5ca7f72a8e35e1b8fbb8b598a371f560f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ebeeec6745b9f0b6152aa23ae1a85c90a02fbfdeeacb7144b73895e18cd4ee9 = $this->env->getExtension("native_profiler");
        $__internal_3ebeeec6745b9f0b6152aa23ae1a85c90a02fbfdeeacb7144b73895e18cd4ee9->enter($__internal_3ebeeec6745b9f0b6152aa23ae1a85c90a02fbfdeeacb7144b73895e18cd4ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3ebeeec6745b9f0b6152aa23ae1a85c90a02fbfdeeacb7144b73895e18cd4ee9->leave($__internal_3ebeeec6745b9f0b6152aa23ae1a85c90a02fbfdeeacb7144b73895e18cd4ee9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
