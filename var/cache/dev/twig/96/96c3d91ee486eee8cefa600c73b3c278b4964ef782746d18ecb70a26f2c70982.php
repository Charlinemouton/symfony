<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_df980bd01f7198e337b868d5c079699207bd99fb4712ea7df85324365564ca91 extends Twig_Template
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
        $__internal_395a0c201bd87f99144b023c93173a281fddf941f8773e02cfb502e91fc27e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_395a0c201bd87f99144b023c93173a281fddf941f8773e02cfb502e91fc27e61->enter($__internal_395a0c201bd87f99144b023c93173a281fddf941f8773e02cfb502e91fc27e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_98c11071383376b7fac5302c4fd7354b6d8eb218f06d65fc0af18a9e214d1e0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c11071383376b7fac5302c4fd7354b6d8eb218f06d65fc0af18a9e214d1e0f->enter($__internal_98c11071383376b7fac5302c4fd7354b6d8eb218f06d65fc0af18a9e214d1e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_395a0c201bd87f99144b023c93173a281fddf941f8773e02cfb502e91fc27e61->leave($__internal_395a0c201bd87f99144b023c93173a281fddf941f8773e02cfb502e91fc27e61_prof);

        
        $__internal_98c11071383376b7fac5302c4fd7354b6d8eb218f06d65fc0af18a9e214d1e0f->leave($__internal_98c11071383376b7fac5302c4fd7354b6d8eb218f06d65fc0af18a9e214d1e0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}
