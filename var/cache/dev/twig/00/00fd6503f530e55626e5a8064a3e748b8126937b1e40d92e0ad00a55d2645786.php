<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_808c9a5fac27e826efb7061ecca7e1e5444f57ef24b851ef1e4e9bf83c4300aa extends Twig_Template
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
        $__internal_8281260e47a066277cefa71bb67315776196e6ce656400daa73e8cb0cefa51e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8281260e47a066277cefa71bb67315776196e6ce656400daa73e8cb0cefa51e2->enter($__internal_8281260e47a066277cefa71bb67315776196e6ce656400daa73e8cb0cefa51e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_519f7e3ce414aac1766c2129d88a7018f326ed626f734ac7830527f3fee8ef64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519f7e3ce414aac1766c2129d88a7018f326ed626f734ac7830527f3fee8ef64->enter($__internal_519f7e3ce414aac1766c2129d88a7018f326ed626f734ac7830527f3fee8ef64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_8281260e47a066277cefa71bb67315776196e6ce656400daa73e8cb0cefa51e2->leave($__internal_8281260e47a066277cefa71bb67315776196e6ce656400daa73e8cb0cefa51e2_prof);

        
        $__internal_519f7e3ce414aac1766c2129d88a7018f326ed626f734ac7830527f3fee8ef64->leave($__internal_519f7e3ce414aac1766c2129d88a7018f326ed626f734ac7830527f3fee8ef64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
