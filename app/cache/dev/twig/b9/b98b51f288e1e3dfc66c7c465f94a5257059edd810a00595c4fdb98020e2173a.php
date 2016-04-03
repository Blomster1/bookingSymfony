<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0d8b8e19598e0bc8d384f22e491bdfa63b7e9a7ea74b5aaa1d5a1e3932f3c8e6 extends Twig_Template
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
        $__internal_e35ba95b9528ff00f633df3c99db59ecb54013267f2d8ffe088e0983685aa788 = $this->env->getExtension("native_profiler");
        $__internal_e35ba95b9528ff00f633df3c99db59ecb54013267f2d8ffe088e0983685aa788->enter($__internal_e35ba95b9528ff00f633df3c99db59ecb54013267f2d8ffe088e0983685aa788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_e35ba95b9528ff00f633df3c99db59ecb54013267f2d8ffe088e0983685aa788->leave($__internal_e35ba95b9528ff00f633df3c99db59ecb54013267f2d8ffe088e0983685aa788_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
