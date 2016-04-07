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
        $__internal_dfd984a07d79c1426e00842969fa598c1c1d2319f92742631e69f0b18910ab18 = $this->env->getExtension("native_profiler");
        $__internal_dfd984a07d79c1426e00842969fa598c1c1d2319f92742631e69f0b18910ab18->enter($__internal_dfd984a07d79c1426e00842969fa598c1c1d2319f92742631e69f0b18910ab18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_dfd984a07d79c1426e00842969fa598c1c1d2319f92742631e69f0b18910ab18->leave($__internal_dfd984a07d79c1426e00842969fa598c1c1d2319f92742631e69f0b18910ab18_prof);

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
