<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_6a57eeb1c3acf3ec85b140609a5919c92174cb89789626594ceead69bb625ac0 extends Twig_Template
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
        $__internal_242af90e6a883b31a8fb436f8e2b38428065c5488a440fc825652ee3799c0973 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_242af90e6a883b31a8fb436f8e2b38428065c5488a440fc825652ee3799c0973->enter($__internal_242af90e6a883b31a8fb436f8e2b38428065c5488a440fc825652ee3799c0973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_2b821925ffa3793b4cf920496bc9dec2156c3f7090f76033766e356cd059fc4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b821925ffa3793b4cf920496bc9dec2156c3f7090f76033766e356cd059fc4e->enter($__internal_2b821925ffa3793b4cf920496bc9dec2156c3f7090f76033766e356cd059fc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_242af90e6a883b31a8fb436f8e2b38428065c5488a440fc825652ee3799c0973->leave($__internal_242af90e6a883b31a8fb436f8e2b38428065c5488a440fc825652ee3799c0973_prof);

        
        $__internal_2b821925ffa3793b4cf920496bc9dec2156c3f7090f76033766e356cd059fc4e->leave($__internal_2b821925ffa3793b4cf920496bc9dec2156c3f7090f76033766e356cd059fc4e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/form_label.html.php");
    }
}
