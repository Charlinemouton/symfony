<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_4a42d8a3d96cf818b3cf35a9319bc13851339a262f6a196a1840a1f6c8a2dfe0 extends Twig_Template
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
        $__internal_e5e2cd913f55ac6c59b3af71f646cdecbcf993505e187c6e7aba50c2c6399566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e2cd913f55ac6c59b3af71f646cdecbcf993505e187c6e7aba50c2c6399566->enter($__internal_e5e2cd913f55ac6c59b3af71f646cdecbcf993505e187c6e7aba50c2c6399566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_6065cbd6472c9dd1a37201776c134265ba6eadb126681af0119140c06bfd7f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6065cbd6472c9dd1a37201776c134265ba6eadb126681af0119140c06bfd7f7d->enter($__internal_6065cbd6472c9dd1a37201776c134265ba6eadb126681af0119140c06bfd7f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_e5e2cd913f55ac6c59b3af71f646cdecbcf993505e187c6e7aba50c2c6399566->leave($__internal_e5e2cd913f55ac6c59b3af71f646cdecbcf993505e187c6e7aba50c2c6399566_prof);

        
        $__internal_6065cbd6472c9dd1a37201776c134265ba6eadb126681af0119140c06bfd7f7d->leave($__internal_6065cbd6472c9dd1a37201776c134265ba6eadb126681af0119140c06bfd7f7d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/button_widget.html.php");
    }
}
