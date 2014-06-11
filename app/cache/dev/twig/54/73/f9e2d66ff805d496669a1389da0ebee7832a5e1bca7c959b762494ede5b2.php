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
        return array (  61 => 12,  45 => 9,  35 => 7,  63 => 51,  57 => 26,  36 => 11,  32 => 6,  96 => 53,  82 => 20,  77 => 19,  72 => 17,  67 => 41,  65 => 15,  55 => 11,  52 => 10,  46 => 9,  38 => 7,  30 => 5,  27 => 4,  23 => 3,  19 => 1,  161 => 51,  154 => 48,  151 => 47,  145 => 45,  142 => 44,  137 => 42,  132 => 41,  129 => 40,  124 => 38,  119 => 37,  116 => 36,  109 => 33,  106 => 32,  100 => 30,  97 => 29,  92 => 27,  87 => 22,  84 => 25,  79 => 23,  74 => 22,  71 => 21,  69 => 20,  59 => 12,  54 => 12,  49 => 16,  44 => 9,  39 => 8,  37 => 7,  31 => 3,  28 => 5,);
    }
}
