<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_50ec7c7116ef1dc8110d570e1ccdb9634e812894b7555bcd44e3dbf4d2eaaa76 extends Twig_Template
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
        $__internal_dbbb3c70128c041b40b46e1f7d788c680abab4493361dade6fdb809c5c72d731 = $this->env->getExtension("native_profiler");
        $__internal_dbbb3c70128c041b40b46e1f7d788c680abab4493361dade6fdb809c5c72d731->enter($__internal_dbbb3c70128c041b40b46e1f7d788c680abab4493361dade6fdb809c5c72d731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_dbbb3c70128c041b40b46e1f7d788c680abab4493361dade6fdb809c5c72d731->leave($__internal_dbbb3c70128c041b40b46e1f7d788c680abab4493361dade6fdb809c5c72d731_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
