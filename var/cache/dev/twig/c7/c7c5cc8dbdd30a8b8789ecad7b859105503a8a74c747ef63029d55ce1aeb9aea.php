<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_5193b1baecbb5a97a547c975b9c1a152333d832de580c59a16482b610f4b22b9 extends Twig_Template
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
        $__internal_0db3fa57b9e70fb38e6922c3978ba449a5abbc05dc711a3f10c82fc24f5140b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0db3fa57b9e70fb38e6922c3978ba449a5abbc05dc711a3f10c82fc24f5140b9->enter($__internal_0db3fa57b9e70fb38e6922c3978ba449a5abbc05dc711a3f10c82fc24f5140b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_68cb35521b4309e483b5ddc2494b8557c4742f9f9853de2a1e390793b0c3ca08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68cb35521b4309e483b5ddc2494b8557c4742f9f9853de2a1e390793b0c3ca08->enter($__internal_68cb35521b4309e483b5ddc2494b8557c4742f9f9853de2a1e390793b0c3ca08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_0db3fa57b9e70fb38e6922c3978ba449a5abbc05dc711a3f10c82fc24f5140b9->leave($__internal_0db3fa57b9e70fb38e6922c3978ba449a5abbc05dc711a3f10c82fc24f5140b9_prof);

        
        $__internal_68cb35521b4309e483b5ddc2494b8557c4742f9f9853de2a1e390793b0c3ca08->leave($__internal_68cb35521b4309e483b5ddc2494b8557c4742f9f9853de2a1e390793b0c3ca08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/email_widget.html.php");
    }
}
