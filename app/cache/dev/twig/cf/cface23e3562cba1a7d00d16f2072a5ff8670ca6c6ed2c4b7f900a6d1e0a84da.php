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
        $__internal_2a4f627859c049e12ab4739e61227bf7591b239f5636d5319247ae8cadcddfcf = $this->env->getExtension("native_profiler");
        $__internal_2a4f627859c049e12ab4739e61227bf7591b239f5636d5319247ae8cadcddfcf->enter($__internal_2a4f627859c049e12ab4739e61227bf7591b239f5636d5319247ae8cadcddfcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_2a4f627859c049e12ab4739e61227bf7591b239f5636d5319247ae8cadcddfcf->leave($__internal_2a4f627859c049e12ab4739e61227bf7591b239f5636d5319247ae8cadcddfcf_prof);

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
