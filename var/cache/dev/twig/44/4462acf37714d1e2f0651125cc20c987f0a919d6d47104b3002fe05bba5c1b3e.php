<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_b9b7e8c8bcc32569756bb07a7595a837009055ef12d5f74ecc478fa304b51f68 extends Twig_Template
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
        $__internal_49857041d571e48ac6673d70e555ea43155680c3b8872f24deb534fd465c4703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49857041d571e48ac6673d70e555ea43155680c3b8872f24deb534fd465c4703->enter($__internal_49857041d571e48ac6673d70e555ea43155680c3b8872f24deb534fd465c4703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_134da28f813e1aa84e9f6f8dfebdd97fdda9a9bf64118be94a6a07b2517007ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_134da28f813e1aa84e9f6f8dfebdd97fdda9a9bf64118be94a6a07b2517007ed->enter($__internal_134da28f813e1aa84e9f6f8dfebdd97fdda9a9bf64118be94a6a07b2517007ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_49857041d571e48ac6673d70e555ea43155680c3b8872f24deb534fd465c4703->leave($__internal_49857041d571e48ac6673d70e555ea43155680c3b8872f24deb534fd465c4703_prof);

        
        $__internal_134da28f813e1aa84e9f6f8dfebdd97fdda9a9bf64118be94a6a07b2517007ed->leave($__internal_134da28f813e1aa84e9f6f8dfebdd97fdda9a9bf64118be94a6a07b2517007ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
