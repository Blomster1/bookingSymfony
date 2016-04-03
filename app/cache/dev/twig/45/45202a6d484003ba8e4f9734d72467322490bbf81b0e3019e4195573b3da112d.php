<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a8dfa7d90b0dccc8f3fe8b13bce4a2a6635f446f3c306e6e9f1d4cfdd88a17c1 extends Twig_Template
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
        $__internal_0258c7c031aa2bf72611e97807cba9f17fbfb1011b3253be234de0977f95a0a8 = $this->env->getExtension("native_profiler");
        $__internal_0258c7c031aa2bf72611e97807cba9f17fbfb1011b3253be234de0977f95a0a8->enter($__internal_0258c7c031aa2bf72611e97807cba9f17fbfb1011b3253be234de0977f95a0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0258c7c031aa2bf72611e97807cba9f17fbfb1011b3253be234de0977f95a0a8->leave($__internal_0258c7c031aa2bf72611e97807cba9f17fbfb1011b3253be234de0977f95a0a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
