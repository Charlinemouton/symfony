<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fcb4e38b065ec1fcc594975f20a6814963c36537e27874d5e98972aa6fb9f4f7 extends Twig_Template
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
        $__internal_bbe16a23f8000ae6ff9f2ef0239cf2382f1a9f8c4b4c0917f4bfd5fd1dc826b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbe16a23f8000ae6ff9f2ef0239cf2382f1a9f8c4b4c0917f4bfd5fd1dc826b0->enter($__internal_bbe16a23f8000ae6ff9f2ef0239cf2382f1a9f8c4b4c0917f4bfd5fd1dc826b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8a5e6219895f03fd7a361390cf21cc8350b4c7aeb7636c8e886e19c1e62c6ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a5e6219895f03fd7a361390cf21cc8350b4c7aeb7636c8e886e19c1e62c6ef0->enter($__internal_8a5e6219895f03fd7a361390cf21cc8350b4c7aeb7636c8e886e19c1e62c6ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbe16a23f8000ae6ff9f2ef0239cf2382f1a9f8c4b4c0917f4bfd5fd1dc826b0->leave($__internal_bbe16a23f8000ae6ff9f2ef0239cf2382f1a9f8c4b4c0917f4bfd5fd1dc826b0_prof);

        
        $__internal_8a5e6219895f03fd7a361390cf21cc8350b4c7aeb7636c8e886e19c1e62c6ef0->leave($__internal_8a5e6219895f03fd7a361390cf21cc8350b4c7aeb7636c8e886e19c1e62c6ef0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8e6545482f49c74abb698adaff1c244f8201221f4db4c04f7c26b29167fb0e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6545482f49c74abb698adaff1c244f8201221f4db4c04f7c26b29167fb0e9f->enter($__internal_8e6545482f49c74abb698adaff1c244f8201221f4db4c04f7c26b29167fb0e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d7f13511e2005ec2b4b7d83ebf0bcb95ecd1547ee11b38943aceaf7af78680b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7f13511e2005ec2b4b7d83ebf0bcb95ecd1547ee11b38943aceaf7af78680b5->enter($__internal_d7f13511e2005ec2b4b7d83ebf0bcb95ecd1547ee11b38943aceaf7af78680b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d7f13511e2005ec2b4b7d83ebf0bcb95ecd1547ee11b38943aceaf7af78680b5->leave($__internal_d7f13511e2005ec2b4b7d83ebf0bcb95ecd1547ee11b38943aceaf7af78680b5_prof);

        
        $__internal_8e6545482f49c74abb698adaff1c244f8201221f4db4c04f7c26b29167fb0e9f->leave($__internal_8e6545482f49c74abb698adaff1c244f8201221f4db4c04f7c26b29167fb0e9f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d7df530559050e2adb2aef5df6098f07eb0dd3fceb272faf156307b530d50030 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7df530559050e2adb2aef5df6098f07eb0dd3fceb272faf156307b530d50030->enter($__internal_d7df530559050e2adb2aef5df6098f07eb0dd3fceb272faf156307b530d50030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_94f9ff84298a6a5247a07c9353af3f6c05f8676df208411d156a280a0c728013 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f9ff84298a6a5247a07c9353af3f6c05f8676df208411d156a280a0c728013->enter($__internal_94f9ff84298a6a5247a07c9353af3f6c05f8676df208411d156a280a0c728013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_94f9ff84298a6a5247a07c9353af3f6c05f8676df208411d156a280a0c728013->leave($__internal_94f9ff84298a6a5247a07c9353af3f6c05f8676df208411d156a280a0c728013_prof);

        
        $__internal_d7df530559050e2adb2aef5df6098f07eb0dd3fceb272faf156307b530d50030->leave($__internal_d7df530559050e2adb2aef5df6098f07eb0dd3fceb272faf156307b530d50030_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c2418738b5e965a98eb47cf4321f0d0e1af053c0bf68493a8844fb91b543bf4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2418738b5e965a98eb47cf4321f0d0e1af053c0bf68493a8844fb91b543bf4f->enter($__internal_c2418738b5e965a98eb47cf4321f0d0e1af053c0bf68493a8844fb91b543bf4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_52bb10ab351be55bfba35622574e139d72aa2a0ba96d00d4cb701c334c82da6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52bb10ab351be55bfba35622574e139d72aa2a0ba96d00d4cb701c334c82da6b->enter($__internal_52bb10ab351be55bfba35622574e139d72aa2a0ba96d00d4cb701c334c82da6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_52bb10ab351be55bfba35622574e139d72aa2a0ba96d00d4cb701c334c82da6b->leave($__internal_52bb10ab351be55bfba35622574e139d72aa2a0ba96d00d4cb701c334c82da6b_prof);

        
        $__internal_c2418738b5e965a98eb47cf4321f0d0e1af053c0bf68493a8844fb91b543bf4f->leave($__internal_c2418738b5e965a98eb47cf4321f0d0e1af053c0bf68493a8844fb91b543bf4f_prof);

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
