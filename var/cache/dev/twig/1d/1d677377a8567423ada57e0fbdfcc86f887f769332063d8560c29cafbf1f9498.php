<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_9c740b1a95e89ce92fb93638676a896aed1a124d14131527ef2c27abaf92d521 extends Twig_Template
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
        $__internal_82f9323717a9ac317bc350c1d1b243ccf7de950aa02fee29d2692618e4c20b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f9323717a9ac317bc350c1d1b243ccf7de950aa02fee29d2692618e4c20b5e->enter($__internal_82f9323717a9ac317bc350c1d1b243ccf7de950aa02fee29d2692618e4c20b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_14a47add66519d59367c1d45090e19f1067bb1d0c57a44482d1aaf6d7ef3a01b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a47add66519d59367c1d45090e19f1067bb1d0c57a44482d1aaf6d7ef3a01b->enter($__internal_14a47add66519d59367c1d45090e19f1067bb1d0c57a44482d1aaf6d7ef3a01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_82f9323717a9ac317bc350c1d1b243ccf7de950aa02fee29d2692618e4c20b5e->leave($__internal_82f9323717a9ac317bc350c1d1b243ccf7de950aa02fee29d2692618e4c20b5e_prof);

        
        $__internal_14a47add66519d59367c1d45090e19f1067bb1d0c57a44482d1aaf6d7ef3a01b->leave($__internal_14a47add66519d59367c1d45090e19f1067bb1d0c57a44482d1aaf6d7ef3a01b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
