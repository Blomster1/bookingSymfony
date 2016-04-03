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
        $__internal_68fa92b5eebc4f8b5425688bde312a399e2f69cdf91369d7df69f8cb343bd79c = $this->env->getExtension("native_profiler");
        $__internal_68fa92b5eebc4f8b5425688bde312a399e2f69cdf91369d7df69f8cb343bd79c->enter($__internal_68fa92b5eebc4f8b5425688bde312a399e2f69cdf91369d7df69f8cb343bd79c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68fa92b5eebc4f8b5425688bde312a399e2f69cdf91369d7df69f8cb343bd79c->leave($__internal_68fa92b5eebc4f8b5425688bde312a399e2f69cdf91369d7df69f8cb343bd79c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_42ed5dc96f5681bc8869a1d9aaa2ed6bbe5131c17ef5f8eb3cbbb1c2d42a82a3 = $this->env->getExtension("native_profiler");
        $__internal_42ed5dc96f5681bc8869a1d9aaa2ed6bbe5131c17ef5f8eb3cbbb1c2d42a82a3->enter($__internal_42ed5dc96f5681bc8869a1d9aaa2ed6bbe5131c17ef5f8eb3cbbb1c2d42a82a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_42ed5dc96f5681bc8869a1d9aaa2ed6bbe5131c17ef5f8eb3cbbb1c2d42a82a3->leave($__internal_42ed5dc96f5681bc8869a1d9aaa2ed6bbe5131c17ef5f8eb3cbbb1c2d42a82a3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3eb6880186b568da6ed69ef5682241760f8ca27370599165e6061015d048f39 = $this->env->getExtension("native_profiler");
        $__internal_f3eb6880186b568da6ed69ef5682241760f8ca27370599165e6061015d048f39->enter($__internal_f3eb6880186b568da6ed69ef5682241760f8ca27370599165e6061015d048f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f3eb6880186b568da6ed69ef5682241760f8ca27370599165e6061015d048f39->leave($__internal_f3eb6880186b568da6ed69ef5682241760f8ca27370599165e6061015d048f39_prof);

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
