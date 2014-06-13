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
        echo "<div class=\"container-fluid\" id='venteProd'>
<div class=\"row-fluid\">
<div class=\"col-md-12\">
    <h1>
        ";
        // line 5
        if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
            // line 6
            echo "            Créations à vendre :
        ";
        } else {
            // line 8
            echo "            Products for sale :
        ";
        }
        // line 9
        echo " 
    </h1>
    <div class=\"carousel slide\" id=\"myCarousel\">
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                    <ul class=\"thumbnails\">
                        ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 16
            echo "                        <li class=\"col-md-4\" id='product'>
                                ";
            // line 17
            if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
                // line 18
                echo "                                  <p class=\"col-md-9\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix"), "html", null, true);
                echo "€</p>
                                  <a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_boutique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slug"), "slugProduit" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "slug"))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image"))), "html", null, true);
                echo "\" width='200px' height='120'><a>
                                 ";
            } else {
                // line 21
                echo "                                  <p class=\"col-md-9\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nomEn"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix"), "html", null, true);
                echo "€</p>
                                  <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_boutique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slugEn"), "slugProduit" => $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "slugEn"))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image"))), "html", null, true);
                echo "\" width='200px' height='120'></a>
                                 ";
            }
            // line 23
            echo "    
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                    </ul>
              </div><!-- /Slide1 --> 
            
            
             
        </div>
        
       ";
        // line 37
        echo "                              
    </div><!-- /#myCarousel -->
        
</div><!-- /.span12 -->          
</div><!-- /.row --> 
</div><!-- /.container -->

";
        // line 69
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
        return array (  106 => 69,  97 => 37,  88 => 26,  80 => 23,  73 => 22,  66 => 21,  59 => 19,  52 => 18,  50 => 17,  47 => 16,  43 => 15,  35 => 9,  31 => 8,  27 => 6,  71 => 18,  64 => 16,  54 => 14,  44 => 12,  41 => 11,  37 => 10,  33 => 8,  29 => 6,  25 => 5,  23 => 3,  19 => 1,);
    }
}
