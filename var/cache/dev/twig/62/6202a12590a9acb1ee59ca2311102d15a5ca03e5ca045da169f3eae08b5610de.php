<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_e095045cc7b45ff1eb0d97aa1636771ff06a4c8823837ed9a47dfe1e62e07710 extends Twig_Template
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
        $__internal_7bb17733fef06775ab9b32dd1e01da8b3ac0ed46cb71b9ad58339a7a59b4914e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bb17733fef06775ab9b32dd1e01da8b3ac0ed46cb71b9ad58339a7a59b4914e->enter($__internal_7bb17733fef06775ab9b32dd1e01da8b3ac0ed46cb71b9ad58339a7a59b4914e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_20958c4357e9b857d540ac003d49354ca9e3c43b47ac47428f225abdeca22e42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20958c4357e9b857d540ac003d49354ca9e3c43b47ac47428f225abdeca22e42->enter($__internal_20958c4357e9b857d540ac003d49354ca9e3c43b47ac47428f225abdeca22e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_7bb17733fef06775ab9b32dd1e01da8b3ac0ed46cb71b9ad58339a7a59b4914e->leave($__internal_7bb17733fef06775ab9b32dd1e01da8b3ac0ed46cb71b9ad58339a7a59b4914e_prof);

        
        $__internal_20958c4357e9b857d540ac003d49354ca9e3c43b47ac47428f225abdeca22e42->leave($__internal_20958c4357e9b857d540ac003d49354ca9e3c43b47ac47428f225abdeca22e42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/integer_widget.html.php");
    }
}
