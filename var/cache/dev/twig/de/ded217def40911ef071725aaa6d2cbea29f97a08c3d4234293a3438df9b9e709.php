<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_92fd4f7a04447941a5773809c09ef78a54a545d9e22fe958f1507f50cd3d344b extends Twig_Template
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
        $__internal_762f678fc1c9ba60ce414d34416fb1fc03fc701ba2cd676116e7ce3aa4f8193d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_762f678fc1c9ba60ce414d34416fb1fc03fc701ba2cd676116e7ce3aa4f8193d->enter($__internal_762f678fc1c9ba60ce414d34416fb1fc03fc701ba2cd676116e7ce3aa4f8193d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_d19315a38895e241a59e5edaba534e9c4e7e672e808f823838cd21c2138a7542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d19315a38895e241a59e5edaba534e9c4e7e672e808f823838cd21c2138a7542->enter($__internal_d19315a38895e241a59e5edaba534e9c4e7e672e808f823838cd21c2138a7542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_762f678fc1c9ba60ce414d34416fb1fc03fc701ba2cd676116e7ce3aa4f8193d->leave($__internal_762f678fc1c9ba60ce414d34416fb1fc03fc701ba2cd676116e7ce3aa4f8193d_prof);

        
        $__internal_d19315a38895e241a59e5edaba534e9c4e7e672e808f823838cd21c2138a7542->leave($__internal_d19315a38895e241a59e5edaba534e9c4e7e672e808f823838cd21c2138a7542_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.css.twig", "/home/charline/bite/vendor/symfony/twig-bundle/Resources/views/Exception/error.css.twig");
    }
}
