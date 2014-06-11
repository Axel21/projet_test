<?php

/* VaeBoutiqueBundle:Produit:detail.html.twig */
class __TwigTemplate_7cefcacacbb9e7ce2ebabe451ba31698b045f856280813c63a1e91a08c784afa extends Twig_Template
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
                                            
    <div>
        ";
        // line 6
        if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
            // line 7
            echo "            <h2><a class=\"test\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nom"), "html", null, true);
            echo "</a></h2>
            <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image"))), "html", null, true);
            echo "\" />
            <p>";
            // line 9
            echo $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description");
            echo "</p>      
        ";
        } else {
            // line 11
            echo "            <h2><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nomEn"), "html", null, true);
            echo "</a></h2>
            <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image"))), "html", null, true);
            echo "\" />
            <p>";
            // line 13
            echo $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "descriptionEn");
            echo "</p>
        ";
        }
        // line 15
        echo "            <p>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix"), "html", null, true);
        echo "€ TTC</p>
            ";
        // line 16
        if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "disponible") == "1")) {
            // line 17
            echo "                <a href='";
            echo twig_escape_filter($this->env, (isset($context["paypal"]) ? $context["paypal"] : $this->getContext($context, "paypal")), "html", null, true);
            echo "'><input type=\"image\" src=\"http://www.paypal.com/fr_FR/i/btn/x-click-but01.gif\" border=\"0\" name=\"submit\" alt=\"Effectuez vos paiements via PayPal : une solution rapide, gratuite et sécurisée\"></a>
            ";
        } else {
            // line 19
            echo "                <p>ce produit n'est plus disponible</p>
            ";
        }
        // line 21
        echo "            <br/><br/>

            
            
            ";
        // line 25
        if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
            // line 26
            echo "            <p><a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slug"))), "html", null, true);
            echo "'>Retour à la liste</a></p>
            ";
        } else {
            // line 28
            echo "            <p><a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slugEn"))), "html", null, true);
            echo "'>Back to list</a></p>
            ";
        }
        // line 30
        echo "    </div>
        
</article>
";
    }

    public function getTemplateName()
    {
        return "VaeBoutiqueBundle:Produit:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 30,  97 => 28,  91 => 26,  89 => 25,  83 => 21,  79 => 19,  73 => 17,  71 => 16,  66 => 15,  61 => 13,  57 => 12,  52 => 11,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,);
    }
}
