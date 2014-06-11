<?php

/* VaeAdminBundle::form_add.html.twig */
class __TwigTemplate_832451425d266ca45d5118a68e6efb8b4e3f435bb9c5f1571c88e1e4a1cc1da9 extends Twig_Template
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
        // line 1
        echo "<div id=\"admin_form\">
    ";
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <fieldset>
    <legend>Formulaire d'ajout</legend>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </fieldset>
</div>";
    }

    public function getTemplateName()
    {
        return "VaeAdminBundle::form_add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  22 => 2,  19 => 1,  62 => 11,  59 => 10,  53 => 7,  50 => 6,  44 => 4,  38 => 3,  32 => 2,);
    }
}
