<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_2689ceab2f20e0111be7a473c3d166ae82eee73e68f6b50d6b1270b00b2f373c extends Twig_Template
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
        $__internal_8427327c15ca9bcf0614a7b5b90a5cdaf3a2be4916776f0f1bad4c8ee13a7348 = $this->env->getExtension("native_profiler");
        $__internal_8427327c15ca9bcf0614a7b5b90a5cdaf3a2be4916776f0f1bad4c8ee13a7348->enter($__internal_8427327c15ca9bcf0614a7b5b90a5cdaf3a2be4916776f0f1bad4c8ee13a7348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8427327c15ca9bcf0614a7b5b90a5cdaf3a2be4916776f0f1bad4c8ee13a7348->leave($__internal_8427327c15ca9bcf0614a7b5b90a5cdaf3a2be4916776f0f1bad4c8ee13a7348_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
