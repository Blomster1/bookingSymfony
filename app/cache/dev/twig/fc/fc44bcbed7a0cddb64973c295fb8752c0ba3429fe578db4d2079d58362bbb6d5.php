<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e31da2cead93467ae2319ab92519b589cc70a2f607cc2056eb190bd2de78a13f extends Twig_Template
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
        $__internal_55a4618c806ead6d65f8e7b8e2b2f905b0c8b5c4bddd69238821c0220eb678a0 = $this->env->getExtension("native_profiler");
        $__internal_55a4618c806ead6d65f8e7b8e2b2f905b0c8b5c4bddd69238821c0220eb678a0->enter($__internal_55a4618c806ead6d65f8e7b8e2b2f905b0c8b5c4bddd69238821c0220eb678a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_55a4618c806ead6d65f8e7b8e2b2f905b0c8b5c4bddd69238821c0220eb678a0->leave($__internal_55a4618c806ead6d65f8e7b8e2b2f905b0c8b5c4bddd69238821c0220eb678a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
