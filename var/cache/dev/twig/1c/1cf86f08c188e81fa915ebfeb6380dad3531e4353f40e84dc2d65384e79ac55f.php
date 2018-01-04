<?php

/* base.html.twig */
class __TwigTemplate_2df5a7c430f84dda53778985c9332572fe714f7b0c14b6eb6b1c9cde22b333d8 extends Twig_Template
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
        $__internal_bc5f03cb0793d2b2f7bb12073de521db1d8f7a5c86a54c607fb33fab17446b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5f03cb0793d2b2f7bb12073de521db1d8f7a5c86a54c607fb33fab17446b9a->enter($__internal_bc5f03cb0793d2b2f7bb12073de521db1d8f7a5c86a54c607fb33fab17446b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2b4bb1143b225ddc5ae51eb57d27499f7b3ae1a39ad5c54323415cc117cad759 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b4bb1143b225ddc5ae51eb57d27499f7b3ae1a39ad5c54323415cc117cad759->enter($__internal_2b4bb1143b225ddc5ae51eb57d27499f7b3ae1a39ad5c54323415cc117cad759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_bc5f03cb0793d2b2f7bb12073de521db1d8f7a5c86a54c607fb33fab17446b9a->leave($__internal_bc5f03cb0793d2b2f7bb12073de521db1d8f7a5c86a54c607fb33fab17446b9a_prof);

        
        $__internal_2b4bb1143b225ddc5ae51eb57d27499f7b3ae1a39ad5c54323415cc117cad759->leave($__internal_2b4bb1143b225ddc5ae51eb57d27499f7b3ae1a39ad5c54323415cc117cad759_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff2ac81c8df4c0c97e941b121a598652476b9dc6ded333b29ec8333656f496dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff2ac81c8df4c0c97e941b121a598652476b9dc6ded333b29ec8333656f496dd->enter($__internal_ff2ac81c8df4c0c97e941b121a598652476b9dc6ded333b29ec8333656f496dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_939a9a37040204054ac508d81dcb67211d3c1c6ce5a71ccd0b6e9041d595aed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_939a9a37040204054ac508d81dcb67211d3c1c6ce5a71ccd0b6e9041d595aed6->enter($__internal_939a9a37040204054ac508d81dcb67211d3c1c6ce5a71ccd0b6e9041d595aed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_939a9a37040204054ac508d81dcb67211d3c1c6ce5a71ccd0b6e9041d595aed6->leave($__internal_939a9a37040204054ac508d81dcb67211d3c1c6ce5a71ccd0b6e9041d595aed6_prof);

        
        $__internal_ff2ac81c8df4c0c97e941b121a598652476b9dc6ded333b29ec8333656f496dd->leave($__internal_ff2ac81c8df4c0c97e941b121a598652476b9dc6ded333b29ec8333656f496dd_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da11ea46e836ed4bb9cffeeeed9e12c42b28fcd87e64cc62d97e808e2382c38f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da11ea46e836ed4bb9cffeeeed9e12c42b28fcd87e64cc62d97e808e2382c38f->enter($__internal_da11ea46e836ed4bb9cffeeeed9e12c42b28fcd87e64cc62d97e808e2382c38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1af862c00210cea54eaf7ced9112420074b41719e7dee229f84a2db1eaeb74e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af862c00210cea54eaf7ced9112420074b41719e7dee229f84a2db1eaeb74e1->enter($__internal_1af862c00210cea54eaf7ced9112420074b41719e7dee229f84a2db1eaeb74e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1af862c00210cea54eaf7ced9112420074b41719e7dee229f84a2db1eaeb74e1->leave($__internal_1af862c00210cea54eaf7ced9112420074b41719e7dee229f84a2db1eaeb74e1_prof);

        
        $__internal_da11ea46e836ed4bb9cffeeeed9e12c42b28fcd87e64cc62d97e808e2382c38f->leave($__internal_da11ea46e836ed4bb9cffeeeed9e12c42b28fcd87e64cc62d97e808e2382c38f_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ea7895db7af03eb50ea5a5ac3fa89e02bdd0d2406ae320c8192ff17e5b3a13b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ea7895db7af03eb50ea5a5ac3fa89e02bdd0d2406ae320c8192ff17e5b3a13b->enter($__internal_2ea7895db7af03eb50ea5a5ac3fa89e02bdd0d2406ae320c8192ff17e5b3a13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_642b63a8b42fe51d97f5fcb4d696f1405051d5237dcac22ac34130826e67d50e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_642b63a8b42fe51d97f5fcb4d696f1405051d5237dcac22ac34130826e67d50e->enter($__internal_642b63a8b42fe51d97f5fcb4d696f1405051d5237dcac22ac34130826e67d50e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_642b63a8b42fe51d97f5fcb4d696f1405051d5237dcac22ac34130826e67d50e->leave($__internal_642b63a8b42fe51d97f5fcb4d696f1405051d5237dcac22ac34130826e67d50e_prof);

        
        $__internal_2ea7895db7af03eb50ea5a5ac3fa89e02bdd0d2406ae320c8192ff17e5b3a13b->leave($__internal_2ea7895db7af03eb50ea5a5ac3fa89e02bdd0d2406ae320c8192ff17e5b3a13b_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6d470f82ab10c993b9872d5050fd9936dbb742ce26d91017c27530902d4798f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d470f82ab10c993b9872d5050fd9936dbb742ce26d91017c27530902d4798f1->enter($__internal_6d470f82ab10c993b9872d5050fd9936dbb742ce26d91017c27530902d4798f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_699d29b066c097654ab6cfafefa9404620ebdfcebce76b106d4221c64c6472aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_699d29b066c097654ab6cfafefa9404620ebdfcebce76b106d4221c64c6472aa->enter($__internal_699d29b066c097654ab6cfafefa9404620ebdfcebce76b106d4221c64c6472aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_699d29b066c097654ab6cfafefa9404620ebdfcebce76b106d4221c64c6472aa->leave($__internal_699d29b066c097654ab6cfafefa9404620ebdfcebce76b106d4221c64c6472aa_prof);

        
        $__internal_6d470f82ab10c993b9872d5050fd9936dbb742ce26d91017c27530902d4798f1->leave($__internal_6d470f82ab10c993b9872d5050fd9936dbb742ce26d91017c27530902d4798f1_prof);

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
