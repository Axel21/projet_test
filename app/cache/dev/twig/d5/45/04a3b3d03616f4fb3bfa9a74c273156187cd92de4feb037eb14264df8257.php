<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_d54504a3b3d03616f4fb3bfa9a74c273156187cd92de4feb037eb14264df8257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 49,  84 => 34,  114 => 44,  110 => 42,  76 => 31,  81 => 33,  213 => 69,  205 => 67,  188 => 56,  180 => 52,  175 => 50,  161 => 57,  124 => 47,  104 => 40,  90 => 36,  170 => 28,  160 => 50,  146 => 45,  118 => 45,  58 => 21,  70 => 27,  137 => 36,  134 => 35,  97 => 38,  53 => 7,  77 => 32,  23 => 3,  127 => 48,  34 => 14,  100 => 39,  65 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 44,  132 => 42,  128 => 41,  107 => 42,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 70,  208 => 68,  204 => 72,  179 => 69,  159 => 56,  143 => 56,  135 => 53,  119 => 45,  102 => 40,  71 => 29,  67 => 24,  63 => 23,  59 => 10,  38 => 6,  94 => 38,  89 => 20,  85 => 34,  75 => 30,  68 => 25,  56 => 12,  87 => 35,  21 => 2,  26 => 3,  93 => 37,  88 => 35,  78 => 31,  46 => 18,  27 => 4,  44 => 4,  31 => 2,  28 => 2,  201 => 66,  196 => 65,  183 => 53,  171 => 61,  166 => 71,  163 => 51,  158 => 67,  156 => 55,  151 => 47,  142 => 59,  138 => 43,  136 => 43,  121 => 30,  117 => 44,  105 => 41,  91 => 36,  62 => 11,  49 => 6,  24 => 4,  25 => 3,  19 => 1,  79 => 32,  72 => 30,  69 => 26,  47 => 16,  40 => 15,  37 => 3,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 46,  120 => 45,  115 => 44,  111 => 42,  108 => 42,  101 => 39,  98 => 39,  96 => 37,  83 => 33,  74 => 28,  66 => 25,  55 => 8,  52 => 10,  50 => 6,  43 => 7,  41 => 16,  35 => 5,  32 => 12,  29 => 3,  209 => 68,  203 => 78,  199 => 67,  193 => 64,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 52,  149 => 50,  147 => 58,  144 => 49,  141 => 44,  133 => 49,  130 => 33,  125 => 47,  122 => 26,  116 => 38,  112 => 44,  109 => 42,  106 => 40,  103 => 40,  99 => 38,  95 => 38,  92 => 36,  86 => 35,  82 => 33,  80 => 32,  73 => 27,  64 => 24,  60 => 22,  57 => 12,  54 => 20,  51 => 20,  48 => 9,  45 => 17,  42 => 17,  39 => 14,  36 => 13,  33 => 13,  30 => 5,);
    }
}
