<?php

/* CoreBundle:Partials:searchBar.html.twig */
class __TwigTemplate_d6a7f2c9488ff711e062d5cb84ff255f34d2f400b2b495f2bbc123ade398bf4b extends Twig_Template
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
        $__internal_407dcc641c60d03275c4df5d4386bde766983e938f51e910e80d6258c6842bc2 = $this->env->getExtension("native_profiler");
        $__internal_407dcc641c60d03275c4df5d4386bde766983e938f51e910e80d6258c6842bc2->enter($__internal_407dcc641c60d03275c4df5d4386bde766983e938f51e910e80d6258c6842bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Partials:searchBar.html.twig"));

        // line 1
        echo "<nav id=\"search\" class=\"light-blue\">
    <div class=\"nav-wrapper\">
        <form>
            <div class=\"input-field\">
                <input id=\"search\" type=\"search\" required>
                <label for=\"search\"><i class=\"material-icons\">search</i></label>
                <i class=\"material-icons\">close</i>
            </div>
        </form>
    </div>
</nav>";
        
        $__internal_407dcc641c60d03275c4df5d4386bde766983e938f51e910e80d6258c6842bc2->leave($__internal_407dcc641c60d03275c4df5d4386bde766983e938f51e910e80d6258c6842bc2_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:Partials:searchBar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <nav id="search" class="light-blue">*/
/*     <div class="nav-wrapper">*/
/*         <form>*/
/*             <div class="input-field">*/
/*                 <input id="search" type="search" required>*/
/*                 <label for="search"><i class="material-icons">search</i></label>*/
/*                 <i class="material-icons">close</i>*/
/*             </div>*/
/*         </form>*/
/*     </div>*/
/* </nav>*/
