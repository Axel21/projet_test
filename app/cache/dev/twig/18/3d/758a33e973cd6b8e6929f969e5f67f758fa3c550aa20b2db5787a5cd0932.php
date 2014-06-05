<?php

/* VaeAdminBundle:Rubriques:show_limit.html.twig */
class __TwigTemplate_183d758a33e973cd6b8e6929f969e5f67f758fa3c550aa20b2db5787a5cd0932 extends Twig_Template
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
            <th>contenu</th>
            <th>site</th>
            <th>action</th>
        </tr>
    </thead>

    <tbody>
    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 13
            echo "    \t<tr>
            <td>";
            // line 14
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom")) > 15)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"), 0, 15) . "...")) : ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nom"))), "html", null, true);
            echo "</td>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenu")) > 15)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenu"), 0, 15) . "...")) : ($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "contenu"))), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sites"), "nom")) > 15)) ? ((twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sites"), "nom"), 0, 15) . "...")) : ($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sites"), "nom"))), "html", null, true);
            echo "</td>

            <td>
                <ul>
                    <li><a class=\"btn btn-small\" href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_rubriques_index_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
            echo "\">editer</a></li>
                </ul>
            </td>
    \t</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </tbody>
    </table>

    <div id=\"table_info\">
        <ul id=\"pagination\">
        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 4), ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 4)));
        foreach ($context['_seq'] as $context["_key"] => $context["list_page"]) {
            // line 31
            echo "        ";
            if ((((isset($context["list_page"]) ? $context["list_page"] : $this->getContext($context, "list_page")) > 0) && ((isset($context["list_page"]) ? $context["list_page"] : $this->getContext($context, "list_page")) <= (isset($context["count_page"]) ? $context["count_page"] : $this->getContext($context, "count_page"))))) {
                // line 32
                echo "        \t";
                if (((isset($context["list_page"]) ? $context["list_page"] : $this->getContext($context, "list_page")) == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                    // line 33
                    echo "\t\t\t\t<li class=\"active\">";
                    echo twig_escape_filter($this->env, (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "html", null, true);
                    echo "</li>
        \t";
                } else {
                    // line 35
                    echo "        \t<li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_rubriques_index", array("page" => (isset($context["list_page"]) ? $context["list_page"] : $this->getContext($context, "list_page")))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["list_page"]) ? $context["list_page"] : $this->getContext($context, "list_page")), "html", null, true);
                    echo "</a></li>
        \t";
                }
                // line 37
                echo "        \t\t
        ";
            }
            // line 39
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </ul>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "VaeAdminBundle:Rubriques:show_limit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 40,  100 => 39,  96 => 37,  88 => 35,  79 => 32,  76 => 31,  72 => 30,  54 => 20,  39 => 14,  36 => 13,  32 => 12,  19 => 1,  217 => 70,  213 => 69,  209 => 68,  205 => 67,  201 => 66,  196 => 65,  193 => 64,  188 => 56,  183 => 53,  180 => 52,  175 => 50,  170 => 28,  161 => 57,  159 => 56,  156 => 55,  154 => 52,  149 => 50,  140 => 44,  136 => 43,  132 => 42,  128 => 41,  124 => 40,  120 => 39,  116 => 38,  112 => 37,  108 => 36,  104 => 35,  94 => 28,  82 => 33,  78 => 18,  73 => 16,  68 => 13,  65 => 25,  59 => 9,  55 => 8,  51 => 7,  47 => 16,  44 => 5,  41 => 4,  35 => 3,  52 => 7,  49 => 6,  43 => 15,  37 => 3,  31 => 2,);
    }
}
