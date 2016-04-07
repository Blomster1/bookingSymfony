<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_2e5b4d9178297826f9eaad0e4613953c207b553418e380a93a4a63b29969738a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed08976762c4529cd0de86bf58b79cdbf03c49b37a37f65e3b7601d90ac213e2 = $this->env->getExtension("native_profiler");
        $__internal_ed08976762c4529cd0de86bf58b79cdbf03c49b37a37f65e3b7601d90ac213e2->enter($__internal_ed08976762c4529cd0de86bf58b79cdbf03c49b37a37f65e3b7601d90ac213e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed08976762c4529cd0de86bf58b79cdbf03c49b37a37f65e3b7601d90ac213e2->leave($__internal_ed08976762c4529cd0de86bf58b79cdbf03c49b37a37f65e3b7601d90ac213e2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_222665bac1cc675e58bd9061b57a60028affc8eb19d1062e6fe51358baba780c = $this->env->getExtension("native_profiler");
        $__internal_222665bac1cc675e58bd9061b57a60028affc8eb19d1062e6fe51358baba780c->enter($__internal_222665bac1cc675e58bd9061b57a60028affc8eb19d1062e6fe51358baba780c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 5
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()))) {
            // line 6
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 7
            echo "        ";
            if ( !twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 8
            echo "    ";
        }
        
        $__internal_222665bac1cc675e58bd9061b57a60028affc8eb19d1062e6fe51358baba780c->leave($__internal_222665bac1cc675e58bd9061b57a60028affc8eb19d1062e6fe51358baba780c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 8,  50 => 7,  47 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}, 'FOSUserBundle') }}</p>*/
/*     {% if app.session is not empty %}*/
/*         {% set targetUrl = app.session.get('_security.' ~ app.security.token.providerKey ~ '.target_path') %}*/
/*         {% if targetUrl is not empty %}<p><a href="{{ targetUrl }}">{{ 'registration.back'|trans({}, 'FOSUserBundle') }}</a></p>{% endif %}*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
