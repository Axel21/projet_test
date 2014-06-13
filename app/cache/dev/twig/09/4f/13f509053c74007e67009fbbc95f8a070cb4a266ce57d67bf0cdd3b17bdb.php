<?php

/* VaeBaseBundle:Formation:aucune.html.twig */
class __TwigTemplate_094f13f509053c74007e67009fbbc95f8a070cb4a266ce57d67bf0cdd3b17bdb extends Twig_Template
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
        if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
            // line 2
            echo "    <p>Il n'y a pas de formations ou d'ateliers</p>
";
        } else {
            // line 4
            echo "    <p>There are no Trainings or workshops</p>
";
        }
    }

    public function getTemplateName()
    {
        return "VaeBaseBundle:Formation:aucune.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 4,  21 => 2,  19 => 1,);
    }
}
