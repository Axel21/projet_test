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
        echo "<article>
    <div>
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("_locale" => "fr", "nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slug"))), "html", null, true);
        echo "\">Francais</a>
        <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("_locale" => "en", "nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slugEn"))), "html", null, true);
        echo "\">Anglais</a>   
    </div>
                                            
    <div>
        ";
        // line 10
        if (((isset($context["langue"]) ? $context["langue"] : null) == "fr")) {
            // line 11
            echo "            <h2><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "nom"), "html", null, true);
            echo "</a></h2>
            <p>";
            // line 12
            echo $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "contenu");
            echo "</p>
        ";
        } else {
            // line 14
            echo "            <h2><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "nomEn"), "html", null, true);
            echo "</a></h2>
            <p>";
            // line 15
            echo $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "contenuEn");
            echo "</p>
        ";
        }
        // line 17
        echo "            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "image"))), "html", null, true);
        echo "\" />
    </div>
   

</article>
<div>
";
        // line 23
        if (((isset($context["langue"]) ? $context["langue"] : null) == "fr")) {
            // line 24
            echo "    ";
            if ((($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slug") == "formations") || ($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slug") == "ateliers"))) {
                // line 25
                echo "        ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBaseBundle:Formation:index", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slug"))));
                echo "
        ";
                // line 26
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBaseBundle:Liens:listeVideos", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"))));
                echo "
    ";
            }
            // line 28
            echo "    ";
            if (($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slug") == "boutique")) {
                // line 29
                echo "        ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBoutiqueBundle:Produit:galerie", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slug"))));
                echo "
        ";
                // line 30
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBoutiqueBundle:Produit:index", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slug"))));
                echo "
    ";
            }
            // line 32
            echo "    ";
            if (($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slug") == "accueil")) {
                // line 33
                echo "        ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBaseBundle:Liens:listeVideos", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"))));
                echo "
    ";
            }
            // line 35
            echo "    ";
            if (($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slug") == "contact")) {
                // line 36
                echo "        ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBaseBundle:Contact:form", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slug"))));
                echo "
    ";
            }
        } else {
            // line 39
            echo "    ";
            if ((($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slugEn") == "trainings") || ($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slugEn") == "workshop"))) {
                // line 40
                echo "        ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBaseBundle:Formation:index", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slugEn"))));
                echo "
        ";
                // line 41
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBaseBundle:Liens:listeVideos", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"))));
                echo "
    ";
            }
            // line 43
            echo "    ";
            if (($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slugEn") == "shop")) {
                // line 44
                echo "        ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBoutiqueBundle:Produit:galerie", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slugEn"))));
                echo "
        ";
                // line 45
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBoutiqueBundle:Produit:index", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slugEn"))));
                echo "
    ";
            }
            // line 47
            echo "    ";
            if (($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slugEn") == "home")) {
                // line 48
                echo "        ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBaseBundle:Liens:listeVideos", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"))));
                echo "
    ";
            }
            // line 50
            echo "    ";
            if (($this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slugEn") == "contact")) {
                // line 51
                echo "        ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("VaeBaseBundle:Contact:form", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slugEn"))));
                echo "
    ";
            }
        }
        // line 54
        echo "</div>
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
        return array (  170 => 54,  163 => 51,  160 => 50,  154 => 48,  151 => 47,  146 => 45,  141 => 44,  138 => 43,  133 => 41,  128 => 40,  125 => 39,  118 => 36,  115 => 35,  109 => 33,  106 => 32,  101 => 30,  96 => 29,  93 => 28,  88 => 26,  83 => 25,  80 => 24,  78 => 23,  68 => 17,  63 => 15,  58 => 14,  53 => 12,  48 => 11,  46 => 10,  39 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
