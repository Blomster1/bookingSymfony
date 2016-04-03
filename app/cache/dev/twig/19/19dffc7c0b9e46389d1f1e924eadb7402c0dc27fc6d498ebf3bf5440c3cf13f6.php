<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_1e6080cdde4ace8f9e03ef34a64d2dc9943d057ee3396d7a996ad2e114ee428f extends Twig_Template
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
        $__internal_da386a9ae53a6ae1043e0ce2bef2a47dcad189a0f64452cc7f72e83e76e54d8c = $this->env->getExtension("native_profiler");
        $__internal_da386a9ae53a6ae1043e0ce2bef2a47dcad189a0f64452cc7f72e83e76e54d8c->enter($__internal_da386a9ae53a6ae1043e0ce2bef2a47dcad189a0f64452cc7f72e83e76e54d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_da386a9ae53a6ae1043e0ce2bef2a47dcad189a0f64452cc7f72e83e76e54d8c->leave($__internal_da386a9ae53a6ae1043e0ce2bef2a47dcad189a0f64452cc7f72e83e76e54d8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
