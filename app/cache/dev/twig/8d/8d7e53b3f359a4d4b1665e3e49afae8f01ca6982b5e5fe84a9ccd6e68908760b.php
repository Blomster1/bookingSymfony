<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_2d04204b538f050360d7c2d2293060c13255c77fde8c5f4fdb465041601d814e extends Twig_Template
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
        $__internal_8424ed295766cffafd90d389c59a3df2a2038cb69ab31464d4d1c3261f4ce1c5 = $this->env->getExtension("native_profiler");
        $__internal_8424ed295766cffafd90d389c59a3df2a2038cb69ab31464d4d1c3261f4ce1c5->enter($__internal_8424ed295766cffafd90d389c59a3df2a2038cb69ab31464d4d1c3261f4ce1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8424ed295766cffafd90d389c59a3df2a2038cb69ab31464d4d1c3261f4ce1c5->leave($__internal_8424ed295766cffafd90d389c59a3df2a2038cb69ab31464d4d1c3261f4ce1c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
