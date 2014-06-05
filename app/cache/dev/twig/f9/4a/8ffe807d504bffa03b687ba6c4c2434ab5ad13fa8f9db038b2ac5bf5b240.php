<?php

/* VaeBaseBundle:Formation:liste.html.twig */
class __TwigTemplate_f94a8ffe807d504bffa03b687ba6c4c2434ab5ad13fa8f9db038b2ac5bf5b240 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : $this->getContext($context, "formations")));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 2
            echo "<article>
                                            
    <div>
        ";
            // line 5
            if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
                // line 6
                echo "            <h2><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_formation_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slug"), "slugFormation" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "nom"), "html", null, true);
                echo "</a></h2>
            <p>";
                // line 7
                echo $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "description");
                echo "</p>
            <p>";
                // line 8
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "debut"), "d-m-Y"), "html", null, true);
                echo "</p>
            <p>";
                // line 9
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "fin"), "d-m-Y"), "html", null, true);
                echo "</p>
        ";
            } else {
                // line 11
                echo "            <h2><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_formation_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slugEn"), "slugFormation" => $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "slugEn"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "nomEn"), "html", null, true);
                echo "</a></h2>
            <p>";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "descriptionEn"), "html", null, true);
                echo "</p>
            <p>";
                // line 13
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "debut"), "m-d-Y"), "html", null, true);
                echo "</p>
            <p>";
                // line 14
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "fin"), "m-d-Y"), "html", null, true);
                echo "</p>
        ";
            }
            // line 16
            echo "    </div>
        
</article>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "VaeBaseBundle:Formation:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 20,  70 => 16,  65 => 14,  61 => 13,  57 => 12,  50 => 11,  45 => 9,  41 => 8,  37 => 7,  30 => 6,  28 => 5,  23 => 2,  19 => 1,);
    }
}
