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
        if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["partenaires"]) ? $context["partenaires"] : $this->getContext($context, "partenaires")));
        foreach ($context['_seq'] as $context["_key"] => $context["partenaire"]) {
            // line 10
            echo "        <li><a href=\"http://";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partenaire"]) ? $context["partenaire"] : $this->getContext($context, "partenaire")), "url"), "html", null, true);
            echo "\">
                
            ";
            // line 12
            if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
                // line 13
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partenaire"]) ? $context["partenaire"] : $this->getContext($context, "partenaire")), "titre"), "html", null, true);
                echo "
            ";
            } else {
                // line 15
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["partenaire"]) ? $context["partenaire"] : $this->getContext($context, "partenaire")), "titreEn"), "html", null, true);
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
        return array (  74 => 47,  69 => 21,  60 => 17,  54 => 15,  48 => 13,  46 => 12,  40 => 10,  36 => 9,  33 => 8,  29 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }
}
