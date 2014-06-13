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
        $context['_seq'] = twig_ensure_traversable((isset($context["rubriques"]) ? $context["rubriques"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 4
            echo "                ";
            if (((isset($context["langue"]) ? $context["langue"] : null) == "fr")) {
                // line 5
                echo "                    <li><a class=\"test\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "nom"), "html", null, true);
                echo "</a></li>
                ";
            } else {
                // line 7
                echo "                    <li><a class=\"test\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"), "slugRubrique" => $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "slugEn"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rubrique"]) ? $context["rubrique"] : null), "nomEn"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("_locale" => "fr", "nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"), "slugRubrique" => $this->getAttribute((isset($context["thisRub"]) ? $context["thisRub"] : null), "slug"))), "html", null, true);
        echo "\">Fr</a> -
                   <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vae_base_rubrique_detail", array("_locale" => "en", "nomSite" => $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "nom"), "slugRubrique" => $this->getAttribute((isset($context["thisRub"]) ? $context["thisRub"] : null), "slugEn"))), "html", null, true);
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
            echo "'>
                                ";
            // line 18
            if (((isset($context["langue"]) ? $context["langue"] : null) == "fr")) {
                // line 19
                echo "                                    Deconnexion
                                ";
            } else {
                // line 21
                echo "                                    Logout
                                ";
            }
            // line 22
            echo "  
                            </a><p>
                    ";
        } else {
            // line 25
            echo "                        <p id=\"test\"><a href='";
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "'>
                                ";
            // line 26
            if (((isset($context["langue"]) ? $context["langue"] : null) == "fr")) {
                // line 27
                echo "                                    Inscription
                                ";
            } else {
                // line 29
                echo "                                    register
                                ";
            }
            // line 30
            echo " </a><p>
                        <p id=\"test\"><a href='";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "'>Connexion</a><p>
                    ";
        }
        // line 33
        echo "                </p>
 
            </li>
          </ul>
        </section><!--/.nav-collapse -->


   ";
        // line 64
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
        return array (  123 => 64,  109 => 31,  102 => 29,  96 => 26,  91 => 25,  86 => 22,  82 => 21,  78 => 19,  76 => 18,  72 => 17,  67 => 16,  55 => 11,  52 => 10,  46 => 9,  38 => 7,  30 => 5,  23 => 3,  19 => 1,  332 => 176,  327 => 99,  319 => 177,  317 => 176,  312 => 174,  297 => 162,  293 => 161,  281 => 151,  278 => 150,  275 => 149,  269 => 145,  266 => 144,  263 => 143,  261 => 142,  257 => 140,  254 => 139,  251 => 138,  246 => 135,  243 => 134,  240 => 133,  238 => 132,  210 => 107,  206 => 106,  198 => 100,  196 => 99,  180 => 85,  176 => 83,  172 => 81,  170 => 80,  166 => 79,  154 => 73,  145 => 70,  142 => 69,  136 => 67,  134 => 66,  126 => 60,  120 => 58,  114 => 33,  104 => 52,  73 => 24,  65 => 15,  60 => 18,  51 => 15,  45 => 13,  42 => 12,  36 => 10,  34 => 9,  27 => 4,  21 => 1,  167 => 53,  160 => 75,  157 => 49,  151 => 72,  148 => 46,  143 => 44,  138 => 43,  135 => 42,  130 => 40,  125 => 39,  122 => 38,  115 => 35,  112 => 55,  106 => 30,  103 => 31,  98 => 27,  93 => 28,  90 => 27,  85 => 25,  80 => 24,  77 => 23,  75 => 22,  68 => 17,  62 => 15,  59 => 12,  54 => 16,  49 => 11,  44 => 9,  39 => 8,  37 => 7,  31 => 3,  28 => 2,);
    }
}
