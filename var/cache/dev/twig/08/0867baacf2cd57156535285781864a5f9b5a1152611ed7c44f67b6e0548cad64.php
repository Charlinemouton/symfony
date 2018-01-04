<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3a55ea45f082da247515302fad285dd874115385c23c225f18be127b62c945c4 extends Twig_Template
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
        $__internal_13f61a81b5a2158e36bfd3f05a8c38f2405dc7d8f8b1bb41489afc0d7dbf09dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13f61a81b5a2158e36bfd3f05a8c38f2405dc7d8f8b1bb41489afc0d7dbf09dc->enter($__internal_13f61a81b5a2158e36bfd3f05a8c38f2405dc7d8f8b1bb41489afc0d7dbf09dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_987a303a692cf1a404a8f68f3d944ebe735b75dc5557e086a5ba8fe5bb9ca894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_987a303a692cf1a404a8f68f3d944ebe735b75dc5557e086a5ba8fe5bb9ca894->enter($__internal_987a303a692cf1a404a8f68f3d944ebe735b75dc5557e086a5ba8fe5bb9ca894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_13f61a81b5a2158e36bfd3f05a8c38f2405dc7d8f8b1bb41489afc0d7dbf09dc->leave($__internal_13f61a81b5a2158e36bfd3f05a8c38f2405dc7d8f8b1bb41489afc0d7dbf09dc_prof);

        
        $__internal_987a303a692cf1a404a8f68f3d944ebe735b75dc5557e086a5ba8fe5bb9ca894->leave($__internal_987a303a692cf1a404a8f68f3d944ebe735b75dc5557e086a5ba8fe5bb9ca894_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}
