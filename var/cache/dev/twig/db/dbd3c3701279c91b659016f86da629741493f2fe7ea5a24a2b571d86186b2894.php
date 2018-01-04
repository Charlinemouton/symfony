<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_afcd13f84793c7a617dd04a150f7e86d3b8e9eb83c37c37d6e66a9830152fbc6 extends Twig_Template
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
        $__internal_8ef3c7362c0c7cd5d856fbfc45ec1fac4240679754a16e44ffdcf0a130fcf2bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef3c7362c0c7cd5d856fbfc45ec1fac4240679754a16e44ffdcf0a130fcf2bc->enter($__internal_8ef3c7362c0c7cd5d856fbfc45ec1fac4240679754a16e44ffdcf0a130fcf2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_31791ac8d106dd4d028c6f70c559fbbadb1360fc6af833fe397d3fbc68982016 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31791ac8d106dd4d028c6f70c559fbbadb1360fc6af833fe397d3fbc68982016->enter($__internal_31791ac8d106dd4d028c6f70c559fbbadb1360fc6af833fe397d3fbc68982016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_8ef3c7362c0c7cd5d856fbfc45ec1fac4240679754a16e44ffdcf0a130fcf2bc->leave($__internal_8ef3c7362c0c7cd5d856fbfc45ec1fac4240679754a16e44ffdcf0a130fcf2bc_prof);

        
        $__internal_31791ac8d106dd4d028c6f70c559fbbadb1360fc6af833fe397d3fbc68982016->leave($__internal_31791ac8d106dd4d028c6f70c559fbbadb1360fc6af833fe397d3fbc68982016_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}
