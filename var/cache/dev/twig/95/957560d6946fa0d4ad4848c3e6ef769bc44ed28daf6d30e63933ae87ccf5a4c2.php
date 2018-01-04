<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_e5a21616a5682a32993c43e76d9a0b5df351847ca5a69c36d8c0dfebd134bc73 extends Twig_Template
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
        $__internal_ba9890ce4960a5be0712a361594b39d90cd326a645ab388956ae1d7d90f9f1fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba9890ce4960a5be0712a361594b39d90cd326a645ab388956ae1d7d90f9f1fa->enter($__internal_ba9890ce4960a5be0712a361594b39d90cd326a645ab388956ae1d7d90f9f1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_7c436b060409f2d76d6fe5faedac299e3c1c61141318830b50232e212f929015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c436b060409f2d76d6fe5faedac299e3c1c61141318830b50232e212f929015->enter($__internal_7c436b060409f2d76d6fe5faedac299e3c1c61141318830b50232e212f929015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ba9890ce4960a5be0712a361594b39d90cd326a645ab388956ae1d7d90f9f1fa->leave($__internal_ba9890ce4960a5be0712a361594b39d90cd326a645ab388956ae1d7d90f9f1fa_prof);

        
        $__internal_7c436b060409f2d76d6fe5faedac299e3c1c61141318830b50232e212f929015->leave($__internal_7c436b060409f2d76d6fe5faedac299e3c1c61141318830b50232e212f929015_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
