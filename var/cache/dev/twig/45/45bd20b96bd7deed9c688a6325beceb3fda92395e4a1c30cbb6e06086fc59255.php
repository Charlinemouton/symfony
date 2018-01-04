<?php

/* default/index.html.twig */
class __TwigTemplate_08ad2091167d8fb5f4de648978a3a8e6638470901ec61f7feab5d00eae2d4c98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74196985899273abdfa7fc030854e3215e2a028bac98c5b8aea5329e515e2ead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74196985899273abdfa7fc030854e3215e2a028bac98c5b8aea5329e515e2ead->enter($__internal_74196985899273abdfa7fc030854e3215e2a028bac98c5b8aea5329e515e2ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_2cb26cfe6e5efc411a7c7b83589f709412e0d1f640330a072ed649579b26b04b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb26cfe6e5efc411a7c7b83589f709412e0d1f640330a072ed649579b26b04b->enter($__internal_2cb26cfe6e5efc411a7c7b83589f709412e0d1f640330a072ed649579b26b04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74196985899273abdfa7fc030854e3215e2a028bac98c5b8aea5329e515e2ead->leave($__internal_74196985899273abdfa7fc030854e3215e2a028bac98c5b8aea5329e515e2ead_prof);

        
        $__internal_2cb26cfe6e5efc411a7c7b83589f709412e0d1f640330a072ed649579b26b04b->leave($__internal_2cb26cfe6e5efc411a7c7b83589f709412e0d1f640330a072ed649579b26b04b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4555cc5b62175246e0da523bf3c8df099be82a8e920f263d6d6fc988a2ddf007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4555cc5b62175246e0da523bf3c8df099be82a8e920f263d6d6fc988a2ddf007->enter($__internal_4555cc5b62175246e0da523bf3c8df099be82a8e920f263d6d6fc988a2ddf007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1d8fe08a47e12d7c8cb15c7dacc0db2f822ffc59fbed776a92b07a07da9a810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1d8fe08a47e12d7c8cb15c7dacc0db2f822ffc59fbed776a92b07a07da9a810->enter($__internal_a1d8fe08a47e12d7c8cb15c7dacc0db2f822ffc59fbed776a92b07a07da9a810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('App\Twig\GreetExtension')->greetUser((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 4, $this->getSourceContext()); })())), "html", null, true);
        echo "</h1>
";
        
        $__internal_a1d8fe08a47e12d7c8cb15c7dacc0db2f822ffc59fbed776a92b07a07da9a810->leave($__internal_a1d8fe08a47e12d7c8cb15c7dacc0db2f822ffc59fbed776a92b07a07da9a810_prof);

        
        $__internal_4555cc5b62175246e0da523bf3c8df099be82a8e920f263d6d6fc988a2ddf007->leave($__internal_4555cc5b62175246e0da523bf3c8df099be82a8e920f263d6d6fc988a2ddf007_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
  <h1>{{ name|greet }}</h1>
{% endblock %}
", "default/index.html.twig", "/home/charline/bite/templates/default/index.html.twig");
    }
}
