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
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 4
            echo "            <li>
               <iframe width=\"320\" height=\"215\" src=\"//www.youtube.com/embed/";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "url"), "html", null, true);
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
        return array (  44 => 32,  56 => 36,  52 => 10,  38 => 7,  27 => 4,  23 => 3,  19 => 1,  127 => 33,  122 => 26,  111 => 29,  107 => 27,  105 => 26,  91 => 21,  85 => 18,  71 => 12,  65 => 10,  60 => 6,  54 => 5,  45 => 33,  43 => 10,  36 => 7,  34 => 6,  30 => 5,  24 => 1,  170 => 54,  163 => 51,  160 => 50,  154 => 48,  151 => 47,  146 => 45,  141 => 44,  138 => 43,  133 => 41,  128 => 40,  125 => 39,  118 => 36,  115 => 30,  109 => 33,  106 => 32,  101 => 24,  96 => 22,  93 => 28,  88 => 26,  83 => 25,  80 => 17,  78 => 16,  68 => 17,  63 => 15,  58 => 14,  53 => 12,  48 => 34,  46 => 9,  39 => 8,  35 => 5,  31 => 3,  28 => 2,);
    }
}
