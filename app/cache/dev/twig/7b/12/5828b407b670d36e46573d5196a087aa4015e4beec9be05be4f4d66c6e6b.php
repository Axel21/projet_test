<?php

/* VaeAdminBundle:Agendas:show_limit.html.twig */
class __TwigTemplate_7b125828b407b670d36e46573d5196a087aa4015e4beec9be05be4f4d66c6e6b extends Twig_Template
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
            <th>titre</th>
            <th>contenu</th>
            <th>date</th>
            <th>site</th>
            <th>action</th>
        </tr>
    </thead>

    <tbody>
    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 14
            echo "    \t<tr>
    \t\t<td>";
            // line 15
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre")) > 15)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), 0, 15) . "...")) : ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"))), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenu")) > 15)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenu"), 0, 15) . "...")) : ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenu"))), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "format", array(0 => "d-m-y"), "method")) > 15)) ? ((twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "format", array(0 => "d-m-y"), "method"), 0, 15) . "...")) : ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "date"), "format", array(0 => "d-m-y"), "method"))), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sites"), "nom")) > 15)) ? ((twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sites"), "nom"), 0, 15) . "...")) : ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sites"), "nom"))), "html", null, true);
            echo "</td>

            <td>
                <ul>
                    <li><a class=\"btn btn-small\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_agendas_index_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
            echo "\">editer</a></li>
                    <li><a class=\"btn btn-small\" href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_agendas_delete", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\">suppr</a></li>
                </ul>
            </td>
    \t</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </tbody>
    </table>

    <div id=\"table_info\">
        <ul id=\"pagination\">
        ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 4), ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 4)));
        foreach ($context['_seq'] as $context["_key"] => $context["list_page"]) {
            // line 34
            echo "        ";
            if ((((isset($context["list_page"]) ? $context["list_page"] : $this->getContext($context, "list_page")) > 0) && ((isset($context["list_page"]) ? $context["list_page"] : $this->getContext($context, "list_page")) <= (isset($context["count_page"]) ? $context["count_page"] : $this->getContext($context, "count_page"))))) {
                // line 35
                echo "        \t";
                if (((isset($context["list_page"]) ? $context["list_page"] : $this->getContext($context, "list_page")) == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                    // line 36
                    echo "\t\t\t\t<li class=\"active\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</li>
        \t";
                } else {
                    // line 38
                    echo "        \t<li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_agendas_index", array("page" => (isset($context["list_page"]) ? $context["list_page"] : $this->getContext($context, "list_page")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["list_page"]) ? $context["list_page"] : $this->getContext($context, "list_page")), "html", null, true);
                    echo "</a></li>
        \t";
                }
                // line 40
                echo "        \t\t
        ";
            }
            // line 42
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </ul>
        <div class=\"wrap_button\">
            <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_agendas_index_add", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
        echo "\" class=\"btn btn_small\">Ajouter</a>
        </div>
\t</div>

";
    }

    public function getTemplateName()
    {
        return "VaeAdminBundle:Agendas:show_limit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 33,  213 => 69,  205 => 67,  188 => 56,  180 => 52,  175 => 50,  161 => 57,  124 => 40,  104 => 35,  90 => 25,  170 => 28,  160 => 50,  146 => 45,  118 => 36,  58 => 13,  70 => 16,  137 => 36,  134 => 35,  97 => 38,  53 => 7,  77 => 17,  23 => 3,  127 => 48,  34 => 6,  100 => 25,  65 => 12,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 44,  132 => 42,  128 => 41,  107 => 27,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 70,  208 => 68,  204 => 72,  179 => 69,  159 => 56,  143 => 56,  135 => 53,  119 => 45,  102 => 29,  71 => 25,  67 => 24,  63 => 23,  59 => 22,  38 => 3,  94 => 28,  89 => 20,  85 => 34,  75 => 26,  68 => 13,  56 => 12,  87 => 19,  21 => 2,  26 => 3,  93 => 28,  88 => 35,  78 => 18,  46 => 9,  27 => 4,  44 => 16,  31 => 2,  28 => 2,  201 => 66,  196 => 65,  183 => 53,  171 => 61,  166 => 71,  163 => 51,  158 => 67,  156 => 55,  151 => 47,  142 => 59,  138 => 43,  136 => 43,  121 => 30,  117 => 44,  105 => 40,  91 => 36,  62 => 11,  49 => 6,  24 => 4,  25 => 3,  19 => 1,  79 => 19,  72 => 18,  69 => 14,  47 => 19,  40 => 15,  37 => 14,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 46,  120 => 39,  115 => 43,  111 => 29,  108 => 36,  101 => 30,  98 => 23,  96 => 27,  83 => 21,  74 => 28,  66 => 16,  55 => 8,  52 => 18,  50 => 6,  43 => 4,  41 => 4,  35 => 15,  32 => 2,  29 => 6,  209 => 68,  203 => 78,  199 => 67,  193 => 64,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 52,  149 => 50,  147 => 58,  144 => 49,  141 => 44,  133 => 49,  130 => 33,  125 => 39,  122 => 26,  116 => 38,  112 => 37,  109 => 42,  106 => 41,  103 => 40,  99 => 39,  95 => 28,  92 => 34,  86 => 28,  82 => 19,  80 => 24,  73 => 16,  64 => 15,  60 => 22,  57 => 16,  54 => 10,  51 => 20,  48 => 17,  45 => 9,  42 => 17,  39 => 16,  36 => 6,  33 => 13,  30 => 5,);
    }
}
