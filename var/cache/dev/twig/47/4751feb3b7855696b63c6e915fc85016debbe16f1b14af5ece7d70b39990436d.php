<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_3c3cc12263fb92dd7e05a8b849aad148109c5cc7f3ab4d2c1a5a114d5dd4e35c extends Twig_Template
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
        $__internal_607e80a358fff1fec3b4b1adf28133ebbafb5cf0c3b446070dbb7758fd00bb33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_607e80a358fff1fec3b4b1adf28133ebbafb5cf0c3b446070dbb7758fd00bb33->enter($__internal_607e80a358fff1fec3b4b1adf28133ebbafb5cf0c3b446070dbb7758fd00bb33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_0d30eb9dca7338104262a2cbf3d73decbba9aca0791f03ac41e62c2570ca13c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d30eb9dca7338104262a2cbf3d73decbba9aca0791f03ac41e62c2570ca13c7->enter($__internal_0d30eb9dca7338104262a2cbf3d73decbba9aca0791f03ac41e62c2570ca13c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_607e80a358fff1fec3b4b1adf28133ebbafb5cf0c3b446070dbb7758fd00bb33->leave($__internal_607e80a358fff1fec3b4b1adf28133ebbafb5cf0c3b446070dbb7758fd00bb33_prof);

        
        $__internal_0d30eb9dca7338104262a2cbf3d73decbba9aca0791f03ac41e62c2570ca13c7->leave($__internal_0d30eb9dca7338104262a2cbf3d73decbba9aca0791f03ac41e62c2570ca13c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
