<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_709f4074b1fa522388f1d2b1ab5ab0182e171e1de23b2f11865dfb7557e2069c extends Twig_Template
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
        $__internal_1db7cf87704fd07c6881ec2ca67929695cee403a729f8a12cd7e0ed32413b110 = $this->env->getExtension("native_profiler");
        $__internal_1db7cf87704fd07c6881ec2ca67929695cee403a729f8a12cd7e0ed32413b110->enter($__internal_1db7cf87704fd07c6881ec2ca67929695cee403a729f8a12cd7e0ed32413b110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1db7cf87704fd07c6881ec2ca67929695cee403a729f8a12cd7e0ed32413b110->leave($__internal_1db7cf87704fd07c6881ec2ca67929695cee403a729f8a12cd7e0ed32413b110_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
