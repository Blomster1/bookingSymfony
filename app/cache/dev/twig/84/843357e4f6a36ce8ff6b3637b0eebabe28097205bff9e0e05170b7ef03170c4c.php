<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_26c8ee023eba83c503a4db9a2b0057925d34983bd09bc3c509853bf10ed0729b extends Twig_Template
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
        $__internal_3e8b83d068d892c32f2b29ad462fb9295e8640bf4dabc78b6a5cd596cef8d473 = $this->env->getExtension("native_profiler");
        $__internal_3e8b83d068d892c32f2b29ad462fb9295e8640bf4dabc78b6a5cd596cef8d473->enter($__internal_3e8b83d068d892c32f2b29ad462fb9295e8640bf4dabc78b6a5cd596cef8d473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3e8b83d068d892c32f2b29ad462fb9295e8640bf4dabc78b6a5cd596cef8d473->leave($__internal_3e8b83d068d892c32f2b29ad462fb9295e8640bf4dabc78b6a5cd596cef8d473_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
