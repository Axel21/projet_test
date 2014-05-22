<?php

/* VaeBaseBundle:Agenda:liste.html.twig */
class __TwigTemplate_5473f9e2d66ff805d496669a1389da0ebee7832a5e1bca7c959b762494ede5b2 extends Twig_Template
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
    <ul id=\"agenda\">
         ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agendas"]) ? $context["agendas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["agenda"]) {
            // line 4
            echo "            ";
            if (((isset($context["langue"]) ? $context["langue"] : null) == "fr")) {
                // line 5
                echo "                <li>
                    <h4><a class=\"test\" href=\"\">";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), "titre"), "html", null, true);
                echo "</a></h4>
                    <p>";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), "contenu"), "html", null, true);
                echo "</p>
                    <p>";
                // line 8
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), "date"), "d/m/y"), "html", null, true);
                echo "</p>
             ";
            } else {
                // line 10
                echo "                    <h4><a class=\"test\" href=\"\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), "titreEn"), "html", null, true);
                echo "</a></h4>
                    <p>";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), "contenuEn"), "html", null, true);
                echo "</p>
                    <p>";
                // line 12
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), "date"), "m/d/y"), "html", null, true);
                echo "</p>
                </li>
             ";
            }
            // line 15
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agenda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    </ul>




";
    }

    public function getTemplateName()
    {
        return "VaeBaseBundle:Agenda:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  61 => 15,  55 => 12,  51 => 11,  41 => 8,  33 => 6,  52 => 10,  46 => 10,  38 => 7,  30 => 5,  27 => 4,  23 => 3,  19 => 1,  74 => 14,  69 => 6,  63 => 5,  50 => 15,  48 => 14,  42 => 11,  34 => 7,  32 => 6,  22 => 1,  116 => 37,  109 => 35,  106 => 34,  100 => 32,  97 => 31,  90 => 28,  87 => 27,  81 => 25,  78 => 24,  76 => 23,  68 => 18,  64 => 17,  59 => 14,  54 => 17,  49 => 11,  44 => 9,  39 => 8,  37 => 7,  31 => 3,  28 => 5,);
    }
}
