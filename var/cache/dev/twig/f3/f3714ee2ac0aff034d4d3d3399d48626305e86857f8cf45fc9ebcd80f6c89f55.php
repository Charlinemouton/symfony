<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_1fa2fca35cdfec3ad4a4129d72443f2ade5160dfc0a5bd8777de8d6c4a3293fc extends Twig_Template
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
        $__internal_cbc61d1cad584eb48d28ecf70a42fc3f934d3c62a0ea7b1a844e4ff1b2c6898d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbc61d1cad584eb48d28ecf70a42fc3f934d3c62a0ea7b1a844e4ff1b2c6898d->enter($__internal_cbc61d1cad584eb48d28ecf70a42fc3f934d3c62a0ea7b1a844e4ff1b2c6898d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_57580f492ee246ee6198795b938db4351ba517325f64e65be3967d031958669a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57580f492ee246ee6198795b938db4351ba517325f64e65be3967d031958669a->enter($__internal_57580f492ee246ee6198795b938db4351ba517325f64e65be3967d031958669a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_cbc61d1cad584eb48d28ecf70a42fc3f934d3c62a0ea7b1a844e4ff1b2c6898d->leave($__internal_cbc61d1cad584eb48d28ecf70a42fc3f934d3c62a0ea7b1a844e4ff1b2c6898d_prof);

        
        $__internal_57580f492ee246ee6198795b938db4351ba517325f64e65be3967d031958669a->leave($__internal_57580f492ee246ee6198795b938db4351ba517325f64e65be3967d031958669a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/hidden_widget.html.php");
    }
}
