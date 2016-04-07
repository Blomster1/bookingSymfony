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
        $__internal_b88d502d892cc076a8daf70002aff24361742c101bcce34895b579c75b5702b5 = $this->env->getExtension("native_profiler");
        $__internal_b88d502d892cc076a8daf70002aff24361742c101bcce34895b579c75b5702b5->enter($__internal_b88d502d892cc076a8daf70002aff24361742c101bcce34895b579c75b5702b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_b88d502d892cc076a8daf70002aff24361742c101bcce34895b579c75b5702b5->leave($__internal_b88d502d892cc076a8daf70002aff24361742c101bcce34895b579c75b5702b5_prof);

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
