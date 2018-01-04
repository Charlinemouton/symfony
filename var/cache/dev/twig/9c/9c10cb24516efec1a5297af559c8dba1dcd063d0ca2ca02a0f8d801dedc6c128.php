<?php

/* @Twig/Exception/exception.txt.twig */
class __TwigTemplate_3494a6b9081aa5882d41100a423f021c43bb4b2f38e09ee76f1764aa7f6f231a extends Twig_Template
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
        $__internal_c47add6c6cacfbfc97751e53f83cc3dbcbfd1c7a78bd59e7883cf06699073af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c47add6c6cacfbfc97751e53f83cc3dbcbfd1c7a78bd59e7883cf06699073af5->enter($__internal_c47add6c6cacfbfc97751e53f83cc3dbcbfd1c7a78bd59e7883cf06699073af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.txt.twig"));

        $__internal_abe1217a6f3e9c4d3d5e84c53617d65f4033042664263ffb24e398046c82fefb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe1217a6f3e9c4d3d5e84c53617d65f4033042664263ffb24e398046c82fefb->enter($__internal_abe1217a6f3e9c4d3d5e84c53617d65f4033042664263ffb24e398046c82fefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.txt.twig"));

        // line 1
        echo "[exception] ";
        echo (((((isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()) . " | ") . (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })())) . " | ") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "class", array()));
        echo "
[message] ";
        // line 2
        echo twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "message", array());
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 3, $this->getSourceContext()); })()), "toarray", array()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo ($context["i"] + 1);
            echo "] ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "class", array());
            echo ": ";
            echo twig_get_attribute($this->env, $this->getSourceContext(), $context["e"], "message", array());
            echo "
";
            // line 5
            echo twig_include($this->env, $context, "@Twig/Exception/traces.txt.twig", array("exception" => $context["e"]), false);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c47add6c6cacfbfc97751e53f83cc3dbcbfd1c7a78bd59e7883cf06699073af5->leave($__internal_c47add6c6cacfbfc97751e53f83cc3dbcbfd1c7a78bd59e7883cf06699073af5_prof);

        
        $__internal_abe1217a6f3e9c4d3d5e84c53617d65f4033042664263ffb24e398046c82fefb->leave($__internal_abe1217a6f3e9c4d3d5e84c53617d65f4033042664263ffb24e398046c82fefb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  38 => 4,  34 => 3,  30 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("[exception] {{ status_code ~ ' | ' ~ status_text ~ ' | ' ~ exception.class }}
[message] {{ exception.message }}
{% for i, e in exception.toarray %}
[{{ i + 1 }}] {{ e.class }}: {{ e.message }}
{{ include('@Twig/Exception/traces.txt.twig', { exception: e }, with_context = false) }}

{% endfor %}
", "@Twig/Exception/exception.txt.twig", "/home/charline/bite/vendor/symfony/twig-bundle/Resources/views/Exception/exception.txt.twig");
    }
}
