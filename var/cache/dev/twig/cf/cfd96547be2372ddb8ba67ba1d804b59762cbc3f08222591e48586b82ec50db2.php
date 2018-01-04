<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_cabe48d0d1f49d618e5eb59610ca4da61c693c907ea858e785421f9bd832e95e extends Twig_Template
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
        $__internal_49c5f13e1defa293112f479983eddc1c3b50cc8e9eeaab2f1febc2aa046d32f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49c5f13e1defa293112f479983eddc1c3b50cc8e9eeaab2f1febc2aa046d32f1->enter($__internal_49c5f13e1defa293112f479983eddc1c3b50cc8e9eeaab2f1febc2aa046d32f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_36923682b82ce1faaf0fe0ad20a8bffacc8fa6c84b34f57b82914433d64dfab5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36923682b82ce1faaf0fe0ad20a8bffacc8fa6c84b34f57b82914433d64dfab5->enter($__internal_36923682b82ce1faaf0fe0ad20a8bffacc8fa6c84b34f57b82914433d64dfab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_49c5f13e1defa293112f479983eddc1c3b50cc8e9eeaab2f1febc2aa046d32f1->leave($__internal_49c5f13e1defa293112f479983eddc1c3b50cc8e9eeaab2f1febc2aa046d32f1_prof);

        
        $__internal_36923682b82ce1faaf0fe0ad20a8bffacc8fa6c84b34f57b82914433d64dfab5->leave($__internal_36923682b82ce1faaf0fe0ad20a8bffacc8fa6c84b34f57b82914433d64dfab5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
