<?php

/* VaeBoutiqueBundle:Produit:liste.html.twig */
class __TwigTemplate_c4c96d5e6ca3ee773aebcf51d158a73e728dd083c980a64af9091e1824531e05 extends Twig_Template
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
<ul id=\"listeProduit\">
         ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 4
            echo "            ";
            if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
                // line 5
                echo "                <li>
                    <h3><a class=\"test\" href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_boutique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slug"), "slugProduit" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom"), "html", null, true);
                echo "</a></h3>
                    <p>";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description"), "html", null, true);
                echo "</p>
             ";
            } else {
                // line 9
                echo "                    <h3><a class=\"test\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_boutique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slugEn"), "slugProduit" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "slugEn"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nomEn"), "html", null, true);
                echo "</a></h3>
                    <p>";
                // line 10
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "descriptionEn"), "html", null, true);
                echo "</p>
             ";
            }
            // line 12
            echo "                    <p>image</p>
                    <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix"), "html", null, true);
            echo "</p>
                    <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "disponible"), "html", null, true);
            echo "</p>
                </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </ul>

";
    }

    public function getTemplateName()
    {
        return "VaeBoutiqueBundle:Produit:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 17,  63 => 14,  59 => 13,  56 => 12,  51 => 10,  44 => 9,  39 => 7,  33 => 6,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
