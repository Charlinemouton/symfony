<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_fca160ebe2a25d4d18fba1b29b2c2c07c88b3596cd31048657938eebdf0f6a9a extends Twig_Template
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
        $__internal_8ef850946707c544bc0a0d728d22ff4a2a1b750102035c24f7725f0129fb4dba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef850946707c544bc0a0d728d22ff4a2a1b750102035c24f7725f0129fb4dba->enter($__internal_8ef850946707c544bc0a0d728d22ff4a2a1b750102035c24f7725f0129fb4dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_2de4126d74df8fa2ac9605ae9fa63e6eb7a1736aed90cf12ff108d12f2cd22c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de4126d74df8fa2ac9605ae9fa63e6eb7a1736aed90cf12ff108d12f2cd22c6->enter($__internal_2de4126d74df8fa2ac9605ae9fa63e6eb7a1736aed90cf12ff108d12f2cd22c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_8ef850946707c544bc0a0d728d22ff4a2a1b750102035c24f7725f0129fb4dba->leave($__internal_8ef850946707c544bc0a0d728d22ff4a2a1b750102035c24f7725f0129fb4dba_prof);

        
        $__internal_2de4126d74df8fa2ac9605ae9fa63e6eb7a1736aed90cf12ff108d12f2cd22c6->leave($__internal_2de4126d74df8fa2ac9605ae9fa63e6eb7a1736aed90cf12ff108d12f2cd22c6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "/home/charline/bite/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
