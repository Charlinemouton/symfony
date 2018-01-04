<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c2cc6b0050951647dc5a7bf4477c18847d3cd998bbdf85f378607a622fb104e2 extends Twig_Template
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
        $__internal_c7fe41f9f200e79c17cad9e6b8181d132c275ceb7cffce60daf3c3351b73e2ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7fe41f9f200e79c17cad9e6b8181d132c275ceb7cffce60daf3c3351b73e2ae->enter($__internal_c7fe41f9f200e79c17cad9e6b8181d132c275ceb7cffce60daf3c3351b73e2ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_436e8c83a4cd00adb37b3b4b26cdddd35bd8b439e2ad5aad4e0dc56818dc325b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436e8c83a4cd00adb37b3b4b26cdddd35bd8b439e2ad5aad4e0dc56818dc325b->enter($__internal_436e8c83a4cd00adb37b3b4b26cdddd35bd8b439e2ad5aad4e0dc56818dc325b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c7fe41f9f200e79c17cad9e6b8181d132c275ceb7cffce60daf3c3351b73e2ae->leave($__internal_c7fe41f9f200e79c17cad9e6b8181d132c275ceb7cffce60daf3c3351b73e2ae_prof);

        
        $__internal_436e8c83a4cd00adb37b3b4b26cdddd35bd8b439e2ad5aad4e0dc56818dc325b->leave($__internal_436e8c83a4cd00adb37b3b4b26cdddd35bd8b439e2ad5aad4e0dc56818dc325b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
