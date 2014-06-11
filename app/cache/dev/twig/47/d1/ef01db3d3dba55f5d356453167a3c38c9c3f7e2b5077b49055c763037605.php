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
    <h2>Partenaires</h2>
    <ul>
        ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partenaires"]) ? $context["partenaires"] : $this->getContext($context, "partenaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["partenaire"]) {
            // line 6
            echo "        <li><a href=\"http://";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partenaire"]) ? $context["partenaire"] : $this->getContext($context, "partenaire")), "url"), "html", null, true);
            echo "\">
                
            ";
            // line 8
            if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
                // line 9
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partenaire"]) ? $context["partenaire"] : $this->getContext($context, "partenaire")), "titre"), "html", null, true);
                echo "
            ";
            } else {
                // line 11
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partenaire"]) ? $context["partenaire"] : $this->getContext($context, "partenaire")), "titreEn"), "html", null, true);
                echo "
            ";
            }
            // line 13
            echo "            
            </a>
       </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partenaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "    </ul>
</nav>

";
        // line 43
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
        return array (  58 => 17,  43 => 11,  29 => 6,  25 => 5,  61 => 12,  45 => 9,  35 => 8,  63 => 43,  57 => 26,  36 => 11,  32 => 6,  96 => 53,  82 => 20,  77 => 19,  72 => 17,  67 => 41,  65 => 15,  55 => 11,  52 => 10,  46 => 9,  38 => 7,  30 => 5,  27 => 4,  23 => 3,  19 => 1,  161 => 51,  154 => 48,  151 => 47,  145 => 45,  142 => 44,  137 => 42,  132 => 41,  129 => 40,  124 => 38,  119 => 37,  116 => 36,  109 => 33,  106 => 32,  100 => 30,  97 => 29,  92 => 27,  87 => 22,  84 => 25,  79 => 23,  74 => 22,  71 => 21,  69 => 20,  59 => 12,  54 => 12,  49 => 13,  44 => 9,  39 => 8,  37 => 9,  31 => 3,  28 => 5,);
    }
}
