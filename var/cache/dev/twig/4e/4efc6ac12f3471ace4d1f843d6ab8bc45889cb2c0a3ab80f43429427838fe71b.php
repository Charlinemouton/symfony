<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_f5540ded80d028d325c3ef3e6f40714ea663b41a6cf698f5a830b528827b36ee extends Twig_Template
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
        $__internal_6bc15f7b8ece82316734271af4829d843ef6bee72312165ec39386139d1e2ee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bc15f7b8ece82316734271af4829d843ef6bee72312165ec39386139d1e2ee9->enter($__internal_6bc15f7b8ece82316734271af4829d843ef6bee72312165ec39386139d1e2ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_2e8316537d8046e1577c7d77ab32070e8b552dc61dfecafef8dc55e078b36117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8316537d8046e1577c7d77ab32070e8b552dc61dfecafef8dc55e078b36117->enter($__internal_2e8316537d8046e1577c7d77ab32070e8b552dc61dfecafef8dc55e078b36117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_6bc15f7b8ece82316734271af4829d843ef6bee72312165ec39386139d1e2ee9->leave($__internal_6bc15f7b8ece82316734271af4829d843ef6bee72312165ec39386139d1e2ee9_prof);

        
        $__internal_2e8316537d8046e1577c7d77ab32070e8b552dc61dfecafef8dc55e078b36117->leave($__internal_2e8316537d8046e1577c7d77ab32070e8b552dc61dfecafef8dc55e078b36117_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/container_attributes.html.php");
    }
}
