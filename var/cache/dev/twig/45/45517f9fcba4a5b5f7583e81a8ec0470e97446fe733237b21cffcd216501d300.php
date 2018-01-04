<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_2aaf6dcbda1f293a7e2360507223edef08573ac4783636ed42662659e4cb492e extends Twig_Template
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
        $__internal_6f30a6b53c6e4d657c1fa76020bf369eef73b477d163d26b8225f693e5156008 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f30a6b53c6e4d657c1fa76020bf369eef73b477d163d26b8225f693e5156008->enter($__internal_6f30a6b53c6e4d657c1fa76020bf369eef73b477d163d26b8225f693e5156008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d3559e14d28ad0f765a4b18a504ac386821ef791f4b05763b9f4b8ab2063fe40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3559e14d28ad0f765a4b18a504ac386821ef791f4b05763b9f4b8ab2063fe40->enter($__internal_d3559e14d28ad0f765a4b18a504ac386821ef791f4b05763b9f4b8ab2063fe40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_6f30a6b53c6e4d657c1fa76020bf369eef73b477d163d26b8225f693e5156008->leave($__internal_6f30a6b53c6e4d657c1fa76020bf369eef73b477d163d26b8225f693e5156008_prof);

        
        $__internal_d3559e14d28ad0f765a4b18a504ac386821ef791f4b05763b9f4b8ab2063fe40->leave($__internal_d3559e14d28ad0f765a4b18a504ac386821ef791f4b05763b9f4b8ab2063fe40_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2efaeb82729c23f537567809753e77a4802ed2f0b45588ddf448eddf5919d72c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2efaeb82729c23f537567809753e77a4802ed2f0b45588ddf448eddf5919d72c->enter($__internal_2efaeb82729c23f537567809753e77a4802ed2f0b45588ddf448eddf5919d72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d3256291988573ac089863888e56490fd5998ab3493b0953f3398fd7c2ceda90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3256291988573ac089863888e56490fd5998ab3493b0953f3398fd7c2ceda90->enter($__internal_d3256291988573ac089863888e56490fd5998ab3493b0953f3398fd7c2ceda90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d3256291988573ac089863888e56490fd5998ab3493b0953f3398fd7c2ceda90->leave($__internal_d3256291988573ac089863888e56490fd5998ab3493b0953f3398fd7c2ceda90_prof);

        
        $__internal_2efaeb82729c23f537567809753e77a4802ed2f0b45588ddf448eddf5919d72c->leave($__internal_2efaeb82729c23f537567809753e77a4802ed2f0b45588ddf448eddf5919d72c_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_41765aa6695e3fa343b0e80c8441e514eb5d28936bf167453f409b482a4315e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41765aa6695e3fa343b0e80c8441e514eb5d28936bf167453f409b482a4315e2->enter($__internal_41765aa6695e3fa343b0e80c8441e514eb5d28936bf167453f409b482a4315e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8fb81110d3b333a44d53c87cb8712b1344d7eb59d26fead693407d9e4c1c19be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb81110d3b333a44d53c87cb8712b1344d7eb59d26fead693407d9e4c1c19be->enter($__internal_8fb81110d3b333a44d53c87cb8712b1344d7eb59d26fead693407d9e4c1c19be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8fb81110d3b333a44d53c87cb8712b1344d7eb59d26fead693407d9e4c1c19be->leave($__internal_8fb81110d3b333a44d53c87cb8712b1344d7eb59d26fead693407d9e4c1c19be_prof);

        
        $__internal_41765aa6695e3fa343b0e80c8441e514eb5d28936bf167453f409b482a4315e2->leave($__internal_41765aa6695e3fa343b0e80c8441e514eb5d28936bf167453f409b482a4315e2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f3a7ebc80111dfbe1a14a723638a2070c4100d611e7ad67f033f703936bc093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f3a7ebc80111dfbe1a14a723638a2070c4100d611e7ad67f033f703936bc093->enter($__internal_1f3a7ebc80111dfbe1a14a723638a2070c4100d611e7ad67f033f703936bc093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04457881b203960bcbe3cec72e209b6d89d288e782ba05d77d92d5bf744cf742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04457881b203960bcbe3cec72e209b6d89d288e782ba05d77d92d5bf744cf742->enter($__internal_04457881b203960bcbe3cec72e209b6d89d288e782ba05d77d92d5bf744cf742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_04457881b203960bcbe3cec72e209b6d89d288e782ba05d77d92d5bf744cf742->leave($__internal_04457881b203960bcbe3cec72e209b6d89d288e782ba05d77d92d5bf744cf742_prof);

        
        $__internal_1f3a7ebc80111dfbe1a14a723638a2070c4100d611e7ad67f033f703936bc093->leave($__internal_1f3a7ebc80111dfbe1a14a723638a2070c4100d611e7ad67f033f703936bc093_prof);

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
