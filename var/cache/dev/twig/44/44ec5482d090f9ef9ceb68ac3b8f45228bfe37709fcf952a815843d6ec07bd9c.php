<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_455ba376ca715d3b9f6db4944b386ed97ae0c525d1d1daa6feb642fbf2a3f6bd extends Twig_Template
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
        $__internal_545244e4fc4f1eb572d7b74cc5fee9bd71bd089dcd7d9cee0c7b2e008769ec80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_545244e4fc4f1eb572d7b74cc5fee9bd71bd089dcd7d9cee0c7b2e008769ec80->enter($__internal_545244e4fc4f1eb572d7b74cc5fee9bd71bd089dcd7d9cee0c7b2e008769ec80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_9093d02c87560bad8a93ad02e6f06086d112531dab5ea2e38b950f6302194e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9093d02c87560bad8a93ad02e6f06086d112531dab5ea2e38b950f6302194e43->enter($__internal_9093d02c87560bad8a93ad02e6f06086d112531dab5ea2e38b950f6302194e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_545244e4fc4f1eb572d7b74cc5fee9bd71bd089dcd7d9cee0c7b2e008769ec80->leave($__internal_545244e4fc4f1eb572d7b74cc5fee9bd71bd089dcd7d9cee0c7b2e008769ec80_prof);

        
        $__internal_9093d02c87560bad8a93ad02e6f06086d112531dab5ea2e38b950f6302194e43->leave($__internal_9093d02c87560bad8a93ad02e6f06086d112531dab5ea2e38b950f6302194e43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
