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
    <nav>
      <h2><a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_agenda_agenda", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"))), "html", null, true);
        echo "\">Agenda</a></h2>
      <ul>
        ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agendas"]) ? $context["agendas"] : $this->getContext($context, "agendas")));
        foreach ($context['_seq'] as $context["_key"] => $context["agenda"]) {
            // line 6
            echo "            ";
            if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
                // line 7
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_agenda_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugAgenda" => $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "date"), "d/m/y"), "html", null, true);
                echo "<br/>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "titre"), "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 9
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_agenda_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugAgenda" => $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "slugEn"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "date"), "m/d/y"), "html", null, true);
                echo "<br/>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "titreEn"), "html", null, true);
                echo "</a></li>       
            ";
            }
            // line 11
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agenda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "      </ul>
    </nav>


";
        // line 41
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
        return array (  61 => 12,  35 => 7,  63 => 51,  57 => 26,  32 => 6,  96 => 53,  87 => 22,  82 => 20,  72 => 17,  67 => 41,  55 => 11,  52 => 10,  46 => 9,  38 => 7,  30 => 5,  23 => 3,  19 => 1,  318 => 169,  313 => 92,  305 => 170,  303 => 169,  298 => 167,  283 => 155,  279 => 154,  267 => 144,  264 => 143,  261 => 142,  255 => 138,  252 => 137,  249 => 136,  247 => 135,  243 => 133,  240 => 132,  237 => 131,  232 => 128,  229 => 127,  226 => 126,  224 => 125,  196 => 100,  192 => 99,  184 => 93,  182 => 92,  166 => 79,  154 => 73,  145 => 70,  142 => 69,  136 => 67,  134 => 66,  126 => 60,  120 => 58,  114 => 56,  104 => 52,  73 => 24,  65 => 15,  60 => 18,  51 => 15,  45 => 9,  42 => 12,  36 => 11,  34 => 9,  27 => 4,  21 => 1,  167 => 53,  160 => 75,  157 => 49,  151 => 72,  148 => 46,  143 => 44,  138 => 43,  135 => 42,  130 => 40,  125 => 39,  122 => 38,  115 => 35,  112 => 55,  106 => 32,  103 => 31,  98 => 29,  93 => 28,  90 => 27,  85 => 25,  80 => 24,  77 => 19,  75 => 22,  68 => 17,  62 => 15,  59 => 12,  54 => 16,  49 => 16,  44 => 9,  39 => 8,  37 => 7,  31 => 3,  28 => 5,);
    }
}
