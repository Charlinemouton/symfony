<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_35480e9324c65beddd1565ddb0d82b49cef1601c2df1a12ce25faf785862d7ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6769b2431b30cb5a3c18161bb294ee889757bdba39560d8515cfbe4effe977bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6769b2431b30cb5a3c18161bb294ee889757bdba39560d8515cfbe4effe977bd->enter($__internal_6769b2431b30cb5a3c18161bb294ee889757bdba39560d8515cfbe4effe977bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_e9cecab71d58c4d49263fd5045f5658b47d55c9e259f05e4255a9b088c1a87f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9cecab71d58c4d49263fd5045f5658b47d55c9e259f05e4255a9b088c1a87f3->enter($__internal_e9cecab71d58c4d49263fd5045f5658b47d55c9e259f05e4255a9b088c1a87f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6769b2431b30cb5a3c18161bb294ee889757bdba39560d8515cfbe4effe977bd->leave($__internal_6769b2431b30cb5a3c18161bb294ee889757bdba39560d8515cfbe4effe977bd_prof);

        
        $__internal_e9cecab71d58c4d49263fd5045f5658b47d55c9e259f05e4255a9b088c1a87f3->leave($__internal_e9cecab71d58c4d49263fd5045f5658b47d55c9e259f05e4255a9b088c1a87f3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_da6f9e77cbbd0b6310115c8039ee5b65f29b1e1f8b9be5da8e40f2b92dc67879 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da6f9e77cbbd0b6310115c8039ee5b65f29b1e1f8b9be5da8e40f2b92dc67879->enter($__internal_da6f9e77cbbd0b6310115c8039ee5b65f29b1e1f8b9be5da8e40f2b92dc67879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_23a96998d8c75bb6c328419173cb607504e4a897607f69f2115c0ff06a920d7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a96998d8c75bb6c328419173cb607504e4a897607f69f2115c0ff06a920d7d->enter($__internal_23a96998d8c75bb6c328419173cb607504e4a897607f69f2115c0ff06a920d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_23a96998d8c75bb6c328419173cb607504e4a897607f69f2115c0ff06a920d7d->leave($__internal_23a96998d8c75bb6c328419173cb607504e4a897607f69f2115c0ff06a920d7d_prof);

        
        $__internal_da6f9e77cbbd0b6310115c8039ee5b65f29b1e1f8b9be5da8e40f2b92dc67879->leave($__internal_da6f9e77cbbd0b6310115c8039ee5b65f29b1e1f8b9be5da8e40f2b92dc67879_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_893473bf482ac6b6bf644496090786e0eb0e886b4bb0cde53cedb8d642deda3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_893473bf482ac6b6bf644496090786e0eb0e886b4bb0cde53cedb8d642deda3f->enter($__internal_893473bf482ac6b6bf644496090786e0eb0e886b4bb0cde53cedb8d642deda3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a8ab72911478d923536f6c7ab07de599c6e6757b5b8e266154c50ef4e917cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a8ab72911478d923536f6c7ab07de599c6e6757b5b8e266154c50ef4e917cf0->enter($__internal_4a8ab72911478d923536f6c7ab07de599c6e6757b5b8e266154c50ef4e917cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_4a8ab72911478d923536f6c7ab07de599c6e6757b5b8e266154c50ef4e917cf0->leave($__internal_4a8ab72911478d923536f6c7ab07de599c6e6757b5b8e266154c50ef4e917cf0_prof);

        
        $__internal_893473bf482ac6b6bf644496090786e0eb0e886b4bb0cde53cedb8d642deda3f->leave($__internal_893473bf482ac6b6bf644496090786e0eb0e886b4bb0cde53cedb8d642deda3f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/charline/bite/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/open.html.twig");
    }
}
