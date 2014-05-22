<?php

/* VaeBaseBundle:Rubrique:menu.html.twig */
class __TwigTemplate_48fef723d861aa7a1f747bb5c6b6df20bbf81a5e5bc653b6f98b9a78c9b3527a extends Twig_Template
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
        echo "
    <ul id=\"menu\">
         ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubriques"]) ? $context["rubriques"] : $this->getContext($context, "rubriques")));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 4
            echo "            ";
            if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
                // line 5
                echo "                <li><a class=\"test\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "nom"), "html", null, true);
                echo "</a></li>
             ";
            } else {
                // line 7
                echo "                <li><a class=\"test\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slugEn"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "nomEn"), "html", null, true);
                echo "</a></li>
             ";
            }
            // line 9
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </ul>




";
    }

    public function getTemplateName()
    {
        return "VaeBaseBundle:Rubrique:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  46 => 9,  38 => 7,  30 => 5,  27 => 4,  23 => 3,  19 => 1,  74 => 14,  69 => 6,  63 => 5,  50 => 15,  48 => 14,  42 => 11,  34 => 7,  32 => 6,  22 => 1,  116 => 37,  109 => 35,  106 => 34,  100 => 32,  97 => 31,  90 => 28,  87 => 27,  81 => 25,  78 => 24,  76 => 23,  68 => 18,  64 => 17,  59 => 14,  54 => 17,  49 => 11,  44 => 9,  39 => 8,  37 => 7,  31 => 3,  28 => 5,);
    }
}
