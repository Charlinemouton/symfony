<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_d145e8184b539fd2fe0c9eeaa7ac00bc96a4b64fbd80185f555e0badfbb680fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff17b24ed39059137e1fd81de1f05cc4acbe6ef1d7d4a7f2a1d5214f503f5b70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff17b24ed39059137e1fd81de1f05cc4acbe6ef1d7d4a7f2a1d5214f503f5b70->enter($__internal_ff17b24ed39059137e1fd81de1f05cc4acbe6ef1d7d4a7f2a1d5214f503f5b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_0f57ca286013c1198b196b1c88e0ef0ce3c82e81bfd4941881130b9644d995c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f57ca286013c1198b196b1c88e0ef0ce3c82e81bfd4941881130b9644d995c3->enter($__internal_0f57ca286013c1198b196b1c88e0ef0ce3c82e81bfd4941881130b9644d995c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ff17b24ed39059137e1fd81de1f05cc4acbe6ef1d7d4a7f2a1d5214f503f5b70->leave($__internal_ff17b24ed39059137e1fd81de1f05cc4acbe6ef1d7d4a7f2a1d5214f503f5b70_prof);

        
        $__internal_0f57ca286013c1198b196b1c88e0ef0ce3c82e81bfd4941881130b9644d995c3->leave($__internal_0f57ca286013c1198b196b1c88e0ef0ce3c82e81bfd4941881130b9644d995c3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d17622d9697d984cfba2327be34dcb2243ef7ca4971205d9fb5ac07e283c83cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d17622d9697d984cfba2327be34dcb2243ef7ca4971205d9fb5ac07e283c83cb->enter($__internal_d17622d9697d984cfba2327be34dcb2243ef7ca4971205d9fb5ac07e283c83cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a29210982cb11b834846cd9f6fbfaddd525682c3a4e70dd1f1413214762237a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a29210982cb11b834846cd9f6fbfaddd525682c3a4e70dd1f1413214762237a5->enter($__internal_a29210982cb11b834846cd9f6fbfaddd525682c3a4e70dd1f1413214762237a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a29210982cb11b834846cd9f6fbfaddd525682c3a4e70dd1f1413214762237a5->leave($__internal_a29210982cb11b834846cd9f6fbfaddd525682c3a4e70dd1f1413214762237a5_prof);

        
        $__internal_d17622d9697d984cfba2327be34dcb2243ef7ca4971205d9fb5ac07e283c83cb->leave($__internal_d17622d9697d984cfba2327be34dcb2243ef7ca4971205d9fb5ac07e283c83cb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/home/charline/bite/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
