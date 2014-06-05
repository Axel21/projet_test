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
        echo "<h1>Partenaires</h1>
    <ul>
         ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partenaires"]) ? $context["partenaires"] : $this->getContext($context, "partenaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["partenaire"]) {
            // line 4
            echo "            <li>
                <p><a href='http://";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partenaire"]) ? $context["partenaire"] : $this->getContext($context, "partenaire")), "url"), "html", null, true);
            echo "'>
                    
                    ";
            // line 7
            if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
                // line 8
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partenaire"]) ? $context["partenaire"] : $this->getContext($context, "partenaire")), "titre"), "html", null, true);
                echo "
                    ";
            } else {
                // line 10
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partenaire"]) ? $context["partenaire"] : $this->getContext($context, "partenaire")), "titreEn"), "html", null, true);
                echo "
                    ";
            }
            // line 12
            echo "                        
                </a></p>
             </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partenaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </ul>

";
        // line 41
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
        return array (  62 => 41,  49 => 12,  72 => 43,  67 => 15,  61 => 14,  41 => 8,  37 => 8,  22 => 2,  44 => 32,  56 => 36,  52 => 10,  38 => 7,  27 => 4,  23 => 3,  19 => 1,  127 => 33,  122 => 26,  111 => 29,  107 => 27,  105 => 26,  91 => 21,  85 => 18,  71 => 12,  65 => 10,  60 => 6,  54 => 5,  45 => 33,  43 => 10,  36 => 7,  34 => 6,  30 => 5,  24 => 1,  170 => 54,  163 => 51,  160 => 50,  154 => 48,  151 => 47,  146 => 45,  141 => 44,  138 => 43,  133 => 41,  128 => 40,  125 => 39,  118 => 36,  115 => 30,  109 => 33,  106 => 32,  101 => 24,  96 => 22,  93 => 28,  88 => 26,  83 => 25,  80 => 17,  78 => 16,  68 => 17,  63 => 15,  58 => 16,  53 => 11,  48 => 10,  46 => 9,  39 => 8,  35 => 7,  31 => 5,  28 => 2,);
    }
}
