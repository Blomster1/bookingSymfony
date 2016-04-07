<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_406f6e104c3ce3957ee66e79cce38d69ee371673a7a6d9838372ed8fb9084e3f extends Twig_Template
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
        $__internal_ec209d7ba1fc0bfa079ffddbafc343e0f54cb6b44208703fac7a9d9677e214c2 = $this->env->getExtension("native_profiler");
        $__internal_ec209d7ba1fc0bfa079ffddbafc343e0f54cb6b44208703fac7a9d9677e214c2->enter($__internal_ec209d7ba1fc0bfa079ffddbafc343e0f54cb6b44208703fac7a9d9677e214c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ec209d7ba1fc0bfa079ffddbafc343e0f54cb6b44208703fac7a9d9677e214c2->leave($__internal_ec209d7ba1fc0bfa079ffddbafc343e0f54cb6b44208703fac7a9d9677e214c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
