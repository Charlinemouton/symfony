<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_fbb52fe21b1c0f4664b01d617c49576b48c211d8f6b399f7741840fe164c4f10 extends Twig_Template
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
        $__internal_0f681a1d99fa465092bccf204d702d37dc9f518d687b27219da5bcea275f300c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f681a1d99fa465092bccf204d702d37dc9f518d687b27219da5bcea275f300c->enter($__internal_0f681a1d99fa465092bccf204d702d37dc9f518d687b27219da5bcea275f300c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_2a89b48b9774621caa9a5a4eaf173015b794d897da8eaa8028fd2eda69917d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a89b48b9774621caa9a5a4eaf173015b794d897da8eaa8028fd2eda69917d6a->enter($__internal_2a89b48b9774621caa9a5a4eaf173015b794d897da8eaa8028fd2eda69917d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_0f681a1d99fa465092bccf204d702d37dc9f518d687b27219da5bcea275f300c->leave($__internal_0f681a1d99fa465092bccf204d702d37dc9f518d687b27219da5bcea275f300c_prof);

        
        $__internal_2a89b48b9774621caa9a5a4eaf173015b794d897da8eaa8028fd2eda69917d6a->leave($__internal_2a89b48b9774621caa9a5a4eaf173015b794d897da8eaa8028fd2eda69917d6a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/number_widget.html.php");
    }
}
