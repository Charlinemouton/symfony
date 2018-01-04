<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_7f92682cc90ae24d4ad22f1e078df818719263e625cd3a8737aef959d4f64498 extends Twig_Template
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
        $__internal_723b1d33bbf6562f7803f5062a593bbf20036eabb8c61fae5f4980793d5e5da3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_723b1d33bbf6562f7803f5062a593bbf20036eabb8c61fae5f4980793d5e5da3->enter($__internal_723b1d33bbf6562f7803f5062a593bbf20036eabb8c61fae5f4980793d5e5da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_7bcc42c0e6971c2c614c89934a32c3ded68e560a61840355fdb559f92e48f69b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bcc42c0e6971c2c614c89934a32c3ded68e560a61840355fdb559f92e48f69b->enter($__internal_7bcc42c0e6971c2c614c89934a32c3ded68e560a61840355fdb559f92e48f69b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_723b1d33bbf6562f7803f5062a593bbf20036eabb8c61fae5f4980793d5e5da3->leave($__internal_723b1d33bbf6562f7803f5062a593bbf20036eabb8c61fae5f4980793d5e5da3_prof);

        
        $__internal_7bcc42c0e6971c2c614c89934a32c3ded68e560a61840355fdb559f92e48f69b->leave($__internal_7bcc42c0e6971c2c614c89934a32c3ded68e560a61840355fdb559f92e48f69b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
