<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_6d2c72e37536ff26e3eedfc5c7510c33be472925003c8f8ca3169153295f2211 extends Twig_Template
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
        $__internal_f8819b770533f1a1206e40cba6d3bb46391d0e382e4f6933ae1fc4aadcb44784 = $this->env->getExtension("native_profiler");
        $__internal_f8819b770533f1a1206e40cba6d3bb46391d0e382e4f6933ae1fc4aadcb44784->enter($__internal_f8819b770533f1a1206e40cba6d3bb46391d0e382e4f6933ae1fc4aadcb44784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f8819b770533f1a1206e40cba6d3bb46391d0e382e4f6933ae1fc4aadcb44784->leave($__internal_f8819b770533f1a1206e40cba6d3bb46391d0e382e4f6933ae1fc4aadcb44784_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
