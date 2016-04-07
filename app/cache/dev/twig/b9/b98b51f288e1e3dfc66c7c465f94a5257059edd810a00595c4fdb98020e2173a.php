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
        $__internal_89480465c775feeb01eb8eb60c7510dbe59f905b446e4c5b5c064a007fae3cc3 = $this->env->getExtension("native_profiler");
        $__internal_89480465c775feeb01eb8eb60c7510dbe59f905b446e4c5b5c064a007fae3cc3->enter($__internal_89480465c775feeb01eb8eb60c7510dbe59f905b446e4c5b5c064a007fae3cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_89480465c775feeb01eb8eb60c7510dbe59f905b446e4c5b5c064a007fae3cc3->leave($__internal_89480465c775feeb01eb8eb60c7510dbe59f905b446e4c5b5c064a007fae3cc3_prof);

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
