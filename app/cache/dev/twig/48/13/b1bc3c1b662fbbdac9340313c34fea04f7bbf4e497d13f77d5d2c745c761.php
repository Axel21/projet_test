<?php

/* VaeBaseBundle:Formation:detail.html.twig */
class __TwigTemplate_4813b1bc3c1b662fbbdac9340313c34fea04f7bbf4e497d13f77d5d2c745c761 extends Twig_Template
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
        echo "<section id=\"left-content\" >
<section class=\"col-md-9\">
";
        // line 42
        echo "
<article>
    ";
        // line 44
        if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
            // line 45
            echo "         <header>
           <h2>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "nom"), "html", null, true);
            echo "</h2>
           <p>";
            // line 47
            echo $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "description");
            echo "</p>
           <p><time>Du ";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "debut"), "d-m-Y"), "html", null, true);
            echo "</time> - <time>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "debut"), "H:i"), "html", null, true);
            echo "</time></p>
           <p><time>Au ";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "debut"), "d-m-Y"), "html", null, true);
            echo "</time> - <time>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "fin"), "H:i"), "html", null, true);
            echo "</time></p>
           <p>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "prix"), "html", null, true);
            echo "€ TTC</p>
           <p>Inscrits : ";
            // line 51
            echo twig_escape_filter($this->env, (isset($context["nbInscrit"]) ? $context["nbInscrit"] : $this->getContext($context, "nbInscrit")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "maxInscrit"), "html", null, true);
            echo "</p>
         </header>
    ";
        } else {
            // line 54
            echo "        <header>
           <h2>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "nomEn"), "html", null, true);
            echo "</h2>
           <p>";
            // line 56
            echo $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "descriptionEn");
            echo "</p>
           <p><time>From ";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "debut"), "m-d-Y"), "html", null, true);
            echo "</time> - <time>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "debut"), "H:i"), "html", null, true);
            echo "</time></p>
           <p><time>to ";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "debut"), "d-m-Y"), "html", null, true);
            echo "</time> - <time>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "fin"), "H:i"), "html", null, true);
            echo "</time></p>
           <p>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "prix"), "html", null, true);
            echo "€ TTC</p>
           <p>Inscrits : ";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["nbInscrit"]) ? $context["nbInscrit"] : $this->getContext($context, "nbInscrit")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "maxInscrit"), "html", null, true);
            echo "</p>   
        </header>
    ";
        }
        // line 63
        echo "        ";
        if (((isset($context["nbInscrit"]) ? $context["nbInscrit"] : $this->getContext($context, "nbInscrit")) == $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "maxInscrit"))) {
            // line 64
            echo "            <p id=\"inscrip\">COMPLET</p>
         ";
        } else {
            // line 66
            echo "            ";
            if (((isset($context["verifUser"]) ? $context["verifUser"] : $this->getContext($context, "verifUser")) == null)) {
                // line 67
                echo "                ";
                if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
                    // line 68
                    echo "                    <p><a id=\"inscrip\" href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_inscription_formation", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slug"), "slugFormation" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "slug"))), "html", null, true);
                    echo "'>inscription</a></p>
                ";
                } else {
                    // line 70
                    echo "                    <p><a id=\"inscrip\" href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_inscription_formation", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slugEn"), "slugFormation" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "slugEn"))), "html", null, true);
                    echo "'>inscription</a></p>
                ";
                }
                // line 72
                echo "            ";
            } else {
                // line 73
                echo "                    <p id=\"inscrip\">Deja inscrit à cette formation</p>
            ";
            }
            // line 75
            echo "         ";
        }
        // line 76
        echo "</article>
</section>
</section><!--end left-content-->
";
    }

    public function getTemplateName()
    {
        return "VaeBaseBundle:Formation:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 76,  143 => 75,  139 => 73,  136 => 72,  130 => 70,  124 => 68,  121 => 67,  118 => 66,  114 => 64,  111 => 63,  103 => 60,  99 => 59,  93 => 58,  87 => 57,  83 => 56,  79 => 55,  76 => 54,  68 => 51,  64 => 50,  58 => 49,  52 => 48,  48 => 47,  44 => 46,  41 => 45,  39 => 44,  35 => 42,  31 => 3,  28 => 2,);
    }
}
