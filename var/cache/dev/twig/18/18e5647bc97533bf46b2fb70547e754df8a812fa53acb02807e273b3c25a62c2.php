<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_36f87e791b11985b39933a27938a4a7cc71981d89443d804437eaf563f5c9494 extends Twig_Template
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
        $__internal_3c0524d1b1847d9db4ba0660173d87cb86498d4f3e6232e2ac3b1cd1fbbd4d92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c0524d1b1847d9db4ba0660173d87cb86498d4f3e6232e2ac3b1cd1fbbd4d92->enter($__internal_3c0524d1b1847d9db4ba0660173d87cb86498d4f3e6232e2ac3b1cd1fbbd4d92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_2335ae4f1c150cb99c9591689c77cbde5d64e15faa0f0500794bc6069b3908a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2335ae4f1c150cb99c9591689c77cbde5d64e15faa0f0500794bc6069b3908a3->enter($__internal_2335ae4f1c150cb99c9591689c77cbde5d64e15faa0f0500794bc6069b3908a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3c0524d1b1847d9db4ba0660173d87cb86498d4f3e6232e2ac3b1cd1fbbd4d92->leave($__internal_3c0524d1b1847d9db4ba0660173d87cb86498d4f3e6232e2ac3b1cd1fbbd4d92_prof);

        
        $__internal_2335ae4f1c150cb99c9591689c77cbde5d64e15faa0f0500794bc6069b3908a3->leave($__internal_2335ae4f1c150cb99c9591689c77cbde5d64e15faa0f0500794bc6069b3908a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
