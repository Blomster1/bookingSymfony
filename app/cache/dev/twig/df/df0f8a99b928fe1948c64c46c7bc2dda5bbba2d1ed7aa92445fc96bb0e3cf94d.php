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
        $__internal_51709330338aa8491076f527eb45d912a9caab616f88f34414bb4f95c065f6f1 = $this->env->getExtension("native_profiler");
        $__internal_51709330338aa8491076f527eb45d912a9caab616f88f34414bb4f95c065f6f1->enter($__internal_51709330338aa8491076f527eb45d912a9caab616f88f34414bb4f95c065f6f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_51709330338aa8491076f527eb45d912a9caab616f88f34414bb4f95c065f6f1->leave($__internal_51709330338aa8491076f527eb45d912a9caab616f88f34414bb4f95c065f6f1_prof);

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
