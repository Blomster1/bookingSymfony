<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d0077e9c4d2e284f8e30ef8ca8e097f8ed9787b606f48bfa17bc479d5c881f57 extends Twig_Template
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
        $__internal_835b5bd4a6528e7ac1491c43b2197da5a4234830a7bf639346cd55e3c3a3f36d = $this->env->getExtension("native_profiler");
        $__internal_835b5bd4a6528e7ac1491c43b2197da5a4234830a7bf639346cd55e3c3a3f36d->enter($__internal_835b5bd4a6528e7ac1491c43b2197da5a4234830a7bf639346cd55e3c3a3f36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_835b5bd4a6528e7ac1491c43b2197da5a4234830a7bf639346cd55e3c3a3f36d->leave($__internal_835b5bd4a6528e7ac1491c43b2197da5a4234830a7bf639346cd55e3c3a3f36d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
