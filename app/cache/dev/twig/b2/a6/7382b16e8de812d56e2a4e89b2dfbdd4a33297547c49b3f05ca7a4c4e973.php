<?php

/* VaeInscriptionBundle:Inscription:liste.html.twig */
class __TwigTemplate_b2a67382b16e8de812d56e2a4e89b2dfbdd4a33297547c49b3f05ca7a4c4e973 extends Twig_Template
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
        echo "<h2>Liste des formations :</h2>
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inscriptions"]) ? $context["inscriptions"] : $this->getContext($context, "inscriptions")));
        foreach ($context['_seq'] as $context["_key"] => $context["inscription"]) {
            // line 3
            echo "<ul>
                                            
    <li>
        <h3>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), "formations"), "getNom", array(), "method"), "html", null, true);
            echo "</h3>
        <p>Du ";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), "formations"), "getDebut", array(), "method"), "d-m-Y"), "html", null, true);
            echo " au ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), "formations"), "getFin", array(), "method"), "d-m-Y"), "html", null, true);
            echo "</p>
        ";
            // line 8
            if (($this->getAttribute((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), "payer") == 0)) {
                // line 9
                echo "            <p>non comfirmé</p>
        ";
            } else {
                // line 11
                echo "            <p>comfirmé</p>
        ";
            }
            // line 13
            echo "        <p><a href='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_inscription_delete", array("id" => $this->getAttribute($this->getAttribute((isset($context["inscription"]) ? $context["inscription"] : $this->getContext($context, "inscription")), "formations"), "getId", array(), "method"))), "html", null, true);
            echo "'>supprimer</a></p>
    </li>
        
</ul>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inscription'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "VaeInscriptionBundle:Inscription:liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  47 => 11,  43 => 9,  26 => 3,  22 => 2,  41 => 8,  35 => 7,  29 => 5,  23 => 4,  19 => 1,  31 => 6,  28 => 3,);
    }
}
