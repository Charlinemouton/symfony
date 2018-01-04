<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_dc941427a9bbc99d4ab040288f60609b576ea4e49ef4d7aa7a02931fd0fab760 extends Twig_Template
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
        $__internal_38c1e225ba0019a18ff480b03212226fc5641c4cc8245f5174a448769a31d5fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c1e225ba0019a18ff480b03212226fc5641c4cc8245f5174a448769a31d5fa->enter($__internal_38c1e225ba0019a18ff480b03212226fc5641c4cc8245f5174a448769a31d5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_a16be364d386aaa5e83555e1733877aa960f4145a86ea5915ccb38703df9c8f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a16be364d386aaa5e83555e1733877aa960f4145a86ea5915ccb38703df9c8f8->enter($__internal_a16be364d386aaa5e83555e1733877aa960f4145a86ea5915ccb38703df9c8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_38c1e225ba0019a18ff480b03212226fc5641c4cc8245f5174a448769a31d5fa->leave($__internal_38c1e225ba0019a18ff480b03212226fc5641c4cc8245f5174a448769a31d5fa_prof);

        
        $__internal_a16be364d386aaa5e83555e1733877aa960f4145a86ea5915ccb38703df9c8f8->leave($__internal_a16be364d386aaa5e83555e1733877aa960f4145a86ea5915ccb38703df9c8f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/attributes.html.php");
    }
}
