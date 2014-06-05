<?php

/* VaeAdminBundle:Produits:show_limit.html.twig */
class __TwigTemplate_ac3861725a54e737d210561380371d90c44f9143d27db9ec7978d855a79c3804 extends Twig_Template
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
        echo "<table class=\"tablesorter\">
    <thead>
        <tr>
            <th>nom</th>
            <th>description</th>
            <th>prix</th>
            <th>disponible</th>
            <th>à vendre</th>
            <th>action</th>
        </tr>
    </thead>

    <tbody>
    ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "    \t<tr>
    \t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom")) > 15)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), 0, 15) . "...")) : ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"))), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description")) > 15)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"), 0, 15) . "...")) : ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "description"))), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix")) > 15)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix"), 0, 15) . "...")) : ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix"))), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "disponible")) > 15)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "disponible"), 0, 15) . "...")) : ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "disponible"))), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "vendre")) > 15)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "vendre"), 0, 15) . "...")) : ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "vendre"))), "html", null, true);
            echo "</td>

            <td>
                <ul>
                    <li><a class=\"btn btn-small\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_produits_index_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
            echo "\">editer</a></li>
                    <li><a class=\"btn btn-small\" href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_produits_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">suppr</a></li>
                </ul>
            </td>
    \t</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </tbody>
    </table>

    <div id=\"table_info\">
        <ul id=\"pagination\">
        ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 4), ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 4)));
        foreach ($context['_seq'] as $context["_key"] => $context["list_page"]) {
            // line 36
            echo "        ";
            if ((((isset($context["list_page"]) ? $context["list_page"] : $this->getContext($context, "list_page")) > 0) && ((isset($context["list_page"]) ? $context["list_page"] : $this->getContext($context, "list_page")) <= (isset($context["count_page"]) ? $context["count_page"] : $this->getContext($context, "count_page"))))) {
                // line 37
                echo "        \t";
                if (((isset($context["list_page"]) ? $context["list_page"] : $this->getContext($context, "list_page")) == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                    // line 38
                    echo "\t\t\t\t<li class=\"active\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</li>
        \t";
                } else {
                    // line 40
                    echo "        \t<li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_produits_index", array("page" => (isset($context["list_page"]) ? $context["list_page"] : $this->getContext($context, "list_page")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["list_page"]) ? $context["list_page"] : $this->getContext($context, "list_page")), "html", null, true);
                    echo "</a></li>
        \t";
                }
                // line 42
                echo "        \t\t
        ";
            }
            // line 44
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </ul>
        <div class=\"wrap_button\">
            <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_produits_index_add", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
        echo "\" class=\"btn btn_small\">Ajouter</a>
        </div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "VaeAdminBundle:Produits:show_limit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 49,  84 => 35,  114 => 44,  110 => 42,  76 => 31,  81 => 33,  213 => 69,  205 => 67,  188 => 56,  180 => 52,  175 => 50,  161 => 57,  124 => 47,  104 => 40,  90 => 36,  170 => 28,  160 => 50,  146 => 45,  118 => 45,  58 => 21,  70 => 16,  137 => 36,  134 => 35,  97 => 38,  53 => 19,  77 => 30,  23 => 3,  127 => 48,  34 => 14,  100 => 40,  65 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 44,  132 => 42,  128 => 41,  107 => 42,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 70,  208 => 68,  204 => 72,  179 => 69,  159 => 56,  143 => 56,  135 => 53,  119 => 45,  102 => 40,  71 => 29,  67 => 24,  63 => 23,  59 => 10,  38 => 15,  94 => 38,  89 => 20,  85 => 34,  75 => 30,  68 => 25,  56 => 12,  87 => 34,  21 => 2,  26 => 3,  93 => 37,  88 => 35,  78 => 31,  46 => 18,  27 => 4,  44 => 4,  31 => 2,  28 => 2,  201 => 66,  196 => 65,  183 => 53,  171 => 61,  166 => 71,  163 => 51,  158 => 67,  156 => 55,  151 => 47,  142 => 59,  138 => 43,  136 => 43,  121 => 30,  117 => 44,  105 => 40,  91 => 36,  62 => 11,  49 => 18,  24 => 4,  25 => 3,  19 => 1,  79 => 30,  72 => 18,  69 => 26,  47 => 16,  40 => 15,  37 => 3,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 46,  120 => 45,  115 => 43,  111 => 29,  108 => 42,  101 => 40,  98 => 39,  96 => 38,  83 => 33,  74 => 28,  66 => 25,  55 => 8,  52 => 7,  50 => 6,  43 => 4,  41 => 16,  35 => 15,  32 => 2,  29 => 6,  209 => 68,  203 => 78,  199 => 67,  193 => 64,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 52,  149 => 50,  147 => 58,  144 => 49,  141 => 44,  133 => 49,  130 => 33,  125 => 47,  122 => 26,  116 => 38,  112 => 44,  109 => 42,  106 => 41,  103 => 40,  99 => 38,  95 => 38,  92 => 36,  86 => 35,  82 => 19,  80 => 32,  73 => 27,  64 => 24,  60 => 22,  57 => 20,  54 => 20,  51 => 20,  48 => 17,  45 => 17,  42 => 17,  39 => 14,  36 => 13,  33 => 13,  30 => 5,);
    }
}
