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
    <h1><a href='";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_agenda_agenda", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"))), "html", null, true);
        echo "'>Agenda</a></h1>
    <ul id=\"agenda\">
         ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agendas"]) ? $context["agendas"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["agenda"]) {
            // line 5
            echo "            ";
            if (((isset($context["langue"]) ? $context["langue"] : null) == "fr")) {
                // line 6
                echo "                <li>
                    <p>";
                // line 7
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), "date"), "d/m/y"), "html", null, true);
                echo "</p>
                    <h3><a class=\"test\" href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_agenda_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"), "slugAgenda" => $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), "titre"), "html", null, true);
                echo "</a></h3>
             ";
            } else {
                // line 10
                echo "                    <p>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), "date"), "m/d/y"), "html", null, true);
                echo "</p>
                    <h3><a class=\"test\" href=\"";
                // line 11
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_agenda_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"), "slugAgenda" => $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), "slugEn"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : null), "titreEn"), "html", null, true);
                echo "</a></h3>
                </li>
             ";
            }
            // line 14
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agenda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </ul>


";
        // line 43
        echo "
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
        return array (  72 => 43,  67 => 15,  61 => 14,  41 => 8,  37 => 7,  22 => 2,  44 => 32,  56 => 36,  52 => 10,  38 => 7,  27 => 4,  23 => 3,  19 => 1,  127 => 33,  122 => 26,  111 => 29,  107 => 27,  105 => 26,  91 => 21,  85 => 18,  71 => 12,  65 => 10,  60 => 6,  54 => 5,  45 => 33,  43 => 10,  36 => 7,  34 => 6,  30 => 5,  24 => 1,  170 => 54,  163 => 51,  160 => 50,  154 => 48,  151 => 47,  146 => 45,  141 => 44,  138 => 43,  133 => 41,  128 => 40,  125 => 39,  118 => 36,  115 => 30,  109 => 33,  106 => 32,  101 => 24,  96 => 22,  93 => 28,  88 => 26,  83 => 25,  80 => 17,  78 => 16,  68 => 17,  63 => 15,  58 => 14,  53 => 11,  48 => 10,  46 => 9,  39 => 8,  35 => 5,  31 => 5,  28 => 2,);
    }
}
