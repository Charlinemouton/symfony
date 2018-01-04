<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8e6d909098ad23adc5e840c848f04576a7ef233613ed6f70e1fe716c1c3c6a11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3ad588ea13dac815520e1efae4f1083c162698c328885b6e5b12dca7e841b71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3ad588ea13dac815520e1efae4f1083c162698c328885b6e5b12dca7e841b71->enter($__internal_e3ad588ea13dac815520e1efae4f1083c162698c328885b6e5b12dca7e841b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_e3f269b0ef6fb337fd5880c0fbfcd6b15301cd6463bd0ddb9d8bacea666e1704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3f269b0ef6fb337fd5880c0fbfcd6b15301cd6463bd0ddb9d8bacea666e1704->enter($__internal_e3f269b0ef6fb337fd5880c0fbfcd6b15301cd6463bd0ddb9d8bacea666e1704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3ad588ea13dac815520e1efae4f1083c162698c328885b6e5b12dca7e841b71->leave($__internal_e3ad588ea13dac815520e1efae4f1083c162698c328885b6e5b12dca7e841b71_prof);

        
        $__internal_e3f269b0ef6fb337fd5880c0fbfcd6b15301cd6463bd0ddb9d8bacea666e1704->leave($__internal_e3f269b0ef6fb337fd5880c0fbfcd6b15301cd6463bd0ddb9d8bacea666e1704_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c15e9a57c1e79ab9fd568fc52b29cf42d3242c2a45948e1653b0d2c4e9278dc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c15e9a57c1e79ab9fd568fc52b29cf42d3242c2a45948e1653b0d2c4e9278dc1->enter($__internal_c15e9a57c1e79ab9fd568fc52b29cf42d3242c2a45948e1653b0d2c4e9278dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b737aabd520dbdd782842298b437e7256e05a369ac3f6f1aaa246c86cc62f390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b737aabd520dbdd782842298b437e7256e05a369ac3f6f1aaa246c86cc62f390->enter($__internal_b737aabd520dbdd782842298b437e7256e05a369ac3f6f1aaa246c86cc62f390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b737aabd520dbdd782842298b437e7256e05a369ac3f6f1aaa246c86cc62f390->leave($__internal_b737aabd520dbdd782842298b437e7256e05a369ac3f6f1aaa246c86cc62f390_prof);

        
        $__internal_c15e9a57c1e79ab9fd568fc52b29cf42d3242c2a45948e1653b0d2c4e9278dc1->leave($__internal_c15e9a57c1e79ab9fd568fc52b29cf42d3242c2a45948e1653b0d2c4e9278dc1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_61a009c70d9c2aa23ec8713451f9e38ac50522a09d537374107d63f1ee9b5f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61a009c70d9c2aa23ec8713451f9e38ac50522a09d537374107d63f1ee9b5f72->enter($__internal_61a009c70d9c2aa23ec8713451f9e38ac50522a09d537374107d63f1ee9b5f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dae490f4dbd468383b5aea922e7ca5753f7206823ca2aced585c1776491b0d75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae490f4dbd468383b5aea922e7ca5753f7206823ca2aced585c1776491b0d75->enter($__internal_dae490f4dbd468383b5aea922e7ca5753f7206823ca2aced585c1776491b0d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dae490f4dbd468383b5aea922e7ca5753f7206823ca2aced585c1776491b0d75->leave($__internal_dae490f4dbd468383b5aea922e7ca5753f7206823ca2aced585c1776491b0d75_prof);

        
        $__internal_61a009c70d9c2aa23ec8713451f9e38ac50522a09d537374107d63f1ee9b5f72->leave($__internal_61a009c70d9c2aa23ec8713451f9e38ac50522a09d537374107d63f1ee9b5f72_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_371c6a74f59474bd8919a1a0b7722227362f02aa5bf42ff950cccaf604af2e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371c6a74f59474bd8919a1a0b7722227362f02aa5bf42ff950cccaf604af2e0e->enter($__internal_371c6a74f59474bd8919a1a0b7722227362f02aa5bf42ff950cccaf604af2e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fce411dd48ebbf8ab4c2a949ebd074fcdda42afb6e3b4f4e58fe95b628171fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce411dd48ebbf8ab4c2a949ebd074fcdda42afb6e3b4f4e58fe95b628171fd5->enter($__internal_fce411dd48ebbf8ab4c2a949ebd074fcdda42afb6e3b4f4e58fe95b628171fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_fce411dd48ebbf8ab4c2a949ebd074fcdda42afb6e3b4f4e58fe95b628171fd5->leave($__internal_fce411dd48ebbf8ab4c2a949ebd074fcdda42afb6e3b4f4e58fe95b628171fd5_prof);

        
        $__internal_371c6a74f59474bd8919a1a0b7722227362f02aa5bf42ff950cccaf604af2e0e->leave($__internal_371c6a74f59474bd8919a1a0b7722227362f02aa5bf42ff950cccaf604af2e0e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/charline/bite/vendor/symfony/web-profiler-bundle/Resources/views/Collector/router.html.twig");
    }
}
