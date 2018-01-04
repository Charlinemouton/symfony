<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_317718c878488f33ead52a8b1829119e9608d6030d64eabeb7f79c1390422c91 extends Twig_Template
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
        $__internal_a0c187cec2dbdcbcade30454a52bd2fff690cb9ea4094b84408f71e82058d1f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0c187cec2dbdcbcade30454a52bd2fff690cb9ea4094b84408f71e82058d1f3->enter($__internal_a0c187cec2dbdcbcade30454a52bd2fff690cb9ea4094b84408f71e82058d1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_c08d88c18187838d2a6373c7d22b177ececa5a46a6801f4f73e7404989677cfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c08d88c18187838d2a6373c7d22b177ececa5a46a6801f4f73e7404989677cfc->enter($__internal_c08d88c18187838d2a6373c7d22b177ececa5a46a6801f4f73e7404989677cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a0c187cec2dbdcbcade30454a52bd2fff690cb9ea4094b84408f71e82058d1f3->leave($__internal_a0c187cec2dbdcbcade30454a52bd2fff690cb9ea4094b84408f71e82058d1f3_prof);

        
        $__internal_c08d88c18187838d2a6373c7d22b177ececa5a46a6801f4f73e7404989677cfc->leave($__internal_c08d88c18187838d2a6373c7d22b177ececa5a46a6801f4f73e7404989677cfc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "/home/charline/bite/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
