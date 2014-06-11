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
        return array (  63 => 51,  57 => 26,  36 => 11,  32 => 9,  96 => 53,  82 => 20,  77 => 19,  72 => 17,  67 => 16,  65 => 15,  55 => 11,  52 => 10,  46 => 9,  38 => 7,  30 => 5,  27 => 4,  23 => 3,  19 => 1,  161 => 51,  154 => 48,  151 => 47,  145 => 45,  142 => 44,  137 => 42,  132 => 41,  129 => 40,  124 => 38,  119 => 37,  116 => 36,  109 => 33,  106 => 32,  100 => 30,  97 => 29,  92 => 27,  87 => 22,  84 => 25,  79 => 23,  74 => 22,  71 => 21,  69 => 20,  59 => 12,  54 => 12,  49 => 16,  44 => 9,  39 => 8,  37 => 7,  31 => 3,  28 => 8,);
    }
}
