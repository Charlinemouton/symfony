<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_69cc997ef6331fcf9c6f256e48ae246ddf650b441f94eca959f08481b4e04cfc extends Twig_Template
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
        $__internal_e0921f684f590b19b28a48e7b53e9309d2926860fe4af2dfdf3cfbda26f3b8f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0921f684f590b19b28a48e7b53e9309d2926860fe4af2dfdf3cfbda26f3b8f9->enter($__internal_e0921f684f590b19b28a48e7b53e9309d2926860fe4af2dfdf3cfbda26f3b8f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_201396fa7fcfe75934ba51f603da1b4b7a3e565fbb5c8e92c56899eefeefb6ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201396fa7fcfe75934ba51f603da1b4b7a3e565fbb5c8e92c56899eefeefb6ab->enter($__internal_201396fa7fcfe75934ba51f603da1b4b7a3e565fbb5c8e92c56899eefeefb6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e0921f684f590b19b28a48e7b53e9309d2926860fe4af2dfdf3cfbda26f3b8f9->leave($__internal_e0921f684f590b19b28a48e7b53e9309d2926860fe4af2dfdf3cfbda26f3b8f9_prof);

        
        $__internal_201396fa7fcfe75934ba51f603da1b4b7a3e565fbb5c8e92c56899eefeefb6ab->leave($__internal_201396fa7fcfe75934ba51f603da1b4b7a3e565fbb5c8e92c56899eefeefb6ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
