<?php

/* VaeInscriptionBundle:Inscription:inscription.html.twig */
class __TwigTemplate_9c78ca9ca3720132cb56525196e4b5f05ec2173b6eae1a75982904dc2bbc977a extends Twig_Template
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
        echo "    <p>Vous avez bien été inscrit à cette formation : 
    
    ";
        // line 5
        if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "nom"), "html", null, true);
            echo "
    ";
        } else {
            // line 8
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "nomEn"), "html", null, true);
            echo "
    ";
        }
        // line 10
        echo "    </p>
";
    }

    public function getTemplateName()
    {
        return "VaeInscriptionBundle:Inscription:inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 54,  160 => 50,  146 => 45,  118 => 36,  58 => 14,  70 => 16,  137 => 36,  134 => 35,  97 => 21,  53 => 12,  77 => 17,  23 => 3,  127 => 32,  34 => 6,  100 => 25,  65 => 14,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 40,  107 => 27,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 23,  71 => 14,  67 => 15,  63 => 15,  59 => 12,  38 => 11,  94 => 21,  89 => 20,  85 => 18,  75 => 17,  68 => 17,  56 => 36,  87 => 19,  21 => 2,  26 => 12,  93 => 28,  88 => 26,  78 => 23,  46 => 9,  27 => 4,  44 => 32,  31 => 3,  28 => 2,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 51,  158 => 67,  156 => 66,  151 => 47,  142 => 59,  138 => 43,  136 => 56,  121 => 30,  117 => 44,  105 => 24,  91 => 20,  62 => 41,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 20,  72 => 43,  69 => 14,  47 => 13,  40 => 8,  37 => 6,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 35,  111 => 29,  108 => 36,  101 => 30,  98 => 23,  96 => 29,  83 => 25,  74 => 16,  66 => 18,  55 => 11,  52 => 15,  50 => 11,  43 => 8,  41 => 8,  35 => 5,  32 => 3,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 48,  149 => 51,  147 => 58,  144 => 49,  141 => 44,  133 => 41,  130 => 33,  125 => 39,  122 => 26,  116 => 41,  112 => 27,  109 => 33,  106 => 32,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 24,  73 => 19,  64 => 17,  60 => 12,  57 => 16,  54 => 10,  51 => 10,  48 => 11,  45 => 9,  42 => 7,  39 => 6,  36 => 10,  33 => 7,  30 => 5,);
    }
}
