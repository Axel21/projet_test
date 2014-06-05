<?php

/* VaeBaseBundle:Liens:listeVideos.html.twig */
class __TwigTemplate_d16f45123aa86d7788d57b1ef00212cc664097b611d146869d775a88723fcb5a extends Twig_Template
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
    <ul>
         ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 4
            echo "            <li>
               <iframe width=\"320\" height=\"215\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "url"), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe>
             </li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "    </ul>


";
        // line 32
        echo "

";
    }

    public function getTemplateName()
    {
        return "VaeBaseBundle:Liens:listeVideos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 32,  39 => 8,  30 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
