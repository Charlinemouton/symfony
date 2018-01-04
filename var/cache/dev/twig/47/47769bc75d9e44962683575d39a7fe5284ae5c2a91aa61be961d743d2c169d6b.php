<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1035a201ab978eb2c88752332e59ace639830d835365a95d4d484513e6aac03b extends Twig_Template
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
        $__internal_c8f7f851a056b1facb8fef278e6a49f0606865506a2648b06f176f20f6204d24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f7f851a056b1facb8fef278e6a49f0606865506a2648b06f176f20f6204d24->enter($__internal_c8f7f851a056b1facb8fef278e6a49f0606865506a2648b06f176f20f6204d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_c417e020e0ed1c42060ee418fc9fdbd23df6f44b9c10834f6b01b5cfae5cb1b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c417e020e0ed1c42060ee418fc9fdbd23df6f44b9c10834f6b01b5cfae5cb1b8->enter($__internal_c417e020e0ed1c42060ee418fc9fdbd23df6f44b9c10834f6b01b5cfae5cb1b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c8f7f851a056b1facb8fef278e6a49f0606865506a2648b06f176f20f6204d24->leave($__internal_c8f7f851a056b1facb8fef278e6a49f0606865506a2648b06f176f20f6204d24_prof);

        
        $__internal_c417e020e0ed1c42060ee418fc9fdbd23df6f44b9c10834f6b01b5cfae5cb1b8->leave($__internal_c417e020e0ed1c42060ee418fc9fdbd23df6f44b9c10834f6b01b5cfae5cb1b8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
