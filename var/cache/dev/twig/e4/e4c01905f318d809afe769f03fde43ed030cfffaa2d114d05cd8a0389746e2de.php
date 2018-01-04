<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_40de45572a8c56a477d39f8dc63beda49ef1b1173d9730ec3bcf785f20dab86b extends Twig_Template
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
        $__internal_c4281a6073388215a6327ff460d54a72548008689dd7fb987691b00da1fc214d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4281a6073388215a6327ff460d54a72548008689dd7fb987691b00da1fc214d->enter($__internal_c4281a6073388215a6327ff460d54a72548008689dd7fb987691b00da1fc214d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_3c53cb5fbe1d0c532fdf669635868c352f5d5db0bb7dbe1f1689a48a67c000e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c53cb5fbe1d0c532fdf669635868c352f5d5db0bb7dbe1f1689a48a67c000e2->enter($__internal_3c53cb5fbe1d0c532fdf669635868c352f5d5db0bb7dbe1f1689a48a67c000e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_c4281a6073388215a6327ff460d54a72548008689dd7fb987691b00da1fc214d->leave($__internal_c4281a6073388215a6327ff460d54a72548008689dd7fb987691b00da1fc214d_prof);

        
        $__internal_3c53cb5fbe1d0c532fdf669635868c352f5d5db0bb7dbe1f1689a48a67c000e2->leave($__internal_3c53cb5fbe1d0c532fdf669635868c352f5d5db0bb7dbe1f1689a48a67c000e2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/home/charline/bite/vendor/symfony/twig-bundle/Resources/views/Exception/error.xml.twig");
    }
}
