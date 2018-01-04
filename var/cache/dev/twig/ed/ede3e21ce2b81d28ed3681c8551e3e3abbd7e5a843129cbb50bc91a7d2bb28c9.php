<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_04a1afa21cb1e081eee2fef72902e08efdd6b97c6884d52161af70d707826d83 extends Twig_Template
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
        $__internal_b1f94f3f318cccf8303cd6abf8b82c63aad8a15c3b847cf33f62831046973905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f94f3f318cccf8303cd6abf8b82c63aad8a15c3b847cf33f62831046973905->enter($__internal_b1f94f3f318cccf8303cd6abf8b82c63aad8a15c3b847cf33f62831046973905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_1af3f7f3961b16140cf7955a14a2581a320bd15ab7c3db70bb8e797d08356616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af3f7f3961b16140cf7955a14a2581a320bd15ab7c3db70bb8e797d08356616->enter($__internal_1af3f7f3961b16140cf7955a14a2581a320bd15ab7c3db70bb8e797d08356616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b1f94f3f318cccf8303cd6abf8b82c63aad8a15c3b847cf33f62831046973905->leave($__internal_b1f94f3f318cccf8303cd6abf8b82c63aad8a15c3b847cf33f62831046973905_prof);

        
        $__internal_1af3f7f3961b16140cf7955a14a2581a320bd15ab7c3db70bb8e797d08356616->leave($__internal_1af3f7f3961b16140cf7955a14a2581a320bd15ab7c3db70bb8e797d08356616_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}
