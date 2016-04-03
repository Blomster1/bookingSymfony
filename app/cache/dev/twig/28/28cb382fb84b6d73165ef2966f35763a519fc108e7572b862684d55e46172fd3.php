<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_536f6a84100ec4e46b82c092e516a52f184f37fb93e92fe41059c7ce865334ff extends Twig_Template
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
        $__internal_c59cb06d157b7db20086554c4be0927374821b9d797a92ecd2a90c1d941f3ef2 = $this->env->getExtension("native_profiler");
        $__internal_c59cb06d157b7db20086554c4be0927374821b9d797a92ecd2a90c1d941f3ef2->enter($__internal_c59cb06d157b7db20086554c4be0927374821b9d797a92ecd2a90c1d941f3ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_c59cb06d157b7db20086554c4be0927374821b9d797a92ecd2a90c1d941f3ef2->leave($__internal_c59cb06d157b7db20086554c4be0927374821b9d797a92ecd2a90c1d941f3ef2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
