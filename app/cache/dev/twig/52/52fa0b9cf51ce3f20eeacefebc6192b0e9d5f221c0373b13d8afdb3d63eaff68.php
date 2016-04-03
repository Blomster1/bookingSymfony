<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c71ba2f4e94d9d1f4fdf5ef196c4362b0b4a0b252ad2419bcf2c867cc9c9a478 extends Twig_Template
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
        $__internal_3f4fc84d223a86e1c12f0fb1a66ca202a5ca1ca5cf06f79150b399fc88a1f28a = $this->env->getExtension("native_profiler");
        $__internal_3f4fc84d223a86e1c12f0fb1a66ca202a5ca1ca5cf06f79150b399fc88a1f28a->enter($__internal_3f4fc84d223a86e1c12f0fb1a66ca202a5ca1ca5cf06f79150b399fc88a1f28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_3f4fc84d223a86e1c12f0fb1a66ca202a5ca1ca5cf06f79150b399fc88a1f28a->leave($__internal_3f4fc84d223a86e1c12f0fb1a66ca202a5ca1ca5cf06f79150b399fc88a1f28a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
