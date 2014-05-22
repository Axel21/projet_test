<?php

/* VaeBaseBundle:Agenda:detail.html.twig */
class __TwigTemplate_56b3d0d281b09358c41ec3c3cc2cd6e8a7a87abd0dc11fc354bf9b89d6e4dbb1 extends Twig_Template
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
        echo " <article>
            ";
        // line 2
        if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
            // line 3
            echo "                    <h4>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "titre"), "html", null, true);
            echo "</h4>
                    <p>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "contenu"), "html", null, true);
            echo "</p>
                    <p>";
            // line 5
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "date"), "d/m/y"), "html", null, true);
            echo "</p>
                    <p><a href='";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => "accueil")), "html", null, true);
            echo "'>Retour</a></p>
             ";
        } else {
            // line 8
            echo "                    <h4>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "titreEn"), "html", null, true);
            echo "</h4>
                    <p>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "contenuEn"), "html", null, true);
            echo "</p>
                    <p>";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "date"), "m/d/y"), "html", null, true);
            echo "</p>
                    <p><a href='";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => "home")), "html", null, true);
            echo "'>Back</a></p>
             ";
        }
        // line 13
        echo "</article>
";
    }

    public function getTemplateName()
    {
        return "VaeBaseBundle:Agenda:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  55 => 11,  51 => 10,  47 => 9,  42 => 8,  37 => 6,  33 => 5,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
