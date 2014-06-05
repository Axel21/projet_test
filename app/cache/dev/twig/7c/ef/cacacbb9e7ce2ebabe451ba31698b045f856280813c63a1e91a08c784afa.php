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
            <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "description"), "html", null, true);
            echo "</p>      
        ";
        } else {
            // line 10
            echo "            <h2><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "nomEn"), "html", null, true);
            echo "</a></h2>
            <p>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "descriptionEn"), "html", null, true);
            echo "</p>
        ";
        }
        // line 13
        echo "            <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/images/" . $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "image"))), "html", null, true);
        echo "\" />
            <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "prix"), "html", null, true);
        echo "</p>
            <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "disponible"), "html", null, true);
        echo "</p>
            ";
        // line 16
        if (($this->getAttribute((isset($context["produit"]) ? $context["produit"] : $this->getContext($context, "produit")), "disponible") == "1")) {
            // line 17
            echo "                <a href='";
            echo twig_escape_filter($this->env, (isset($context["paypal"]) ? $context["paypal"] : $this->getContext($context, "paypal")), "html", null, true);
            echo "'>Acheter</a>
            ";
        } else {
            // line 19
            echo "                <p>ce produit n'est plus disponible</p>
            ";
        }
        // line 21
        echo "   
            
            
            ";
        // line 24
        if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
            // line 25
            echo "            <p><a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slug"))), "html", null, true);
            echo "'>Retour à la liste</a></p>
            ";
        } else {
            // line 27
            echo "            <p><a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slugEn"))), "html", null, true);
            echo "'>Back to list</a></p>
            ";
        }
        // line 29
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
        return array (  90 => 25,  170 => 54,  160 => 50,  146 => 45,  118 => 36,  58 => 13,  70 => 16,  137 => 36,  134 => 35,  97 => 21,  53 => 11,  77 => 17,  23 => 3,  127 => 32,  34 => 6,  100 => 25,  65 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 40,  107 => 27,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 29,  71 => 16,  67 => 15,  63 => 14,  59 => 12,  38 => 7,  94 => 21,  89 => 20,  85 => 18,  75 => 17,  68 => 17,  56 => 36,  87 => 19,  21 => 2,  26 => 3,  93 => 28,  88 => 24,  78 => 23,  46 => 9,  27 => 4,  44 => 32,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 51,  158 => 67,  156 => 66,  151 => 47,  142 => 59,  138 => 43,  136 => 56,  121 => 30,  117 => 44,  105 => 24,  91 => 20,  62 => 41,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 19,  72 => 43,  69 => 14,  47 => 11,  40 => 8,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 35,  111 => 29,  108 => 36,  101 => 30,  98 => 23,  96 => 27,  83 => 21,  74 => 16,  66 => 18,  55 => 11,  52 => 15,  50 => 11,  43 => 8,  41 => 8,  35 => 7,  32 => 3,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 48,  149 => 51,  147 => 58,  144 => 49,  141 => 44,  133 => 41,  130 => 33,  125 => 39,  122 => 26,  116 => 41,  112 => 27,  109 => 33,  106 => 32,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 24,  73 => 17,  64 => 17,  60 => 12,  57 => 16,  54 => 10,  51 => 13,  48 => 10,  45 => 9,  42 => 7,  39 => 6,  36 => 6,  33 => 7,  30 => 5,);
    }
}
