<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_ade6714912e936ea4e52166db47578398bc23ae53f5003aa0e29080664811f31 extends Twig_Template
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
        $__internal_45e338fa3ba165c1dfa6bfa435a637e0a11aa05e475366b23f1ac2380c94f7bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45e338fa3ba165c1dfa6bfa435a637e0a11aa05e475366b23f1ac2380c94f7bd->enter($__internal_45e338fa3ba165c1dfa6bfa435a637e0a11aa05e475366b23f1ac2380c94f7bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_1886fc44bc11b02609cb4ff6aa64757a089ad528fc30459a96cde5724fc70d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1886fc44bc11b02609cb4ff6aa64757a089ad528fc30459a96cde5724fc70d5e->enter($__internal_1886fc44bc11b02609cb4ff6aa64757a089ad528fc30459a96cde5724fc70d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_45e338fa3ba165c1dfa6bfa435a637e0a11aa05e475366b23f1ac2380c94f7bd->leave($__internal_45e338fa3ba165c1dfa6bfa435a637e0a11aa05e475366b23f1ac2380c94f7bd_prof);

        
        $__internal_1886fc44bc11b02609cb4ff6aa64757a089ad528fc30459a96cde5724fc70d5e->leave($__internal_1886fc44bc11b02609cb4ff6aa64757a089ad528fc30459a96cde5724fc70d5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/choice_attributes.html.php");
    }
}
