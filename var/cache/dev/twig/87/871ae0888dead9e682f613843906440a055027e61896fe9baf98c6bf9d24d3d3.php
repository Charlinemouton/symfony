<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_23490468564d8cb316d92aa214fc928169caa2526d71435038557022e06f5a69 extends Twig_Template
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
        $__internal_6459355a8ceee64a0f37d472918e8fde92cbf29ed0c9b3b0bd763d0bd8a24374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6459355a8ceee64a0f37d472918e8fde92cbf29ed0c9b3b0bd763d0bd8a24374->enter($__internal_6459355a8ceee64a0f37d472918e8fde92cbf29ed0c9b3b0bd763d0bd8a24374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_7a7afba9d54134be6d531ce23d8f204f1152175d16738813cbd26a818724255a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a7afba9d54134be6d531ce23d8f204f1152175d16738813cbd26a818724255a->enter($__internal_7a7afba9d54134be6d531ce23d8f204f1152175d16738813cbd26a818724255a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6459355a8ceee64a0f37d472918e8fde92cbf29ed0c9b3b0bd763d0bd8a24374->leave($__internal_6459355a8ceee64a0f37d472918e8fde92cbf29ed0c9b3b0bd763d0bd8a24374_prof);

        
        $__internal_7a7afba9d54134be6d531ce23d8f204f1152175d16738813cbd26a818724255a->leave($__internal_7a7afba9d54134be6d531ce23d8f204f1152175d16738813cbd26a818724255a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/datetime_widget.html.php");
    }
}
