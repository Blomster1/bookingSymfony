<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_7f30cd39485da6cbc44be3a3de6d54ca50fd7a690f4cd60a950574b213ece87a extends Twig_Template
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
        $__internal_049f48dd88157346ced038b5c7daa06338147a2db29130afea01d7bfac618529 = $this->env->getExtension("native_profiler");
        $__internal_049f48dd88157346ced038b5c7daa06338147a2db29130afea01d7bfac618529->enter($__internal_049f48dd88157346ced038b5c7daa06338147a2db29130afea01d7bfac618529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_049f48dd88157346ced038b5c7daa06338147a2db29130afea01d7bfac618529->leave($__internal_049f48dd88157346ced038b5c7daa06338147a2db29130afea01d7bfac618529_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
