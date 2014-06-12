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
  
        <div class=\"carousel slide\" id=\"myCarousel\">
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                    
                    <ul class=\"thumbnails\">
                        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 9
            echo "                        <li class=\"col-md-3\">
                            <div class=\"thumbnail\">
                                <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "url"), "html", null, true);
            echo "\"><iframe width=\"225\" height=\"155\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : $this->getContext($context, "video")), "url"), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe></a>
                            </div>
                            
                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['video'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                        
                    </ul>
             
             
            </div>
        
        ";
        // line 26
        echo "                              
    </div><!-- /#myCarousel -->


";
        // line 51
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
        return array (  63 => 51,  57 => 26,  32 => 9,  96 => 53,  87 => 22,  82 => 20,  72 => 17,  67 => 16,  55 => 11,  52 => 10,  46 => 9,  38 => 7,  30 => 5,  23 => 3,  19 => 1,  318 => 169,  313 => 92,  305 => 170,  303 => 169,  298 => 167,  283 => 155,  279 => 154,  267 => 144,  264 => 143,  261 => 142,  255 => 138,  252 => 137,  249 => 136,  247 => 135,  243 => 133,  240 => 132,  237 => 131,  232 => 128,  229 => 127,  226 => 126,  224 => 125,  196 => 100,  192 => 99,  184 => 93,  182 => 92,  166 => 79,  154 => 73,  145 => 70,  142 => 69,  136 => 67,  134 => 66,  126 => 60,  120 => 58,  114 => 56,  104 => 52,  73 => 24,  65 => 15,  60 => 18,  51 => 15,  45 => 13,  42 => 12,  36 => 11,  34 => 9,  27 => 4,  21 => 1,  167 => 53,  160 => 75,  157 => 49,  151 => 72,  148 => 46,  143 => 44,  138 => 43,  135 => 42,  130 => 40,  125 => 39,  122 => 38,  115 => 35,  112 => 55,  106 => 32,  103 => 31,  98 => 29,  93 => 28,  90 => 27,  85 => 25,  80 => 24,  77 => 19,  75 => 22,  68 => 17,  62 => 15,  59 => 12,  54 => 16,  49 => 16,  44 => 9,  39 => 8,  37 => 7,  31 => 3,  28 => 8,);
    }
}
