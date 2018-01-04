<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_531cf7e7a9f06d239083ae3096cda07fc1f17709de9bd30d51ac6aed083dc9e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82dfdb544bf349b6a15d93f45edda84afb117d933d5346e09c8221876391963b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82dfdb544bf349b6a15d93f45edda84afb117d933d5346e09c8221876391963b->enter($__internal_82dfdb544bf349b6a15d93f45edda84afb117d933d5346e09c8221876391963b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_2ffd562f19c17226f077424a9cf0b7f76de5c5019ec0c79d98747c3099f2404c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ffd562f19c17226f077424a9cf0b7f76de5c5019ec0c79d98747c3099f2404c->enter($__internal_2ffd562f19c17226f077424a9cf0b7f76de5c5019ec0c79d98747c3099f2404c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_82dfdb544bf349b6a15d93f45edda84afb117d933d5346e09c8221876391963b->leave($__internal_82dfdb544bf349b6a15d93f45edda84afb117d933d5346e09c8221876391963b_prof);

        
        $__internal_2ffd562f19c17226f077424a9cf0b7f76de5c5019ec0c79d98747c3099f2404c->leave($__internal_2ffd562f19c17226f077424a9cf0b7f76de5c5019ec0c79d98747c3099f2404c_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_de5d91449a176f1b6c5d8c22df0a9232d80fe6f472efb21aa846bf0ca2aaea84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de5d91449a176f1b6c5d8c22df0a9232d80fe6f472efb21aa846bf0ca2aaea84->enter($__internal_de5d91449a176f1b6c5d8c22df0a9232d80fe6f472efb21aa846bf0ca2aaea84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_140350441bfb7e9aed4fdc02580b9893124c213fda81ced9c61b32f80eb9b282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_140350441bfb7e9aed4fdc02580b9893124c213fda81ced9c61b32f80eb9b282->enter($__internal_140350441bfb7e9aed4fdc02580b9893124c213fda81ced9c61b32f80eb9b282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_140350441bfb7e9aed4fdc02580b9893124c213fda81ced9c61b32f80eb9b282->leave($__internal_140350441bfb7e9aed4fdc02580b9893124c213fda81ced9c61b32f80eb9b282_prof);

        
        $__internal_de5d91449a176f1b6c5d8c22df0a9232d80fe6f472efb21aa846bf0ca2aaea84->leave($__internal_de5d91449a176f1b6c5d8c22df0a9232d80fe6f472efb21aa846bf0ca2aaea84_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a4e0e9283816f9ef442fb36e9d694c220f5958c68cc993ae692542c3cfd1e390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4e0e9283816f9ef442fb36e9d694c220f5958c68cc993ae692542c3cfd1e390->enter($__internal_a4e0e9283816f9ef442fb36e9d694c220f5958c68cc993ae692542c3cfd1e390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d73c535976ef27facf9ab5619cb28d772d23f88dcae37600f7d27641b7af7642 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73c535976ef27facf9ab5619cb28d772d23f88dcae37600f7d27641b7af7642->enter($__internal_d73c535976ef27facf9ab5619cb28d772d23f88dcae37600f7d27641b7af7642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d73c535976ef27facf9ab5619cb28d772d23f88dcae37600f7d27641b7af7642->leave($__internal_d73c535976ef27facf9ab5619cb28d772d23f88dcae37600f7d27641b7af7642_prof);

        
        $__internal_a4e0e9283816f9ef442fb36e9d694c220f5958c68cc993ae692542c3cfd1e390->leave($__internal_a4e0e9283816f9ef442fb36e9d694c220f5958c68cc993ae692542c3cfd1e390_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/home/charline/bite/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/info.html.twig");
    }
}
