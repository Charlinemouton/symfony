<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2f0e98d5f7e9900aad2e71fd121f65903f9588df88f8461522b8f4483aad2adb extends Twig_Template
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
        $__internal_5328bd41721cc75a0724c28cbaada2f5c9ab0b475e3575c13cb92e90523bcd2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5328bd41721cc75a0724c28cbaada2f5c9ab0b475e3575c13cb92e90523bcd2a->enter($__internal_5328bd41721cc75a0724c28cbaada2f5c9ab0b475e3575c13cb92e90523bcd2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_c954e74d682de6fbc06fc76c1f11063d85008fb633cf5d0c85aa3fe8f7bba5b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c954e74d682de6fbc06fc76c1f11063d85008fb633cf5d0c85aa3fe8f7bba5b4->enter($__internal_c954e74d682de6fbc06fc76c1f11063d85008fb633cf5d0c85aa3fe8f7bba5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_5328bd41721cc75a0724c28cbaada2f5c9ab0b475e3575c13cb92e90523bcd2a->leave($__internal_5328bd41721cc75a0724c28cbaada2f5c9ab0b475e3575c13cb92e90523bcd2a_prof);

        
        $__internal_c954e74d682de6fbc06fc76c1f11063d85008fb633cf5d0c85aa3fe8f7bba5b4->leave($__internal_c954e74d682de6fbc06fc76c1f11063d85008fb633cf5d0c85aa3fe8f7bba5b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
