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
        $__internal_178e50c396e313f4ecec41919b9a165cfb781c4d0b7f493cc73ed573b7370e55 = $this->env->getExtension("native_profiler");
        $__internal_178e50c396e313f4ecec41919b9a165cfb781c4d0b7f493cc73ed573b7370e55->enter($__internal_178e50c396e313f4ecec41919b9a165cfb781c4d0b7f493cc73ed573b7370e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "contact/new.html.twig"));

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
    <div class=\"modal-footer\">
        <a href=\"#!\" class=\" modal-action waves-effect waves-green btn-flat\"><input type=\"submit\" value=\"Create\" /></a>
    </div>
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_178e50c396e313f4ecec41919b9a165cfb781c4d0b7f493cc73ed573b7370e55->leave($__internal_178e50c396e313f4ecec41919b9a165cfb781c4d0b7f493cc73ed573b7370e55_prof);

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
        return array (  38 => 9,  31 => 5,  27 => 4,  22 => 1,);
    }
}
/* */
/*     <h1>Contact creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*     <div class="modal-footer">*/
/*         <a href="#!" class=" modal-action waves-effect waves-green btn-flat"><input type="submit" value="Create" /></a>*/
/*     </div>*/
/*     {{ form_end(form) }}*/
/* */
/* */
