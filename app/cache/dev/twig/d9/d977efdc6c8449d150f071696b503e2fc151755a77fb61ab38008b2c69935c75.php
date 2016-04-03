<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_94b9beb068e5a850ff71bc17bea2c750fd09aa3d88b5cbac54199b7f09843113 extends Twig_Template
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
        $__internal_439fc925d9e0ea89df904018045f08a500f2103499c503fbae04c0e03f39cd2a = $this->env->getExtension("native_profiler");
        $__internal_439fc925d9e0ea89df904018045f08a500f2103499c503fbae04c0e03f39cd2a->enter($__internal_439fc925d9e0ea89df904018045f08a500f2103499c503fbae04c0e03f39cd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_439fc925d9e0ea89df904018045f08a500f2103499c503fbae04c0e03f39cd2a->leave($__internal_439fc925d9e0ea89df904018045f08a500f2103499c503fbae04c0e03f39cd2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
