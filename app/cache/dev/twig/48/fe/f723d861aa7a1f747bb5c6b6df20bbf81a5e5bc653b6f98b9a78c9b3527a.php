<?php

/* VaeBaseBundle:Rubrique:menu.html.twig */
class __TwigTemplate_48fef723d861aa7a1f747bb5c6b6df20bbf81a5e5bc653b6f98b9a78c9b3527a extends Twig_Template
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
        echo "        <section class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rubriques"]) ? $context["rubriques"] : $this->getContext($context, "rubriques")));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 4
            echo "                ";
            if (((isset($context["langue"]) ? $context["langue"] : $this->getContext($context, "langue")) == "fr")) {
                // line 5
                echo "                    <li><a class=\"test\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "nom"), "html", null, true);
                echo "</a></li>
                ";
            } else {
                // line 7
                echo "                    <li><a class=\"test\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "slugEn"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : $this->getContext($context, "rubrique")), "nomEn"), "html", null, true);
                echo "</a></li>
                ";
            }
            // line 9
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            <li><p>
                   <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("_locale" => "fr", "nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["thisRub"]) ? $context["thisRub"] : $this->getContext($context, "thisRub")), "slug"))), "html", null, true);
        echo "\">Fr</a> -
                   <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("_locale" => "en", "nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "nom"), "slugRubrique" => $this->getAttribute((isset($context["thisRub"]) ? $context["thisRub"] : $this->getContext($context, "thisRub")), "slugEn"))), "html", null, true);
        echo "\">En</a>
                </p>
                <p>  
                    ";
        // line 15
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 16
            echo "                        <p id=\"test\"><a href='";
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "'>Profile</a><p>
                        <p id=\"test\"><a href='";
            // line 17
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "'>Deconnexion</a><p>
                    ";
        } else {
            // line 19
            echo "                        <p id=\"test\"><a href='";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "'>Inscription</a><p>
                        <p id=\"test\"><a href='";
            // line 20
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "'>Connexion</a><p>
                    ";
        }
        // line 22
        echo "                </p>
 
            </li>
          </ul>
        </section><!--/.nav-collapse -->


   ";
        // line 53
        echo "

";
    }

    public function getTemplateName()
    {
        return "VaeBaseBundle:Rubrique:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 53,  87 => 22,  82 => 20,  72 => 17,  67 => 16,  55 => 11,  52 => 10,  46 => 9,  38 => 7,  30 => 5,  23 => 3,  19 => 1,  318 => 169,  313 => 92,  305 => 170,  303 => 169,  298 => 167,  283 => 155,  279 => 154,  267 => 144,  264 => 143,  261 => 142,  255 => 138,  252 => 137,  249 => 136,  247 => 135,  243 => 133,  240 => 132,  237 => 131,  232 => 128,  229 => 127,  226 => 126,  224 => 125,  196 => 100,  192 => 99,  184 => 93,  182 => 92,  166 => 79,  154 => 73,  145 => 70,  142 => 69,  136 => 67,  134 => 66,  126 => 60,  120 => 58,  114 => 56,  104 => 52,  73 => 24,  65 => 15,  60 => 18,  51 => 15,  45 => 13,  42 => 12,  36 => 10,  34 => 9,  27 => 4,  21 => 1,  167 => 53,  160 => 75,  157 => 49,  151 => 72,  148 => 46,  143 => 44,  138 => 43,  135 => 42,  130 => 40,  125 => 39,  122 => 38,  115 => 35,  112 => 55,  106 => 32,  103 => 31,  98 => 29,  93 => 28,  90 => 27,  85 => 25,  80 => 24,  77 => 19,  75 => 22,  68 => 17,  62 => 15,  59 => 12,  54 => 16,  49 => 11,  44 => 9,  39 => 8,  37 => 7,  31 => 3,  28 => 2,);
    }
}
