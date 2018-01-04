<?php

/* default/index.html.twig */
class __TwigTemplate_44b0fd354846b15ab75674b5f6654bc08862725490e812a7e785f842a86e58ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8498aba53c19d01b9ef14dc55aae12a8a27d55401d16a9a778fae7ee89edc1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8498aba53c19d01b9ef14dc55aae12a8a27d55401d16a9a778fae7ee89edc1a->enter($__internal_f8498aba53c19d01b9ef14dc55aae12a8a27d55401d16a9a778fae7ee89edc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_31b9848b0192bc4fb6b7ee9606d80796e69be6c4d928cfd9cb708e647598cee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31b9848b0192bc4fb6b7ee9606d80796e69be6c4d928cfd9cb708e647598cee1->enter($__internal_31b9848b0192bc4fb6b7ee9606d80796e69be6c4d928cfd9cb708e647598cee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8498aba53c19d01b9ef14dc55aae12a8a27d55401d16a9a778fae7ee89edc1a->leave($__internal_f8498aba53c19d01b9ef14dc55aae12a8a27d55401d16a9a778fae7ee89edc1a_prof);

        
        $__internal_31b9848b0192bc4fb6b7ee9606d80796e69be6c4d928cfd9cb708e647598cee1->leave($__internal_31b9848b0192bc4fb6b7ee9606d80796e69be6c4d928cfd9cb708e647598cee1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e78ca88fc9a3c2c783037f19988db51a5baff0aee4b734c0a771205b3473866e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e78ca88fc9a3c2c783037f19988db51a5baff0aee4b734c0a771205b3473866e->enter($__internal_e78ca88fc9a3c2c783037f19988db51a5baff0aee4b734c0a771205b3473866e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3f752367257c64b6b8afc5c32a214e292c790ccf98afcf7504b8a22787775fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f752367257c64b6b8afc5c32a214e292c790ccf98afcf7504b8a22787775fb2->enter($__internal_3f752367257c64b6b8afc5c32a214e292c790ccf98afcf7504b8a22787775fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo "</h1>
";
        
        $__internal_3f752367257c64b6b8afc5c32a214e292c790ccf98afcf7504b8a22787775fb2->leave($__internal_3f752367257c64b6b8afc5c32a214e292c790ccf98afcf7504b8a22787775fb2_prof);

        
        $__internal_e78ca88fc9a3c2c783037f19988db51a5baff0aee4b734c0a771205b3473866e->leave($__internal_e78ca88fc9a3c2c783037f19988db51a5baff0aee4b734c0a771205b3473866e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
  <h1>Hello {{name}}</h1>
{% endblock %}
", "default/index.html.twig", "/home/charline/bite/templates/default/index.html.twig");
    }
}
