<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_27d8edffd1a898090dc4e8bcfedc40d0d6de6bb5f0d353ee08d61a2f64f2e665 extends Twig_Template
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
        $__internal_d367e92416c8e0c484bd0a1ee166a8af3483564b3285cc244fedad197ae1b8cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d367e92416c8e0c484bd0a1ee166a8af3483564b3285cc244fedad197ae1b8cb->enter($__internal_d367e92416c8e0c484bd0a1ee166a8af3483564b3285cc244fedad197ae1b8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_6cda8c70ba93766a6bb61db15dceed86780fb29de0721925f9755cea1159597a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cda8c70ba93766a6bb61db15dceed86780fb29de0721925f9755cea1159597a->enter($__internal_6cda8c70ba93766a6bb61db15dceed86780fb29de0721925f9755cea1159597a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_d367e92416c8e0c484bd0a1ee166a8af3483564b3285cc244fedad197ae1b8cb->leave($__internal_d367e92416c8e0c484bd0a1ee166a8af3483564b3285cc244fedad197ae1b8cb_prof);

        
        $__internal_6cda8c70ba93766a6bb61db15dceed86780fb29de0721925f9755cea1159597a->leave($__internal_6cda8c70ba93766a6bb61db15dceed86780fb29de0721925f9755cea1159597a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/form_start.html.php");
    }
}
