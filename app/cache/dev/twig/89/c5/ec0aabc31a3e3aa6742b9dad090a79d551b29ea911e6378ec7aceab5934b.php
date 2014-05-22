<?php

/* VaeBaseBundle:Rubrique:detail.html.twig */
class __TwigTemplate_89c5ec0aabc31a3e3aa6742b9dad090a79d551b29ea911e6378ec7aceab5934b extends Twig_Template
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
        echo "
<article>
                                            
    <div>
        ";
        // line 7
        if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
            // line 8
            echo "            <h2><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "nom"), "html", null, true);
            echo "</a></h2>
            <p>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "contenu"), "html", null, true);
            echo "</p>
        ";
        } else {
            // line 11
            echo "            <h2><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "nomEn"), "html", null, true);
            echo "</a></h2>
            <p>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "contenuEn"), "html", null, true);
            echo "</p>
        ";
        }
        // line 14
        echo "    </div>
    
    <div>
        <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("_locale" => "fr", "nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slug"))), "html", null, true);
        echo "\">Francais</a>
        <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("_locale" => "en", "nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slugEn"))), "html", null, true);
        echo "\">Anglais</a>   
    </div>

</article>

";
        // line 23
        if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
            // line 24
            echo "    ";
            if ((($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slug") == "formations") || ($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slug") == "ateliers"))) {
                // line 25
                echo "        ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBaseBundle:Formation:index", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slug"))));
                echo "
    ";
            }
            // line 27
            echo "    ";
            if (($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slug") == "boutique")) {
                // line 28
                echo "        ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBoutiqueBundle:Produit:index", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slug"))));
                echo "
    ";
            }
        } else {
            // line 31
            echo "    ";
            if ((($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slugEn") == "trainings") || ($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slugEn") == "workshop"))) {
                // line 32
                echo "        ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBaseBundle:Formation:index", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slugEn"))));
                echo "
    ";
            }
            // line 34
            echo "    ";
            if (($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slugEn") == "shop")) {
                // line 35
                echo "        ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBoutiqueBundle:Produit:index", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slugEn"))));
                echo "
    ";
            }
        }
        // line 37
        echo " 

";
    }

    public function getTemplateName()
    {
        return "VaeBaseBundle:Rubrique:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 37,  109 => 35,  106 => 34,  100 => 32,  97 => 31,  90 => 28,  87 => 27,  81 => 25,  78 => 24,  76 => 23,  68 => 18,  64 => 17,  59 => 14,  54 => 12,  49 => 11,  44 => 9,  39 => 8,  37 => 7,  31 => 3,  28 => 2,);
    }
}
