<?php

/* VaeBaseBundle:Formation:detail.html.twig */
class __TwigTemplate_4813b1bc3c1b662fbbdac9340313c34fea04f7bbf4e497d13f77d5d2c745c761 extends Twig_Template
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
        echo "<article>
                                             
    <div>
        ";
        // line 6
        if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
            // line 7
            echo "            <h2><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "nom"), "html", null, true);
            echo "</a></h2>
            <p>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "description"), "html", null, true);
            echo "</p>
            <p>";
            // line 9
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "debut"), "d-m-Y"), "html", null, true);
            echo "</p>
            <p>";
            // line 10
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "debut"), "H:i"), "html", null, true);
            echo "</p>
            <p>";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "fin"), "d-m-Y"), "html", null, true);
            echo "</p>
            <p>";
            // line 12
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "fin"), "H:i"), "html", null, true);
            echo "</p>
            <p><a href='";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slug"))), "html", null, true);
            echo "'>Retour à la liste</a></p>
        ";
        } else {
            // line 15
            echo "            <h2><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "nomEn"), "html", null, true);
            echo "</a></h2>
            <p>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "descriptionEn"), "html", null, true);
            echo "</p>
            <p>";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "debut"), "m-d-Y"), "html", null, true);
            echo "</p>
            <p>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["formation"]) ? $context["formation"] : $this->getContext($context, "formation")), "fin"), "m-d-Y"), "html", null, true);
            echo "</p>
            <p><a href='";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slugEn"))), "html", null, true);
            echo "'>Back to list</a></p>
        ";
        }
        // line 21
        echo "            
    </div>
         
</article>
";
    }

    public function getTemplateName()
    {
        return "VaeBaseBundle:Formation:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 21,  85 => 19,  81 => 18,  77 => 17,  73 => 16,  68 => 15,  63 => 13,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  38 => 7,  36 => 6,  31 => 3,  28 => 2,);
    }
}
