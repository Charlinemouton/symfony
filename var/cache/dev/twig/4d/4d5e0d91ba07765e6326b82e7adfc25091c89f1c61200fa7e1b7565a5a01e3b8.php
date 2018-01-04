<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_702ae09351895e019f2d1ced99eab0037d95f44a439b2c0b322f64252486e377 extends Twig_Template
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
        $__internal_dca7cab29dc8cf9c97cfb2da795b673ce6668a8c2c30db190d757dc6e40b37e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dca7cab29dc8cf9c97cfb2da795b673ce6668a8c2c30db190d757dc6e40b37e2->enter($__internal_dca7cab29dc8cf9c97cfb2da795b673ce6668a8c2c30db190d757dc6e40b37e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_4774af95d6057c0437a92d39b431c3c5aab9e69e58f4a82a132b35b83f5b4cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4774af95d6057c0437a92d39b431c3c5aab9e69e58f4a82a132b35b83f5b4cbe->enter($__internal_4774af95d6057c0437a92d39b431c3c5aab9e69e58f4a82a132b35b83f5b4cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_dca7cab29dc8cf9c97cfb2da795b673ce6668a8c2c30db190d757dc6e40b37e2->leave($__internal_dca7cab29dc8cf9c97cfb2da795b673ce6668a8c2c30db190d757dc6e40b37e2_prof);

        
        $__internal_4774af95d6057c0437a92d39b431c3c5aab9e69e58f4a82a132b35b83f5b4cbe->leave($__internal_4774af95d6057c0437a92d39b431c3c5aab9e69e58f4a82a132b35b83f5b4cbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/url_widget.html.php");
    }
}
