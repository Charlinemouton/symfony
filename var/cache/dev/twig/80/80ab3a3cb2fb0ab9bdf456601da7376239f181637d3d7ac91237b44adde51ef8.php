<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_098bb478c96c013663029176eaa7b66d02f890c9ffdd5bb5792192814731b880 extends Twig_Template
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
        $__internal_0f2ca65b66b5c09578f1c07e0ca380c9b9cba96ff2335d8a4d273c8ee951b85c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f2ca65b66b5c09578f1c07e0ca380c9b9cba96ff2335d8a4d273c8ee951b85c->enter($__internal_0f2ca65b66b5c09578f1c07e0ca380c9b9cba96ff2335d8a4d273c8ee951b85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_a1e12544a9790c9e718ca1df5ec6234ebbd54beb2fcceba7c81f8ce32c4d48f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e12544a9790c9e718ca1df5ec6234ebbd54beb2fcceba7c81f8ce32c4d48f2->enter($__internal_a1e12544a9790c9e718ca1df5ec6234ebbd54beb2fcceba7c81f8ce32c4d48f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_0f2ca65b66b5c09578f1c07e0ca380c9b9cba96ff2335d8a4d273c8ee951b85c->leave($__internal_0f2ca65b66b5c09578f1c07e0ca380c9b9cba96ff2335d8a4d273c8ee951b85c_prof);

        
        $__internal_a1e12544a9790c9e718ca1df5ec6234ebbd54beb2fcceba7c81f8ce32c4d48f2->leave($__internal_a1e12544a9790c9e718ca1df5ec6234ebbd54beb2fcceba7c81f8ce32c4d48f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
