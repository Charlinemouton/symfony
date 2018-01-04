<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_31c9c625759edda80addfe61f0a4b9538b0558f41999dfd84ccd8320ea68c2b6 extends Twig_Template
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
        $__internal_287d3c0244c0043e606dba23af5a576a263a9f7407e5a048cd778f34e277ee82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_287d3c0244c0043e606dba23af5a576a263a9f7407e5a048cd778f34e277ee82->enter($__internal_287d3c0244c0043e606dba23af5a576a263a9f7407e5a048cd778f34e277ee82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        $__internal_fce0e6dc3a39d07b2aa8d740c90b2db47f1c45ee6a6b8038513cf4a3f90e472c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce0e6dc3a39d07b2aa8d740c90b2db47f1c45ee6a6b8038513cf4a3f90e472c->enter($__internal_fce0e6dc3a39d07b2aa8d740c90b2db47f1c45ee6a6b8038513cf4a3f90e472c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new Twig_Error_Runtime('Variable "year" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new Twig_Error_Runtime('Variable "month" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) || array_key_exists("day", $context) ? $context["day"] : (function () { throw new Twig_Error_Runtime('Variable "day" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_287d3c0244c0043e606dba23af5a576a263a9f7407e5a048cd778f34e277ee82->leave($__internal_287d3c0244c0043e606dba23af5a576a263a9f7407e5a048cd778f34e277ee82_prof);

        
        $__internal_fce0e6dc3a39d07b2aa8d740c90b2db47f1c45ee6a6b8038513cf4a3f90e472c->leave($__internal_fce0e6dc3a39d07b2aa8d740c90b2db47f1c45ee6a6b8038513cf4a3f90e472c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
", "@Framework/Form/date_widget.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/date_widget.html.php");
    }
}
