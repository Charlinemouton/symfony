<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_bf0e1a044ea23c87709cbc56e68d53c77653e90eb1e11007980104fdc8a3ad04 extends Twig_Template
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
        $__internal_b670b491b1050c220d33145e54522cc4ec0c07aa017a640565a9c20104bae519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b670b491b1050c220d33145e54522cc4ec0c07aa017a640565a9c20104bae519->enter($__internal_b670b491b1050c220d33145e54522cc4ec0c07aa017a640565a9c20104bae519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_29442ac2b6c872e16d939f1842b9452b3df18e50ad0d76884f79092f2e01e5d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29442ac2b6c872e16d939f1842b9452b3df18e50ad0d76884f79092f2e01e5d7->enter($__internal_29442ac2b6c872e16d939f1842b9452b3df18e50ad0d76884f79092f2e01e5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b670b491b1050c220d33145e54522cc4ec0c07aa017a640565a9c20104bae519->leave($__internal_b670b491b1050c220d33145e54522cc4ec0c07aa017a640565a9c20104bae519_prof);

        
        $__internal_29442ac2b6c872e16d939f1842b9452b3df18e50ad0d76884f79092f2e01e5d7->leave($__internal_29442ac2b6c872e16d939f1842b9452b3df18e50ad0d76884f79092f2e01e5d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
