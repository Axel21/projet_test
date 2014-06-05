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
        echo "<article>
                                             
    <div>
        ";
        // line 6
        if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
            // line 7
            echo "            <h2><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "nom"), "html", null, true);
            echo "</a></h2>
            <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "description"), "html", null, true);
            echo "</p>
            <p>";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "debut"), "d-m-Y"), "html", null, true);
            echo "</p>
            <p>";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "debut"), "H:i"), "html", null, true);
            echo "</p>
            <p>";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "fin"), "d-m-Y"), "html", null, true);
            echo "</p>
            <p>";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "fin"), "H:i"), "html", null, true);
            echo "</p>
            <p>Inscrits : ";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["nbInscrit"]) ? $context["nbInscrit"] : $this->getContext($context, "nbInscrit")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "maxInscrit"), "html", null, true);
            echo "</p>
            <p><a href='";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slug"))), "html", null, true);
            echo "'>Retour à la liste</a></p>
        ";
        } else {
            // line 16
            echo "            <h2><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "nomEn"), "html", null, true);
            echo "</a></h2>
            <p>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "descriptionEn"), "html", null, true);
            echo "</p>
            <p>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "debut"), "m-d-Y"), "html", null, true);
            echo "</p>
            <p>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "fin"), "m-d-Y"), "html", null, true);
            echo "</p>
            <p>Inscrits : ";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["nbInscrit"]) ? $context["nbInscrit"] : $this->getContext($context, "nbInscrit")), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "maxInscrit"), "html", null, true);
            echo "</p>
            <p><a href='";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slugEn"))), "html", null, true);
            echo "'>Back to list</a></p>    
        ";
        }
        // line 23
        echo "         ";
        if (((isset($context["nbInscrit"]) ? $context["nbInscrit"] : $this->getContext($context, "nbInscrit")) == $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "maxInscrit"))) {
            // line 24
            echo "            <p>COMPLET</p>
         ";
        } else {
            // line 26
            echo "            ";
            if (((isset($context["verifUser"]) ? $context["verifUser"] : $this->getContext($context, "verifUser")) == null)) {
                // line 27
                echo "                ";
                if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
                    // line 28
                    echo "                    <p><a href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_inscription_formation", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slug"), "slugFormation" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "slug"))), "html", null, true);
                    echo "'>inscription</a></p>
                ";
                } else {
                    // line 30
                    echo "                    <p><a href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_inscription_formation", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slugEn"), "slugFormation" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "slugEn"))), "html", null, true);
                    echo "'>inscription</a></p>
                ";
                }
                // line 32
                echo "            ";
            } else {
                // line 33
                echo "                    <p>Deja inscrit a cette formation</p>
            ";
            }
            // line 35
            echo "         ";
        }
        // line 36
        echo "                
    </div>
         
</article>
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
        return array (  137 => 36,  134 => 35,  97 => 21,  53 => 11,  77 => 17,  23 => 4,  127 => 32,  34 => 6,  100 => 25,  65 => 10,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 27,  61 => 14,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 23,  71 => 14,  67 => 15,  63 => 13,  59 => 12,  38 => 7,  94 => 21,  89 => 20,  85 => 18,  75 => 17,  68 => 14,  56 => 9,  87 => 19,  21 => 2,  26 => 12,  93 => 28,  88 => 20,  78 => 16,  46 => 11,  27 => 4,  44 => 12,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 30,  117 => 44,  105 => 24,  91 => 20,  62 => 23,  49 => 8,  24 => 2,  25 => 3,  19 => 1,  79 => 17,  72 => 43,  69 => 14,  47 => 9,  40 => 8,  37 => 7,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 28,  111 => 29,  108 => 36,  101 => 24,  98 => 23,  96 => 22,  83 => 18,  74 => 16,  66 => 15,  55 => 11,  52 => 10,  50 => 10,  43 => 8,  41 => 8,  35 => 5,  32 => 3,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 33,  125 => 44,  122 => 26,  116 => 41,  112 => 27,  109 => 26,  106 => 23,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 17,  73 => 19,  64 => 17,  60 => 12,  57 => 11,  54 => 10,  51 => 10,  48 => 10,  45 => 7,  42 => 7,  39 => 6,  36 => 6,  33 => 7,  30 => 2,);
    }
}
