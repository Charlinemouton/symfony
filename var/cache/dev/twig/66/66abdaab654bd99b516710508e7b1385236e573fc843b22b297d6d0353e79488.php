<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_45ee7a3bbf1d3f4e3794ab1dcfe035a9121607fb0c4db95d9295cac41cf319f2 extends Twig_Template
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
        $__internal_1782cb416f4ccbd42e5ac2067c915c3131098a09e35c12a96ee7c0e8c739471b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1782cb416f4ccbd42e5ac2067c915c3131098a09e35c12a96ee7c0e8c739471b->enter($__internal_1782cb416f4ccbd42e5ac2067c915c3131098a09e35c12a96ee7c0e8c739471b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_50eb261bc2f8af61f032df27a48a607c53e35c512b35a918a709798db605d036 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50eb261bc2f8af61f032df27a48a607c53e35c512b35a918a709798db605d036->enter($__internal_50eb261bc2f8af61f032df27a48a607c53e35c512b35a918a709798db605d036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_1782cb416f4ccbd42e5ac2067c915c3131098a09e35c12a96ee7c0e8c739471b->leave($__internal_1782cb416f4ccbd42e5ac2067c915c3131098a09e35c12a96ee7c0e8c739471b_prof);

        
        $__internal_50eb261bc2f8af61f032df27a48a607c53e35c512b35a918a709798db605d036->leave($__internal_50eb261bc2f8af61f032df27a48a607c53e35c512b35a918a709798db605d036_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/home/charline/bite/vendor/symfony/twig-bundle/Resources/views/Exception/error.txt.twig");
    }
}
