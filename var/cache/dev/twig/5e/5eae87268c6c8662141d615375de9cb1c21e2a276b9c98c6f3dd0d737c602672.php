<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1476e1f80c89984344ab3715e195f228f63166a4ad5ed7423d1e2cab0055e496 extends Twig_Template
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
        $__internal_f0e6082c9edaa68efb102061d14603ecb8d291668b8b85e2117f7c4d48fc4186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e6082c9edaa68efb102061d14603ecb8d291668b8b85e2117f7c4d48fc4186->enter($__internal_f0e6082c9edaa68efb102061d14603ecb8d291668b8b85e2117f7c4d48fc4186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_426a41a3d5a9f61d7fedaf6c3ad43cd23edb9091105f8c9fe07327ade009171b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_426a41a3d5a9f61d7fedaf6c3ad43cd23edb9091105f8c9fe07327ade009171b->enter($__internal_426a41a3d5a9f61d7fedaf6c3ad43cd23edb9091105f8c9fe07327ade009171b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0e6082c9edaa68efb102061d14603ecb8d291668b8b85e2117f7c4d48fc4186->leave($__internal_f0e6082c9edaa68efb102061d14603ecb8d291668b8b85e2117f7c4d48fc4186_prof);

        
        $__internal_426a41a3d5a9f61d7fedaf6c3ad43cd23edb9091105f8c9fe07327ade009171b->leave($__internal_426a41a3d5a9f61d7fedaf6c3ad43cd23edb9091105f8c9fe07327ade009171b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5c682296e11a9bf5a28df8d95e58e0a1ecb0da07f625f3f3f64535296e6a283e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c682296e11a9bf5a28df8d95e58e0a1ecb0da07f625f3f3f64535296e6a283e->enter($__internal_5c682296e11a9bf5a28df8d95e58e0a1ecb0da07f625f3f3f64535296e6a283e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7a6c7029f50267d907301e7f4827461ffc8f8bade8100d870aeefc50bdb99408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a6c7029f50267d907301e7f4827461ffc8f8bade8100d870aeefc50bdb99408->enter($__internal_7a6c7029f50267d907301e7f4827461ffc8f8bade8100d870aeefc50bdb99408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_7a6c7029f50267d907301e7f4827461ffc8f8bade8100d870aeefc50bdb99408->leave($__internal_7a6c7029f50267d907301e7f4827461ffc8f8bade8100d870aeefc50bdb99408_prof);

        
        $__internal_5c682296e11a9bf5a28df8d95e58e0a1ecb0da07f625f3f3f64535296e6a283e->leave($__internal_5c682296e11a9bf5a28df8d95e58e0a1ecb0da07f625f3f3f64535296e6a283e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d9f57f2dc1e3ada0d54b2037f72e1afed4a860f1a0b1114b87b52591fee3667d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f57f2dc1e3ada0d54b2037f72e1afed4a860f1a0b1114b87b52591fee3667d->enter($__internal_d9f57f2dc1e3ada0d54b2037f72e1afed4a860f1a0b1114b87b52591fee3667d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_56de1c1444aca7b521c77b554d9518c89e63083deb7f13ebf1cd4ce2efd3e7da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56de1c1444aca7b521c77b554d9518c89e63083deb7f13ebf1cd4ce2efd3e7da->enter($__internal_56de1c1444aca7b521c77b554d9518c89e63083deb7f13ebf1cd4ce2efd3e7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_56de1c1444aca7b521c77b554d9518c89e63083deb7f13ebf1cd4ce2efd3e7da->leave($__internal_56de1c1444aca7b521c77b554d9518c89e63083deb7f13ebf1cd4ce2efd3e7da_prof);

        
        $__internal_d9f57f2dc1e3ada0d54b2037f72e1afed4a860f1a0b1114b87b52591fee3667d->leave($__internal_d9f57f2dc1e3ada0d54b2037f72e1afed4a860f1a0b1114b87b52591fee3667d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eedee0610ad5944718c7100df8250b811d84d5591179042fcd1ee314545ffa2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eedee0610ad5944718c7100df8250b811d84d5591179042fcd1ee314545ffa2c->enter($__internal_eedee0610ad5944718c7100df8250b811d84d5591179042fcd1ee314545ffa2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1178d3039575b3f73444be441268b3446e628f3161d12260e2584b4ab7f79df7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1178d3039575b3f73444be441268b3446e628f3161d12260e2584b4ab7f79df7->enter($__internal_1178d3039575b3f73444be441268b3446e628f3161d12260e2584b4ab7f79df7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_1178d3039575b3f73444be441268b3446e628f3161d12260e2584b4ab7f79df7->leave($__internal_1178d3039575b3f73444be441268b3446e628f3161d12260e2584b4ab7f79df7_prof);

        
        $__internal_eedee0610ad5944718c7100df8250b811d84d5591179042fcd1ee314545ffa2c->leave($__internal_eedee0610ad5944718c7100df8250b811d84d5591179042fcd1ee314545ffa2c_prof);

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
