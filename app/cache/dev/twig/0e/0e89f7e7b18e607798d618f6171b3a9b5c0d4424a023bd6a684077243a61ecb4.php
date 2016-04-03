<?php

/* contact/new.html.twig */
class __TwigTemplate_1ab510386a82c2ea895fee49454a356065b0b51d9df63dadd7ebf3c40c47ca48 extends Twig_Template
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
        $__internal_a19dc885e092f0327381cc89cab42b7ccb28d21eeffcac05ab14af5823878ed9 = $this->env->getExtension("native_profiler");
        $__internal_a19dc885e092f0327381cc89cab42b7ccb28d21eeffcac05ab14af5823878ed9->enter($__internal_a19dc885e092f0327381cc89cab42b7ccb28d21eeffcac05ab14af5823878ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/new.html.twig"));

        // line 1
        echo "
    <h1>Contact creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("contact_index");
        echo "\">Back to the list</a>
        </li>
    </ul>

";
        
        $__internal_a19dc885e092f0327381cc89cab42b7ccb28d21eeffcac05ab14af5823878ed9->leave($__internal_a19dc885e092f0327381cc89cab42b7ccb28d21eeffcac05ab14af5823878ed9_prof);

    }

    public function getTemplateName()
    {
        return "contact/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  36 => 7,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* */
/*     <h1>Contact creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('contact_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* */
/* */
