<?php

/* contact/edit.html.twig */
class __TwigTemplate_f69b519a6538b629874d2eaf84e13ffcb70f3bf52dca7387c0da93f2c5fab5b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "contact/edit.html.twig", 1);
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
        $__internal_a6530103e41e7890777ea023b1c96775c675f2345cf5a8037f1fae34905045fe = $this->env->getExtension("native_profiler");
        $__internal_a6530103e41e7890777ea023b1c96775c675f2345cf5a8037f1fae34905045fe->enter($__internal_a6530103e41e7890777ea023b1c96775c675f2345cf5a8037f1fae34905045fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6530103e41e7890777ea023b1c96775c675f2345cf5a8037f1fae34905045fe->leave($__internal_a6530103e41e7890777ea023b1c96775c675f2345cf5a8037f1fae34905045fe_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_42344282d256c8d758fba2947f4c2d0abd6edf5df5adefd8f810e7ce9e97d8ce = $this->env->getExtension("native_profiler");
        $__internal_42344282d256c8d758fba2947f4c2d0abd6edf5df5adefd8f810e7ce9e97d8ce->enter($__internal_42344282d256c8d758fba2947f4c2d0abd6edf5df5adefd8f810e7ce9e97d8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Contact edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("contact_index");
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
        
        $__internal_42344282d256c8d758fba2947f4c2d0abd6edf5df5adefd8f810e7ce9e97d8ce->leave($__internal_42344282d256c8d758fba2947f4c2d0abd6edf5df5adefd8f810e7ce9e97d8ce_prof);

    }

    public function getTemplateName()
    {
        return "contact/edit.html.twig";
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
/*     <h1>Contact edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('contact_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
