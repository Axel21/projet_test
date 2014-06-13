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
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["video"]) {
            // line 9
            echo "                        <li class=\"col-md-3\">
                            <div class=\"thumbnail\">
                                <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "url"), "html", null, true);
            echo "\"><iframe width=\"225\" height=\"155\" src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["video"]) ? $context["video"] : null), "url"), "html", null, true);
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
        return array (  63 => 51,  57 => 26,  32 => 9,  123 => 64,  109 => 31,  102 => 29,  96 => 26,  91 => 25,  86 => 22,  82 => 21,  78 => 19,  76 => 18,  72 => 17,  67 => 16,  55 => 11,  52 => 10,  46 => 9,  38 => 7,  30 => 5,  23 => 3,  19 => 1,  332 => 176,  327 => 99,  319 => 177,  317 => 176,  312 => 174,  297 => 162,  293 => 161,  281 => 151,  278 => 150,  275 => 149,  269 => 145,  266 => 144,  263 => 143,  261 => 142,  257 => 140,  254 => 139,  251 => 138,  246 => 135,  243 => 134,  240 => 133,  238 => 132,  210 => 107,  206 => 106,  198 => 100,  196 => 99,  180 => 85,  176 => 83,  172 => 81,  170 => 80,  166 => 79,  154 => 73,  145 => 70,  142 => 69,  136 => 67,  134 => 66,  126 => 60,  120 => 58,  114 => 33,  104 => 52,  73 => 24,  65 => 15,  60 => 18,  51 => 15,  45 => 13,  42 => 12,  36 => 11,  34 => 9,  27 => 4,  21 => 1,  167 => 53,  160 => 75,  157 => 49,  151 => 72,  148 => 46,  143 => 44,  138 => 43,  135 => 42,  130 => 40,  125 => 39,  122 => 38,  115 => 35,  112 => 55,  106 => 30,  103 => 31,  98 => 27,  93 => 28,  90 => 27,  85 => 25,  80 => 24,  77 => 23,  75 => 22,  68 => 17,  62 => 15,  59 => 12,  54 => 16,  49 => 16,  44 => 9,  39 => 8,  37 => 7,  31 => 3,  28 => 8,);
    }
}
