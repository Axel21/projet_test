<?php

/* VaeBaseBundle:Liens:listePartenaires.html.twig */
class __TwigTemplate_47d1ef01db3d3dba55f5d356453167a3c38c9c3f7e2b5077b49055c763037605 extends Twig_Template
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
<nav>
    ";
        // line 3
        if (((isset($context["langue"]) ? $context["langue"] : null) == "fr")) {
            // line 4
            echo "    <h2>Partenaires</h2>
    ";
        } else {
            // line 6
            echo "    <h2>Partners</h2>
    ";
        }
        // line 8
        echo "    <ul>
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partenaires"]) ? $context["partenaires"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["partenaire"]) {
            // line 10
            echo "        <li><a href=\"http://";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partenaire"]) ? $context["partenaire"] : null), "url"), "html", null, true);
            echo "\">
                
            ";
            // line 12
            if (((isset($context["langue"]) ? $context["langue"] : null) == "fr")) {
                // line 13
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partenaire"]) ? $context["partenaire"] : null), "titre"), "html", null, true);
                echo "
            ";
            } else {
                // line 15
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partenaire"]) ? $context["partenaire"] : null), "titreEn"), "html", null, true);
                echo "
            ";
            }
            // line 17
            echo "            
            </a>
       </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partenaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>
</nav>

";
        // line 47
        echo "

";
    }

    public function getTemplateName()
    {
        return "VaeBaseBundle:Liens:listePartenaires.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 47,  69 => 21,  48 => 13,  40 => 10,  33 => 8,  29 => 6,  25 => 4,  61 => 12,  35 => 7,  63 => 51,  57 => 26,  32 => 6,  123 => 64,  109 => 31,  102 => 29,  96 => 26,  91 => 25,  86 => 22,  82 => 21,  78 => 19,  76 => 18,  72 => 17,  67 => 41,  55 => 11,  52 => 10,  46 => 12,  38 => 7,  30 => 5,  23 => 3,  19 => 1,  332 => 176,  327 => 99,  319 => 177,  317 => 176,  312 => 174,  297 => 162,  293 => 161,  281 => 151,  278 => 150,  275 => 149,  269 => 145,  266 => 144,  263 => 143,  261 => 142,  257 => 140,  254 => 139,  251 => 138,  246 => 135,  243 => 134,  240 => 133,  238 => 132,  210 => 107,  206 => 106,  198 => 100,  196 => 99,  180 => 85,  176 => 83,  172 => 81,  170 => 80,  166 => 79,  154 => 73,  145 => 70,  142 => 69,  136 => 67,  134 => 66,  126 => 60,  120 => 58,  114 => 33,  104 => 52,  73 => 24,  65 => 15,  60 => 17,  51 => 15,  45 => 9,  42 => 12,  36 => 9,  34 => 9,  27 => 4,  21 => 1,  167 => 53,  160 => 75,  157 => 49,  151 => 72,  148 => 46,  143 => 44,  138 => 43,  135 => 42,  130 => 40,  125 => 39,  122 => 38,  115 => 35,  112 => 55,  106 => 30,  103 => 31,  98 => 27,  93 => 28,  90 => 27,  85 => 25,  80 => 24,  77 => 23,  75 => 22,  68 => 17,  62 => 15,  59 => 12,  54 => 15,  49 => 16,  44 => 9,  39 => 8,  37 => 7,  31 => 3,  28 => 5,);
    }
}
