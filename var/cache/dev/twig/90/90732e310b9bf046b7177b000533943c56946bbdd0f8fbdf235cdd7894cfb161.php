<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_3b1440131552b5345c47d28a111d8d8a277bbeea372b9d9b1fa468e3879b8ee5 extends Twig_Template
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
        $__internal_8ac2b09481dba5f7e12c9b1f6c4d772c9aec878b18931a4611cbf43044547f5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac2b09481dba5f7e12c9b1f6c4d772c9aec878b18931a4611cbf43044547f5c->enter($__internal_8ac2b09481dba5f7e12c9b1f6c4d772c9aec878b18931a4611cbf43044547f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_1ab32d638469c313e952096bdbad199439f3fe0e7fa80e0beb1bdde751051207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab32d638469c313e952096bdbad199439f3fe0e7fa80e0beb1bdde751051207->enter($__internal_1ab32d638469c313e952096bdbad199439f3fe0e7fa80e0beb1bdde751051207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8ac2b09481dba5f7e12c9b1f6c4d772c9aec878b18931a4611cbf43044547f5c->leave($__internal_8ac2b09481dba5f7e12c9b1f6c4d772c9aec878b18931a4611cbf43044547f5c_prof);

        
        $__internal_1ab32d638469c313e952096bdbad199439f3fe0e7fa80e0beb1bdde751051207->leave($__internal_1ab32d638469c313e952096bdbad199439f3fe0e7fa80e0beb1bdde751051207_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
