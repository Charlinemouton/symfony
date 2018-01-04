<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_5e81d6828841d4307ff0618aece1d703e6dadcba81cc04bae2b23006bd7ab910 extends Twig_Template
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
        $__internal_caef82950008f88428992c24bb99f3e8509550eaf3893a88cb882f822339ed25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caef82950008f88428992c24bb99f3e8509550eaf3893a88cb882f822339ed25->enter($__internal_caef82950008f88428992c24bb99f3e8509550eaf3893a88cb882f822339ed25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_bebb27ee5b92f1203a0f5ca5145718f928322eae215fdcaf502a1d94f12b67b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bebb27ee5b92f1203a0f5ca5145718f928322eae215fdcaf502a1d94f12b67b4->enter($__internal_bebb27ee5b92f1203a0f5ca5145718f928322eae215fdcaf502a1d94f12b67b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_caef82950008f88428992c24bb99f3e8509550eaf3893a88cb882f822339ed25->leave($__internal_caef82950008f88428992c24bb99f3e8509550eaf3893a88cb882f822339ed25_prof);

        
        $__internal_bebb27ee5b92f1203a0f5ca5145718f928322eae215fdcaf502a1d94f12b67b4->leave($__internal_bebb27ee5b92f1203a0f5ca5145718f928322eae215fdcaf502a1d94f12b67b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/color_widget.html.php");
    }
}
