<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_523c3c66d400f92e5e17123938e6ef540fc2376238f463ee3d3139ab589c1dc8 extends Twig_Template
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
        $__internal_596bb296135d1dae9f2720ecbd17eb143dcb6677bc6671556bf533e2c77d0d77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_596bb296135d1dae9f2720ecbd17eb143dcb6677bc6671556bf533e2c77d0d77->enter($__internal_596bb296135d1dae9f2720ecbd17eb143dcb6677bc6671556bf533e2c77d0d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_76113a096d3b13d56b4a35d233e936c144f2b42c848161246bf6b43db054732f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76113a096d3b13d56b4a35d233e936c144f2b42c848161246bf6b43db054732f->enter($__internal_76113a096d3b13d56b4a35d233e936c144f2b42c848161246bf6b43db054732f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_596bb296135d1dae9f2720ecbd17eb143dcb6677bc6671556bf533e2c77d0d77->leave($__internal_596bb296135d1dae9f2720ecbd17eb143dcb6677bc6671556bf533e2c77d0d77_prof);

        
        $__internal_76113a096d3b13d56b4a35d233e936c144f2b42c848161246bf6b43db054732f->leave($__internal_76113a096d3b13d56b4a35d233e936c144f2b42c848161246bf6b43db054732f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
