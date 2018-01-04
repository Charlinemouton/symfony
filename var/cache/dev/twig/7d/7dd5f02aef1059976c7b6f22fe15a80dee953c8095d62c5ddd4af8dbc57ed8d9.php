<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_2a010404b98e49e82e681463f67a437952bf082f0fa8701ed0e88a1fd5cdb98f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd9452abe5169c6f37b3ae63a53d5777e113b1ccbe862878640da6abc2412516 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd9452abe5169c6f37b3ae63a53d5777e113b1ccbe862878640da6abc2412516->enter($__internal_dd9452abe5169c6f37b3ae63a53d5777e113b1ccbe862878640da6abc2412516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_1a6c5ccd7598344ec5eb72c00102ac8c4195994b77f8c55fc4803c29b881952b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6c5ccd7598344ec5eb72c00102ac8c4195994b77f8c55fc4803c29b881952b->enter($__internal_1a6c5ccd7598344ec5eb72c00102ac8c4195994b77f8c55fc4803c29b881952b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_dd9452abe5169c6f37b3ae63a53d5777e113b1ccbe862878640da6abc2412516->leave($__internal_dd9452abe5169c6f37b3ae63a53d5777e113b1ccbe862878640da6abc2412516_prof);

        
        $__internal_1a6c5ccd7598344ec5eb72c00102ac8c4195994b77f8c55fc4803c29b881952b->leave($__internal_1a6c5ccd7598344ec5eb72c00102ac8c4195994b77f8c55fc4803c29b881952b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a042dd2c728431782840dc1b05bbc8df0a55dfd79a15e277ac1279008c8aee39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a042dd2c728431782840dc1b05bbc8df0a55dfd79a15e277ac1279008c8aee39->enter($__internal_a042dd2c728431782840dc1b05bbc8df0a55dfd79a15e277ac1279008c8aee39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_41deb1a7b302f269760c84422ed2618d46024b404888fab1bf4be1075be965c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41deb1a7b302f269760c84422ed2618d46024b404888fab1bf4be1075be965c2->enter($__internal_41deb1a7b302f269760c84422ed2618d46024b404888fab1bf4be1075be965c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_41deb1a7b302f269760c84422ed2618d46024b404888fab1bf4be1075be965c2->leave($__internal_41deb1a7b302f269760c84422ed2618d46024b404888fab1bf4be1075be965c2_prof);

        
        $__internal_a042dd2c728431782840dc1b05bbc8df0a55dfd79a15e277ac1279008c8aee39->leave($__internal_a042dd2c728431782840dc1b05bbc8df0a55dfd79a15e277ac1279008c8aee39_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_0e17b98699df2675178038dc72c558ab39e959377c3b9629c64d64254edf0ffe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e17b98699df2675178038dc72c558ab39e959377c3b9629c64d64254edf0ffe->enter($__internal_0e17b98699df2675178038dc72c558ab39e959377c3b9629c64d64254edf0ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5b5095381883245d7a9f73f16ae248ce6caf2acdc1556d86b351c01ad71186a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5095381883245d7a9f73f16ae248ce6caf2acdc1556d86b351c01ad71186a1->enter($__internal_5b5095381883245d7a9f73f16ae248ce6caf2acdc1556d86b351c01ad71186a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_5b5095381883245d7a9f73f16ae248ce6caf2acdc1556d86b351c01ad71186a1->leave($__internal_5b5095381883245d7a9f73f16ae248ce6caf2acdc1556d86b351c01ad71186a1_prof);

        
        $__internal_0e17b98699df2675178038dc72c558ab39e959377c3b9629c64d64254edf0ffe->leave($__internal_0e17b98699df2675178038dc72c558ab39e959377c3b9629c64d64254edf0ffe_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0665af8bfe94d42b86460f951740385e5c4b57c4d2be1e11bfbd9d76d0cc0221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0665af8bfe94d42b86460f951740385e5c4b57c4d2be1e11bfbd9d76d0cc0221->enter($__internal_0665af8bfe94d42b86460f951740385e5c4b57c4d2be1e11bfbd9d76d0cc0221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a97ef7e342bd67f8223c6885c69686245f3edec803179902768591fd54854d1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97ef7e342bd67f8223c6885c69686245f3edec803179902768591fd54854d1d->enter($__internal_a97ef7e342bd67f8223c6885c69686245f3edec803179902768591fd54854d1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a97ef7e342bd67f8223c6885c69686245f3edec803179902768591fd54854d1d->leave($__internal_a97ef7e342bd67f8223c6885c69686245f3edec803179902768591fd54854d1d_prof);

        
        $__internal_0665af8bfe94d42b86460f951740385e5c4b57c4d2be1e11bfbd9d76d0cc0221->leave($__internal_0665af8bfe94d42b86460f951740385e5c4b57c4d2be1e11bfbd9d76d0cc0221_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/charline/bite/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
