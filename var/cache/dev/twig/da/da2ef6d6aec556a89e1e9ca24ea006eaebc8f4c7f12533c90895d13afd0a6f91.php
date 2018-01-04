<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_0d586b1bde866019c54a19be2f32daa82ef42ac975b7d3900748074828f0f101 extends Twig_Template
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
        $__internal_83ed849f5dec05cbf43f6583799896572705a925ebde0d905bcfd14acde1469b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83ed849f5dec05cbf43f6583799896572705a925ebde0d905bcfd14acde1469b->enter($__internal_83ed849f5dec05cbf43f6583799896572705a925ebde0d905bcfd14acde1469b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_88266972897974ee42246f2dc3e12814d65a91869cd527e8f0c06c4d37347517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88266972897974ee42246f2dc3e12814d65a91869cd527e8f0c06c4d37347517->enter($__internal_88266972897974ee42246f2dc3e12814d65a91869cd527e8f0c06c4d37347517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_83ed849f5dec05cbf43f6583799896572705a925ebde0d905bcfd14acde1469b->leave($__internal_83ed849f5dec05cbf43f6583799896572705a925ebde0d905bcfd14acde1469b_prof);

        
        $__internal_88266972897974ee42246f2dc3e12814d65a91869cd527e8f0c06c4d37347517->leave($__internal_88266972897974ee42246f2dc3e12814d65a91869cd527e8f0c06c4d37347517_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/home/charline/bite/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}
