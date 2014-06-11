<?php

/* VaeBaseBundle:Agenda:detail.html.twig */
class __TwigTemplate_56b3d0d281b09358c41ec3c3cc2cd6e8a7a87abd0dc11fc354bf9b89d6e4dbb1 extends Twig_Template
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
        echo "<section id=\"left-content\" >
<section class=\"col-md-9\">
 
    <article>
     
        <h2>Agenda - Détail</h2>
         <article>
             ";
        // line 10
        if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
            // line 11
            echo "              <header>
              <h1>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "titre"), "html", null, true);
            echo "</h1>
              <time>";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "date"), "d/m/y"), "html", null, true);
            echo "</time>
              </header>
              <p>";
            // line 15
            echo $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "contenu");
            echo "</p>
             </article>
              ";
        } else {
            // line 18
            echo "              <header>
              <h1>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "titreEn"), "html", null, true);
            echo "</h1>
              <time>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "date"), "m/d/y"), "html", null, true);
            echo "</time>
              </header>
              <p>";
            // line 22
            echo $this->getAttribute((isset($context["agenda"]) ? $context["agenda"] : $this->getContext($context, "agenda")), "contenuEn");
            echo "</p>
              </article>
              ";
        }
        // line 25
        echo "        </article>
        
</section>
</section><!--end left-content-->
";
    }

    public function getTemplateName()
    {
        return "VaeBaseBundle:Agenda:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 25,  72 => 22,  67 => 20,  63 => 19,  60 => 18,  54 => 15,  49 => 13,  45 => 12,  42 => 11,  40 => 10,  31 => 3,  28 => 2,);
    }
}
