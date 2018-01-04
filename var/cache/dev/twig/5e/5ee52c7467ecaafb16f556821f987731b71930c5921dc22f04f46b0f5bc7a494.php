<?php

/* base.html.twig */
class __TwigTemplate_7cf4efc1df6530f7ce86754d2e1760cdce4244d6d88038ecc207636f3d0ca3c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a39db90553303b527f14af66b2ffe1158124924fb963e96323a8cfcd2afe6d7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39db90553303b527f14af66b2ffe1158124924fb963e96323a8cfcd2afe6d7d->enter($__internal_a39db90553303b527f14af66b2ffe1158124924fb963e96323a8cfcd2afe6d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_953bb734253b6bb78b6ce879e6da3eb99f9eb10ecea8c48069267767ce8c1ea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_953bb734253b6bb78b6ce879e6da3eb99f9eb10ecea8c48069267767ce8c1ea3->enter($__internal_953bb734253b6bb78b6ce879e6da3eb99f9eb10ecea8c48069267767ce8c1ea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    </head>
    <body>
        ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_a39db90553303b527f14af66b2ffe1158124924fb963e96323a8cfcd2afe6d7d->leave($__internal_a39db90553303b527f14af66b2ffe1158124924fb963e96323a8cfcd2afe6d7d_prof);

        
        $__internal_953bb734253b6bb78b6ce879e6da3eb99f9eb10ecea8c48069267767ce8c1ea3->leave($__internal_953bb734253b6bb78b6ce879e6da3eb99f9eb10ecea8c48069267767ce8c1ea3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_414a1afd5b4576c6d909aa0eec3897823febedc8cf80b4f697895fff1741fee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414a1afd5b4576c6d909aa0eec3897823febedc8cf80b4f697895fff1741fee3->enter($__internal_414a1afd5b4576c6d909aa0eec3897823febedc8cf80b4f697895fff1741fee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_553de16b4e7c1faa47d9198f78a030be0efe3e4b1220e05cde649d8c48f475d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553de16b4e7c1faa47d9198f78a030be0efe3e4b1220e05cde649d8c48f475d2->enter($__internal_553de16b4e7c1faa47d9198f78a030be0efe3e4b1220e05cde649d8c48f475d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_553de16b4e7c1faa47d9198f78a030be0efe3e4b1220e05cde649d8c48f475d2->leave($__internal_553de16b4e7c1faa47d9198f78a030be0efe3e4b1220e05cde649d8c48f475d2_prof);

        
        $__internal_414a1afd5b4576c6d909aa0eec3897823febedc8cf80b4f697895fff1741fee3->leave($__internal_414a1afd5b4576c6d909aa0eec3897823febedc8cf80b4f697895fff1741fee3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0f04f8466907550e38ea4fb66854d09ef5a2f1a3e77b104492d2579ddc0cb03d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f04f8466907550e38ea4fb66854d09ef5a2f1a3e77b104492d2579ddc0cb03d->enter($__internal_0f04f8466907550e38ea4fb66854d09ef5a2f1a3e77b104492d2579ddc0cb03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_8fac7744cd99be62a71eed6e7c483cc7be54b596d8ff48848e883019951a42be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fac7744cd99be62a71eed6e7c483cc7be54b596d8ff48848e883019951a42be->enter($__internal_8fac7744cd99be62a71eed6e7c483cc7be54b596d8ff48848e883019951a42be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_8fac7744cd99be62a71eed6e7c483cc7be54b596d8ff48848e883019951a42be->leave($__internal_8fac7744cd99be62a71eed6e7c483cc7be54b596d8ff48848e883019951a42be_prof);

        
        $__internal_0f04f8466907550e38ea4fb66854d09ef5a2f1a3e77b104492d2579ddc0cb03d->leave($__internal_0f04f8466907550e38ea4fb66854d09ef5a2f1a3e77b104492d2579ddc0cb03d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa744d636eb5859889458e1f66ddc235584ab5c49f021c6143e747eea0d3c4ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa744d636eb5859889458e1f66ddc235584ab5c49f021c6143e747eea0d3c4ff->enter($__internal_aa744d636eb5859889458e1f66ddc235584ab5c49f021c6143e747eea0d3c4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e17436bd2c574855e32f454ea4978c05b23c624a0fb02c3199f27453d30789ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17436bd2c574855e32f454ea4978c05b23c624a0fb02c3199f27453d30789ae->enter($__internal_e17436bd2c574855e32f454ea4978c05b23c624a0fb02c3199f27453d30789ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e17436bd2c574855e32f454ea4978c05b23c624a0fb02c3199f27453d30789ae->leave($__internal_e17436bd2c574855e32f454ea4978c05b23c624a0fb02c3199f27453d30789ae_prof);

        
        $__internal_aa744d636eb5859889458e1f66ddc235584ab5c49f021c6143e747eea0d3c4ff->leave($__internal_aa744d636eb5859889458e1f66ddc235584ab5c49f021c6143e747eea0d3c4ff_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_94a77d5c1aa612a0590b3a74fdfb04706ae534bbb0424afb5b77ac9f15e8b71c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94a77d5c1aa612a0590b3a74fdfb04706ae534bbb0424afb5b77ac9f15e8b71c->enter($__internal_94a77d5c1aa612a0590b3a74fdfb04706ae534bbb0424afb5b77ac9f15e8b71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bcc87eab4fe423aa338b56c7f4fb3c1b65964150b086fbefd6bd60c9e30ff8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcc87eab4fe423aa338b56c7f4fb3c1b65964150b086fbefd6bd60c9e30ff8a9->enter($__internal_bcc87eab4fe423aa338b56c7f4fb3c1b65964150b086fbefd6bd60c9e30ff8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bcc87eab4fe423aa338b56c7f4fb3c1b65964150b086fbefd6bd60c9e30ff8a9->leave($__internal_bcc87eab4fe423aa338b56c7f4fb3c1b65964150b086fbefd6bd60c9e30ff8a9_prof);

        
        $__internal_94a77d5c1aa612a0590b3a74fdfb04706ae534bbb0424afb5b77ac9f15e8b71c->leave($__internal_94a77d5c1aa612a0590b3a74fdfb04706ae534bbb0424afb5b77ac9f15e8b71c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  114 => 10,  97 => 9,  80 => 6,  62 => 5,  50 => 11,  47 => 10,  45 => 9,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/charline/bite/templates/base.html.twig");
    }
}
