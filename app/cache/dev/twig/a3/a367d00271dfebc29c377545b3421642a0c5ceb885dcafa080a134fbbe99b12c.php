<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_76def335aabcc9bd3a83b6d9d1f49a2096c8ea74b2398a8164794cadb88032dd extends Twig_Template
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
        $__internal_42d7394fd46d967905eb4ffaf3095f83953f459a1b1951680690df2e654b7fb8 = $this->env->getExtension("native_profiler");
        $__internal_42d7394fd46d967905eb4ffaf3095f83953f459a1b1951680690df2e654b7fb8->enter($__internal_42d7394fd46d967905eb4ffaf3095f83953f459a1b1951680690df2e654b7fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_42d7394fd46d967905eb4ffaf3095f83953f459a1b1951680690df2e654b7fb8->leave($__internal_42d7394fd46d967905eb4ffaf3095f83953f459a1b1951680690df2e654b7fb8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
