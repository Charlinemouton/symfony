<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_911453619c87e8df336b48fc5742e8915c51f7fc261234c27f47535449e5a647 extends Twig_Template
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
        $__internal_c837eb93371c6750161971ae8f0a3cdf500ce6b909c01dfc8af9332e78038170 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c837eb93371c6750161971ae8f0a3cdf500ce6b909c01dfc8af9332e78038170->enter($__internal_c837eb93371c6750161971ae8f0a3cdf500ce6b909c01dfc8af9332e78038170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ab8f3b7bc72146913e26c9e36bf831ea42fd95470b7d4309e5167022ba5546ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab8f3b7bc72146913e26c9e36bf831ea42fd95470b7d4309e5167022ba5546ff->enter($__internal_ab8f3b7bc72146913e26c9e36bf831ea42fd95470b7d4309e5167022ba5546ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_c837eb93371c6750161971ae8f0a3cdf500ce6b909c01dfc8af9332e78038170->leave($__internal_c837eb93371c6750161971ae8f0a3cdf500ce6b909c01dfc8af9332e78038170_prof);

        
        $__internal_ab8f3b7bc72146913e26c9e36bf831ea42fd95470b7d4309e5167022ba5546ff->leave($__internal_ab8f3b7bc72146913e26c9e36bf831ea42fd95470b7d4309e5167022ba5546ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/search_widget.html.php");
    }
}
