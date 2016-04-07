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
        $__internal_c296c4e1afae3e026a59de9765a5daa4e9217770318d6d383f3541c12f40c109 = $this->env->getExtension("native_profiler");
        $__internal_c296c4e1afae3e026a59de9765a5daa4e9217770318d6d383f3541c12f40c109->enter($__internal_c296c4e1afae3e026a59de9765a5daa4e9217770318d6d383f3541c12f40c109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_c296c4e1afae3e026a59de9765a5daa4e9217770318d6d383f3541c12f40c109->leave($__internal_c296c4e1afae3e026a59de9765a5daa4e9217770318d6d383f3541c12f40c109_prof);

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
