<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_3c03c5e0ad45f625cf7ceb4319b4964c4848246a23f10b339e7774c4f32c0bf8 extends Twig_Template
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
        $__internal_9521f1bc6fb0c8dc60aa3f0db39baa78456569c19cf609452f24bec5fc2b1748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9521f1bc6fb0c8dc60aa3f0db39baa78456569c19cf609452f24bec5fc2b1748->enter($__internal_9521f1bc6fb0c8dc60aa3f0db39baa78456569c19cf609452f24bec5fc2b1748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_882cc9deed431d0688365ebfa61058305967ebba04a02cbd382d144db966c565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_882cc9deed431d0688365ebfa61058305967ebba04a02cbd382d144db966c565->enter($__internal_882cc9deed431d0688365ebfa61058305967ebba04a02cbd382d144db966c565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_9521f1bc6fb0c8dc60aa3f0db39baa78456569c19cf609452f24bec5fc2b1748->leave($__internal_9521f1bc6fb0c8dc60aa3f0db39baa78456569c19cf609452f24bec5fc2b1748_prof);

        
        $__internal_882cc9deed431d0688365ebfa61058305967ebba04a02cbd382d144db966c565->leave($__internal_882cc9deed431d0688365ebfa61058305967ebba04a02cbd382d144db966c565_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/charline/bite/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}
