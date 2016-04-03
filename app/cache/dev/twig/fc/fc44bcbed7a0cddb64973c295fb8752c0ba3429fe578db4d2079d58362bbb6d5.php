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
        $__internal_782fb8d1bf1c9c2ae1486a935b27e5c1ee54ae2b645e33c0fdffb999fa7dbd54 = $this->env->getExtension("native_profiler");
        $__internal_782fb8d1bf1c9c2ae1486a935b27e5c1ee54ae2b645e33c0fdffb999fa7dbd54->enter($__internal_782fb8d1bf1c9c2ae1486a935b27e5c1ee54ae2b645e33c0fdffb999fa7dbd54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_782fb8d1bf1c9c2ae1486a935b27e5c1ee54ae2b645e33c0fdffb999fa7dbd54->leave($__internal_782fb8d1bf1c9c2ae1486a935b27e5c1ee54ae2b645e33c0fdffb999fa7dbd54_prof);

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
