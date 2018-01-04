<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_2ec6fd2fa5df919abd91885ab3012dd9588f82f7a17260fe79f33019736f1ebf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10f355b8b97db767c7067d6bf4d93e58d7680eaac65ae964e372678faa36e8b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10f355b8b97db767c7067d6bf4d93e58d7680eaac65ae964e372678faa36e8b7->enter($__internal_10f355b8b97db767c7067d6bf4d93e58d7680eaac65ae964e372678faa36e8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_16c9ddbb191cd643c52c46d3111aba933a7732713bd862adfbd2e8156f1522d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16c9ddbb191cd643c52c46d3111aba933a7732713bd862adfbd2e8156f1522d5->enter($__internal_16c9ddbb191cd643c52c46d3111aba933a7732713bd862adfbd2e8156f1522d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10f355b8b97db767c7067d6bf4d93e58d7680eaac65ae964e372678faa36e8b7->leave($__internal_10f355b8b97db767c7067d6bf4d93e58d7680eaac65ae964e372678faa36e8b7_prof);

        
        $__internal_16c9ddbb191cd643c52c46d3111aba933a7732713bd862adfbd2e8156f1522d5->leave($__internal_16c9ddbb191cd643c52c46d3111aba933a7732713bd862adfbd2e8156f1522d5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0e3255b03d6d0cf80ae52dd5a8feb7bd5d7f4d1d8bf8ded5a7aba0c6dc697bc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e3255b03d6d0cf80ae52dd5a8feb7bd5d7f4d1d8bf8ded5a7aba0c6dc697bc3->enter($__internal_0e3255b03d6d0cf80ae52dd5a8feb7bd5d7f4d1d8bf8ded5a7aba0c6dc697bc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_805e4181142994bb775ac02752991afb3b3ee941fd4aec6a013882fe8afd811c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_805e4181142994bb775ac02752991afb3b3ee941fd4aec6a013882fe8afd811c->enter($__internal_805e4181142994bb775ac02752991afb3b3ee941fd4aec6a013882fe8afd811c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_805e4181142994bb775ac02752991afb3b3ee941fd4aec6a013882fe8afd811c->leave($__internal_805e4181142994bb775ac02752991afb3b3ee941fd4aec6a013882fe8afd811c_prof);

        
        $__internal_0e3255b03d6d0cf80ae52dd5a8feb7bd5d7f4d1d8bf8ded5a7aba0c6dc697bc3->leave($__internal_0e3255b03d6d0cf80ae52dd5a8feb7bd5d7f4d1d8bf8ded5a7aba0c6dc697bc3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/charline/bite/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
