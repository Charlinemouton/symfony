<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_dc95b711fa57cc45f0e5fb6bf2f790060ad73818c082f7094b894da3b9ca79c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8772a4393b794b2d3065bdcaee31a4b2af13f0a9396f135713de704aa6b0ab3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8772a4393b794b2d3065bdcaee31a4b2af13f0a9396f135713de704aa6b0ab3f->enter($__internal_8772a4393b794b2d3065bdcaee31a4b2af13f0a9396f135713de704aa6b0ab3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_cd156e4e8f078ac04cfeb1ba3e56c10b522ce3799e4692722c69171c5ab17c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd156e4e8f078ac04cfeb1ba3e56c10b522ce3799e4692722c69171c5ab17c94->enter($__internal_cd156e4e8f078ac04cfeb1ba3e56c10b522ce3799e4692722c69171c5ab17c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8772a4393b794b2d3065bdcaee31a4b2af13f0a9396f135713de704aa6b0ab3f->leave($__internal_8772a4393b794b2d3065bdcaee31a4b2af13f0a9396f135713de704aa6b0ab3f_prof);

        
        $__internal_cd156e4e8f078ac04cfeb1ba3e56c10b522ce3799e4692722c69171c5ab17c94->leave($__internal_cd156e4e8f078ac04cfeb1ba3e56c10b522ce3799e4692722c69171c5ab17c94_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "/home/charline/bite/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
