<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_3a9669d742c627cbfcf6d6e03f14d7fab6faa82773174663b33cad8198acbb83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'color' => array($this, 'block_color'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_193898515262be158fb304b52cc37e4f26137d52bd5519409e23139805f5e056 = $this->env->getExtension("native_profiler");
        $__internal_193898515262be158fb304b52cc37e4f26137d52bd5519409e23139805f5e056->enter($__internal_193898515262be158fb304b52cc37e4f26137d52bd5519409e23139805f5e056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css\">
        <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
    </head>
    <body ";
        // line 9
        $this->displayBlock('color', $context, $blocks);
        echo ">
        <div>
            ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 12
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 17
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 19
        echo "        </div>

        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 22
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 23
                echo "                <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                    ";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        <div>
            ";
        // line 29
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 31
        echo "        </div>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js\"></script>
        <!-- Compiled and minified JavaScript -->
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js\"></script>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "\" ></script>
        <script async defer src=\"https://maps.googleapis.com/maps/api/js?key= AIzaSyBCMCi-BsZloG-raKi9YbuMbAicd84VfDE&callback=initMap\">
        </script>
    </body>
</html>
";
        
        $__internal_193898515262be158fb304b52cc37e4f26137d52bd5519409e23139805f5e056->leave($__internal_193898515262be158fb304b52cc37e4f26137d52bd5519409e23139805f5e056_prof);

    }

    // line 9
    public function block_color($context, array $blocks = array())
    {
        $__internal_ab554b936d3ecc66e32baa5b22607bd60413c24ff184a24309ce1cf82e1c558f = $this->env->getExtension("native_profiler");
        $__internal_ab554b936d3ecc66e32baa5b22607bd60413c24ff184a24309ce1cf82e1c558f->enter($__internal_ab554b936d3ecc66e32baa5b22607bd60413c24ff184a24309ce1cf82e1c558f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color"));

        
        $__internal_ab554b936d3ecc66e32baa5b22607bd60413c24ff184a24309ce1cf82e1c558f->leave($__internal_ab554b936d3ecc66e32baa5b22607bd60413c24ff184a24309ce1cf82e1c558f_prof);

    }

    // line 29
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f7d1214d4479e7c6d295ed3b666868b02538eb05a68518382b61edcbc0f152d9 = $this->env->getExtension("native_profiler");
        $__internal_f7d1214d4479e7c6d295ed3b666868b02538eb05a68518382b61edcbc0f152d9->enter($__internal_f7d1214d4479e7c6d295ed3b666868b02538eb05a68518382b61edcbc0f152d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 30
        echo "            ";
        
        $__internal_f7d1214d4479e7c6d295ed3b666868b02538eb05a68518382b61edcbc0f152d9->leave($__internal_f7d1214d4479e7c6d295ed3b666868b02538eb05a68518382b61edcbc0f152d9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 30,  135 => 29,  124 => 9,  111 => 35,  105 => 31,  103 => 29,  100 => 28,  94 => 27,  85 => 24,  80 => 23,  75 => 22,  71 => 21,  67 => 19,  59 => 17,  53 => 14,  49 => 13,  44 => 12,  42 => 11,  37 => 9,  32 => 7,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">*/
/*         <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">*/
/*         <link rel="stylesheet" href="{{ asset('css/style.css') }}">*/
/*     </head>*/
/*     <body {% block color %}{% endblock %}>*/
/*         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% for type, messages in app.session.flashBag.all %}*/
/*             {% for message in messages %}*/
/*                 <div class="{{ type }}">*/
/*                     {{ message|trans({}, 'FOSUserBundle') }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*         </div>*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>*/
/*         <!-- Compiled and minified JavaScript -->*/
/*         <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>*/
/*         <script src="{{ asset('js/app.js') }}" ></script>*/
/*         <script async defer src="https://maps.googleapis.com/maps/api/js?key= AIzaSyBCMCi-BsZloG-raKi9YbuMbAicd84VfDE&callback=initMap">*/
/*         </script>*/
/*     </body>*/
/* </html>*/
/* */
