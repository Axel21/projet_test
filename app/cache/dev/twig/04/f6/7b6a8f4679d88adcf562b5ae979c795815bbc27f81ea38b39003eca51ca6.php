<?php

/* VaeBaseBundle:Contact:form.html.twig */
class __TwigTemplate_04f67b6a8f4679d88adcf562b5ae979c795815bbc27f81ea38b39003eca51ca6 extends Twig_Template
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
        echo "    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_formation_contact_send", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "nom"))), "html", null, true);
        echo "\" method=\"post\">
        ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"envoyer\" />
    </form>

";
    }

    public function getTemplateName()
    {
        return "VaeBaseBundle:Contact:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}
