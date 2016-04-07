<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_48c5357404db2986396034497da0e8ce3c58e8dc4626f5927734d6af14f7c3f5 extends Twig_Template
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
        $__internal_e0dbdd6a1d9f69b656e4756f9ce81a3e3f24e0ec411bf35574bc5a4855ef17ba = $this->env->getExtension("native_profiler");
        $__internal_e0dbdd6a1d9f69b656e4756f9ce81a3e3f24e0ec411bf35574bc5a4855ef17ba->enter($__internal_e0dbdd6a1d9f69b656e4756f9ce81a3e3f24e0ec411bf35574bc5a4855ef17ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_e0dbdd6a1d9f69b656e4756f9ce81a3e3f24e0ec411bf35574bc5a4855ef17ba->leave($__internal_e0dbdd6a1d9f69b656e4756f9ce81a3e3f24e0ec411bf35574bc5a4855ef17ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
