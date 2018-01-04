<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_45ff8555967f3a08dd4d33587bd533a57cdfed751129f076eb677a5d76cbcbd4 extends Twig_Template
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
        $__internal_de11098347e80ba23c9b8f3f4db5ddf972ac6bd7f29147afc72162fbdcff9cb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de11098347e80ba23c9b8f3f4db5ddf972ac6bd7f29147afc72162fbdcff9cb1->enter($__internal_de11098347e80ba23c9b8f3f4db5ddf972ac6bd7f29147afc72162fbdcff9cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_ffb2a8366a56e2d3a3ec400bea4eec6d80e0e879128a19dfc8416f08cfc8a166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffb2a8366a56e2d3a3ec400bea4eec6d80e0e879128a19dfc8416f08cfc8a166->enter($__internal_ffb2a8366a56e2d3a3ec400bea4eec6d80e0e879128a19dfc8416f08cfc8a166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_de11098347e80ba23c9b8f3f4db5ddf972ac6bd7f29147afc72162fbdcff9cb1->leave($__internal_de11098347e80ba23c9b8f3f4db5ddf972ac6bd7f29147afc72162fbdcff9cb1_prof);

        
        $__internal_ffb2a8366a56e2d3a3ec400bea4eec6d80e0e879128a19dfc8416f08cfc8a166->leave($__internal_ffb2a8366a56e2d3a3ec400bea4eec6d80e0e879128a19dfc8416f08cfc8a166_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "/home/charline/bite/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}
