<?php

/* VaeBaseBundle:Agenda:agenda.html.twig */
class __TwigTemplate_445cc82f2ef6fcce42a036a9c50a19b3e9c57e11b9ab030599423dcec593deb8 extends Twig_Template
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
        echo "<h1>Agenda</h1>
    <ul id=\"agenda\">
         ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["agendas"]) ? $context["agendas"] : $this->getContext($context, "agendas")));
        foreach ($context['_seq'] as $context["_key"] => $context["agenda"]) {
            // line 6
            echo "            ";
            if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
                // line 7
                echo "                <li>
                    <h3><a class=\"test\" href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_agenda_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugAgenda" => $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "titre"), "html", null, true);
                echo "</a></h3>
                    <p>";
                // line 9
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "contenu"), "html", null, true);
                echo "</p>
                    <p>";
                // line 10
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "date"), "d/m/y"), "html", null, true);
                echo "</p>
             ";
            } else {
                // line 12
                echo "                    <h3><a class=\"test\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_agenda_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugAgenda" => $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "slugEn"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "titreEn"), "html", null, true);
                echo "</a></h3>
                    <p>";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "contenuEn"), "html", null, true);
                echo "</p>
                    <p>";
                // line 14
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "date"), "m/d/y"), "html", null, true);
                echo "</p>
                </li>
             ";
            }
            // line 17
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agenda'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "VaeBaseBundle:Agenda:agenda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 18,  77 => 17,  71 => 14,  67 => 13,  60 => 12,  55 => 10,  51 => 9,  45 => 8,  42 => 7,  39 => 6,  35 => 5,  31 => 3,  28 => 2,);
    }
}
