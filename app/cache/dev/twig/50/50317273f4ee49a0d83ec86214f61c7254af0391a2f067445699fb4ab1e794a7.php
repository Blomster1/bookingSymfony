<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_7db4ab16a780526cbaf3a930dda568d935b8cfdad89b933a8c1ccae6fc74e48f extends Twig_Template
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
        $__internal_a99a0a7dfcdbb95e8cf5a0525d4e8440a58e7b63cc0e5d25e8bd8c5b55dab57a = $this->env->getExtension("native_profiler");
        $__internal_a99a0a7dfcdbb95e8cf5a0525d4e8440a58e7b63cc0e5d25e8bd8c5b55dab57a->enter($__internal_a99a0a7dfcdbb95e8cf5a0525d4e8440a58e7b63cc0e5d25e8bd8c5b55dab57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_a99a0a7dfcdbb95e8cf5a0525d4e8440a58e7b63cc0e5d25e8bd8c5b55dab57a->leave($__internal_a99a0a7dfcdbb95e8cf5a0525d4e8440a58e7b63cc0e5d25e8bd8c5b55dab57a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
