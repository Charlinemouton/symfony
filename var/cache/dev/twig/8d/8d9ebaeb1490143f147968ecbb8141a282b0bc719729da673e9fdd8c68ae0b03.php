<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_0adb86165c9c5c0fd1a6de1cc9252c346a1a2a8177b563261698bfb676ff7827 extends Twig_Template
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
        $__internal_aaf52fc77f0e6bdcee257c92743dcadcedff939071ca882075bf092c51184cff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaf52fc77f0e6bdcee257c92743dcadcedff939071ca882075bf092c51184cff->enter($__internal_aaf52fc77f0e6bdcee257c92743dcadcedff939071ca882075bf092c51184cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_7aae2fbb07db30402a1d5122745c7f119c842687c2c69625c28e29e5a40af832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aae2fbb07db30402a1d5122745c7f119c842687c2c69625c28e29e5a40af832->enter($__internal_7aae2fbb07db30402a1d5122745c7f119c842687c2c69625c28e29e5a40af832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_aaf52fc77f0e6bdcee257c92743dcadcedff939071ca882075bf092c51184cff->leave($__internal_aaf52fc77f0e6bdcee257c92743dcadcedff939071ca882075bf092c51184cff_prof);

        
        $__internal_7aae2fbb07db30402a1d5122745c7f119c842687c2c69625c28e29e5a40af832->leave($__internal_7aae2fbb07db30402a1d5122745c7f119c842687c2c69625c28e29e5a40af832_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}
