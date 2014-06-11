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
        // line 18
        echo "

<div class=\"container-fluid\">
<div class=\"row-fluid\">
<div class=\"col-md-9\">
    <h1>Création à vendre</h1>
    <div class=\"carousel slide\" id=\"myCarousel\">
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                    <ul class=\"thumbnails\">
                        ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 29
            echo "                        <li class=\"col-md-3\">
                            <div class=\"thumbnail\">
                                ";
            // line 31
            if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
                // line 32
                echo "                                  <p class=\"col-md-9\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom"), "html", null, true);
                echo "</p>
                                  <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_boutique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slug"), "slugProduit" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "slug"))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image"))), "html", null, true);
                echo "\"><a>
                                 ";
            } else {
                // line 35
                echo "                                  <p class=\"col-md-9\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nomEn"), "html", null, true);
                echo "</p>
                                  <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_boutique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slugEn"), "slugProduit" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "slugEn"))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image"))), "html", null, true);
                echo "\"></a>
                                 ";
            }
            // line 38
            echo "                            </div>
                            
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                    </ul>
              </div><!-- /Slide1 --> 
            
            
             
        </div>
        
       ";
        // line 53
        echo "                              
    </div><!-- /#myCarousel -->
        
</div><!-- /.span12 -->          
</div><!-- /.row --> 
</div><!-- /.container -->

";
        // line 85
        echo "
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
        return array (  92 => 85,  83 => 53,  74 => 42,  65 => 38,  58 => 36,  53 => 35,  46 => 33,  41 => 32,  39 => 31,  35 => 29,  31 => 28,  19 => 18,);
    }
}
