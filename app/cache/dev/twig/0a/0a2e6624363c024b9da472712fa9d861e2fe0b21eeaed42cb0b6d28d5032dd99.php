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
        $__internal_a5c88f344d2216392ce1a03b84d155c8353bc982bfa2a547140e7cb02211c9cf = $this->env->getExtension("native_profiler");
        $__internal_a5c88f344d2216392ce1a03b84d155c8353bc982bfa2a547140e7cb02211c9cf->enter($__internal_a5c88f344d2216392ce1a03b84d155c8353bc982bfa2a547140e7cb02211c9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_a5c88f344d2216392ce1a03b84d155c8353bc982bfa2a547140e7cb02211c9cf->leave($__internal_a5c88f344d2216392ce1a03b84d155c8353bc982bfa2a547140e7cb02211c9cf_prof);

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
