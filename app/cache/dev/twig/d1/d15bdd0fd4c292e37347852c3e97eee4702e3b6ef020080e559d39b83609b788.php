<?php

/* tache/new.html.twig */
class __TwigTemplate_5972e56242541c9d5d11dd984511a3b4668ecda945b15a3eb236c3e67f53e6e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0e1971d91e58b47800da6d5760923b3575ededfa8c575705a3bc49e89c942e7 = $this->env->getExtension("native_profiler");
        $__internal_f0e1971d91e58b47800da6d5760923b3575ededfa8c575705a3bc49e89c942e7->enter($__internal_f0e1971d91e58b47800da6d5760923b3575ededfa8c575705a3bc49e89c942e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "tache/new.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_f0e1971d91e58b47800da6d5760923b3575ededfa8c575705a3bc49e89c942e7->leave($__internal_f0e1971d91e58b47800da6d5760923b3575ededfa8c575705a3bc49e89c942e7_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_84fa5e18fd91eac3bfc4697716b06403cc765e9201b893a0dcbb90d30dcb0622 = $this->env->getExtension("native_profiler");
        $__internal_84fa5e18fd91eac3bfc4697716b06403cc765e9201b893a0dcbb90d30dcb0622->enter($__internal_84fa5e18fd91eac3bfc4697716b06403cc765e9201b893a0dcbb90d30dcb0622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "    <h1>Tache creation</h1>

    ";
        // line 4
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("tache_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_84fa5e18fd91eac3bfc4697716b06403cc765e9201b893a0dcbb90d30dcb0622->leave($__internal_84fa5e18fd91eac3bfc4697716b06403cc765e9201b893a0dcbb90d30dcb0622_prof);

    }

    public function getTemplateName()
    {
        return "tache/new.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  48 => 7,  43 => 5,  39 => 4,  35 => 2,  23 => 1,);
    }
}
/* {% block body %}*/
/*     <h1>Tache creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('tache_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
