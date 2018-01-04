<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_58301420a80fbeca792f5141b3bbd617fc5a0702da1613af30c51bd22dbf2ab5 extends Twig_Template
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
        $__internal_8c5aee528391f280037237ce9c3f44fb3af33fda4a20d1d72680a84a725e90a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c5aee528391f280037237ce9c3f44fb3af33fda4a20d1d72680a84a725e90a5->enter($__internal_8c5aee528391f280037237ce9c3f44fb3af33fda4a20d1d72680a84a725e90a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_a5806ea262f988bffae5db4b2e392a5f3fe1700c36a2d0cae9a17e8e1131d41b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5806ea262f988bffae5db4b2e392a5f3fe1700c36a2d0cae9a17e8e1131d41b->enter($__internal_a5806ea262f988bffae5db4b2e392a5f3fe1700c36a2d0cae9a17e8e1131d41b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c5aee528391f280037237ce9c3f44fb3af33fda4a20d1d72680a84a725e90a5->leave($__internal_8c5aee528391f280037237ce9c3f44fb3af33fda4a20d1d72680a84a725e90a5_prof);

        
        $__internal_a5806ea262f988bffae5db4b2e392a5f3fe1700c36a2d0cae9a17e8e1131d41b->leave($__internal_a5806ea262f988bffae5db4b2e392a5f3fe1700c36a2d0cae9a17e8e1131d41b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_be12082120d6cb4f38164031e92b32cc3eaff17907b5817f604bd284df99bf1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be12082120d6cb4f38164031e92b32cc3eaff17907b5817f604bd284df99bf1c->enter($__internal_be12082120d6cb4f38164031e92b32cc3eaff17907b5817f604bd284df99bf1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f54fbb0e5e179ee7e741ca58c6a164f98f4fb1e3de6ea3bdeb35ee3974b186b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54fbb0e5e179ee7e741ca58c6a164f98f4fb1e3de6ea3bdeb35ee3974b186b4->enter($__internal_f54fbb0e5e179ee7e741ca58c6a164f98f4fb1e3de6ea3bdeb35ee3974b186b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_f54fbb0e5e179ee7e741ca58c6a164f98f4fb1e3de6ea3bdeb35ee3974b186b4->leave($__internal_f54fbb0e5e179ee7e741ca58c6a164f98f4fb1e3de6ea3bdeb35ee3974b186b4_prof);

        
        $__internal_be12082120d6cb4f38164031e92b32cc3eaff17907b5817f604bd284df99bf1c->leave($__internal_be12082120d6cb4f38164031e92b32cc3eaff17907b5817f604bd284df99bf1c_prof);

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
