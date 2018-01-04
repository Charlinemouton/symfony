<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_4fc9bbaef0884eca50ac1da6e204daaff32e4a9f07a250471b530f6c4029b035 extends Twig_Template
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
        $__internal_72a909baf908699baefda0faef1ad12a9e5395e035d4f683a1b3bcd4753accea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72a909baf908699baefda0faef1ad12a9e5395e035d4f683a1b3bcd4753accea->enter($__internal_72a909baf908699baefda0faef1ad12a9e5395e035d4f683a1b3bcd4753accea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_4f2da55ea2dc3084e65bee974a93aa2cc4a9f8b08035194b1a5e2e9af19b05af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f2da55ea2dc3084e65bee974a93aa2cc4a9f8b08035194b1a5e2e9af19b05af->enter($__internal_4f2da55ea2dc3084e65bee974a93aa2cc4a9f8b08035194b1a5e2e9af19b05af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_72a909baf908699baefda0faef1ad12a9e5395e035d4f683a1b3bcd4753accea->leave($__internal_72a909baf908699baefda0faef1ad12a9e5395e035d4f683a1b3bcd4753accea_prof);

        
        $__internal_4f2da55ea2dc3084e65bee974a93aa2cc4a9f8b08035194b1a5e2e9af19b05af->leave($__internal_4f2da55ea2dc3084e65bee974a93aa2cc4a9f8b08035194b1a5e2e9af19b05af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/home/charline/bite/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}
