<?php

/* VaeBaseBundle:Agenda:detail.html.twig */
class __TwigTemplate_56b3d0d281b09358c41ec3c3cc2cd6e8a7a87abd0dc11fc354bf9b89d6e4dbb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<article>
            ";
        // line 4
        if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
            // line 5
            echo "                    <h4>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "titre"), "html", null, true);
            echo "</h4>
                    <p>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "contenu"), "html", null, true);
            echo "</p>
                    <p>";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "date"), "d/m/y"), "html", null, true);
            echo "</p>
                    <p><a href='";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => "accueil")), "html", null, true);
            echo "'>Retour</a></p>
             ";
        } else {
            // line 10
            echo "                    <h4>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "titreEn"), "html", null, true);
            echo "</h4>
                    <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "contenuEn"), "html", null, true);
            echo "</p>
                    <p>";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "date"), "m/d/y"), "html", null, true);
            echo "</p>
                    <p><a href='";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => "home")), "html", null, true);
            echo "'>Back</a></p>
             ";
        }
        // line 15
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
        return array (  72 => 15,  67 => 13,  63 => 12,  59 => 11,  54 => 10,  49 => 8,  45 => 7,  41 => 6,  36 => 5,  34 => 4,  31 => 3,  28 => 2,);
    }
}
