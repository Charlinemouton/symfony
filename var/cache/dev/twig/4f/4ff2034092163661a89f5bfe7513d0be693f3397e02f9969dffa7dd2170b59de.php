<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_34ad4cb15b9a3881df1fe9eca96d3a3c3b5fc0fdfc68cbf5dcd3fe7f53b082b6 extends Twig_Template
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
        $__internal_a54958f135d059b8202d7de7fcf193d74309c9802196da5aee5c70a12b6ac402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54958f135d059b8202d7de7fcf193d74309c9802196da5aee5c70a12b6ac402->enter($__internal_a54958f135d059b8202d7de7fcf193d74309c9802196da5aee5c70a12b6ac402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_94936920b091f91bffbb409d678bf12599a1befdd78ee50066308cbfe501e76c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94936920b091f91bffbb409d678bf12599a1befdd78ee50066308cbfe501e76c->enter($__internal_94936920b091f91bffbb409d678bf12599a1befdd78ee50066308cbfe501e76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_a54958f135d059b8202d7de7fcf193d74309c9802196da5aee5c70a12b6ac402->leave($__internal_a54958f135d059b8202d7de7fcf193d74309c9802196da5aee5c70a12b6ac402_prof);

        
        $__internal_94936920b091f91bffbb409d678bf12599a1befdd78ee50066308cbfe501e76c->leave($__internal_94936920b091f91bffbb409d678bf12599a1befdd78ee50066308cbfe501e76c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/choice_options.html.php");
    }
}
