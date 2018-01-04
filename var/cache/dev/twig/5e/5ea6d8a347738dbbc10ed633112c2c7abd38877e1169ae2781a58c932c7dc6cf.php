<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_7ea8f461f52cc8715ef44300cf4c2e5866593048cf06f037900bc0d1cf94a149 extends Twig_Template
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
        $__internal_7893fba4b535b39926aa2561765c9273b127453eb7fe7a1f25fcce7fd47c15b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7893fba4b535b39926aa2561765c9273b127453eb7fe7a1f25fcce7fd47c15b5->enter($__internal_7893fba4b535b39926aa2561765c9273b127453eb7fe7a1f25fcce7fd47c15b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_58f943227b0f6bbcfaf9db66e402fb0aa6db3fb2464fe58d6704b241627b8e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f943227b0f6bbcfaf9db66e402fb0aa6db3fb2464fe58d6704b241627b8e9e->enter($__internal_58f943227b0f6bbcfaf9db66e402fb0aa6db3fb2464fe58d6704b241627b8e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7893fba4b535b39926aa2561765c9273b127453eb7fe7a1f25fcce7fd47c15b5->leave($__internal_7893fba4b535b39926aa2561765c9273b127453eb7fe7a1f25fcce7fd47c15b5_prof);

        
        $__internal_58f943227b0f6bbcfaf9db66e402fb0aa6db3fb2464fe58d6704b241627b8e9e->leave($__internal_58f943227b0f6bbcfaf9db66e402fb0aa6db3fb2464fe58d6704b241627b8e9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
