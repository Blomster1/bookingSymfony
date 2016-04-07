<?php

/* :tache:edit.html.twig */
class __TwigTemplate_3551477ca736d7c18f818a82a8b2b1ee414d17457f7300959c1543b7dc9f1b8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":tache:edit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70ec15751a330f6574e294bda7acccea7a8388e74a4288f06b680ec0b858ec5f = $this->env->getExtension("native_profiler");
        $__internal_70ec15751a330f6574e294bda7acccea7a8388e74a4288f06b680ec0b858ec5f->enter($__internal_70ec15751a330f6574e294bda7acccea7a8388e74a4288f06b680ec0b858ec5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":tache:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70ec15751a330f6574e294bda7acccea7a8388e74a4288f06b680ec0b858ec5f->leave($__internal_70ec15751a330f6574e294bda7acccea7a8388e74a4288f06b680ec0b858ec5f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_4a57cfb0ba6f04d2abc71f2bd344a619987d1efd0bac3789f2690066ea1cccdf = $this->env->getExtension("native_profiler");
        $__internal_4a57cfb0ba6f04d2abc71f2bd344a619987d1efd0bac3789f2690066ea1cccdf->enter($__internal_4a57cfb0ba6f04d2abc71f2bd344a619987d1efd0bac3789f2690066ea1cccdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Tache edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("tache_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_4a57cfb0ba6f04d2abc71f2bd344a619987d1efd0bac3789f2690066ea1cccdf->leave($__internal_4a57cfb0ba6f04d2abc71f2bd344a619987d1efd0bac3789f2690066ea1cccdf_prof);

    }

    public function getTemplateName()
    {
        return ":tache:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <h1>Tache edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('tache_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
