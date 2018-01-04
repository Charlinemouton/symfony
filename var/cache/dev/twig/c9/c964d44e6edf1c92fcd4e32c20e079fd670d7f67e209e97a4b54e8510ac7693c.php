<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_86fa43c91bf5ef04f1014f035aa5781c5406d1c56ff652814cef7fe53f31daa1 extends Twig_Template
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
        $__internal_a3ff4f3c3ba8c81c14b0a1c45fae9453068cb1e7703a650d4dfec0e1ee1e51ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3ff4f3c3ba8c81c14b0a1c45fae9453068cb1e7703a650d4dfec0e1ee1e51ca->enter($__internal_a3ff4f3c3ba8c81c14b0a1c45fae9453068cb1e7703a650d4dfec0e1ee1e51ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_cd175823b85b142c40d1bd0bbdd09bf146e26ed4d4d312166a68c176ca066f5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd175823b85b142c40d1bd0bbdd09bf146e26ed4d4d312166a68c176ca066f5e->enter($__internal_cd175823b85b142c40d1bd0bbdd09bf146e26ed4d4d312166a68c176ca066f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_a3ff4f3c3ba8c81c14b0a1c45fae9453068cb1e7703a650d4dfec0e1ee1e51ca->leave($__internal_a3ff4f3c3ba8c81c14b0a1c45fae9453068cb1e7703a650d4dfec0e1ee1e51ca_prof);

        
        $__internal_cd175823b85b142c40d1bd0bbdd09bf146e26ed4d4d312166a68c176ca066f5e->leave($__internal_cd175823b85b142c40d1bd0bbdd09bf146e26ed4d4d312166a68c176ca066f5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
