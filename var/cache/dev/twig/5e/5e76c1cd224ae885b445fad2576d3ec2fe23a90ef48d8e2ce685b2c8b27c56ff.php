<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_0317c070f7fd2f11a2a245eff2b640429b18c1dd3aa90eeebdf8c5ad3da22792 extends Twig_Template
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
        $__internal_b664f8f2278f94330588b8eb8074ce014a713419adac4a59ed40b9af6b21be7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b664f8f2278f94330588b8eb8074ce014a713419adac4a59ed40b9af6b21be7b->enter($__internal_b664f8f2278f94330588b8eb8074ce014a713419adac4a59ed40b9af6b21be7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_f9ddcf2ed217604b9a05caf7802d56f3e3a6d4c86a623d750d60963cd05e8cb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ddcf2ed217604b9a05caf7802d56f3e3a6d4c86a623d750d60963cd05e8cb5->enter($__internal_f9ddcf2ed217604b9a05caf7802d56f3e3a6d4c86a623d750d60963cd05e8cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b664f8f2278f94330588b8eb8074ce014a713419adac4a59ed40b9af6b21be7b->leave($__internal_b664f8f2278f94330588b8eb8074ce014a713419adac4a59ed40b9af6b21be7b_prof);

        
        $__internal_f9ddcf2ed217604b9a05caf7802d56f3e3a6d4c86a623d750d60963cd05e8cb5->leave($__internal_f9ddcf2ed217604b9a05caf7802d56f3e3a6d4c86a623d750d60963cd05e8cb5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
