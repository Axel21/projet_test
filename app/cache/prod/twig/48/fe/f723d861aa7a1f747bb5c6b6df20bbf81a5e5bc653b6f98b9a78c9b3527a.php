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
        $context['_seq'] = twig_ensure_traversable((isset($context["rubriques"]) ? $context["rubriques"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 4
            echo "            ";
            if (((isset($context["langue"]) ? $context["langue"] : null) == "fr")) {
                // line 5
                echo "                <li><a class=\"test\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "nom"), "html", null, true);
                echo "</a></li>
             ";
            } else {
                // line 7
                echo "                <li><a class=\"test\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slugEn"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "nomEn"), "html", null, true);
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
        // line 36
        echo "

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
        return array (  56 => 36,  52 => 10,  38 => 7,  27 => 4,  23 => 3,  19 => 1,  127 => 33,  122 => 26,  111 => 29,  107 => 27,  105 => 26,  91 => 21,  85 => 18,  71 => 12,  65 => 10,  60 => 6,  54 => 5,  45 => 33,  43 => 10,  36 => 7,  34 => 6,  30 => 5,  24 => 1,  170 => 54,  163 => 51,  160 => 50,  154 => 48,  151 => 47,  146 => 45,  141 => 44,  138 => 43,  133 => 41,  128 => 40,  125 => 39,  118 => 36,  115 => 30,  109 => 33,  106 => 32,  101 => 24,  96 => 22,  93 => 28,  88 => 26,  83 => 25,  80 => 17,  78 => 16,  68 => 17,  63 => 15,  58 => 14,  53 => 12,  48 => 34,  46 => 9,  39 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
