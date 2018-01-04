<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_2de5a58b31e6e88dfd267ddcc809e587cf00094a9e2efabeefdf4339e1a0d17a extends Twig_Template
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
        $__internal_a9a339142b81ff221a1d5758d491ed8bf43875e0333bd2bcb27f72788a3ffbc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a339142b81ff221a1d5758d491ed8bf43875e0333bd2bcb27f72788a3ffbc9->enter($__internal_a9a339142b81ff221a1d5758d491ed8bf43875e0333bd2bcb27f72788a3ffbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_1577867a1da858cbc3ff06454881e065ef221c80bbeb48554352b9a591ab9e1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1577867a1da858cbc3ff06454881e065ef221c80bbeb48554352b9a591ab9e1e->enter($__internal_1577867a1da858cbc3ff06454881e065ef221c80bbeb48554352b9a591ab9e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_a9a339142b81ff221a1d5758d491ed8bf43875e0333bd2bcb27f72788a3ffbc9->leave($__internal_a9a339142b81ff221a1d5758d491ed8bf43875e0333bd2bcb27f72788a3ffbc9_prof);

        
        $__internal_1577867a1da858cbc3ff06454881e065ef221c80bbeb48554352b9a591ab9e1e->leave($__internal_1577867a1da858cbc3ff06454881e065ef221c80bbeb48554352b9a591ab9e1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/home/charline/bite/vendor/symfony/framework-bundle/Resources/views/Form/time_widget.html.php");
    }
}
