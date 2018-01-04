<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_c96621d256eeab9805040dfef4d74d81516ed384c66961b10f4b21e5681f5571 extends Twig_Template
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
        $__internal_24f8485e0240b7e05b6542a248b54ca7a4ed55aea72fb53b22d9d0be2b2cb773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f8485e0240b7e05b6542a248b54ca7a4ed55aea72fb53b22d9d0be2b2cb773->enter($__internal_24f8485e0240b7e05b6542a248b54ca7a4ed55aea72fb53b22d9d0be2b2cb773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_24681d328d0e9b19d6d6d10391cb265126ffe975ac57cbc7d934d72289c268f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24681d328d0e9b19d6d6d10391cb265126ffe975ac57cbc7d934d72289c268f2->enter($__internal_24681d328d0e9b19d6d6d10391cb265126ffe975ac57cbc7d934d72289c268f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_24f8485e0240b7e05b6542a248b54ca7a4ed55aea72fb53b22d9d0be2b2cb773->leave($__internal_24f8485e0240b7e05b6542a248b54ca7a4ed55aea72fb53b22d9d0be2b2cb773_prof);

        
        $__internal_24681d328d0e9b19d6d6d10391cb265126ffe975ac57cbc7d934d72289c268f2->leave($__internal_24681d328d0e9b19d6d6d10391cb265126ffe975ac57cbc7d934d72289c268f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
