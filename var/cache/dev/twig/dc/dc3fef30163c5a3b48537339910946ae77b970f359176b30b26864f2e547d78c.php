<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_81dc3d7ce74bf832deb2a037b098c4d546dad03f94a3f3becf3bd1bf1e523724 extends Twig_Template
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
        $__internal_9532310eb4b9e852ebac2d4be33eeb29b693931da8d0b6bf9ff3615aece1f336 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9532310eb4b9e852ebac2d4be33eeb29b693931da8d0b6bf9ff3615aece1f336->enter($__internal_9532310eb4b9e852ebac2d4be33eeb29b693931da8d0b6bf9ff3615aece1f336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_d3dde478ad3e7085ac92bb3d3f1dddd2ab1766589c73cc0ff056c9a3dfa8588d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3dde478ad3e7085ac92bb3d3f1dddd2ab1766589c73cc0ff056c9a3dfa8588d->enter($__internal_d3dde478ad3e7085ac92bb3d3f1dddd2ab1766589c73cc0ff056c9a3dfa8588d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9532310eb4b9e852ebac2d4be33eeb29b693931da8d0b6bf9ff3615aece1f336->leave($__internal_9532310eb4b9e852ebac2d4be33eeb29b693931da8d0b6bf9ff3615aece1f336_prof);

        
        $__internal_d3dde478ad3e7085ac92bb3d3f1dddd2ab1766589c73cc0ff056c9a3dfa8588d->leave($__internal_d3dde478ad3e7085ac92bb3d3f1dddd2ab1766589c73cc0ff056c9a3dfa8588d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
