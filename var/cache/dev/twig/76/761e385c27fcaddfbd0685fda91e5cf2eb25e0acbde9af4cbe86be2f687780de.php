<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_c057f2106ca0e8e0729e8d30eee15fe89e349207a536c28a8b7ea075a49a8b4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13248e2476a889d4c1f592b3ef06debe2887ed18c5591d35d6293a52017c66c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13248e2476a889d4c1f592b3ef06debe2887ed18c5591d35d6293a52017c66c6->enter($__internal_13248e2476a889d4c1f592b3ef06debe2887ed18c5591d35d6293a52017c66c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_b0e9741c1a2d692f32e475a633a9833f5a4d0b6e0d79b419d3252242a792aa45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e9741c1a2d692f32e475a633a9833f5a4d0b6e0d79b419d3252242a792aa45->enter($__internal_b0e9741c1a2d692f32e475a633a9833f5a4d0b6e0d79b419d3252242a792aa45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13248e2476a889d4c1f592b3ef06debe2887ed18c5591d35d6293a52017c66c6->leave($__internal_13248e2476a889d4c1f592b3ef06debe2887ed18c5591d35d6293a52017c66c6_prof);

        
        $__internal_b0e9741c1a2d692f32e475a633a9833f5a4d0b6e0d79b419d3252242a792aa45->leave($__internal_b0e9741c1a2d692f32e475a633a9833f5a4d0b6e0d79b419d3252242a792aa45_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1e9d06fae8214471aebfaa74c20dec8d3d9cf1faf043342425103ba20210674d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e9d06fae8214471aebfaa74c20dec8d3d9cf1faf043342425103ba20210674d->enter($__internal_1e9d06fae8214471aebfaa74c20dec8d3d9cf1faf043342425103ba20210674d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_179ad1f0c08ff8b5e8d190fb3bfbcb12e18187d229e00e7bde5dac4b7e4bf631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_179ad1f0c08ff8b5e8d190fb3bfbcb12e18187d229e00e7bde5dac4b7e4bf631->enter($__internal_179ad1f0c08ff8b5e8d190fb3bfbcb12e18187d229e00e7bde5dac4b7e4bf631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_179ad1f0c08ff8b5e8d190fb3bfbcb12e18187d229e00e7bde5dac4b7e4bf631->leave($__internal_179ad1f0c08ff8b5e8d190fb3bfbcb12e18187d229e00e7bde5dac4b7e4bf631_prof);

        
        $__internal_1e9d06fae8214471aebfaa74c20dec8d3d9cf1faf043342425103ba20210674d->leave($__internal_1e9d06fae8214471aebfaa74c20dec8d3d9cf1faf043342425103ba20210674d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3f2e9d8aa5a98a5bb9cb1f93983c70a640882af090b939e514f8138289010fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3f2e9d8aa5a98a5bb9cb1f93983c70a640882af090b939e514f8138289010fc->enter($__internal_b3f2e9d8aa5a98a5bb9cb1f93983c70a640882af090b939e514f8138289010fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e4ae2139f86f681ce506dcd53abb807d92b5f518fbf6cd8decfd763445d82818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4ae2139f86f681ce506dcd53abb807d92b5f518fbf6cd8decfd763445d82818->enter($__internal_e4ae2139f86f681ce506dcd53abb807d92b5f518fbf6cd8decfd763445d82818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e4ae2139f86f681ce506dcd53abb807d92b5f518fbf6cd8decfd763445d82818->leave($__internal_e4ae2139f86f681ce506dcd53abb807d92b5f518fbf6cd8decfd763445d82818_prof);

        
        $__internal_b3f2e9d8aa5a98a5bb9cb1f93983c70a640882af090b939e514f8138289010fc->leave($__internal_b3f2e9d8aa5a98a5bb9cb1f93983c70a640882af090b939e514f8138289010fc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/home/charline/bite/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
