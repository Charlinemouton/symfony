<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_1d190bc83e13700ce7358e93ef3d43f7b1822ad94aac608e7356f24f750de202 extends Twig_Template
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
        $__internal_a24ec77e3d266ee8f5cdc8621e4260789bee0740951f39f134b61f64b0dfdec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a24ec77e3d266ee8f5cdc8621e4260789bee0740951f39f134b61f64b0dfdec7->enter($__internal_a24ec77e3d266ee8f5cdc8621e4260789bee0740951f39f134b61f64b0dfdec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_14840f532f14edd8d0f8ae5cafae65db08c6b19917abdc72e538a1bebfe37338 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14840f532f14edd8d0f8ae5cafae65db08c6b19917abdc72e538a1bebfe37338->enter($__internal_14840f532f14edd8d0f8ae5cafae65db08c6b19917abdc72e538a1bebfe37338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_a24ec77e3d266ee8f5cdc8621e4260789bee0740951f39f134b61f64b0dfdec7->leave($__internal_a24ec77e3d266ee8f5cdc8621e4260789bee0740951f39f134b61f64b0dfdec7_prof);

        
        $__internal_14840f532f14edd8d0f8ae5cafae65db08c6b19917abdc72e538a1bebfe37338->leave($__internal_14840f532f14edd8d0f8ae5cafae65db08c6b19917abdc72e538a1bebfe37338_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "/home/charline/bite/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
