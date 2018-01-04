<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_5855e35a97803a2206aa6cde4997c45e10eb702f78a64f937e7de8d0b452880d extends Twig_Template
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
        $__internal_620b7ef85654f7c5e8f47f4bc0d7226162011b9b92ac12cea8db8c8c153a949d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_620b7ef85654f7c5e8f47f4bc0d7226162011b9b92ac12cea8db8c8c153a949d->enter($__internal_620b7ef85654f7c5e8f47f4bc0d7226162011b9b92ac12cea8db8c8c153a949d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_8c142a4f8a21d72bf06a4b4c4830c1cb7dc4bcfee39a9986ff8575dc3540498c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c142a4f8a21d72bf06a4b4c4830c1cb7dc4bcfee39a9986ff8575dc3540498c->enter($__internal_8c142a4f8a21d72bf06a4b4c4830c1cb7dc4bcfee39a9986ff8575dc3540498c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_620b7ef85654f7c5e8f47f4bc0d7226162011b9b92ac12cea8db8c8c153a949d->leave($__internal_620b7ef85654f7c5e8f47f4bc0d7226162011b9b92ac12cea8db8c8c153a949d_prof);

        
        $__internal_8c142a4f8a21d72bf06a4b4c4830c1cb7dc4bcfee39a9986ff8575dc3540498c->leave($__internal_8c142a4f8a21d72bf06a4b4c4830c1cb7dc4bcfee39a9986ff8575dc3540498c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "/home/charline/bite/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}
