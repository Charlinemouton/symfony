<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_f1e74db4c242b04a12bccee287b8166ccca39ac7618ea6b01d1fa75820d16e34 extends Twig_Template
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
        $__internal_891b0bb22dfa12ae12ac25eda319d31d1b02a912fefa135f3894ca8dac662e3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_891b0bb22dfa12ae12ac25eda319d31d1b02a912fefa135f3894ca8dac662e3c->enter($__internal_891b0bb22dfa12ae12ac25eda319d31d1b02a912fefa135f3894ca8dac662e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $__internal_02f001295024ba546cd8c70659acb0ad1454669ea137a9f0ee826a185bf4d27a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02f001295024ba546cd8c70659acb0ad1454669ea137a9f0ee826a185bf4d27a->enter($__internal_02f001295024ba546cd8c70659acb0ad1454669ea137a9f0ee826a185bf4d27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
        
        $__internal_891b0bb22dfa12ae12ac25eda319d31d1b02a912fefa135f3894ca8dac662e3c->leave($__internal_891b0bb22dfa12ae12ac25eda319d31d1b02a912fefa135f3894ca8dac662e3c_prof);

        
        $__internal_02f001295024ba546cd8c70659acb0ad1454669ea137a9f0ee826a185bf4d27a->leave($__internal_02f001295024ba546cd8c70659acb0ad1454669ea137a9f0ee826a185bf4d27a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  34 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <title>An Error Occurred: {{ status_text }}</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"{{ status_code }} {{ status_text }}\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
", "@Twig/Exception/error.html.twig", "/home/charline/bite/vendor/symfony/twig-bundle/Resources/views/Exception/error.html.twig");
    }
}
