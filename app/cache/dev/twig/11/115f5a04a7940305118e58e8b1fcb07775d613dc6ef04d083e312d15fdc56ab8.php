<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_dbcedf68be2bd840995ba39b5b1634d33c9e849c02b5eefeaf1e48331de4f9f7 extends Twig_Template
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
        $__internal_cfd2ef669a275e56169ef5329ae0a6df7f0f842c66f24c3e48e359320a0682e3 = $this->env->getExtension("native_profiler");
        $__internal_cfd2ef669a275e56169ef5329ae0a6df7f0f842c66f24c3e48e359320a0682e3->enter($__internal_cfd2ef669a275e56169ef5329ae0a6df7f0f842c66f24c3e48e359320a0682e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cfd2ef669a275e56169ef5329ae0a6df7f0f842c66f24c3e48e359320a0682e3->leave($__internal_cfd2ef669a275e56169ef5329ae0a6df7f0f842c66f24c3e48e359320a0682e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
