<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_7c34df97db3b9054dbea032aea1610f414a7c5e398c8173835a13684ac7e2f44 extends Twig_Template
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
        $__internal_53cd2abf832aaad8acbb7683f3a9177cf5bef9185943838a32d5092b6bf0466a = $this->env->getExtension("native_profiler");
        $__internal_53cd2abf832aaad8acbb7683f3a9177cf5bef9185943838a32d5092b6bf0466a->enter($__internal_53cd2abf832aaad8acbb7683f3a9177cf5bef9185943838a32d5092b6bf0466a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_53cd2abf832aaad8acbb7683f3a9177cf5bef9185943838a32d5092b6bf0466a->leave($__internal_53cd2abf832aaad8acbb7683f3a9177cf5bef9185943838a32d5092b6bf0466a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
