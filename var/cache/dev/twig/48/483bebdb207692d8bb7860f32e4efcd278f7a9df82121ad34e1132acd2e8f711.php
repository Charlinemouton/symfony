<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_0c55a25fdb0c04ed5e0c249dbae553cb0e63e5fb6ef6d0eb8355e4a37fcfe976 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_8aebc1781d9fc67ce36bf4375f103c2eee96f33964e3be59f592c179ac35bde7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8aebc1781d9fc67ce36bf4375f103c2eee96f33964e3be59f592c179ac35bde7->enter($__internal_8aebc1781d9fc67ce36bf4375f103c2eee96f33964e3be59f592c179ac35bde7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6ff19ee02205fa6ba2b0f0d1a7b8d6c5c9ccd744cc498348c35f16eb13b250e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff19ee02205fa6ba2b0f0d1a7b8d6c5c9ccd744cc498348c35f16eb13b250e4->enter($__internal_6ff19ee02205fa6ba2b0f0d1a7b8d6c5c9ccd744cc498348c35f16eb13b250e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8aebc1781d9fc67ce36bf4375f103c2eee96f33964e3be59f592c179ac35bde7->leave($__internal_8aebc1781d9fc67ce36bf4375f103c2eee96f33964e3be59f592c179ac35bde7_prof);

        
        $__internal_6ff19ee02205fa6ba2b0f0d1a7b8d6c5c9ccd744cc498348c35f16eb13b250e4->leave($__internal_6ff19ee02205fa6ba2b0f0d1a7b8d6c5c9ccd744cc498348c35f16eb13b250e4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_716eb3fdd6fc533cffbf32ce6af531671142d7a9f679e3b0988091f0950e0104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_716eb3fdd6fc533cffbf32ce6af531671142d7a9f679e3b0988091f0950e0104->enter($__internal_716eb3fdd6fc533cffbf32ce6af531671142d7a9f679e3b0988091f0950e0104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_356295c8270b1c8a3d7599359b27e6f27420f4b83dad0ca53bea0199d379fd72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_356295c8270b1c8a3d7599359b27e6f27420f4b83dad0ca53bea0199d379fd72->enter($__internal_356295c8270b1c8a3d7599359b27e6f27420f4b83dad0ca53bea0199d379fd72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_356295c8270b1c8a3d7599359b27e6f27420f4b83dad0ca53bea0199d379fd72->leave($__internal_356295c8270b1c8a3d7599359b27e6f27420f4b83dad0ca53bea0199d379fd72_prof);

        
        $__internal_716eb3fdd6fc533cffbf32ce6af531671142d7a9f679e3b0988091f0950e0104->leave($__internal_716eb3fdd6fc533cffbf32ce6af531671142d7a9f679e3b0988091f0950e0104_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0e451f0198d6d04490e6cab672d78e023929943ef38a049463c136c6993db66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e451f0198d6d04490e6cab672d78e023929943ef38a049463c136c6993db66->enter($__internal_d0e451f0198d6d04490e6cab672d78e023929943ef38a049463c136c6993db66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c91a32eb0f2333259109faf27a33ae6ad4186f27034c8719b4cf3cf78b57751 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c91a32eb0f2333259109faf27a33ae6ad4186f27034c8719b4cf3cf78b57751->enter($__internal_1c91a32eb0f2333259109faf27a33ae6ad4186f27034c8719b4cf3cf78b57751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_1c91a32eb0f2333259109faf27a33ae6ad4186f27034c8719b4cf3cf78b57751->leave($__internal_1c91a32eb0f2333259109faf27a33ae6ad4186f27034c8719b4cf3cf78b57751_prof);

        
        $__internal_d0e451f0198d6d04490e6cab672d78e023929943ef38a049463c136c6993db66->leave($__internal_d0e451f0198d6d04490e6cab672d78e023929943ef38a049463c136c6993db66_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_34807489e74de34f16e408aa76827fdf060051126bf1bc3b4fdecaf7d84235ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34807489e74de34f16e408aa76827fdf060051126bf1bc3b4fdecaf7d84235ad->enter($__internal_34807489e74de34f16e408aa76827fdf060051126bf1bc3b4fdecaf7d84235ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b65b611919ccb21bd3f496282705beaf79237419d7b4638beea981bde8b9472e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65b611919ccb21bd3f496282705beaf79237419d7b4638beea981bde8b9472e->enter($__internal_b65b611919ccb21bd3f496282705beaf79237419d7b4638beea981bde8b9472e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_b65b611919ccb21bd3f496282705beaf79237419d7b4638beea981bde8b9472e->leave($__internal_b65b611919ccb21bd3f496282705beaf79237419d7b4638beea981bde8b9472e_prof);

        
        $__internal_34807489e74de34f16e408aa76827fdf060051126bf1bc3b4fdecaf7d84235ad->leave($__internal_34807489e74de34f16e408aa76827fdf060051126bf1bc3b4fdecaf7d84235ad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/charline/bite/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
