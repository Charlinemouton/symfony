<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_a874d3bfad26ee4ad522087e3d221f2d0cbd5b4a291a2ca1ab507779d8d1f003 extends Twig_Template
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
        $__internal_573f8990d01f6e93ab2e6454e33a827049259710ba0f4bf30cd910d37dd3db1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_573f8990d01f6e93ab2e6454e33a827049259710ba0f4bf30cd910d37dd3db1f->enter($__internal_573f8990d01f6e93ab2e6454e33a827049259710ba0f4bf30cd910d37dd3db1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_e453d776ab3e77ddfc33557ad9e047797128bda43a3597c7927d08c23c806e07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e453d776ab3e77ddfc33557ad9e047797128bda43a3597c7927d08c23c806e07->enter($__internal_e453d776ab3e77ddfc33557ad9e047797128bda43a3597c7927d08c23c806e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_573f8990d01f6e93ab2e6454e33a827049259710ba0f4bf30cd910d37dd3db1f->leave($__internal_573f8990d01f6e93ab2e6454e33a827049259710ba0f4bf30cd910d37dd3db1f_prof);

        
        $__internal_e453d776ab3e77ddfc33557ad9e047797128bda43a3597c7927d08c23c806e07->leave($__internal_e453d776ab3e77ddfc33557ad9e047797128bda43a3597c7927d08c23c806e07_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "/home/charline/bite/vendor/symfony/web-profiler-bundle/Resources/views/Collector/exception.css.twig");
    }
}
