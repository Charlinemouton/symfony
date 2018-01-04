<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_20e3f1e79cbfd2791373b265f792bbc4caa9cc54df3c92738cbee803674e049b extends Twig_Template
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
        $__internal_d21c6e2ad6e39e2424fd804e8e8431c29bf4eaee40af1eb3160b8a6a47749ebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d21c6e2ad6e39e2424fd804e8e8431c29bf4eaee40af1eb3160b8a6a47749ebf->enter($__internal_d21c6e2ad6e39e2424fd804e8e8431c29bf4eaee40af1eb3160b8a6a47749ebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_378bfe0e7b8b21d9bc5286df8f45abeb179a574c9a5a60db5893a26e38d446e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378bfe0e7b8b21d9bc5286df8f45abeb179a574c9a5a60db5893a26e38d446e8->enter($__internal_378bfe0e7b8b21d9bc5286df8f45abeb179a574c9a5a60db5893a26e38d446e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d21c6e2ad6e39e2424fd804e8e8431c29bf4eaee40af1eb3160b8a6a47749ebf->leave($__internal_d21c6e2ad6e39e2424fd804e8e8431c29bf4eaee40af1eb3160b8a6a47749ebf_prof);

        
        $__internal_378bfe0e7b8b21d9bc5286df8f45abeb179a574c9a5a60db5893a26e38d446e8->leave($__internal_378bfe0e7b8b21d9bc5286df8f45abeb179a574c9a5a60db5893a26e38d446e8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}
