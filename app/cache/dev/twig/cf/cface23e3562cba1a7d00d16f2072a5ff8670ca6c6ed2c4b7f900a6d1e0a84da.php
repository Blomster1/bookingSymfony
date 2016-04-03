<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_f590e094403681424f578848a9ebaac36d238ba87ae435c0b0756f8fe8b2d49b extends Twig_Template
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
        $__internal_6ca3c1f8b6a3ae3d53565d7a79f043a0767f83235b6bfec9518ec39b827c1424 = $this->env->getExtension("native_profiler");
        $__internal_6ca3c1f8b6a3ae3d53565d7a79f043a0767f83235b6bfec9518ec39b827c1424->enter($__internal_6ca3c1f8b6a3ae3d53565d7a79f043a0767f83235b6bfec9518ec39b827c1424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_6ca3c1f8b6a3ae3d53565d7a79f043a0767f83235b6bfec9518ec39b827c1424->leave($__internal_6ca3c1f8b6a3ae3d53565d7a79f043a0767f83235b6bfec9518ec39b827c1424_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
