<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3942a95f06cfbe43ae88e5c9129124f7459b5aaf4b8cff0603888b26caac9a51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_19a6739e6334b61941157d90fde36c7aff428a3eb7c46613c579652c1aabac04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19a6739e6334b61941157d90fde36c7aff428a3eb7c46613c579652c1aabac04->enter($__internal_19a6739e6334b61941157d90fde36c7aff428a3eb7c46613c579652c1aabac04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_607c08addc38865c5aa6406d3c3ec2463bffe9e23e7a9f21102e0ec93ae7bd2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_607c08addc38865c5aa6406d3c3ec2463bffe9e23e7a9f21102e0ec93ae7bd2e->enter($__internal_607c08addc38865c5aa6406d3c3ec2463bffe9e23e7a9f21102e0ec93ae7bd2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19a6739e6334b61941157d90fde36c7aff428a3eb7c46613c579652c1aabac04->leave($__internal_19a6739e6334b61941157d90fde36c7aff428a3eb7c46613c579652c1aabac04_prof);

        
        $__internal_607c08addc38865c5aa6406d3c3ec2463bffe9e23e7a9f21102e0ec93ae7bd2e->leave($__internal_607c08addc38865c5aa6406d3c3ec2463bffe9e23e7a9f21102e0ec93ae7bd2e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb7fd87c1dd70109ea0c1d6d7991374b2fc2644e3a0ff9febbbf320173421865 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb7fd87c1dd70109ea0c1d6d7991374b2fc2644e3a0ff9febbbf320173421865->enter($__internal_bb7fd87c1dd70109ea0c1d6d7991374b2fc2644e3a0ff9febbbf320173421865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_af1ed2d55b458a03e2bf37db1d86843379a15e9b98d508fb92d6780299fafdff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1ed2d55b458a03e2bf37db1d86843379a15e9b98d508fb92d6780299fafdff->enter($__internal_af1ed2d55b458a03e2bf37db1d86843379a15e9b98d508fb92d6780299fafdff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_af1ed2d55b458a03e2bf37db1d86843379a15e9b98d508fb92d6780299fafdff->leave($__internal_af1ed2d55b458a03e2bf37db1d86843379a15e9b98d508fb92d6780299fafdff_prof);

        
        $__internal_bb7fd87c1dd70109ea0c1d6d7991374b2fc2644e3a0ff9febbbf320173421865->leave($__internal_bb7fd87c1dd70109ea0c1d6d7991374b2fc2644e3a0ff9febbbf320173421865_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_023cd99c34fef3a2ea0b44bb2085c69c886fef40b70bbc5298fb55db26a5331d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_023cd99c34fef3a2ea0b44bb2085c69c886fef40b70bbc5298fb55db26a5331d->enter($__internal_023cd99c34fef3a2ea0b44bb2085c69c886fef40b70bbc5298fb55db26a5331d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_84c7751ad3fc5fe9d1c896922f98a2bda184002f4ad2eb7e210b70cc6bc0f4f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84c7751ad3fc5fe9d1c896922f98a2bda184002f4ad2eb7e210b70cc6bc0f4f4->enter($__internal_84c7751ad3fc5fe9d1c896922f98a2bda184002f4ad2eb7e210b70cc6bc0f4f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_84c7751ad3fc5fe9d1c896922f98a2bda184002f4ad2eb7e210b70cc6bc0f4f4->leave($__internal_84c7751ad3fc5fe9d1c896922f98a2bda184002f4ad2eb7e210b70cc6bc0f4f4_prof);

        
        $__internal_023cd99c34fef3a2ea0b44bb2085c69c886fef40b70bbc5298fb55db26a5331d->leave($__internal_023cd99c34fef3a2ea0b44bb2085c69c886fef40b70bbc5298fb55db26a5331d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f1dcbb9c8c46b4cdd3b729e06e920fe5eb9fe6cce9f39e49a93b28ed39554719 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1dcbb9c8c46b4cdd3b729e06e920fe5eb9fe6cce9f39e49a93b28ed39554719->enter($__internal_f1dcbb9c8c46b4cdd3b729e06e920fe5eb9fe6cce9f39e49a93b28ed39554719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0329939b8d5c071e95f1008a1cd0cc0911630ca5733713585cd6cc61e4655f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0329939b8d5c071e95f1008a1cd0cc0911630ca5733713585cd6cc61e4655f4c->enter($__internal_0329939b8d5c071e95f1008a1cd0cc0911630ca5733713585cd6cc61e4655f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_0329939b8d5c071e95f1008a1cd0cc0911630ca5733713585cd6cc61e4655f4c->leave($__internal_0329939b8d5c071e95f1008a1cd0cc0911630ca5733713585cd6cc61e4655f4c_prof);

        
        $__internal_f1dcbb9c8c46b4cdd3b729e06e920fe5eb9fe6cce9f39e49a93b28ed39554719->leave($__internal_f1dcbb9c8c46b4cdd3b729e06e920fe5eb9fe6cce9f39e49a93b28ed39554719_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/charline/bite/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.html.twig");
    }
}
